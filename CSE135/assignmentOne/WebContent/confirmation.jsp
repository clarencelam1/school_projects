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
int rowCountz;
%>
<html>

<body>
<b>Confirmation</b>

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
            
            try {
                // Registering Postgresql JDBC driver with the DriverManager
                Class.forName("org.postgresql.Driver");

                // Open a connection to the database using DriverManager
                conn = DriverManager.getConnection(
                    "jdbc:postgresql://localhost:5432/postgres?" +
                    "user=postgres&password=db");
            %>
            
            <%-- -------- INSERT Code -------- --%>
            <%
                    // Begin transaction of applicants
                    conn.setAutoCommit(false);

                    // Create the prepared statement and use it to
                    // INSERT student values INTO the students table.
                    pstmt = conn
                    .prepareStatement("INSERT INTO applicants (a_id, first_name, middle_initial, last_name, specialization, citizenship, residence, " + 
                    		"street_address, city, state, country_code, zip_code, area_code, number) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

   
                    Applicant applicant = (Applicant)session.getAttribute("applicant");
        
                    // to get proper a_id
                    Statement st = conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,
                            ResultSet.CONCUR_UPDATABLE);
                    st = conn.createStatement();
                    rs = st.executeQuery("SELECT COUNT(*) FROM applicants");
                    rs.next();
                    rowCountz = rs.getInt(1);
                    		
                    pstmt.setInt(1, rowCountz+1);
                    pstmt.setString(2, applicant.getFirstName());
                    pstmt.setString(3, applicant.getMiddleInitial());
                    pstmt.setString(4, applicant.getLastName());
                    pstmt.setString(5, applicant.getSpecialization());
                    pstmt.setString(6, applicant.getCitizenship());
                    pstmt.setString(7, applicant.getResidence());
                    pstmt.setString(8, applicant.getAddress().getStreetAddress());
                    pstmt.setString(9, applicant.getAddress().getCity());
                    pstmt.setString(10, applicant.getAddress().getState());
                    pstmt.setString(11, applicant.getAddress().getCountryCode());
                    pstmt.setString(12, applicant.getAddress().getZipCode());
                    pstmt.setString(13, applicant.getAddress().getAreaCode());
                    pstmt.setString(14, applicant.getAddress().getNumber());
                    int rowCount = pstmt.executeUpdate();

                    // Commit transaction
                    conn.commit();
                    conn.setAutoCommit(true);

                    for (int i = 0; i < applicant.getDegree().size(); i++) {
                    	Degree d = (Degree)applicant.getDegree().get(i);
	                 // Begin transaction of degrees
	                    conn.setAutoCommit(false);
	
	                    // Create the prepared statement and use it to
	                    // INSERT student values INTO the students table.
	                    pstmt = conn
	                    .prepareStatement("INSERT INTO degrees (d_id, a_id, m_id, u_id, major, month, year) VALUES (?, ?, ?, ?, ?, ?, ?)");

	                    pstmt.setInt(1, rowCountz+1+i);
	                    pstmt.setInt(2, rowCountz+1);
	                    pstmt.setInt(3, d.getMajor());
	                    pstmt.setInt(4, d.getUniversity());
	                    String tmp = "";
	                    if (d.getMajor() == 4)
	                		tmp = d.getAltMajor() + "";
	                	else
	                		tmp = majors.get(d.getMajor()) + "";
	                    pstmt.setString(5, tmp);
	                    pstmt.setString(6, d.getMonth());
	                    pstmt.setString(7, d.getYear());
	                    rowCount = pstmt.executeUpdate();
	
	                    // Commit transaction
	                    conn.commit();
	                    conn.setAutoCommit(true);
                    }
            %>
            <%-- -------- Close Connection Code -------- --%>
            <%
                // Close the ResultSet
                rs.close();

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
Your Applicant ID is <%= rowCountz+1 %> <br>
</body>
</html>