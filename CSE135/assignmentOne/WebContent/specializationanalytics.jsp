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
<b>Specialization Analytics</b>

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
            ResultSet rs2 = null;
            
            try {
                // Registering Postgresql JDBC driver with the DriverManager
                Class.forName("org.postgresql.Driver");

                // Open a connection to the database using DriverManager
                conn = DriverManager.getConnection(
                    "jdbc:postgresql://localhost:5432/postgres?" +
                    "user=postgres&password=db");
            %>
            
            <%-- -------- SELECT Statement Code -------- --%>
            <%
                // Create the statement
                Statement statement = conn.createStatement();

                // Use the created statement to SELECT
                // the student attributes FROM the Student table.
                rs = statement.executeQuery("SELECT * FROM specializations");
            %>
            
            <!-- Add an HTML table header row to format the results -->
            <table border="1">
            <tr>
                <th>SID</th>
                <th>Specialization</th>
                <th>Number of Applications</th>
            </tr>

<!--             <tr> -->
<!--                 <form action="students.jsp" method="POST"> -->
<!--                     <input type="hidden" name="action" value="insert"/> -->
<!--                     <th>&nbsp;</th> -->
<!--                     <th><input value="" name="pid" size="10"/></th> -->
<!--                     <th><input value="" name="first" size="15"/></th> -->
<!--                     <th><input value="" name="middle" size="15"/></th> -->
<!--                     <th><input value="" name="last" size="15"/></th> -->
<!--                     <th><input type="submit" value="Insert"/></th> -->
<!--                 </form> -->
<!--             </tr> -->

            <%-- -------- Iteration Code -------- --%>
            <%
                // Iterate over the ResultSet
                while (rs.next()) {
            %>

            <tr>
                <%-- Get the specialization id --%>
                <td>
                    <%=rs.getInt("s_id")%>
                </td>

                <%-- Get the specialization name --%>
                <td>
                    <%=rs.getString("specialization")%>
                </td>
				<td>
            	<%
            	// to get number of applications for each specialization
                Statement st = conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,
                        ResultSet.CONCUR_UPDATABLE);
                st = conn.createStatement();
                rs2 = st.executeQuery("SELECT COUNT(*) FROM applicants WHERE applicants.specialization = '" + rs.getString("specialization") + "'");
                rs2.next();
            	out.println("<a href='applications.jsp?specialization=");
              	out.println(rs.getString("specialization"));	
              	out.println("'>");
              	out.println(rs2.getInt(1) + "</a>"); 
              	%>
                </td>
            </tr>
            <%
            }
            %>

            <%-- -------- Close Connection Code -------- --%>
            <%
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