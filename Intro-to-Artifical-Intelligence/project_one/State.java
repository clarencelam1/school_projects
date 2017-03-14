import java.util.Arrays;
import java.util.Vector;


public class State implements Comparable<State> {

	private int[][] state;
	// A_* = g+h. Manhattan is just h
	private int g = 0; // Accumulated cost
	private int h = 0; // Estimate of remaining cost
	private Vector<State> children = new Vector<State>();
	private State parent = null;
	private Puzzle.Move moveToGetHere = null;
	public int depth = 0;
	

	// constructor
	public State(int[][] state) {
		this.state = state;
	}
	
	public int[][] getState() {
		return this.state.clone();
	}

	
	@Override
	public int hashCode() {
		final int prime = 31;
		int result = 1;
		result = prime * result + Arrays.hashCode(this.state);
		return 1;
	}

	public int getHeuristicCost() {
		return this.h;
	}
	
	public void setHeuristicCost(int cost) {
		this.h = cost;
	}
	
	public int getAccumulatedCost() {
		return this.g;
	}
	
	public void setAccumulatedCost(int cost) {
		
		if((Integer) cost == null)
			cost = 0;
		
		this.g = cost;
	}
	
	public int getTotalCost() {
		return this.h+this.g;
	}

	@Override
	public boolean equals(Object obj) {
		State other = (State) obj;
		if (!Arrays.deepEquals(this.state, other.state))
			return false;
		return true;
	}

	public State clone() {
		State newState = new State(this.state);
		return newState;
	}
	
	public void setChildren(Vector<State> children) {
		if(children == null) {
			this.children = new Vector<State>();
		} else {
			this.children = new Vector<State>(children);
		}
	}
	
	public void setParent(State parent) {
		this.parent = parent;
	}
	
	public Vector<State> getChildren() {
		return this.children;
	}
	
	public State getParent() {
		return this.parent;
	}

	@Override
	public String toString() {
		String output = "";
        //... Print array in rectangular form using nested for loops.
        for (int row = 0; row < this.state.length; row++) {
            for (int col = 0; col < this.state[row].length; col++) {
                output += " " + this.state[row][col];
            }
            output += "\n";
        }
        
        return output;
	}
	
	

	public void setMoveToGetHere(Puzzle.Move dir) {
		
		this.moveToGetHere = dir;
		
	}
	
//	@Override
//	public String toString() {
//		return "State [state=" + Arrays.deepToString(this.state) + ", f=" + this.f
//				+ ", g=" + this.g + ", h=" + this.h + ", cost=" + this.cost
//				+ ", children=" + Arrays.deepToString(this.children.toArray()) + ", parent=" + this.parent.getState()
//				+ ", moveToGetHere=" + this.moveToGetHere + "]";
//	}

	public Puzzle.Move getMoveThatGotHere() {
		return this.moveToGetHere;
	}

	@Override
	public int compareTo(State o) {
		// TODO Auto-generated method stub
		return this.getTotalCost()-o.getTotalCost();
	}

	

}
