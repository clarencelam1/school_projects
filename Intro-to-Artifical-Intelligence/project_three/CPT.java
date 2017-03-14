import java.util.List;
import java.util.Map;

/**
  * Represents the CPT for a node in the bayesian network. The table is stored
  * as a tree structure.
  * @author baduncan
  */
public class CPT {
  /**
    * Represents the parent variable that is the root of this current CPT subtable. This is null if we are at a leaf node.
    */
	private RandomVariable parentVariable;

  /**
    * Represents the subtable if parentVariable is set to true
    */
	private CPT trueTable;

  /**
    * Represents the subtable if parentVariable is set to false
    */
	private CPT falseTable;

  /**
    * If we are at a leaf node, this is the probability of the query variable given its parents. If we are not at a leaf node this is null.
    */
	private Double probability;

  /**
    * Returns the probability that the variable is equal to value given the 
    * assignments of variables in the 'assignments' map
    * @param assignments A mapping from variables to assignments, representing the given variables
    * @param value The value to assign to the CPT variable
    * @return The probability in the CPT representing the given assignments
    */
	public double getProbability(Map<RandomVariable, Boolean> assignments, boolean value) {
		if(parentVariable == null)
			return (value == true) ? probability.doubleValue() : 1 - probability.doubleValue();
		Boolean currentVal = assignments.get(parentVariable);
		if(trueTable != null) {
			if(currentVal == true) {
				return trueTable.getProbability(assignments, value);
			}
			else {
				return falseTable.getProbability(assignments, value);
			}
		}
		else {
			return (currentVal == true) ? probability.doubleValue() : 1 - probability.doubleValue();
		}
	}
		
  /**
    * Initialize the CPT with the list of probabilities
    * @param vars List of random variables that are the parents of the CPT node
    * @param probabilities List of probabilities P(V=true|P1,P2...), that must be ordered as follows. Write out the cpt by hand, with each column representing one of the parents (in order corresponding to variables in vars). Then assign these parent variables true/false based on the following order: ...tt, ...tf, ...ft, ...ff. The assignments in the right most column, P(V=true|P1,P2,...), will be the values you should pass in as probabilities here.
    */

	CPT(List<RandomVariable> vars, List<Double> probabilities) {
		if(vars.size() > 0) {
			parentVariable = vars.get(0);
			trueTable = new CPT(vars.subList(1, vars.size()),
					probabilities.subList(0, probabilities.size()/2));
			falseTable = new CPT(vars.subList(1, vars.size()),
					probabilities.subList(probabilities.size()/2, probabilities.size()));
			probability = null;
		}
		else {
			probability = probabilities.get(0);
		}
	}
}
