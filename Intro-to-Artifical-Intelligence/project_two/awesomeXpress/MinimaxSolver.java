// folder containing this file as well.
package awesomeXpress;

import java.util.Arrays;
import java.util.HashMap;
import java.util.Vector;

import CheckersPlayer.Solver;
import Checkers.Board;
import Checkers.Game;

// MinimaxSolver implementation goes here. You may create other classes
// and files as well, but make sure the are part of the (renamed) "awesomeXpress" package

public class MinimaxSolver implements Solver {

	private static final boolean DEBUG = false;

	public int selectMove(Board b) {
		
		return minimaxDecision(b);
		
	}

	private static void debug(String s) {
		if (DEBUG) {
			System.out.println(s);
		}
	}

	private int minimaxDecision(Board b) {
		
		
		HashMap<Integer,Integer> movesMap = new HashMap<Integer,Integer>();
	
		int v = Integer.MIN_VALUE;
		Vector<Board> children = Game.expand(b);

		for (int i = 0; i < children.size(); i++) {
			v = Math.max(v, minValue(children.get(i)));
			movesMap.put(v,i);
		}
		
		return movesMap.get(v);
	}
	
	private int minValue(Board b) {
		
		int v = Integer.MAX_VALUE;
		Vector<Board> children = Game.expand(b);
		if (children == null) {
			debug("Utililty: "+this.utility(b));
			return this.utility(b);
		}
		for (int i = 0; i < children.size(); i++) {
			v = Math.min(v, maxValue(children.elementAt(i)));
			debug("Min value: "+v);
		}
		return v;
	}
	
	private int maxValue(Board b) {
		
		int v = -999999999;
		Vector<Board> children = Game.expand(b);
		
		if (children == null) {
			debug("Utililty: "+this.utility(b));
			return this.utility(b);
		}
		
		for (int i = 0; i < children.size(); i++) {
			v = -Math.max(v, minValue(children.elementAt(i)));
			debug("Max value: "+v);
		}
		return v;
	}

	private int utility(Board b) {

		int utilVal = 0; // Tie
		int sum = 0;
		
		
		for (int i = 0; i < Board.BOARDSIZE; i++) {
			for (int j = 0; j < Board.BOARDSIZE; j++) {
				//debug("Piece: "+b.board[i][j]);
				sum += b.board[i][j];
			}
		}
		
		if (sum > 0) {
			utilVal = 1;
		} else if (sum < 0) {
			utilVal = -1;
		}
		
		return utilVal;
	}

}
