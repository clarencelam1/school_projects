package awesomeXpress;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.HashMap;
import java.util.List;
import java.util.Random;
import java.util.Vector;

import CheckersPlayer.Solver;
import Checkers.Board;
import Checkers.Coord;
import Checkers.Game;

// CustomSolver implementation goes here. You may create other classes
// and files as well, but make sure the are part of the (renamed) "awesomeXpress" package

public class CustomSolver implements Solver {

	private static final boolean DEBUG = false;

	private int alpha = -999999999;
	private int beta = 999999999;
	
	
	public int selectMove(Board b) {

		return customDecision(b);
	}


	private static void debug(String s) {
		if (DEBUG) {
			System.out.println(s);
		}
	}

	private int customDecision(Board b) {
		this.alpha = -999999999;
		this.beta = 999999999;
		HashMap<Integer, List<Integer>> movesMap = new HashMap<Integer, List<Integer>>();

		
		int v = -999999999;
		Vector<Board> children = Game.expand(b);

		for (int i = 0; i < children.size(); i++) {
			v = Math.max(v, minValue(children.get(i)));
			
			if(movesMap.containsKey(v)) {
				List<Integer> values = (List<Integer>) movesMap.get(v);  
		         values.add(i); 
			} else {
				List<Integer> values = new ArrayList<Integer>();
				values.add(i);
				movesMap.put(v, values);
			}
		}
		Random r = new Random();
		return movesMap.get(v).get(Math.abs(r.nextInt()) % movesMap.get(v).size());
	}

private int minValue(Board b) {
		
		int v = 999999999;
		Vector<Board> children = Game.expand(b);
		int risk = getRisk(b);
		
		if (children == null) {
			return this.utility(b);
		}
		for (int i = 0; i < children.size(); i++) {
			v = Math.min(v, maxValue(children.get(i)));
			debug("Min value: "+v);
			if(v <= alpha) {
				return v + risk;
			}
			beta = Math.min(beta,v+risk);
		}
		return v + risk;
	}
	
	private int maxValue(Board b) {
		
		int v = -999999999;
		Vector<Board> children = Game.expand(b);
		int risk = getRisk(b);
		
		if (children == null) {
			debug("Utililty: "+this.utility(b));
			return this.utility(b);
		}
		
		for (int i = 0; i < children.size(); i++) {
			v = Math.max(v, minValue(children.get(i)));
			if(v >= beta) {
				return v - risk;
			}
			alpha = Math.max(alpha, v-risk);
		}
		return v - risk;
	}
	
	private int utility(Board b) {
		int bSize = Board.BOARDSIZE;
		
		double numOtherKings = 0, numMyKings = 0, 
				numOtherPieces = 0, numMyPieces = 0,
				otherCenter = 0, myCenter = 0;
		
		double kingWeight = .25;
		double pieceWeight = .65;
		double centerWeight = .10;
		
		for (int i = 0; i < bSize; i++) {
			for (int j = 0; j < bSize; j++) {
				switch(b.board[i][j]) {
				case -2: // Other king
					numOtherKings++;
					numOtherPieces++;
					break;
				case -1:
					numOtherPieces++;
					break;
				case 2:
					numMyKings++;
					numMyPieces++;
					break;
				case 1:
					numMyPieces++;
					break;
				}
				
				if(i <= (3*bSize/4) && i >= (bSize/4) && j <= (3*bSize/4) && j >= (bSize/4)) {
					if(b.board[i][j] < 0) {
						otherCenter++;
					} else if(b.board[i][j] > 0) {
						myCenter++;
					}
				}
			}
		}
		
		double totalPieces = numMyPieces + numOtherPieces,
		 totalKings = numMyKings + numOtherKings,
		 totalCenter = otherCenter + myCenter;
		
		double myOdds = (pieceWeight)*(numMyPieces/totalPieces);
		double theirOdds = (pieceWeight)*(numOtherPieces/totalPieces);
		
		if(totalKings > 0) {
			myOdds += (kingWeight)*(numMyKings/totalKings);
			theirOdds += (kingWeight)*(numOtherKings/totalKings);
		}
		
		if(totalCenter > 0) {
			myOdds += (centerWeight)*(myCenter/totalCenter);
			theirOdds += (centerWeight)*(otherCenter/totalCenter);
		}
		//System.out.println("My Odds: "+ myOdds + " Their Odds: " + theirOdds);
		return (int) ((myOdds - theirOdds));
	}

	private int getRisk(Board b) {

		int sum = 0;
		Vector<Coord> endanger = Game.getThreats(b);
		Coord risk;
		
		if (endanger != null) {
			for (int k = 0; k < endanger.size(); k++) {

				risk = endanger.get(k);
				switch (b.board[risk.x][risk.y]) {
				
				case 1:
					sum--;
					break;
				case 2:
					sum--;
					break;
				case -1:
					sum++;
					break;
				case -2:
					sum++;
					break;
				default:
					break;
				}
			}
			debug("Total Sum: "+sum);
		}
		return sum;

	}

}
