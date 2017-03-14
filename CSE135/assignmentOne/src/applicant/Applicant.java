package applicant;

import java.util.Vector;

import address.Address;

public class Applicant {
    private String firstName;
    private String middleInitial;
    private String lastName;
    private String citizenship;
    private String residence;
    private Address address;
    private Vector degrees;
    private String specialization;
    
    /*
     * default Applicant constructor
     */
    public Applicant(){
        firstName="";
        middleInitial="";
        lastName="";
        citizenship="";
        residence="";
        address = new Address();
        degrees = new Vector();
        specialization="N/A";
    }

    /*
     * Applicant constructor with parameters
     */
    public Applicant(String firstName, String middleInitial, String lastName, String citizenship, String residence, Address address, Vector degrees) {
        super();
        this.firstName = firstName;
        this.middleInitial = middleInitial;
        this.lastName = lastName;
        this.citizenship = citizenship;
        this.residence = residence;
        this.address = address;
        this.degrees = degrees;
    }

    public Applicant(String firstName, String middleInitial, String lastName, String citizenship, String residence) {
        super();
        this.firstName = firstName;
        this.middleInitial = middleInitial;
        this.lastName = lastName;
        this.citizenship = citizenship;
        this.residence = residence;
        this.address = new Address();
        this.degrees = new Vector();
    }


    public String getFirstName() {
        return firstName;
    }

    public void setFirstName(String firstName) {
        this.firstName = firstName;
    }

    public String getMiddleInitial() {
        return middleInitial;
    }

    public void setMiddleInitial(String middleInitial) {
        this.middleInitial = middleInitial;
    }

    public String getLastName() {
        return lastName;
    }

    public void setLastName(String lastName) {
        this.lastName = lastName;
    }
    
    public String getCitizenship() {
        return citizenship;
    }

    public void setCitizenship(String citizenship) {
        this.citizenship = citizenship;
    }
    
    public String getResidence() {
        return residence;
    }

    public void setResidence(String residence) {
        this.residence = residence;
    }
    
    public Address getAddress() {
        return address;
    }

    public void setAddress(Address address) {
        this.address = address;
    }
    
    public Vector getDegree(){
		return degrees;
	}
	
	public void setDegree(Vector degree){
		this.degrees = degree;
	}
	
	public String getSpecialization(){
		return specialization;
	}
	
	public void setSpecialization(String specialization){
		this.specialization = specialization;
	}
}
