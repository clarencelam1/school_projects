import java.util.ArrayList;
import java.util.Collections;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

/**
  * Represents a node in a bayesian network
  * @author baduncan
  */
public class Node {
  /**
    * The variable stored in this node
    */
	private RandomVariable variable;

  /**
    * The parent nodes
    */
	private List<Node> parents;

  /**
    * The child nodes
    */
	private List<Node> children;

  /**
    * Probability table for this variable given its parents
    */
	private CPT cpt;
	
  /**
    * Default constructor initializes node to hold variable
    */
	public Node(RandomVariable variable) {
		this.variable = variable;
		parents = new ArrayList<Node>();
		children = new ArrayList<Node>();
	}

  /**
    * Get the random variable in this node
    * @return The random variable
    */
	public RandomVariable getVariable() {
		return this.variable;
	}

  /**
    * Add a child node in the bayesian network
    * @param child Child node
    */
  public void addChild(Node child) {
    children.add(child);
  }

	/**
    * Add a parent node in the bayesian network
    * @param parent Parent node
    */
  public void addParent(Node parent) {
    parents.add(parent);
  }

  /**
    * Get the child nodes
    * @return A vector of child nodes
    */
	public List<Node> getChildren() {
		return children;
	}
	
  /**
    * Get the parent nodes
    * @return A vector of parent nodes
    */
	public List<Node> getParents() {
		return parents;
	}

  /**
    * Returns the probability that this variable is equal to value given the 
    * assignments of variables in the 'assignments' map
    * @param assignments A mapping from variables to assignments, representing the given variables
    * @param value The value to assign to the variable in this node
    * @return The probability that this random variable is equal to value given assignments
    */
	public double getProbability(Map<RandomVariable, Boolean> assignments, boolean value) {
		return cpt.getProbability(assignments, value);
	}
	
  /**
    * Sets the CPT of this variable in the bayesian network (probability of
    * this variable given its parents)
    * @param probabilities List of probabilities P(V=true|P1,P2...), that must be ordered as follows. Write out the cpt by hand, with each column representing one of the parents (in alphabetical order). Then assign these parent variables true/false based on the following order: ...tt, ...tf, ...ft, ...ff. The assignments in the right most column, P(V=true|P1,P2,...), will be the values you should pass in as probabilities here.
    */
  public void setProbabilities(List<Double> probabilities) {
    ArrayList<RandomVariable> vars = new ArrayList<RandomVariable>();
    for(Node node : parents) {
      vars.add(node.variable);
    }
    Collections.sort(vars);
    cpt = new CPT(vars, probabilities);
  }
  
  public Boolean isTrueFor(double probability,
			Map<RandomVariable, Boolean> modelBuiltUpSoFar) {
		HashMap<RandomVariable, Boolean> conditions = new HashMap<RandomVariable, Boolean>();
		if (this.getParents().size() == 0) {
			conditions.put(getVariable(), Boolean.TRUE);
		} else {
			for (int i = 0; i < parents.size(); i++) {
				Node parent = parents.get(i);
				conditions.put(parent.getVariable(), modelBuiltUpSoFar
						.get(parent.getVariable()));
			}
		}
		double trueProbability = getProbability(conditions,true);
		if (probability <= trueProbability) {
			return Boolean.TRUE;
		} else {
			return Boolean.FALSE;
		}
	}
  
  public String toString() {
	  return this.variable.toString();
  }
}
