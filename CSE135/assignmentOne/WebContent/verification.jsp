<%@page import="java.util.*, applicant.*, support.*, address.*,degree.*" %>
<%
support s = new support();   	
	
String path1 = config.getServletContext().getRealPath("countries.txt");
String path2 = config.getServletContext().getRealPath("universities.txt");
String path3 = config.getServletContext().getRealPath("majors.txt");
String path4 = config.getServletContext().getRealPath("specializations.txt");

//getCountries returns a vector of the countries to be used for choosing citizenship
Vector countries = s.getCountries(path1);    
//getUniversities returns a vector of vectors where each vector is a tuple of <string, vector>
//with the string being the name of the country/state and the vector being the list of universities there
Vector universities = s.getUniversities(path2);
//getMajors and getSpecializations return vectors
Vector majors = s.getMajors(path3);
Vector specializations = s.getSpecializations(path4);
%>
<html>

<body>
<b>Verification</b>




<% Applicant applicant = (Applicant)session.getAttribute("applicant"); 
String spec = request.getParameter("type");
applicant.setSpecialization(spec);

%>

<p>

First Name: <%= applicant.getFirstName() %> <br> 
Middle Initial: <%= applicant.getMiddleInitial() %> <br>
Last Name: <%= applicant.getLastName() %> <br> 
Specialization: <%= applicant.getSpecialization() %> <br>
Country of Citizenship: <%= countries.get(Integer.parseInt(applicant.getCitizenship())) %> <br>
Country of Residence: <%= countries.get(Integer.parseInt(applicant.getResidence())) %> <br>
Street Address : <%= applicant.getAddress().getStreetAddress() %> <br>
City : <%= applicant.getAddress().getCity() %> <br>
State : <%= applicant.getAddress().getState() %> <br>
Country Code: <%= applicant.getAddress().getCountryCode() %> <br>
Zip Code : <%= applicant.getAddress().getZipCode() %> <br>
Area Code : <%= applicant.getAddress().getAreaCode() %> <br>
Number : <%= applicant.getAddress().getNumber() %> <br>

<%

Vector v = applicant.getDegree();
int size = v.size();

for(int i = 0; i < v.size(); i++){
	
	Degree d = (Degree)v.get(i);
	out.print("Degree ");
	out.print(i+1+": ");
	
	int j = d.getLocation();
	Vector tuple = (Vector)universities.get(j);
	String state = (String)tuple.get(0);
	Vector u = (Vector)tuple.get(1);
	if (d.getMajor() == 4)
		out.print(d.getAltMajor() + " ");
	else
		out.print(majors.get(d.getMajor()) + " ");
	out.println(d.getType() + ", ");
	if (d.getAltUniversity() == "")
		out.print(u.get(d.getUniversity()));
	else
		out.print(d.getAltUniversity());
	out.println(", " + state + ", " + d.getMonth() + "/" + d.getYear() + "<br>");
}
%>

<form action = "confirmation.jsp">
<input type="submit" value="Submit Application" />
</form>

<form action = "cancelation.jsp">
<input type="submit" value="Cancel" />
</form>