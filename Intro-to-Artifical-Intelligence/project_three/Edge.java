/**
  * A directed edge in the bayesian network
  * @author baduncan
  */
public class Edge {
/**
  * Source of directed edge
  */
	@SuppressWarnings("unused")
	private Node source;

/**
  * Destination of directed edge
  */
	@SuppressWarnings("unused")
	private Node dest;
	
/**
  * Create an edge from source node to dest node
  * @param source Source node
  * @param dest Destination node
  */
	public Edge(Node source, Node dest) {
		this.source = source;
		this.dest = dest;
	}

public Node getSource() {
	return this.source;
}

public void setSource(Node source) {
	this.source = source;
}

public Node getDest() {
	return this.dest;
}

public void setDest(Node dest) {
	this.dest = dest;
}
	
}

