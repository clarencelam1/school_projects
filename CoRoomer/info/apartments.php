<h2>Apartments</h2>
Advertise special offers, post up to date prices, and reach out to future tenants using the form below:
<br /><br /><br />

<? 

mysql_connect("localhost","coroom5_mike","76891111") or die("Error connecting to db");
mysql_select_db("coroom5_ads") or die("Error connecting to db");

function echoOptions($aptNamesArray){
	$z =0;	
	while($z<sizeof($aptNamesArray)){	
       echo " <option value=$z>$aptNamesArray[$z]</option> ";
	   $z++;
	}
}

echo "		
<form action=\"apartments.php\" method=\"POST\" enctype=\"multipart/form-data\">
<table width=\"60%\" border=\"0\" cellspacing=\"0\" cellpadding=\"8\">
    <tr> 
       <td><div align=\"right\"> Apartment:</div></td> 
       <td><select name=\"apt\" id=\"apt\">"; 
        echoOptions($aptNamesArray);
echo"</td>
   </tr>
    <tr>
       <td><div align=\"right\">Description:</div></td>
       <td><textarea name=\"description\" id=\"description\" cols=\"45\" rows=\"7\" wrap=\"VIRTUAL\"></textarea></td>
    </tr>
    <tr>
       <td><div align=\"right\">Coupon Code:</div></td>
       <td><input type=\"text\" name=\"code\" size=\"60\"></td>
    </tr>
    <tr> 
       <td></td>
       <td><div align=\"left\">
        <input type=\"reset\" value=\"Clear\">     
        <input type=\"submit\" name=\"submit\" value=\"Submit\"></div></td>
    </tr>
  </table>
</form>";

?>
<h3>How does it work?</h3>
1. Request a coupon code by going to "contact" at the bottom of the page.<br />
2. Submit a posting!<br />
3. Update postings as needed. You can update as many times as you like as long as you have your coupon code.
<br /><br />
If you have any questions, feedback, or simply lost your coupon, feel free to email us by clicking "contact" at the bottom of the page. 

<?

$description = addslashes(nl2br(htmlspecialchars($_POST['description'])));
$apartment = $_POST['apartment'];
$code = $_POST['code'];
	
$query = mysql_query ("SELECT * FROM coupon WHERE code = '$code' ");//retrieve data from coupon table
$numrows = mysql_num_rows ($query);//get number of rows in table
if ($numrows !=0)
{
	while ($row = mysql_fetch_assoc ($query)) // check all codes
	{
		$dbcode = $row['code']; //retrieve code from database to match with the code that was put into field
	}
	if ($code == $dbcode)
		{
			$query2 = mysql_query ("SELECT * FROM consumer WHERE code = '$code' "); //check to see if coupon is in both consumer and coupon tables
 			$numrows2 = mysql_num_rows ($query2);
		while ($row2 = mysql_fetch_assoc ($query2))
		{
			$consumercode = $row2['code'];
		}
			if( $dbcode == $consumercode)
			{
				$update = mysql_query ("UPDATE consumer SET description = '$description' WHERE code ='$code'  ");			
				echo "<head>
					  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
					  <title>CoRoomer - Add a New Sublet</title>
					  <script type=\"text/javascript\" src=\"adthanks.js\"></script>
					  </head>
					  <body onload=\"updated()\">";
			}
			else
			{
$time = time(); //date variable takes current time in seconds after UNIX epoch go to http://www.epochconverter.com/ for more info
$day =  30; // take number of days 
// Add the duration of time you want to advertise to the current date.
// There are 86,400 seconds in a day
$exp = $time + ($day * 86400);
		mysql_query ("INSERT INTO consumer VALUES ('','$description', '$exp', '$apartment', '$code')");			
		mysql_query ("UPDATE coupon SET exp = '$exp' WHERE code ='$code'  ");		
				echo "<head>
					  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
					  <title>CoRoomer - Add a New Sublet</title>
					  <script type=\"text/javascript\" src=\"adthanks.js\"></script>
					  </head>
					  <body onload=\"thanks()\">";
		}			
	}
}
if ($code != $dbcode)
echo "<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>CoRoomer - Add a New Sublet</title>
<script type=\"text/javascript\" src=\"adthanks.js\"></script>
</head>
<body onload=\"incorrect()\">";
?>