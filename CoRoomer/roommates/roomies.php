<?echoRoom();?>



<?
function echoRoom(){
?>

<style>
textarea{ resize:vertical;}
.style {outline:none;
border-color: Transparent;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
border:0.3px solid gray;
-webkit-box-shadow: inset 0px 0px 10px 0.3px #808080;
-moz-box-shadow: inset 0px 0px 10px 0.3px #808080;
box-shadow: inset 0px 0px 10px 0.3px #808080; }
#font {font-family:segoe ui;}
.panel,.flip
{padding:2px;
text-align:center;
width:840px;
margin:0px 150px;}
.flip{border:solid 1px #c3c3c3; font-size:13px;}
.flip:hover{border:solid 1px red; cursor:pointer;}
.panel{display:none;}
#center{margin: 0 auto; width:1000px; }
/* fixes element "jumping" problem*/
body{overflow-y : scroll;}
</style>

<div id="center">
<div id="font">
<fieldset style="width:970px;">
<legend><b>Roomies Wanted</b></legend>
<form method="POST">
<table cellpadding="0" style="float:left" >
<tr>
<td>
Subject
</td>
<td>
<input name='subject' type='text' id='subject' class='style' size='35' maxlength='60' onKeyDown ="change();" onKeyUp="change();">
</td>

</tr>
<td>
Name
</td>
<td>
<input name='name' type='text' id='name' class='style' size='35' maxlength='60' onKeyDown="change();" onKeyUp="change();">
</td>
</tr>
<tr>
<td>
Wanted
</td>
<td>
<textarea name='comment' id='comment' class='style' cols='35' rows='10' wrap='PHYSICAL' onKeyDown="change();" onKeyUp="change();"></textarea>
</td>
</tr>
<tr>
<td>
Delete In:
</td>
<td align="center">
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
          <td>
 
          <input id="door" type="image" name="door" src="http://www.coroomer.com/images/door.png" height="70" width="70" 
onMouseOver="document.getElementById('door').src ='http://www.coroomer.com/images/opendoor2.png';"
onMouseOut="document.getElementById('door').src='http://www.coroomer.com/images/door.png';">
</td>



</tr>
</table>
</form>
<fieldset style="width:480px;float:left; ">
<legend><b>Preview Your Posting:</b></legend>
<table>
 <tr>
	<td style='vertical-align: top' >
		<div style="width:220px;word-wrap: break-word;">
        <font size="-1"><b><u><div id="subject2"></div> </b></u><br /> 
		<b>Name:</b><div id="name2"></div><br />
		<b>Wanted:</b><div id="wanted2"></div></font></div>
	</td>
	<td style='vertical-align: top'>
	<div id='fb-root'></div><script src='http://connect.facebook.net/en_US/all.js#appId=184693381548630&amp;xfbml=1'></script><fb:live-stream event_app_id='184693381548630' width='250' height='230' xid='sample' via_url='http://coroomer.com/' always_post_to_friends='false'></fb:live-stream>
	</td>
  </tr>
 </table>
 </fieldset>
</fieldset>

<hr>
<script>
function change(){
var subject = document.getElementById("subject").value;
var name = document.getElementById("name").value;
var comment = document.getElementById("comment").value;
document.getElementById("subject2").innerHTML = subject;
document.getElementById("name2").innerHTML = name;
document.getElementById("wanted2").innerHTML = comment;
}
</script>
<?
mysql_connect("localhost","coroom5_mike","76891111");
mysql_select_db("coroom5_laregencia");

$name = $_POST['name'];
$subject = $_POST['subject'];
$dur = $_POST['duration'];
$time = time();

$comment = addslashes(nl2br(htmlspecialchars($_POST['comment'])));

if ($subject && $comment && $dur)
{
	switch ($dur)
    {
    case 1:
		$exp = $time + 604800;
		break;
	case 2:
	    $exp = $time + 1209600;
		break;
	case 4:
	    $exp = $time + 2419200;
		break;
	}	
	//submit data
	mysql_query ("INSERT INTO roommates VALUES ('','$subject','$name','$comment',$time,'$exp')");
	//if ad is submitted, refresh the page so the user doesn't accidently resubmit it 
	echo'<script> 
		function success(){
		var success = alert("Your Roomies Wanted Ad has been Posted!");
		if (success == false)
		{ window.location.reload();} 
		else{window.location.reload();}
		} success();
	    </script>';
}

/*Output*/
echo '<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.2.min.js"></script>';

//initialize variable to start at current time
$time = time();

//display output while sorting each ad under a certain day
while ($time >= (time()- 2592000)) 
{
	$dayposted = strftime("%B %d",$time);
	$previousday = ($time - 86400);
	//select ads that were posted in this time interval
	$roomqry = mysql_query ("SELECT * FROM roommates WHERE postdate <= $time AND postdate >= $previousday ORDER BY postdate DESC");
	
	$counter = 1;
	while($room = mysql_fetch_assoc($roomqry))
	{
	if($counter == 1)
	{
	echo "<font size='+1'><b>Posted on $dayposted</b></font><hr>";
	}

	$shortdesc = substr($room['subject'],0,50);
	$shortdesc = $shortdesc."...";
	$flip = "flip".$room['id'];
	$panel= "panel".$room['id'];
	$jflip = "#".$flip;
	$jpanel = "#".$panel;
	$indexed = $room['exp'];  
    $actualtime = strftime("%B %d %Y %r",$indexed);
	
	echo "<div id=$panel class='panel'>
	<table align='center'> 
  <tr>
	<td style='vertical-align: top;' >
	<div style='width:350px;word-wrap: break-word;'>
		<font><b><u> $room[subject] </b></u><br /> 
		<b>Name:</b> $room[name]<br />
		<b>Comments:</b> $room[comment]</font>
	</div>
	</td>
	<td style='vertical-align: top'>
	<div id='fb-root'></div><script src='http://connect.facebook.net/en_US/all.js#appId=184693381548630&amp;xfbml=1'></script><fb:live-stream event_app_id='184693381548630' width='480' height='250' xid='.$room[id].' via_url='http://coroomer.com/' always_post_to_friends='false'></fb:live-stream>
	</td>
  </tr>
  <tr>
     <td>
     <i>Post expires: $actualtime</i> 
     </td>
  </tr>	 
</table>
</div>
<p id=$flip class='flip'><b>$shortdesc</b></p>
<script type='text/javascript'> 
$(document).ready(function(){
$('$jflip').click(function(){
    $('$jpanel').slideToggle('normal');
	$('html, body').animate({
    scrollTop: $('$jpanel').offset().top}, 600);
	$('$jflip').css('background-color','cyan');
	});
});
</script>";
       //increment counter
	   $counter++;
	}
//decrement time by 86,400
$time -= 86400;
}

//end "font" and "center" div
echo'</div></div>';
}
?>