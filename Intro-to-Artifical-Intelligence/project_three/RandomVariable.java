/**
 * A random variable
 * @author baduncan
 */
public class RandomVariable implements Comparable<RandomVariable> {
  /**
    * Variable name
    */
	private String name;

  /**
    * Construct random variable
    * @param name Variable name
    */
	public RandomVariable(String name) {
		this.name = name;
	}
	
  /**
    * Get variable name
    */
	public String getName() {
		return this.name;
	}
	
	@Override
	public int compareTo(RandomVariable other) {
		return this.name.compareTo(other.getName());
	}
	
	@Override
	public boolean equals(Object other) {
		RandomVariable otherRV = (RandomVariable)other;
		return this.compareTo(otherRV) == 0;
	}

	@Override
	public String toString() {
		return this.name + "";
	}
	
	
}
