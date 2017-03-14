import java.util.HashMap;
import java.util.Map;

/**
 * This represents an assignment of variables in a bayesian network.
 * You may want to use something like this for your various sampling implementations.
 * @author baduncan
 */

public class Sample {

  /**
    * Weight used for weighted sampling
    */
	private double weight;

  /**
    * Map containing random variable assignments for this sample
    */
	private Map<RandomVariable, Boolean> assignments;
    
  /**
    * Default constructor initializes empty sample with weight 1
    */
	public Sample() {
		weight = 1;
		assignments = new HashMap<RandomVariable, Boolean>();
	}

  /**
    * Set a variable assignment for this sample
    * @param variable The variable to assign
    * @param value The value to assign to variable
    */
	public void setAssignment(RandomVariable variable, Boolean value) {
		assignments.put(variable, value);
	}

  /**
    * Get value assigned to variable variable in this sample
    * @param variable The variable to check
    * @return The value assigned to variable in this sample
    */
	public boolean getValue(RandomVariable variable) {
		return assignments.get(variable);
	}

  /**
    * Get weight of this sample, for weighted sampling
    * @return The weight of this sample
    */
	public double getWeight() {
		return weight;
	}

  /**
    * Set weight of this sample, for weighted sampling
    */
	public void setWeight(double weight) {
		this.weight = weight;
	}
}
