<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CoRoomer - Roommates</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="../styles/home.css" type="text/css" />
<!--Begin Tiny Box-->
<script type="text/javascript" src="../tinybox/tiny.js"></script>
<link href="../tinybox/tiny.css" rel="stylesheet" type="text/css" />
<!--End Tiny Box-->
</head>
<script src="http://code.jquery.com/jquery-latest.js"></script>  
<script>  
$(document).ready(function(){  
setInterval(function() {  
$("#refresh").load(location.href+" #refresh>*","");  
}, 100);  
});  
</script>
<body>
<!----------------------------------------Header--------------------------------------------->
	<div id="content">
		<h1><a href="../index.php"><img src="../images/logo.png"></a></h1>
		<ul id="top">
			<li><a href="../sublet/?s=0&p=0"></a></li>
			<create><li2><a href="../sublet/add/index.php"></a></li2></create>
			<li3><a href="../flyer/index.php"></a></li3>
			<li4><a href="../roommates/index.php"></a></li4>
		</ul>
        
<!--Begin Create-->
<script>
	var feedback_btn = document.getElementsByTagName("create")[0];
	var feedback_link = feedback_btn.getElementsByTagName("a")[0];

	if(feedback_btn.style.WebkitTransform == undefined && feedback_btn.style.MozTransform == undefined && feedback_btn.style.OTransform == undefined && feedback_btn.filters == undefined) {
	}
	feedback_link.onclick = function(e){ e.preventDefault(); TINY.box.show(
	{html:
	'<iframe src="../sublet/add/index.php" width="520px" height="640px" frameborder="0"><p>Your browser does not support iframes.</p></iframe>'	
		, width: 520, height:640
	}) 
};
</script>
<!--End Create-->
<!--Begin Drop Down-->        
</script>
<div id = "dropdown">
<div class="nav">
    <ul id="menu" class="menu">
        <li><a href="#">APARTMENTS</a>
            <ul>
                <li class="submenu">
                	<a href="#">Up to 2 Bedroom</a>
                   	<ul>
                         <li class="submenu">
                			<a href="#">A - L</a>
                   		<ul>
                        <li class="noborder">
							<a href='../apartments/?sch=00&loc=00'>Archstone La Jolla</a></li>
                			<li><a href='../apartments/?sch=00&loc=01'>Archstone La Jolla Colony</a></li>
                			<li><a href='../apartments/?sch=00&loc=02'>Archstone UTC</a></li>
                			<li><a href='../apartments/?sch=00&loc=10'>La Jolla Del Sol (UCSD Staff/Faculty)</a></li>
                			<li><a href='../apartments/?sch=00&loc=12'>La Jolla International Garden</a></li>
                			<li><a href='../apartments/?sch=00&loc=13'>La Jolla Palms</a></li>
                			<li><a href='../apartments/?sch=00&loc=19'>La Scala</a></li>
                			<li><a href='../apartments/?sch=00&loc=20'>Las Flores</a></li>
                    	</ul>
                        </li> 
                        <li class="submenu">
                			<a href="#">M - Z</a>
                   		<ul>
                        <li class="noborder">
                    		<a href='../apartments/?sch=00&loc=17'>Mirada at La Jolla Colony</a></li>
							<li><a href='../apartments/?sch=00&loc=24'>Nobel Court</a></li>
                			<li><a href='../apartments/?sch=00&loc=25'>Pacific Gardens</a></li>
                			<li><a href='../apartments/?sch=00&loc=29'>Regents La Jolla</a></li>
                			<li><a href='../apartments/?sch=00&loc=32'>Trieste</a></li>
                			<li><a href='../apartments/?sch=00&loc=41'>Whispering Pines</a></li>
                    	</ul>
                        </li> 
                    </ul>
                <li class="submenu">
                	<a href="#">Up to 3 Bedroom</a>
                   	<ul>
                        <li class="noborder">
            			<a href='../apartments/?sch=00&loc=04'>Canyon Park</a></li>
                		<li><a href='../apartments/?sch=00&loc=05'>Costa Verde Village</a></li>
                		<li><a href='../apartments/?sch=00&loc=06'>Costa Verde Towers</a></li>
                		<li><a href='../apartments/?sch=00&loc=09'>La Jolla Crossroads</a></li>
                		<li><a href='../apartments/?sch=00&loc=18'>La Regencia</a></li>
                		<li><a href='../apartments/?sch=00&loc=31'>The Villas at Renaissance</a></li>
                		<li><a href='../apartments/?sch=00&loc=28'>Regents Court</a></li>
                		<li><a href='../apartments/?sch=00&loc=34'>Valentia</a></li>
                    </ul> 
                </li>       
            </ul>
        </li>
        <li><span>CONDOS</span>
			<ul>
               <li class="submenu">
                	<a href="#">A - L</a>
                   	<ul>
                        <li class="noborder">
               			<a href='../apartments/?sch=00&loc=03'>Cambridge</a></li>
          				<li><a href='../apartments/?sch=00&loc=07'>Eastbluff</a></li>
          				<li><a href='../apartments/?sch=00&loc=08'>Genesee Highlands</a></li>
          				<li><a href='../apartments/?sch=00&loc=11'>La Jolla Garden Villas</a></li>
          				<li><a href='../apartments/?sch=00&loc=14'>La Jolla Terrace</a></li>
          				<li><a href='../apartments/?sch=00&loc=15'>La Jolla Village Park</a></li>
          				<li><a href='../apartments/?sch=00&loc=16'>La Jolla Village Tennis Club</a></li>
          				<li><a href='../apartments/?sch=00&loc=21'>Las Palmas</a></li>
                    </ul> 
                </li> 
               <li class="submenu">
                	<a href="#">M - U</a>
                   	<ul>
                        <li class="noborder">
          				<a href='../apartments/?sch=00&loc=22'>Madrid</a></li>
          				<li><a href='../apartments/?sch=00&loc=23'>Marbella</a></li>
          				<li><a href='../apartments/?sch=00&loc=26'>Pines Of La Jolla</a></li>
          				<li><a href='../apartments/?sch=00&loc=27'>Playmor Terrace</a></li>
                		<li><a href='../apartments/?sch=00&loc=30'>The Terraces</a></li>
          				<li><a href='../apartments/?sch=00&loc=33'>University Woods</a></li>
                    </ul> 
                </li>  
               <li class="submenu">
                	<a href="#">V - Z</a>
                   	<ul>
                        <li class="noborder">
                		<a href='../apartments/?sch=00&loc=35'>Venetian</a></li>
          				<li><a href='../apartments/?sch=00&loc=36'>Verano</a></li>
          				<li><a href='../apartments/?sch=00&loc=37'>Villa La Jolla</a></li>
          				<li><a href='../apartments/?sch=00&loc=38'>Villas Mallorca</a></li>
          				<li><a href='../apartments/?sch=00&loc=39'>Villa Tuscana</a></li>
          				<li><a href='../apartments/?sch=00&loc=40'>Villa Vicenza</a></li>
          				<li><a href='../apartments/?sch=00&loc=42'>Woodlands North</a></li>
          				<li><a href='../apartments/?sch=00&loc=43'>Woodlands South</a></li>
          				<li><a href='../apartments/?sch=00&loc=44'>Woodlands West</a></li>
                    </ul> 
                </li>                                   
			</ul>		
        </li>
    </ul>
</div></div>
<script type="text/javascript">
var dropdown=new TINY.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>
<!--End Drop Down-->
<!----------------------------------------Top Box--------------------------------------------->
  <div id="intro">
    <p><font size="+2">Roommates</font></p>
  </div>

<!--Begin Roommates-->
<? echoRoomies(); ?>

<?
function echoRoomies(){
?>

<style>
textarea{resize:vertical;}
.style {outline:none; border-color: Transparent; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; border:0.3px solid gray; -webkit-box-shadow: inset 0px 0px 10px 0.3px #808080; -moz-box-shadow: inset 0px 0px 10px 0.3px #808080; box-shadow: inset 0px 0px 10px 0.3px #808080; }
#font {font-family:segoe ui;}
.panel,.flip{padding:2px; text-align:center; align:left; width:1000px; margin:0px 0px;}
.flip{border:solid 1px #c3c3c3; font-size:13px;}
.flip:hover{border:solid 1px red; cursor:pointer;}
.panel{display:none;}
#center{margin: 0 auto; width:1000px; }
/* fixes element "jumping" problem*/
body{overflow-y:scroll;}
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
           <label><input type='radio' name='duration' value='1' id='duration'>1 Week</label>
           <label><input type='radio' name='duration' value='2' id='duration'>2 Weeks</label>
		   <label><input type='radio' name='duration' value='4' id='duration'>1 Month</label>
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
		var success = alert("Your roommates wanted ad has been posted!");
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
	
echo "
<div id=$panel class='panel'>
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
    scrollTop: $('$jpanel').offset().top}, 800);
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

<!--End Roommates-->

<div id="footer">
    <p id="r">Copyright © 2011 CoRoomer.com</p>
  </div>
</div>
<!--Start Google Analytics-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22394368-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!--End Google Analytics-->
</body>
</html>