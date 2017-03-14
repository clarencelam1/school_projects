<%@page import="java.util.*, applicant.*, support.*" %>
<html>

  
<body>
<b>Country of Citizenship</b>
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

session.setAttribute("firstName",firstName);
session.setAttribute("middleInitial",middleInitial);
session.setAttribute("lastName",lastName);
%>

<br>
<!-- displaying prior pages information
such as first name, middle initial and last name -->
First Name: <%= session.getAttribute("firstName") %> <br> 
Middle Initial: <%= session.getAttribute("middleInitial") %> <br>
Last Name: <%= session.getAttribute("lastName") %> <br> 
<br>

<%
//we are printing out all the countries of citizenships
//and creating the corresponding hyperlinks
out.println("<table border = '1' cellpadding ='5'>");
for(int i=0; i<countries.size()/3; i++){
	out.println("<tr>");
	out.println("<td align = 'center'> <a href='residence.jsp?citizenship=" + i );
	out.println("&firstName=");
	out.println(firstName);
	out.println("&middleInitial=");
	out.println(middleInitial);
	out.println("&lastName=");
	out.println(lastName);
	out.println("'>");
	out.println(countries.get(i) + "</a>");
	
  	out.println("<td align = 'center'> <a href='residence.jsp?citizenship=");
  	out.println((int)i+(int)countries.size()/3);
	out.println("&firstName=");
	out.println(firstName);
	out.println("&middleInitial=");
	out.println(middleInitial);
	out.println("&lastName=");
	out.println(lastName);	  	
  	out.println("'>");
  	out.println(countries.get(i+countries.size()/3) + "</a>");
  	
  	out.println("<td align = 'center'> <a href='residence.jsp?citizenship=");
  	out.println((int)i+(int)countries.size()/3*2);
	out.println("&firstName=");
	out.println(firstName);
	out.println("&middleInitial=");
	out.println(middleInitial);
	out.println("&lastName=");
	out.println(lastName);
  	out.println("'>");
  	out.println(countries.get(i+countries.size()/3*2) + "</a>");
  	out.println("</tr>");
	
}

// For Zimbabwe
out.println("<tr>");

out.println("<td></td><td></td>");
out.println("<td align = 'center'> <a href='residence.jsp?citizenship=");
out.println(countries.size());
out.println("&firstName=");
out.println(firstName);
out.println("&middleInitial=");
out.println(middleInitial);
out.println("&lastName=");
out.println(lastName);
	out.println("'>");
	out.println(countries.get(countries.size()-1) + "</a>");
	out.println("</tr>");
%>


</body>

</html>

