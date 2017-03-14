<?
$addressArray = array(
'00',
'01',
'02',
'03',
'04',
'05',
'06',
'07',
'08',
'09',
'10',
'11',
'12',
'13',
'14',
'15',
'16',
'17',
'18',
'19',
'20',
'21',
'22',
'23',
'24',
'25',
'26',
'27',
'28',
'29',
'30',
'31',
'32',
'33',
'34',
'35',
'36',
'37',
'38',
'39',
'40',
'41',
'42',
'43',
'44',
'45'); 

$aptNamesArray = array(
'Archstone La Jolla',
'Archstone La Jolla Colony',
'Archstone UTC',
'Cambridge',
'Canyon Park',
'Costa Verde Village',
'Costa Verde Towers',
'Eastbluff',
'Genesee Highlands',
'La Jolla Crossroads',
'La Jolla Del Sol',
'La Jolla Garden Villas',
'La Jolla International Garden',
'La Jolla Palms',
'La Jolla Terrace',
'La Jolla Village Park',
'La Jolla Village Tennis Club',
'Mirada at La Jolla Colony',
'La Regencia',
'La Scala',
'Las Flores',
'Las Palmas',
'Madrid',
'Marbella',
'Nobel Court',
'Pacific Gardens',
'Pines of La Jolla',
'Playmor Terrace',
'Regents Court',
'Regents La Jolla',
'The Terraces',
'The Villas at Renaissance',
'Trieste',
'University Woods',
'Valentia',
'Venetian',
'Verano',
'Villa La Jolla',
'Villas Mallorca',
'Villa Tuscana',
'Villa Vicenza',
'Whispering Pines',
'Woodlands North',
'Woodlands South',
'Woodlands West',
'Other');
?>
<style>
body{font-family:segoe ui;}
textarea{}
#username,#subject {height:25px;}
.style{
outline:none;
border-color: Transparent;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
border:0.3px solid gray;
-webkit-box-shadow: inset 0px 0px 10px 0.3px #808080;
-moz-box-shadow: inset 0px 0px 10px 0.3px #808080;
box-shadow: inset 0px 0px 10px 0.3px #808080;}
select {outline:none; padding:6px; border:3px solid cyan;
-webkit-border-radius: 7px;
-moz-border-radius: 7px;
border-radius: 7px;}
#successmsg {width:0px; height:0px; overflow:hidden; background-color:cyan;
-webkit-border-radius: 7px;
-moz-border-radius: 7px;
border-radius: 7px; margin:20px;}
</style>

<div id="revform">
<fieldset style="width:370px;">
<legend><font size="+2"<b>Tell us Your Experience!</b></font></legend>
<form method="POST">
<table cellpadding="2">
<tr><td>
Name</td><td>
<input type="text" name="username" id="username" class="style" size="35"></td>
</tr>
<tr><td>
Subject</td><td>
<input type="text" name="subject" id="subject" class="style" size="35"></td>
</tr>
<tr><td>
Review</td><td>
<textarea name="comment" id="comment" class="style" cols="35" rows="10" wrap="VIRTUAL"></textarea></td>
</tr><td></td><td>

<select name="page" id="page"> 
        <option>This review is for...</option> 
		<?  echoOptions(); ?> 
		</select></td>

<tr><td></td><td>
<input type="submit" name="submit" id="submit" value="Send Review!" align="right" ></td>
</tr>
</table>
</form>
</fieldset></div>
<div id="successmsg"><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <img src="http://www.coroomer.com/images/voter/like.png"> Thanks for your Review!</div>
<?
function echoOptions(){
	$connect = mysql_connect("localhost","coroom5_c9lam","Stupid12") or die("Error connecting to db1");
	mysql_select_db("coroom5_laregencia") or die("Error connecting to db2");
	
	$extractname = mysql_query("SELECT * FROM info WHERE apt = '$apt'");			
	$numname = mysql_num_rows($extractname);
	
	while($row = mysql_fetch_assoc($extractname)){
		$name 		=	$row['name'];
	}
	
	$name = mysql_query("SELECT * FROM info");
	$numname = mysql_num_rows($name);
	
	while($row = mysql_fetch_array($name)){
		echo "<option value ='";
		echo $row['apt'];
		echo "'>";
		echo $row['name'];
		echo "</option>";
	}	
}

echo'<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
';

/*submit review*/
mysql_connect("localhost","coroom5_mike","76891111");
mysql_select_db("coroom5_laregencia");

$subject = mysql_real_escape_string($_POST['subject']);
$name = mysql_real_escape_string($_POST['username']);
$review = mysql_real_escape_string($_POST['comment']);
$page = $_POST['page'];
$time = time();
$datestr = strftime("%B %d %Y",$time);

if (isset($_POST['submit']))
{
	if ($review && ($page != "This review is for..."))
	{
		if (!$name)
		{$name = "Anonymous";}
		if (!$subject)
		{$subject = "review";}
		
		mysql_query("INSERT INTO reviews VALUES('','$page','$name','$subject','$review','$datestr','$time')");
		
		echo '<script>
        $(function(){
        $("#revform").fadeOut();
		$("#successmsg").delay(500).animate({height:120, width:300},"slow");
        window.setTimeout("location.reload()", 3000);
        });
        </script>';
	}
}
?>


