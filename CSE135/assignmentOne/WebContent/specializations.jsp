<%@page import="java.util.*, applicant.*, support.*, address.*, degree.*" %>
<html>
<body>
<b>Specialization</b>
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

%>
<form action = "verification.jsp">
<label for="type">Specialization</label>
<select id="type" name="type">
					<option selected="selected"><%= specializations.get(0) %></option>
					<% for (int i = 1; i < specializations.size(); i++) {
						out.println("<option>" + specializations.get(i) + "</option>");
					}
					%>
					</select>

<input type="submit" name="submit" />
</form>
</body>
</html>