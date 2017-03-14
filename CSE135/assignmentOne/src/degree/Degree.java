package degree;

public class Degree {

	private int university = -1;
	private int location = -1;
	private int major = -1;
	private double gpa = 0.0;
	private String type;
	private String month;
	private String year;
	private String altMajor;
	private String altUniversity = "";
		
	public Degree() {
		super();
	}

	public int getUniversity() {
		return university;
	}

	public void setUniversity(int university) {
		this.university = university;
	}

	public int getLocation() {
		return location;
	}

	public void setLocation(int location) {
		this.location = location;
	}

	public int getMajor() {
		return major;
	}

	public void setMajor(int major) {
		this.major = major;
	}

	public String getType() {
		return type;
	}

	public void setType(String type) {
		this.type = type;
	}

	public String getMonth() {
		return month;
	}

	public void setMonth(String month) {
		this.month = month;
	}

	public String getYear() {
		return year;
	}

	public void setYear(String year) {
		this.year = year;
	}

	@Override
	public String toString() {
		return "degree [university=" + university + ", location=" + location
				+ ", major=" + major + ", gpa=" + gpa + ", type=" + type
				+ ", month=" + month + ", year=" + year + "]";
	}

	public void setGpa(double gpa) {
		this.gpa = gpa;
	}

	public double getGpa() {
		return gpa;
	}

	public void setAltMajor(String altMajor) {
		this.altMajor = altMajor;
	}

	public String getAltMajor() {
		return altMajor;
	}
	
	public void setAltUniversity(String altUniversity) {
		this.altUniversity = altUniversity;
	}

	public String getAltUniversity() {
		return altUniversity;
	}
	
}

