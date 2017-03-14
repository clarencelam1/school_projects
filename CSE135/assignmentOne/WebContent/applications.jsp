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
<b>Applications</b>
<table>
    <tr>
        <td valign="top">
        </td>
        <td>
            <%-- Import the java.sql package --%>
            <%@ page import="java.sql.*"%>
            <%-- -------- Open Connection Code -------- --%>
            <%
            
            Connection conn = null;
            PreparedStatement pstmt = null;
            ResultSet rs = null;
            Statement statement = null;
            
            try {
                // Registering Postgresql JDBC driver with the DriverManager
                Class.forName("org.postgresql.Driver");

                // Open a connection to the database using DriverManager
                conn = DriverManager.getConnection(
                    "jdbc:postgresql://localhost:5432/postgres?" +
                    "user=postgres&password=db");

                //  To determine which application to show
            	String spec = request.getParameter("specialization");
            	String disc = request.getParameter("discipline");
  
            	if (spec != null) {
            	
          		// Specialization SELECT Statement Code 
          		
                    // Create the statement
                    statement = conn.createStatement();

                    // Use the created statement to SELECT
                    // the student attributes FROM the Student table.
                    rs = statement.executeQuery("SELECT * FROM applicants WHERE applicants.specialization = '" + 
                    	request.getParameter("specialization") + "'");
            	}
            	else if (disc != null) {
            		// Discipline SELECT Statement Code 
              		
                    // Create the statement
                    statement = conn.createStatement();

                    // Use the created statement to SELECT
                    // the student attributes FROM the Student table.
                    rs = statement.executeQuery("SELECT dictinct * FROM applicants, degrees WHERE degrees.major = '" + 
                        	request.getParameter("discipline") + "' AND applicants.a_id = degrees.a_id");
            
            	}
            	else {

           		// General SELECT Statement Code
            
                // Create the statement
                statement = conn.createStatement();

                // Use the created statement to SELECT
                // the student attributes FROM the Student table.
                rs = statement.executeQuery("SELECT * FROM applicants");
            	}
                %>
            
            <!-- Add an HTML table header row to format the results -->
            <table border="1">
            <tr>
                <th>AID</th>
                <th>First Name</th>
                <th>Middle Initial</th>
                <th>Last Name</th>
                <th>Specialization</th>
                <th>Citizenship</th>
                <th>Residence</th>
                <th>Street Address</th>
                <th>City</th>
                <th>State</th>
                <th>Country Code</th>
                <th>Zip Code</th>
                <th>Area Code</th>
                <th>Number</th>
            </tr>


            <%-- -------- Iteration Code -------- --%>
            <%
                // Iterate over the ResultSet
                while (rs.next()) {
            %>

            <tr>
                <%-- Get the applicant id --%>
                <td>
                    <%=rs.getInt("a_id")%>
                </td>

                <%-- Get the first name --%>
                <td>
                    <%=rs.getString("first_name")%>
                </td>

                <%-- Get the middle name --%>
                <td>
                    <%=rs.getString("middle_initial")%>
                </td>

                <%-- Get the last name --%>
                <td>
                    <%=rs.getString("last_name")%>
                </td>
                <%-- Get the specialization --%>
                <td>
                    <%=rs.getString("specialization")%>
                </td>

                <%-- Get the citizenship --%>
                <td>
                    <%=rs.getString("citizenship")%>
                </td>

                <%-- Get the residence --%>
                <td>
                    <%=rs.getString("residence")%>
                </td>

                <%-- Get the street address --%>
                <td>
                    <%=rs.getString("street_address")%>
                </td>
                <%-- Get the city --%>
                <td>
                    <%=rs.getString("city")%>
                </td>

                <%-- Get the state --%>
                <td>
                    <%=rs.getString("state")%>
                </td>

                <%-- Get the country code --%>
                <td>
                    <%=rs.getString("country_code")%>
                </td>

                <%-- Get the zip code --%>
                <td>
                    <%=rs.getString("zip_code")%>
                </td>
                <%-- Get the area code --%>
                <td>
                    <%=rs.getString("area_code")%>
                </td>

                <%-- Get the number --%>
                <td>
                    <%=rs.getString("number")%>
                </td>
            </tr>
            <%
                }
         

            // Close Connection Code 
            
                // Close the ResultSet
                rs.close();

                // Close the Statement
                statement.close();

                // Close the Connection
                conn.close();
            } catch (SQLException e) {

                // Wrap the SQL exception in a runtime exception to propagate
                // it upwards
                throw new RuntimeException(e);
            }
            finally {
                // Release resources in a finally block in reverse-order of
                // their creation

                if (rs != null) {
                    try {
                        rs.close();
                    } catch (SQLException e) { } // Ignore
                    rs = null;
                }
                if (pstmt != null) {
                    try {
                        pstmt.close();
                    } catch (SQLException e) { } // Ignore
                    pstmt = null;
                }
                if (conn != null) {
                    try {
                        conn.close();
                    } catch (SQLException e) { } // Ignore
                    conn = null;
                }
            }
    
            %>
        </table>
        </td>
    </tr>
</table>