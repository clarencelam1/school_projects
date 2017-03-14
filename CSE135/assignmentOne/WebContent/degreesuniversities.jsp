<%@page import="java.util.*, applicant.*, support.*, address.*,degree.*" %>
<html>

<body>
<b>Provide degrees - Choose university</b>
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

Address currAdd = new Address();



Address add = applicant.getAddress();
String streetAddress = add.getStreetAddress();
String city = add.getCity();
String state = "";
String countryCode = "";



String zipCode = request.getParameter("zipCode");
String areaCode = request.getParameter("areaCode");
String number = request.getParameter("number");
String location = request.getParameter("location");










Vector v = new Vector();

	
	v = applicant.getDegree();
	Degree d = new Degree();
	d.setLocation(Integer.parseInt(location));
	v.setSize(v.size()+1);
	v.setElementAt(d,v.size()-1);


applicant.setDegree(v);
session.setAttribute("applicant", applicant);

boolean domestic;
if (applicant.getCitizenship() == "212" || applicant.getResidence() == "212")
	domestic = true;
%>




<% 
Vector list = new Vector();
Vector list2 = new Vector();

	
out.println("<table border = '1' cellpadding ='5'>");
list = (Vector)universities.get(Integer.parseInt(location));
list2 = (Vector)list.get(1);

	
	for (int i = 0; i < list2.size(); i+=3) {
		out.println("<tr>");
		out.println("<td align = 'center'> <a href='degreesdisciplines.jsp?university=" + i);
		out.println("'>");
		out.println(list2.get(i) + "</a>");
		
		if (i+1< list2.size()) {
		
			out.println("<td align = 'center'> <a href='degreesdisciplines.jsp?university=");
			out.println((int)i+1);
			out.println("'>");
			out.println(list2.get(i+1) + "</a>");
		}
		
		if (i+2 < list2.size()) {
			
			out.println("<td align = 'center'> <a href='degreesdisciplines.jsp?university=");
			out.println((int)i+2);
			out.println("'>");
			out.println(list2.get(i+2) + "</a>");
		}
	 }
// 	for(int i=0; i<list2.size()/3; i++){
// 		out.println("<tr>");
// 		out.println("<td align = 'center'> <a href='degreesdisciplines.jsp?university=" + i );
// 		out.println("'>");
// 		out.println(list2.get(i) + "</a>");
		
// 		out.println("<td align = 'center'> <a href='degreesdisciplines.jsp?university=");
// 		out.println((int)i+(int)list2.size()/3);
// 		out.println("'>");
// 		out.println(list2.get(i+list2.size()/3) + "</a>");
		
// 		out.println("<td align = 'center'> <a href='degreesdisciplines.jsp?university=");
// 		out.println((int)i+(int)list2.size()/3*2);
// 		out.println("'>");
// 		out.println(list2.get(i+list2.size()/3*2) + "</a>");
// 	}
	

%>

</table>
<form method="GET" action="degreesdisciplines.jsp">
<th>
Other:
<input type="text" size="16" name="altUniversity" />
</th><br>
<input type="submit" name="submit" />
</form>
</body>

</html>

