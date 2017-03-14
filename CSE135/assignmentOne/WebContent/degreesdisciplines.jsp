<%@page import="java.util.*, applicant.*, support.*, address.*, degree.*" %>
<html>
<body>
<b>Disciplines</b>
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

Applicant applicant = (Applicant)session.getAttribute("applicant");


String university = request.getParameter("university");
String altUniversity = request.getParameter("altUniversity");


	Vector v = applicant.getDegree();
	Degree d = (Degree)v.elementAt(v.size()-1);
	
	if (university != null)
		d.setUniversity(Integer.parseInt(university));
	if (altUniversity != null)
		d.setAltUniversity(altUniversity);
	v.set(v.size()-1, d);
	applicant.setDegree(v);
	



session.setAttribute("applicant", applicant);




boolean domestic;
if (applicant.getCitizenship() == "212" || applicant.getResidence() == "212")
	domestic = true;
%>


<form method="GET" action="moredegrees.jsp">
<th>
<% 
for (int i =0; i < majors.size(); i++)
	out.println("<input type='radio' name='major' value='" + i + "' /> " + majors.get(i) + " <br />");
out.println("<input type='radio' name='major' value='4' /> Other </>");
%>
</th>
<th>
<input type="text" size="16" name="degree" />
</th><br>




<label for="month">Date Degree Awarded</label>
<input type="text" name="month" id="month" size="2" maxlength="2" /> /
<input type="text" name="year" id="year" size="4" maxlength="4" />MM/YYYY (or expected date)
<div></div>
<label for="gpa">GPA</label>
<input type="text" name="gpa" id="gpa" size="4" maxlength="5" />
<label for="type">Degree Type</label>
<select id="type" name="type">
					<option selected="selected">BS</option>
					<option>MS</option>
					<option>PhD</option>
					</select>

<input type="submit" name="submit" />
</form>

</body>

</html>

