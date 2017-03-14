public class Tile {
	
	int x_pos;
	
	int y_pos;
	
	public Tile() {
		
	}
	
	public Tile(int x, int y) {
		
		this.x_pos = x;
		this.y_pos = y;
	}

	public int[] getPosition() {
		int[] pos = {x_pos, y_pos};
		return pos;
	}

	public void setPosition(int x, int y) {
		this.x_pos = x;
		this.y_pos = y;
	}

	@Override
	public String toString() {
		return "("+this.x_pos+","+this.y_pos+")";
	}
	
	
}
