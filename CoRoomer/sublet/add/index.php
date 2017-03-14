<font size=4px color=#545454><b>Create a Sublet Posting</b></font><br><hr><br>
<?php
echo "<html>";
echo "<head> ";
 
echo "<title>CoRoomer - Add a New Sublet</title> ";

echo'<style type="text/css">
.hide {display:none;}
body{font-family:segoe ui;}
input{font-family:segoe ui;}
</style>';

echo'
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

var i = 1;
var x = 0;
document.form.imgid.value = x;
var email = "email"+x;

  $("#clear").click(function() {
$("#add" + 1).show();

for (i = 2; i <= 6; i++) {
(function(j) {
$("#add" + j).hide();
x = 0;
})(i);
}

for (i = 1; i <= 6; i++) {
(function(j) {
$("#img" + j).hide();
x = 0;
})(i);

}

});

for (i = 1; i <= 5; i++) {

    (function(j) {
        $("#add" + j).click(function() {

            $("#add" + j).hide();
            $("#img" + j).show();
            $("#add" + (j + 1)).show();

x++;
document.form.imgid.value = x;
			});

    })(i);
}

$("#add"+6 ).click(function(){
$("#add"+6).hide();
$("#img"+6).show();

x++;
document.form.imgid.value = x;
	});
});
</script>';

require('../connect.php');

echo 
"<form name='form' method='POST' action='update.php' enctype='multipart/form-data'>
<table align='left' border='0' cellpadding='2' cellspacing='0'>
      <tr>
        <td><label for='subject'>
            Subject</label>
        </td>
        <td>
          <input name='subject' type='text' id='subject' size='35' maxlength='200'>
        </td>
      </tr>
      <tr>
        <td><label for='price'>
            Price(Numbers Only)
          </label></td>
        <td>
          <input name='price' type='text' id='price' size='35' maxlength='100'>
        </td>
      </tr>
	  <tr>
        <td><label for='email' >
            Contact</label>
        </td>
        <td>
          <input name='email' type='text' id='email' size='35' maxlength='100'>
        </td>
      </tr>
	  <tr>
        <td>Auto-delete</td>
        <td>
          <label>
            <input type='radio' name='duration' value='1' id='duration'>1 Week
		  </label>
     
          <label>
            <input type='radio' name='duration' value='2' id='duration'>2 Weeks
		  </label>
		
		   <label>
            <input type='radio' name='duration' value='4' id='duration'>1 Month
		  </label>
          </td>
	  </tr>
      <tr>
        <td>
          <label for='comments'>Comments</label>
		</td>
        <td>
          <textarea name='comments' id='comments' cols='45' rows='8' wrap='VIRTUAL'></textarea>
		</td>
      </tr>
	  <tr>
        <td><label for=\"apt\"></label></td>
		<td>
		<select name=\"apt\" id=\"apt\"> 
        <option>This posting is for...</option>"; 
		
		echoOptions();
		
		echo"</select></td>";
	echo'
	<tr><td>Add Photos(Max Size: 2 MB)(Optional)</td>
		<td>
	<input type="button" id="add1"  name="add" value="Add Photo" />';
	
for ($i=2; $i<=6; $i++)
{
	
${'add' . $i} = "add".$i;
echo"		
<input type='button' id='${'add' . $i}' class='hide' name='add' value='Add Another' />
";
}

echo'<br>';

for ($i=1; $i<=6; $i++)
{

${'img' . $i} = "img".$i;
echo"
<div id='${'img' . $i}' class='hide'>Photo $i: <input type='file'  name='${'img' . $i}'  /></div>
";
}

echo'
	</td>
</tr>  
<tr>
	<td>
	Youtube Link*(Optional)
	</td>
	<td><input type="text" name="utube" size="35" maxlength="100" /></td>
</tr>
<tr>
	<td>
	<input type="hidden" name="imgid" value="0" />
	</td>
</tr>
';
echo"
      <tr>
        <td>     
		</td>
        <td> 
		<label for='clear'></label>
          <input name='clear' type='reset' id='clear' value='Clear'>
          <label for='submit'></label>
          <input name='submit' type='submit' id='submit' value='Submit Your Posting!' onclick=''>        
        </td>
      </tr>
	  <tr><td></td><td width='100'><br>
	   *Under your Youtube video, there should be a 'share' button. Click the 'share' button and then click the 'embed' button. Copy and paste the embed code into the Youtube box above.
	   </td></tr>
    </table>
  </form>
  
 
  "
 ;
 
/* This function echo outs html code which generates the drop down menu for which apt this posting corresponds to*/
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
?>