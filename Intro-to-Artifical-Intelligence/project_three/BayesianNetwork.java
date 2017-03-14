import java.util.ArrayList;
import java.util.Arrays;
import java.util.HashMap;
import java.util.Iterator;
import java.util.LinkedList;
import java.util.List;
import java.util.Map;
import java.util.Queue;
import java.util.Random;
import java.util.Set;

/**
 * A bayesian network
 * 
 * @author baduncan
 */
public class BayesianNetwork {
	/**
	 * Mapping of random variables to nodes in the network
	 */
	private HashMap<RandomVariable, Node> varMap;

	/**
	 * Edges in this network
	 */
	private List<Edge> edges;

	/**
	 * Nodes in the network with no parents
	 */
	private List<Node> rootNodes;

	/**
	 * Nodes in the network
	 */
	private List<Node> varNodes;

	/**
	 * Default constructor initializes empty network
	 */
	public BayesianNetwork() {
		varMap = new HashMap<RandomVariable, Node>();
		edges = new ArrayList<Edge>();
		rootNodes = new ArrayList<Node>();
	}

	/**
	 * Add a random variable to this network
	 * 
	 * @param variable
	 *            Variable to add
	 */
	public void addVariable(RandomVariable variable) {
		Node node = new Node(variable);
		varMap.put(variable, node);
		rootNodes.add(node);
	}

	/**
	 * Add a new edge between two random variables already in this network
	 * 
	 * @param cause
	 *            Parent/source node
	 * @param effect
	 *            Child/destination node
	 */
	public void addEdge(RandomVariable cause, RandomVariable effect) {
		Node source = varMap.get(cause);
		Node dest = varMap.get(effect);
		edges.add(new Edge(source, dest));
		source.addChild(dest);
		dest.addParent(source);
		rootNodes.remove(dest);
	}

	/**
	 * Sets the CPT variable in the bayesian network (probability of this
	 * variable given its parents)
	 * 
	 * @param variable
	 *            Variable whose CPT we are setting
	 * @param probabilities
	 *            List of probabilities P(V=true|P1,P2...), that must be ordered
	 *            as follows. Write out the cpt by hand, with each column
	 *            representing one of the parents (in alphabetical order). Then
	 *            assign these parent variables true/false based on the
	 *            following order: ...tt, ...tf, ...ft, ...ff. The assignments
	 *            in the right most column, P(V=true|P1,P2,...), will be the
	 *            values you should pass in as probabilities here.
	 */
	public void setProbabilities(RandomVariable variable, double[] probabilities) {
		ArrayList<Double> probList = new ArrayList<Double>();
		for (double probability : probabilities) {
			probList.add(probability);
		}
		varMap.get(variable).setProbabilities(probList);
	}

	/**
	 * Returns an estimate of P(queryVal=true|givenVars) using rejection
	 * sampling
	 * 
	 * @param queryVar
	 *            Query variable in probability query
	 * @param givenVars
	 *            A list of assignments to variables that represent our given
	 *            evidence variables
	 * @param numSamples
	 *            Number of rejection samples to perform
	 */
	public double performRejectionSampling(RandomVariable queryVar,
			Map<RandomVariable, Boolean> givenVars, int numSamples) {

		double[] retval = new double[2];
		for (int i = 0; i < numSamples; i++) {
			HashMap<RandomVariable, Boolean> sample = priorSample();
			if (consistent(sample, givenVars)) {
				boolean queryValue = ((Boolean) sample.get(queryVar))
						.booleanValue();
				if (queryValue) {
					retval[0] += 1;
				} else {
					retval[1] += 1;
				}
			}
		}

		return normalize(retval)[0];
	}
	
	public double performRejectionSampling2(RandomVariable queryVar,
			Map<RandomVariable, Boolean> givenVars, int numSamples) {

		double[] retval = new double[2];
		for (int i = 0; i < numSamples; i++) {
			HashMap<RandomVariable, Boolean> sample = priorSample();
			if (consistent(sample, givenVars)) {
				boolean queryValue = ((Boolean) sample.get(queryVar))
						.booleanValue();
				if (queryValue) {
					retval[0] += 1;
				} else {
					retval[1] += 1;
				}
			}
		}

		return normalize(retval)[0];
	}

	/**
	 * Returns an estimate of P(queryVal=true|givenVars) using weighted sampling
	 * 
	 * @param queryVar
	 *            Query variable in probability query
	 * @param givenVars
	 *            A list of assignments to variables that represent our given
	 *            evidence variables
	 * @param numSamples
	 *            Number of weighted samples to perform
	 */
	double performWeightedSampling(RandomVariable queryVar,
			Map<RandomVariable, Boolean> givenVars, int numSamples) {
		double[] retval = new double[2];
		Random r = new Random();
		for (int i = 0; i < numSamples; i++) {
			HashMap<RandomVariable, Boolean> x = new HashMap<RandomVariable, Boolean>();
			double w = 1.0;
			List<Node> variableNodes = getvarNodes();
			for (Node node : variableNodes) {
				if (givenVars.get(node.getVariable()) != null) {
					w *= node.getProbability(x, true);
					x.put(node.getVariable(), givenVars.get(node.getVariable()));
				} else {
					x.put(node.getVariable(), node.isTrueFor(r.nextDouble(), x));
				}
			}
			boolean queryValue = (x.get(queryVar)).booleanValue();
			if (queryValue) {
				retval[0] += w;
			} else {
				retval[1] += w;
			}

		}
		return normalize(retval)[0];
	}

	/**
	 * Returns an estimate of P(queryVal=true|givenVars) using Gibbs sampling
	 * 
	 * @param queryVar
	 *            Query variable in probability query
	 * @param givenVars
	 *            A list of assignments to variables that represent our given
	 *            evidence variables
	 * @param numTrials
	 *            Number of Gibbs trials to perform, where a single trial
	 *            consists of assignments to ALL non-evidence variables (ie. not
	 *            a single state change, but a state change of all non-evidence
	 *            variables)
	 */
	public double performGibbsSampling(RandomVariable queryVar,
			Map<RandomVariable, Boolean> givenVars, int numTrials) {
		double[] retval = {0,0};
		List<RandomVariable> nonEvidenceVariables = nonEvidenceVariables(givenVars, queryVar);
		HashMap<RandomVariable, Boolean> event = createRandomEvent(nonEvidenceVariables, givenVars);
		for (int j = 0; j < numTrials; j++) {
			//System.out.println("Trial " + j+1 + " of "+numTrials);
		

			for(RandomVariable variable : nonEvidenceVariables) { 
				
				Node node = varMap.get(variable);
				List<Node> markovBlanket = markovBlanket(node, new ArrayList<Node>());
				
				HashMap<RandomVariable, Boolean> mb = createMBValues(markovBlanket, event);
				//System.out.println("Node: "+node+" MB: "+mb); System.exit(-1);
				event.put(node.getVariable(),
						truthValue(getProbability(variable,mb,Boolean.TRUE)));
				boolean queryValue = (event.get(queryVar)).booleanValue();
				
				if (queryValue) {
					retval[0]++;
				} else {
					retval[1]++;
				}
				
				
			}
		}
		
		//System.out.println("T: "+retval[0]+" F: "+retval[1]);
		
		return  (double) ((double) retval[0])/(double) (numTrials*nonEvidenceVariables.size());
	}
	
	public double getProbability(RandomVariable query, HashMap<RandomVariable,Boolean> mb, Boolean b ) {
		
		double trueProb = getProbabilityGivenMB(query, mb, Boolean.TRUE);
		double falseProb = getProbabilityGivenMB(query, mb, Boolean.FALSE);
		double alpha = ((double) 1)/( trueProb + falseProb );

	
	//	System.out.println("T: "+trueProb+" F: "+falseProb+" Total: "+(alpha*(trueProb+falseProb)));
		
		double probability = alpha*( (b) ? trueProb : falseProb );
		
	
		
		return probability;
		
	}
	
	public double getProbabilityGivenMB(RandomVariable query, HashMap<RandomVariable,Boolean> mb, Boolean b) {
		
		Node queryNode = varMap.get(query);
		Map<RandomVariable, Boolean> queryParents = new HashMap<RandomVariable, Boolean>();

		for(Node parent : queryNode.getParents()) {
			queryParents.put(parent.getVariable(), mb.get(parent.getVariable()));
		}
		
		double probXGivenParents = queryNode.getProbability(queryParents,b);
		
		//System.out.println("Prob("+queryNode.getVariable()+"="+b+"|"+queryParents.toString()+"): "+probXGivenParents);
		
		double probChildrenGivenParents = 1.0;
		
		for(Node child: queryNode.getChildren()) {
			Map<RandomVariable, Boolean> parentsValMap = new HashMap<RandomVariable, Boolean>();
			
			for(Node childParent: child.getParents()) {
				
				if(childParent.getVariable().equals(queryNode.getVariable())) {
					parentsValMap.put(queryNode.getVariable(),b);
					
				} else {
					parentsValMap.put(childParent.getVariable(),mb.get(childParent.getVariable()));

				}
			}
			
			probChildrenGivenParents *= child.getProbability(parentsValMap, mb.get(child.getVariable()));
		}
		
		return probXGivenParents*probChildrenGivenParents;
	}

	public static List<Double> normalize(List<Double> values) {
		double[] valuesAsArray = new double[values.size()];
		for (int i = 0; i < valuesAsArray.length; i++) {
			valuesAsArray[i] = values.get(i);
		}
		double[] normalized = normalize(valuesAsArray);
		List<Double> results = new ArrayList<Double>();
		for (int i = 0; i < normalized.length; i++) {
			results.add(normalized[i]);
		}
		return results;
	}

	public static double[] normalize(double[] probDist) {
		int len = probDist.length;
		double total = 0.0;
		for (double d : probDist) {
			total = total + d;
		}

		double[] normalized = new double[len];
		if (total != 0) {
			for (int i = 0; i < len; i++) {
				normalized[i] = probDist[i] / total;
			}
		}
		double totalN = 0.0;
		for (double d : normalized) {
			totalN = totalN + d;
		}

		return normalized;
	}
	
	

	public HashMap<RandomVariable, Boolean> priorSample() {
		Random r = new Random();
		HashMap<RandomVariable, Boolean> h = new HashMap<RandomVariable, Boolean>();
		List<Node> varNodes = getvarNodes();
		for (Node node : varNodes) {
			h.put(node.getVariable(), node.isTrueFor(r.nextDouble(), h));
		}
		return h;
	}

	public List<Node> getvarNodes() {
		if (varNodes == null) {
			List<Node> newvarNodes = new ArrayList<Node>();
			List<Node> parents = new ArrayList<Node>(rootNodes);
			List<Node> traversedParents = new ArrayList<Node>();

			while (parents.size() != 0) {
				List<Node> newParents = new ArrayList<Node>();
				for (Node parent : parents) {
					// if parent unseen till now
					if (!(traversedParents.contains(parent))) {
						newvarNodes.add(parent);
						// add any unseen children to next generation of parents
						List<Node> children = parent.getChildren();
						for (Node child : children) {
							if (!newParents.contains(child)) {
								newParents.add(child);
							}
						}
						traversedParents.add(parent);
					}
				}

				parents = newParents;
			}
			varNodes = newvarNodes;
		}

		return varNodes;
	}

	private boolean consistent(HashMap<RandomVariable,Boolean> sample,
			Map<RandomVariable, Boolean> givenVars) {
		Iterator<RandomVariable> iter = givenVars.keySet().iterator();
		while (iter.hasNext()) {
			RandomVariable key = (RandomVariable) iter.next();
			Boolean value = (Boolean) givenVars.get(key);
			if (!(value.equals(sample.get(key)))) {
				return false;
			}
		}
		return true;
	}
	
	private Boolean truthValue(double d) {
		Random r = new Random();
		double value = r.nextDouble();
		if (value < d) {
			return Boolean.TRUE;
		} else {
			return Boolean.FALSE;
		}

	}
	

	private List<RandomVariable> nonEvidenceVariables(Map<RandomVariable, Boolean> givenVars,
			RandomVariable query) {
		List<RandomVariable> nonEvidenceVariables = new ArrayList<RandomVariable>();
		List<RandomVariable> variables = new ArrayList<RandomVariable>();
		variables.addAll(varMap.keySet());
		for (RandomVariable variable : variables) {

			if (!(givenVars.keySet().contains(variable))) {
				nonEvidenceVariables.add(variable);
			}
		}
		return nonEvidenceVariables;
	}
	
	private HashMap<RandomVariable, Boolean> createRandomEvent(
			List<RandomVariable> nonEvidenceVariables, Map<RandomVariable, Boolean> givenVars) {
		
		Random r = new Random();
		
		HashMap<RandomVariable, Boolean> table = new HashMap<RandomVariable, Boolean>();
		List<RandomVariable> variables = new ArrayList<RandomVariable>();
		variables.addAll(varMap.keySet());
		
		for (RandomVariable variable : variables) {

			if (nonEvidenceVariables.contains(variable)) {
				Boolean value = r.nextDouble() >= 0.5 ? Boolean.TRUE
						: Boolean.FALSE;
				table.put(variable, value);
			} else {
				table.put(variable, givenVars.get(variable));
			}
		}
		return table;
	}
	
	private HashMap<RandomVariable,Boolean> createMBValues(List<Node> markovBlanket,
			HashMap<RandomVariable, Boolean> event) {
		HashMap<RandomVariable, Boolean> vals = new HashMap<RandomVariable, Boolean>();
		for (Node node : markovBlanket) {
			vals.put(node.getVariable(), event.get(node.getVariable()));
		}
		return vals;
	}
	
	private List<Node> markovBlanket(Node node,
			List<Node> soFar) {
		// parents
		List<Node> parents = node.getParents();
		for (Node parent : parents) {
			if (!soFar.contains(parent)) {
				soFar.add(parent);
			}
		}
		// children
		List<Node> children = node.getChildren();
		for (Node child : children) {
			if (!soFar.contains(child)) {
				soFar.add(child);
				List<Node> childsParents = child.getParents();
				for (Node childsParent : childsParents) {
					
					if ((!soFar.contains(childsParent))
							&& (!(childsParent.equals(node)))) {
						soFar.add(childsParent);
					}
				}// childsParents
			}// end contains child

		}// end child

		return soFar;
	}
}
