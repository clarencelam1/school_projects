<%@page import="java.util.*, applicant.*, support.*" %>
<html>
<script type="text/javascript">

function validate(in1, in2, in3)

{

var fname=document.getElementById("firstName").value;
var minitial=document.getElementById("middleInitial").value;
var lname=document.getElementById("lastName").value

var letters = /^[a-zA-Z]+$/;

submitOK="true";

if (fname.length == 0 || minitial.length == 0 || lname.length == 0) {
 alert("One of the fields is empty");

 submitOK="false";

 }

else if(!in1.value.match(letters) || !in2.value.match(letters) || !in3.value.match(letters))

{

alert('Please input alphabetic characters only');

submitOK="false";
}

if (submitOK=="false")

 {

 return false;

 }

}

</script>

  
<body>
<b>Names</b>
<br>
<form method="GET" action="citizenship.jsp" onsubmit="return validate(firstName, middleInitial, lastName)">
<th>
First Name:
<!-- Getting the first name via textbox-->
<input type="text" size="16" id="firstName" name="firstName" />
</th><br>
<th>

<!-- Getting the middle initial via textbox-->
Middle Initial:
<input type="text" size="16" id="middleInitial" name="middleInitial" />
</th><br>
<th>

<!-- Getting the last name via textboxS-->
Last Name:
<input type="text" size="16" id="lastName" name="lastName" />
</th><br>
<input type="submit" name="submit" />
</form>

</body>

</html>

