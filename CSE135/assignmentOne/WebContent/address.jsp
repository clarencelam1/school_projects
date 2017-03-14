<%@page import="java.util.*, applicant.*, support.*" %>
<html>


<body>
<b>Address</b>
<br>
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

String firstName = request.getParameter("firstName");
String middleInitial = request.getParameter("middleInitial");
String lastName = request.getParameter("lastName");
String temp = request.getParameter("citizenship");
Integer index = Integer.parseInt(temp);
String citizenship = (String)countries.get(index);
String temp2 = request.getParameter("residence");
Integer index2 = Integer.parseInt(temp2);
String residence = (String)countries.get(index2);

//here we create a new applicant object and store all the previously collected information in the applicant object data fields
Applicant applicant = new Applicant();
applicant.setFirstName(firstName);
applicant.setMiddleInitial(middleInitial);
applicant.setLastName(lastName);
applicant.setCitizenship(Integer.toString(index));
applicant.setResidence(Integer.toString(index2));


//we set the applicant object to the session and naming it  "applicants"
session.setAttribute("applicant",applicant);
%>
<br>
First Name: <%= session.getAttribute("firstName") %> <br> 
Middle Initial: <%= session.getAttribute("middleInitial") %> <br>
Last Name: <%= session.getAttribute("lastName") %> <br> 
Country of Citizenship: <%= session.getAttribute("citizenship") %> <br> 
Country of Residence: <%= countries.get(Integer.parseInt(request.getParameter("residence"))) %> <br> 
<br>
<%

//if we are from the United States, we print out
if (index2 == 212) {
	
	out.println("<tr>");
	out.print("<form action=");
	out.print("'");
	out.print("degreeslocations.jsp");
	out.print("'");
	out.print(" method=");
	out.print("'");
	out.print("GET");
	out.print("'>");
	
	out.println("<table>");
	out.print("Street Address");
	out.println("</table>");
    out.print("<th><input value =");
    out.print("''");
    out.print("name = streetAddress");
    out.print(" size = 15 /> </th>");
    out.print("<br>");
    
    out.println("<table>");
    out.print("City");
    out.println("</table>");
    out.print("<th><input value =");
    out.print("''");
    out.print("name = city");
    out.print(" size = 15 /> </th>");
    out.print("<br>");
    
    out.println("<table>");
    out.print("State");
    out.println("</table>");
    out.print("<th><input value =");
    out.print("''");
    out.print("name = state");
    out.print(" size = 15 /> </th>");
    out.print("<br>");
    
    out.println("<table>");
    out.print("Zip Code");
    out.println("</table>");
    out.print("<th><input value =");
    out.print("''");
    out.print("name = zipCode");
    out.print(" size = 15 /> </th>");
    out.print("<br>");
    
    out.println("<table>");
    out.print("Area Code");
    out.println("</table>");
    out.print("<th><input value =");
    out.print("''");
    out.print("name = areaCode");
    out.print(" size = 15 /> </th>");
    out.print("<br>");
    
    
    out.println("<table>");
    out.print("Number");
    out.println("</table>");
    out.print("<th><input value =");
    out.print("''");
    out.print("name = number");
    out.print(" size = 15 /> </th>");
    out.print("<br>");
    out.print("<th><input type='submit' value='Submit'/></th>");
    out.print("</form>");
}
else {
	out.println("<tr>");
	out.print("<form action=");
	out.print("'");
	out.print("degreeslocations.jsp");
	out.print("'");
	out.print(" method=");
	out.print("'");
	out.print("GET");
	out.print("'>");
	
	out.println("<table>");
	out.print("Street Address");
	out.println("</table>");
    out.print("<th><input value =");
    out.print("''");
    out.print("name = streetAddress");
    out.print(" size = 30 /> </th>");
    out.print("<br>");
    
    out.println("<table>");
    out.print("City");
    out.println("</table>");
    out.print("<th><input value =");
    out.print("''");
    out.print("name = city");
    out.print(" size = 20 /> </th>");
    out.print("<br>");
    
    out.println("<table>");
    out.print("Country Telephone Code");
    out.println("</table>");
    out.print("<th><input value =");
    out.print("''");
    out.print("name = countryCode");
    out.print(" size = 4 /> </th>");
    out.print("<br>");
    
    out.println("<table>");
    out.print("Zip Code");
    out.println("</table>");
    out.print("<th><input value =");
    out.print("''");
    out.print("name = zipCode");
    out.print(" size = 5 /> </th>");
    out.print("<br>");
    
    out.println("<table>");
    out.print("Area Code");
    out.println("</table>");
    out.print("<th><input value =");
    out.print("''");
    out.print("name = areaCode");
    out.print(" size = 3 /> </th>");
    out.print("<br>");
    
    
    out.println("<table>");
    out.print("Number");
    out.println("</table>");
    out.print("<th><input value =");
    out.print("''");
    out.print("name = number");
    out.print(" size = 10 /> </th>");
    out.print("<br>");
    out.print("<th><input type='submit' value='Submit'/></th>");
    out.print("</form>");
}
	out.print("<a href='address.jsp?residence=");
	out.print(temp);
	out.print("&citizenship=");
	out.print(temp);
	out.println("&firstName=");
	out.println(firstName);
	out.println("&middleInitial=");
	out.println(middleInitial);
	out.println("&lastName=");
	out.println(lastName);
	out.println("'>");
	
	
%>

</body>

</html>

