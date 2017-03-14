import java.util.HashMap;
import java.util.Map;

/**
  * Creates and tests the alarm network as given in the book.
  * @author baduncan
  */
public class TestNetwork {
	public static void main(String [] args) {
		BayesianNetwork alarmnet = new BayesianNetwork();

    // Add variables to network
		RandomVariable burglary = new RandomVariable("Burglary");
		RandomVariable earthquake = new RandomVariable("Earthquake");
		RandomVariable alarm = new RandomVariable("Alarm");
		RandomVariable john = new RandomVariable("John");
		RandomVariable mary = new RandomVariable("Mary");
		alarmnet.addVariable(burglary);
		alarmnet.addVariable(earthquake);
		alarmnet.addVariable(alarm);
		alarmnet.addVariable(john);
		alarmnet.addVariable(mary);
		
    // Add edges to network
		alarmnet.addEdge(burglary, alarm);
		alarmnet.addEdge(earthquake, alarm);
		alarmnet.addEdge(alarm, john);
		alarmnet.addEdge(alarm, mary);
		
    // Initialize probability tables
		double [] burglaryProbs = {.001};
		double [] earthquakeProbs = {.002};
		double [] alarmProbs = {.95, .94, .29, .001};
		double [] johnProbs = {.9, .05};
		double [] maryProbs = {.7, .01};
		alarmnet.setProbabilities(burglary, burglaryProbs);
		alarmnet.setProbabilities(earthquake, earthquakeProbs);
		alarmnet.setProbabilities(alarm, alarmProbs);
		alarmnet.setProbabilities(john, johnProbs);
		alarmnet.setProbabilities(mary, maryProbs);
		
    // Perform sampling tests
    // ----------------------

		// P(J=1|B=0,E=1) = TODO in writeup
		System.out.println("Test 1");
		Map<RandomVariable, Boolean> given1 = new HashMap<RandomVariable, Boolean>();
		given1.put(burglary, false);
		given1.put(earthquake, true);
		System.out.println("rejection sampling: " + alarmnet.performRejectionSampling(john, given1, 999999));
		System.out.println("weighted sampling: " + alarmnet.performWeightedSampling(john, given1, 99999));
		System.out.println("gibbs sampling: " + alarmnet.performGibbsSampling(john, given1, 99999));
		
		// P(B=1|J=1) = TODO in writeup
		System.out.println("Test 2");
		Map<RandomVariable, Boolean> given2 = new HashMap<RandomVariable, Boolean>();
		given2.put(john, true);
		System.out.println("rejection sampling: " + alarmnet.performRejectionSampling(burglary, given2, 999999));
		System.out.println("weighted sampling: " + alarmnet.performWeightedSampling(burglary, given2, 99999));
		System.out.println("gibbs sampling: " + alarmnet.performGibbsSampling(burglary, given2, 99999));
		
		// P(E=1|M=1) = TODO in writeup
		System.out.println("Test 3");
		Map<RandomVariable, Boolean> given3 = new HashMap<RandomVariable, Boolean>();
		given2.put(mary, true);
		System.out.println("rejection sampling: " + alarmnet.performRejectionSampling(earthquake, given3, 999999));
		System.out.println("weighted sampling: " + alarmnet.performWeightedSampling(earthquake, given3, 99999));
		System.out.println("gibbs sampling: " + alarmnet.performGibbsSampling(earthquake, given3, 99999));


			
	
	}
}
