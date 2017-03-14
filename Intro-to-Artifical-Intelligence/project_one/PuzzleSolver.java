import java.io.File;
import java.util.Arrays;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.PriorityQueue;
import java.util.Queue;
import java.util.Scanner;
import java.util.Stack;
import java.util.Vector;
import java.util.LinkedList;

public class PuzzleSolver {

	private static final boolean DEBUG = false;
	private int nodesExpanded = 0;
	private int heuristic = 0;

	public static void main(String[] args) {

		int limit = 0;
		int heuristic = 0;

		if (args[1].equalsIgnoreCase("DFS") || args[1].equalsIgnoreCase("ID")) {

			limit = Integer.parseInt(args[2]);

		} else if (args[1].equalsIgnoreCase("A_Star")
				|| args[1].equalsIgnoreCase("Greedy")) {

			if (args[2].equalsIgnoreCase("Manhattan")) {
				heuristic = 1;
			} else if (args[2].equalsIgnoreCase("Other")) {
				heuristic = 2;
			}

		}
//for(int k =1; k < 5; k++) { // For running all 4 tests at once for a particular type of search
		String searchType = args[1].toUpperCase();
		String fileName = args[0];
		//String fileName = "easy"+k+".txt"; // See above
		File file;
		Scanner input;
		Vector<int[]> tmpPuzzle = new Vector<int[]>();
		int[] tmpRow;
		int numRows = 0;
		int numCols = 0;
		try {
			file = new File(fileName);
			input = new Scanner(file);

			while (input.hasNextLine()) {
				String nextLine = input.nextLine();
				String[] nums = nextLine.split(",");

				if (numCols == 0) {
					numCols = nums.length;
				}

				tmpRow = new int[numCols];

				for (int i = 0; i < numCols; i++) {
					tmpRow[i] = Integer.parseInt(nums[i]);

				}
				tmpPuzzle.add(tmpRow);
			}
			input.close();

			numRows = tmpPuzzle.size();
			numCols = tmpPuzzle.get(0).length;

			int[][] tmpArr = tmpPuzzle.toArray(new int[numRows][numCols]);
			debug("** Search: " + searchType + " Limit: "
					+ ((limit > 0) ? limit : "N/A") + " Heuristic: "

					+ " File: \"" + fileName + "\" **");
			Puzzle puzzle = new Puzzle(tmpArr);
			Puzzle p = new Puzzle(puzzle.getCurrentState().getState().clone());
			PuzzleSolver puzzleSolver = new PuzzleSolver(heuristic);

			debug("Searching...");

			List<String> path = null;

			if (searchType.equals("BFS")) {
				path = puzzleSolver.bfs(puzzle, 0);
			} else if (searchType.equals("DFS")) {
				path = puzzleSolver.dfs(puzzle, limit);
			} else if (searchType.equals("ID")) {
				path = puzzleSolver.id(puzzle, limit);
			} else if (searchType.equals("GREEDY")) {
				path = puzzleSolver.bfs(puzzle, 1);
			} else if (searchType.equals("A_STAR")) {
				path = puzzleSolver.bfs(puzzle,2);
			}

			if (path == null) {
				path = new LinkedList<String>();
			}

			for (int i = 0; i < path.size(); i++) {
				if (path.get(i) == "N") {
					p.moveUp();
				} else if (path.get(i) == "S") {
					p.moveDown();
				} else if (path.get(i) == "W") {
					p.moveLeft();
				} else if (path.get(i) == "E") {
					p.moveRight();
				} else {
					error("Can't move that way");
				}
			}

			debug("\nAnswer based on path:\n" + p.getCurrentState());

		} catch (Exception e) {
			error(e.toString());
		}
	//} // For the for loop

	}

	public PuzzleSolver() {
		super();
		this.nodesExpanded = 0;
		this.heuristic = 0;
	}

	public PuzzleSolver(int heuristic) {
		super();
		this.heuristic = heuristic;
	}

	private static void error(String e) {
		System.err.println(e);
		System.exit(-1);
	}

	private static void debug(String d) {
		if (DEBUG) {
			System.out.println(d);
		}
	}

	public void doHeuristic(State s, int type) {

		int cost = 0;

		if (this.heuristic == 1) { // Manhattan
			cost = this.manahttan(s);
		} else if (this.heuristic == 2) { // Other
			cost = this.other(s);
		} else { // None
			cost = 0;
		}
		
	
		
		if(type == 1){
			s.setAccumulatedCost(0); 
		} else if(type == 2) {
			s.setAccumulatedCost(s.getParent().getTotalCost());
		}
		
		s.setHeuristicCost(cost);
	}


	private int other(State s) {
		
		Puzzle p = new Puzzle(s.getState());
		
		 
		
		for(int i = (s.getState().length * s.getState()[0].length)-1; i >= 0; i--){
			int[] curPos = p.getCurrentPosition(i);
			int[] propPos = p.getProperPosition(i);
			if(!Arrays.equals(curPos, propPos )) {
				return  Math.abs(curPos[0] - propPos[0]) + Math.abs(curPos[1] - propPos[1]) ;
			}
		}
		return (Integer) null;
	}

	private int manahttan(State s) {
		
		int e[] = new int[2];
		int[][] p = s.getState();

		for (e[0] = 0; e[0] < p.length; e[0]++) {
			for (e[1] = 0; e[1] < p[e[0]].length; e[1]++) {
				if (p[e[0]][e[1]] == 0) {
					return e[0] + e[1];
				}
			}
		}
		
		return (Integer) null;
	}

	private List<String> id(Puzzle puzzle, int limit) {

		LinkedList<String> path = null;
		State tmp = puzzle.getCurrentState();
		for (int i = 0; i <= limit && path == null; i++) {
			puzzle.setCurrentState(tmp);
			path = (LinkedList<String>) this.dfs(puzzle, i);
		}

		return path;
	}

	public List<String> bfs(Puzzle p, int type) {

		Queue<State> queue;
		if (type == 1 || type == 2) { // greedy best-first search or a_*
			queue = new PriorityQueue<State>();
		} else {
			queue = new LinkedList<State>();
		}

		// States that I already have visited
		Map<State, Boolean> visited = new HashMap<State, Boolean>();

		// Which state lead me to this state
		Map<State, State> nextStateMap = new HashMap<State, State>();

		// The start state of the puzzle
		State startState = p.getCurrentState();
		State currentState = startState;
		State goalState = p.getGoalState();
		startState.setAccumulatedCost(0);
		// Add the root to the queue and mark it as visited
		queue.add(startState);
		visited.put(startState, true);
		debug(queue+"");
		while (!queue.isEmpty()) {

			currentState = (State) queue.remove(); // Get and remove the first
			debug("Pop: "+currentState.getMoveThatGotHere());							// item in the queue
			this.nodesExpanded++;
			// If the current state is the goal state, figure out how I got here
			// and return the path.
			if (currentState.equals(goalState)) {
				break;
			} else { // Otherwise keep searching

				// Set the puzzle to the current state
				p.setCurrentState(currentState);

				// Figure out which moves can be made from this state
				Vector<Puzzle.Move> moves = p.getPossibleMoves();
				
				Puzzle.Move lastMove = p.getCurrentState().getMoveThatGotHere();
				Puzzle.Move opp;
				if (lastMove != null) {
					switch (lastMove) {
					case N:
						opp = Puzzle.Move.S;
						break;
					case S:
						opp = Puzzle.Move.N;
						break;
					case E:
						opp = Puzzle.Move.W;
						break;
					case W:
						opp = Puzzle.Move.E;
						break;
					default:
						opp = null;
						break;
					}

					moves.remove(opp);

				}
				
				// For every possible legal move, see what the next state would
				// be
				// if we made that move.
				for (int i = 0; i < moves.size(); i++) {

					State child = p.peekNextState(moves.get(i));
					// If we have not seen this state before, add it to the
					// queue, mark it as visited
					// and note where we came from.
					if (!(visited.containsKey(child))) {

						if (this.heuristic != 0) {
							this.doHeuristic(child, type);
							debug("Parent cost: " + child.getParent().getTotalCost());
							debug("H:" + child.getHeuristicCost() + " G: "+child.getParent().getTotalCost()+" = F: "+child.getTotalCost() );
						}

						queue.add(child);
						visited.put(child, true);
						nextStateMap.put(child, currentState);
					}
				}
			}

		}

		if (!currentState.equals(goalState)) {
			error("No possible path found");
		}

		LinkedList<String> path = new LinkedList<String>();
		for (State state = currentState; state != null; state = nextStateMap
				.get(state)) {
			Puzzle.Move move = state.getMoveThatGotHere();
			if (move != null) {
				path.addFirst(move.toString());
			}
		}
		p.setCurrentState(currentState);

		System.out.println("solution length: " + path.size());
		System.out.println("nodes expanded: " + this.nodesExpanded);

		for (int i = 0; i < path.size(); i++) {
			System.out.print(path.get(i));
		}

		return path;
	}

	public List<String> dfs(Puzzle p, int limit) {

		// The queue
		Stack<State> stack = new Stack<State>();

		// States that I already have visited
		Map<State, Boolean> visited = new HashMap<State, Boolean>();

		// Which state lead me to this state
		Map<State, State> nextStateMap = new HashMap<State, State>();

		// The start state of the puzzle
		State startState = p.getCurrentState();
		startState.depth = 0;
		State currentState = startState;
		State goalState = p.getGoalState();

		// Add the root to the queue and mark it as visited
		stack.push(startState);
		visited.put(startState, true);

		while (!stack.isEmpty()) {

			State s = (State) stack.pop();
			this.nodesExpanded++;
			debug("Depth:" + s.depth);
			debug("Pop: " + s.getMoveThatGotHere());
			currentState = s;
			nextStateMap.put(currentState, currentState.getParent());

			debug(currentState + "");

			// If the current state is the goal state, figure out how I got here
			// and return the path.
			if (currentState.equals(goalState)) {
				LinkedList<String> path = new LinkedList<String>();
				for (State state = currentState; state != null; state = nextStateMap
						.get(state)) {
					Puzzle.Move move = state.getMoveThatGotHere();
					if (move != null) {
						path.addFirst(move.toString());
					}
				}
				p.setCurrentState(currentState);

				System.out.println("solution length: " + path.size());
				System.out.println("nodes expanded: " + this.nodesExpanded);

				for (int i = 0; i < path.size(); i++) {
					System.out.print(path.get(i));
				}

				return path;
			}
			if (currentState.depth == limit) {

				debug("Backing up to:\n" + p.getCurrentState());
				continue;
			} else {
				p.setCurrentState(currentState);
				// Otherwise keep searching
				// Figure out which moves can be made from this state
				Vector<Puzzle.Move> moves = p.getPossibleMoves();

				Puzzle.Move lastMove = p.getCurrentState().getMoveThatGotHere();
				Puzzle.Move opp;
				if (lastMove != null) {
					switch (lastMove) {
					case N:
						opp = Puzzle.Move.S;
						break;
					case S:
						opp = Puzzle.Move.N;
						break;
					case E:
						opp = Puzzle.Move.W;
						break;
					case W:
						opp = Puzzle.Move.E;
						break;
					default:
						opp = null;
						break;
					}

					moves.remove(opp);

				}

				// For every possible legal move, see what the next state would
				// be
				// if we made that move.

				for (int i = moves.size() - 1; i >= 0; i--) {
					State child = p.peekNextState(moves.get(i));
					child.depth = p.getCurrentState().depth + 1;
					// If we have not seen this state before, add it to the
					// queue, mark it as visited
					// and note where we came from.
					// debug("Visited:\n" +visited);
					if (!(visited.containsKey(child))) {
						stack.push(child);
						debug("Push: " + moves.get(i));
						visited.put(child, true);

					}

				}
				debug("increasing depth");

				debug("\nStack: " + stack);
			}

		}

		
			debug("No possible path found");
		

		return null;
	}

}
