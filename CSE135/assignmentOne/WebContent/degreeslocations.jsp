<%@page import="java.util.*, applicant.*, support.*, address.*, degree.*" %>
<html>
<body>
<b>Provide degrees - Choose location</b>
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
String streetAddress = request.getParameter("streetAddress");
String city = request.getParameter("city");
String state = "";
String countryCode = "";


if (applicant.getCitizenship().equals("212")){
	state = request.getParameter("state");
	currAdd.setState(state);
	}


else {
	countryCode = request.getParameter("countryCode");
	currAdd.setCountryCode(countryCode);
	}

String zipCode = request.getParameter("zipCode");
String areaCode = request.getParameter("areaCode");
String number = request.getParameter("number");


currAdd.setStreetAddress(streetAddress);
currAdd.setCity(city);
currAdd.setZipCode(zipCode);
currAdd.setAreaCode(areaCode);
currAdd.setNumber(number);




if (applicant.getResidence().equals("212")){
	state = request.getParameter("state");
	 currAdd.setState(state);
}
else{
	
	currAdd.setCountryCode(countryCode);
	
}

if(applicant.getDegree().size()==0)
applicant.setAddress(currAdd);

//applicant.setAddress(new Address(streetAddress, city, state, Integer.parseInt(countryCode), Integer.parseInt(zipCode), Integer.parseInt(areaCode), Integer.parseInt(number)));

session.setAttribute("applicant", applicant);




boolean domestic;
if (applicant.getCitizenship() == "212" || applicant.getResidence() == "212")
	domestic = true;
%>
    <br>
    <%
    out.println("<table border = '1' cellpadding ='5'>");
    for (int i=0; i<universities.size(); i+=3){
      //each entry in the universities vector is a tuple with the first entry being the country/state
      //and the second entry being a vector of the universities as String's
      Vector tuple = (Vector)universities.get(i);
      String state2 = (String)tuple.get(0);
      out.println("<tr>");
	  out.println("<td align = 'center'> <a href='degreesuniversities.jsp?location=" + i);
	  out.println("'>");

      out.println(state2+"</a>");    
      
      if (i + 1 < universities.size()) {
	      tuple = (Vector)universities.get(i+1);
	      state2 = (String)tuple.get(0);
		  out.println("<td align = 'center'> <a href='degreesuniversities.jsp?location=");
		  out.println((int)i+1);
		  out.println("'>");
	
	      out.println(state2+"</a>");   
      }
      
      if (i+2 < universities.size()) {
	      tuple = (Vector)universities.get(i+2);
	      state2 = (String)tuple.get(0);
		  out.println("<td align = 'center'> <a href='degreesuniversities.jsp?location=");
		  out.println((int)i+2);
		  out.println("'>");
	
	      out.println(state2+"</a>");    
      }
      
    } 
    %>
</table>
</body>

</html>

