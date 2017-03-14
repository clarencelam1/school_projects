import java.util.Arrays;
import java.util.Collections;
import java.util.List;
import java.util.Random;
import java.util.Vector;

public class Puzzle {

	public State goalState;

	public State currentState;

	private int rows;

	private int cols;

	public enum Move {
		E, N, S, W;

		private static final List<Move> MOVES = Collections
				.unmodifiableList(Arrays.asList(values()));
		private static final int SIZE = MOVES.size();
		public static Move randomMove()  {
		    return MOVES.get(RANDOM.nextInt(SIZE));
		  }
	}

	private static final int BLANK = 0;
	private static final boolean DEBUG = false;
	private static final Random RANDOM = new Random();

	public Puzzle(int w, int h) {

		this.rows = h;
		this.cols = w;
		
		this.goalState = generateGoal();
		this.currentState = this.goalState;
		this.shuffle();

		debug("Start State:\n" + this.currentState);
		debug("Goal State:\n" + this.goalState);
	}

	public Puzzle(int[][] puzzle) {

		this.rows = puzzle.length;
		this.cols = puzzle[0].length;
		
		
		this.currentState = new State(puzzle);
		this.goalState = this.generateGoal();
		this.currentState.setChildren(this.getNextPossibleStates());

		debug("Start State:\n" + this.currentState);
		debug("Goal State:\n" + this.goalState);
	}

	public State getCurrentState() {
		return this.currentState;
	}

	public State getGoalState() {
		return this.goalState;
	}

	private State generateGoal() {

		int[][] state = new int[this.rows][this.cols];
		
		for (int i = 0; i < state.length; i++) {
			for (int j = 0; j < state[i].length; j++) {
				state[i][j] = j + (i * state[i].length);
			}
		}

		State goal = new State(state);

		debug("Goal:\n" + goal);

		return goal;
	}
	
	public int[] getProperPosition(int n) {
		
		int e[] = new int[2];
		int[][] p = this.getGoalState().getState();

		for (e[0] = 0; e[0] < p.length; e[0]++) {
			for (e[1] = 0; e[1] < p[e[0]].length; e[1]++) {
				if (p[e[0]][e[1]] == n) {
					break;
				}
			}
		}
		
		return e;
	}

	public boolean isSolved() {

		return this.currentState.equals(this.goalState);
	}
	/**
	 * Moves the blank and returns the new state.
	 * @param Move dir 
	 * @return State lastState
	 */
	public State move(Move dir, boolean save) {
		
		// Create a new state that is a copy of the current state by default
		State newState = this.currentState.clone();
		
		Vector<Move> possibleMoves = this.getPossibleMoves();
		
		if (possibleMoves.contains(dir)) {

			// The position to move to
			int[] p = { this.getBlank()[0], this.getBlank()[1] };

			switch (dir) {
			case N:
				p[0]--;
				break;
			case S:
				p[0]++;
				break;
			case W:
				p[1]--;
				break;
			case E:
				p[1]++;
				break;
			}
			
			// Swap BLANK and p and set the puzzle's state to the new state
			newState = swap(this.currentState, this.getBlank(), p);
			newState.setMoveToGetHere(dir);
			
			if(save) {
				//debug("Move: " +  dir);
				this.currentState = newState;
				this.getNextPossibleStates();
			}
			
		} 

		return newState;
	}

	public State moveUp() {
		return this.move(Move.N, true);
	}

	public State moveDown() {
		return this.move(Move.S, true);
	}

	public State moveRight() {
		return this.move(Move.E, true);
	}

	public State moveLeft() {
		return this.move(Move.W, true);
	}
	
	/**
	 * Allows you to see what the next state would be if you moved in direction m.
	 * @param m
	 * @return
	 */
	public State peekNextState(Move m) {
		
		return this.move(m,false);
	}

	private State swap(State puzzleState, int[] i, int[] j) {
		
		int[][] oldState = puzzleState.getState();
		
		int[][] newStateArr = new int[oldState.length][];
		for (int k = 0; k < oldState.length; k++)
			newStateArr[k] = (int[]) oldState[k].clone();
		newStateArr[i[0]][i[1]] = oldState[j[0]][j[1]];
		newStateArr[j[0]][j[1]] = oldState[i[0]][i[1]];
		
		State newState = new State(newStateArr);
		newState.setParent(puzzleState);
		return newState;
	}
	
	public Vector<Move> getPossibleMoves() {
		Vector<Move> moves = new Vector<Move>(4);
		
		for(int i = 0; i < Move.MOVES.size(); i++) {
			Move move = Move.MOVES.get(i);
			if(this.canMove(move)) {
				moves.add(move);
			}
		}
		
		
		//debug("Possible moves:" + moves);
		
		return moves;
	}
	
	private Vector<State> getNextPossibleStates() {

		Vector<State> possibleStates = new Vector<State>();
		Vector<Move> possibleMoves = this.getPossibleMoves();
	
		for(int i = 0; i < possibleMoves.size(); i++) {
			Move move = possibleMoves.get(i);
			possibleStates.add(this.peekNextState(move));
		}

		return possibleStates;
	}

	private boolean canMove(Move dir) {

		boolean canMove = true;

		//debug("Checking if able to move...");
		switch (dir) {
		case N:
			if (this.getBlank()[0] - 1 < 0) {
				canMove = false;
			}
			break;
		case S:
			if (this.getBlank()[0] +1 >= this.currentState.getState().length) {
				canMove = false;
			}
			break;
		case W:
			if (this.getBlank()[1] -1 < 0) {
				canMove = false;
			}
			break;
		case E:
			if (this.getBlank()[1] + 1>= this.currentState.getState()[0].length) {
				canMove = false;
			}
			break;
		default:
			canMove = false;
		}
		return canMove;
	}

	/**
	 * Gets the position of the blank tile
	 * 
	 * @return array
	 */
	private int[] getBlank() {
		int e[] = new int[2];
		int[][] p = this.currentState.getState();

		for (e[0] = 0; e[0] < p.length; e[0]++) {
			for (e[1] = 0; e[1] < p[e[0]].length; e[1]++) {
				if (p[e[0]][e[1]] == BLANK) {
					return e;
				}
			}
		}

		return null;
	}
	
	/**
	 * Gets the position of a tile
	 * 
	 * @return array
	 */
	public int[] getCurrentPosition(int n) {
		int e[] = new int[2];
		int[][] p = this.currentState.getState();

		for (e[0] = 0; e[0] < p.length; e[0]++) {
			for (e[1] = 0; e[1] < p[e[0]].length; e[1]++) {
				if (p[e[0]][e[1]] == n) {
					return e;
				}
			}
		}

		return null;
	}

	private static void debug(String s) {
		if (DEBUG) {
			System.out.println(s);
		}
	}

	private void shuffle() {
		debug("Shuffling...");
		
		long end = System.currentTimeMillis()+2;
int i = 0;
		while (i < 7) {
			Move possibleMove = Move.randomMove();
			
			if(this.canMove(possibleMove)) {
				State newState = this.peekNextState(possibleMove);
				
				// We don't want to keep track of moves because this is supposed to be a start state
				newState.setMoveToGetHere( null ); 
				this.setCurrentState(new State(newState.getState()));
				i++;
			}
			
		}
		
		debug("Start State\n"+this.currentState);
		end = System.currentTimeMillis();
		while(System.currentTimeMillis() < end + 5000) {
			
		}
		debug("Shuffled " + i + " times");
	}

	public void setCurrentState(State state) {
		this.currentState = state;
		
	}

}
