<%@page import="java.util.*, applicant.*, support.*, address.* ,degree.*"%>
<html>
<body>
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


String major  = request.getParameter("major");
String altMajor = request.getParameter("degree");
String altUniversity = request.getParameter("altUniversity");
String month = request.getParameter("month");
String year = request.getParameter("year");
String gpa = request.getParameter("gpa");
String type = request.getParameter("type");


Vector x = applicant.getDegree();
Degree d = (Degree)x.get(x.size()-1);
d.setMajor(Integer.parseInt(major));
d.setAltMajor(altMajor);
d.setGpa(Double.parseDouble(gpa));
d.setType(type);
d.setMonth(month);
d.setYear(year);

x.set(x.size()-1, d);
applicant.setDegree(x);
%>



<h3>More Degrees?</h3>
<div><a href="degreeslocations.jsp" class="button secondary">Submit Next Degree</a> <a href="specializations.jsp" class="button primary">Done</a></div>

</body>