package address;

import java.util.Vector;

import degree.Degree;

public class Address {
    private String streetAddress;
    private String city;
    private String state;
    private String countryCode;
    private String zipCode;
    private String areaCode;
    private String number;
    
    /*
     * default areaCode constructor
     */
    public Address(){
        streetAddress="";
        city="";
        state="N/A";
        countryCode="1";
        zipCode="";
        areaCode="";
        number = "";
    }

    /*
     * areaCode constructor with parameters
     */
	    public Address(String streetAddress, String city, String state, String countryCode, String zipCode, String areaCode, String number) {
	        super();
	        this.streetAddress = streetAddress;
	        this.city = city;
	        this.state = state;
	        this.countryCode = countryCode;
	        this.zipCode = zipCode;
	        this.areaCode = areaCode;
	        this.number = number;
	    }

	    public Address(String streetAddress, String city, String state, String countryCode, String zipCode) {
	        super();
	        this.streetAddress = streetAddress;
	        this.city = city;
	        this.state = state;
	        this.countryCode = countryCode;
	        this.zipCode = zipCode;
	        this.areaCode = "";
	    }


	    public String getStreetAddress() {
	        return streetAddress;
	    }
	    
	    public void setStreetAddress(String streetAddress) {
	        this.streetAddress =  streetAddress;
	    }

	    public String getCity() {
		    return city;
		}

		public void setCity(String city) {
		    this.city = city;
		}

		public String getState() {
		    return state;
		}

		public void setState(String state) {
		    this.state = state;
		}

		public String getCountryCode() {
		    return countryCode;
		}

		public void setCountryCode(String countryCode) {
		    this.countryCode = countryCode;
		}

		public String getZipCode() {
		    return zipCode;
		}

		public void setZipCode(String zipCode) {
		    this.zipCode = zipCode;
		}

		public String getAreaCode() {
		    return areaCode;
		}

		public void setAreaCode(String areaCode) {
	        this.areaCode = areaCode;
	    }

	    public String getNumber() {
			return number;
		}

		public void setNumber(String number) {
	    	this.number = number;
	    }
	 
}
