<?
//Getting Info From Database
$connect = mysql_connect("localhost","coroom5_c9lam","Stupid12") or die("Error connecting to db1");
mysql_select_db("coroom5_laregencia") or die("Error connecting to db2");

$currAdd = $_SERVER["REQUEST_URI"];
$currAdd = substr($currAdd,0);
$currAdd = substr($currAdd,24);

function echoName(){
global $currAdd;

	$extract = mysql_query("SELECT * FROM info");			
	$numrows = mysql_num_rows($extract);
	
	while($row = mysql_fetch_assoc($extract)){
		$apt 		=	$row['apt'];
		$name 		=	$row['name'];

if ($apt==$currAdd)
echo $name;	
	}
}
function echoURL(){
global $currAdd;

	$extract = mysql_query("SELECT * FROM info");			
	$numrows = mysql_num_rows($extract);
	
	while($row = mysql_fetch_assoc($extract)){
		$apt 		=	$row['apt'];

if ($apt==$currAdd)
echo $apt;	
	}
}
function echoAddress(){
global $currAdd;

	$extract = mysql_query("SELECT * FROM info");			
	$numrows = mysql_num_rows($extract);
	
	while($row = mysql_fetch_assoc($extract)){
		$apt 		=	$row['apt'];
		$address 	=	$row['address'];

if ($apt==$currAdd)
echo $address;	
	}
}
//Start Layout Functions
function echoHead(){
echo "
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<title>"; echoName(); echo"&nbsp;- UC San Diego </title>
<meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" />
<!--Google Map-->
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\" src=\"../googlemap.js\"></script>
<script type=\"text/javascript\" src=\"../oawhet.js\"></script> 
<!--Tiny Script-->
<script type=\"text/javascript\" src=\"../tinybox/tiny.js\"></script>
<link href=\"../tinybox/tiny.css\" rel=\"stylesheet\" type=\"text/css\" />
<!--Style Sheet-->
<link href=\"../styles/apartment.css\" rel=\"stylesheet\" type=\"text/css\" />
<!--SEO-->
<meta name=\"Description\" content=\"UC San Diego off campus housing simplified. Apartments, roommates and sublets.\">
<meta http-equiv=\"keywords\" content=\"UC San Diego, Off Campus Housing, Apartments Near UCSD, Roommates, Sublet, Townhouses, Apartments\" /> 
<META NAME=\"ROBOTS\" CONTENT=\"INDEX, FOLLOW\">
</head>
<body onload=\"initialize()\" onUnload=\"GUnload()\">
";	
}
function echoHeader(){
echo "
	<div id=\"content\">
		<h1><a href=\"../../index.php\"><img src=\"../../images/logo.png\"></a></h1>
		<ul id=\"top\">
			<li><a href=\"../../sublet/?s=0&p=0\"></a></li>
			<create><li2><a href=\"../../sublet/add/index.php\"></a></li2></create>
			<li3><a href=\"../../flyer/index.php\"></a></li3>
			<li4><a href=\"../../roommates/index.php\"></a></li4>
		</ul>
        
<!--Begin Create-->
<script>
	var feedback_btn = document.getElementsByTagName(\"create\")[0];
	var feedback_link = feedback_btn.getElementsByTagName(\"a\")[0];

	if(feedback_btn.style.WebkitTransform == undefined && feedback_btn.style.MozTransform == undefined && feedback_btn.style.OTransform == undefined && feedback_btn.filters == undefined) {
	}
	feedback_link.onclick = function(e){ e.preventDefault(); TINY.box.show(
	{html:
	'<iframe src=\"../../sublet/add/index.php\" width=\"520px\" height=\"640px\" frameborder=\"0\"><p>Your browser does not support iframes.</p></iframe>'	
		, width: 520, height:640
	}) 
};
</script>
";
echoDropdown();
}
function echoDropdown(){
echo "
<!--Begin Drop Down-->        
</script>
<div id = \"dropdown\">
<div class=\"nav\">
    <ul id=\"menu\" class=\"menu\">
        <li><a href=\"#\">APARTMENTS</a>
            <ul>
                <li class=\"submenu\">
                	<a href=\"#\">Up to 2 Bedroom</a>
                   	<ul>
                         <li class=\"submenu\">
                			<a href=\"#\">A - L</a>
                   		<ul>
                        <li class=\"noborder\">
							<a href='?sch=00&loc=00'>Archstone La Jolla</a></li>
                			<li><a href='?sch=00&loc=01'>Archstone La Jolla Colony</a></li>
                			<li><a href='?sch=00&loc=02'>Archstone UTC</a></li>
                			<li><a href='?sch=00&loc=10'>La Jolla Del Sol (UCSD Staff/Faculty)</a></li>
                			<li><a href='?sch=00&loc=12'>La Jolla International Garden</a></li>
                			<li><a href='?sch=00&loc=13'>La Jolla Palms</a></li>
                			<li><a href='?sch=00&loc=19'>La Scala</a></li>
                			<li><a href='?sch=00&loc=20'>Las Flores</a></li>
                    	</ul>
                        </li> 
                        <li class=\"submenu\">
                			<a href=\"#\">M - Z</a>
                   		<ul>
                        <li class=\"noborder\">
                    		<a href='?sch=00&loc=17'>Mirada at La Jolla Colony</a></li>
							<li><a href='?sch=00&loc=24'>Nobel Court</a></li>
                			<li><a href='?sch=00&loc=25'>Pacific Gardens</a></li>
                			<li><a href='?sch=00&loc=29'>Regents La Jolla</a></li>
                			<li><a href='?sch=00&loc=32'>Trieste</a></li>
                			<li><a href='?sch=00&loc=41'>Whispering Pines</a></li>
                    	</ul>
                        </li> 
                    </ul>
                <li class=\"submenu\">
                	<a href=\"#\">Up to 3 Bedroom</a>
                   	<ul>
                        <li class=\"noborder\">
            			<a href='?sch=00&loc=04'>Canyon Park</a></li>
                		<li><a href='?sch=00&loc=05'>Costa Verde Village</a></li>
                		<li><a href='?sch=00&loc=06'>Costa Verde Towers</a></li>
                		<li><a href='?sch=00&loc=09'>La Jolla Crossroads</a></li>
                		<li><a href='?sch=00&loc=18'>La Regencia</a></li>
                		<li><a href='?sch=00&loc=31'>The Villas at Renaissance</a></li>
                		<li><a href='?sch=00&loc=28'>Regents Court</a></li>
                		<li><a href='?sch=00&loc=34'>Valentia</a></li>
                    </ul> 
                </li>       
            </ul>
        </li>
        <li><span>CONDOS</span>
			<ul>
               <li class=\"submenu\">
                	<a href=\"#\">A - L</a>
                   	<ul>
                        <li class=\"noborder\">
               			<a href='?sch=00&loc=03'>Cambridge</a></li>
          				<li><a href='?sch=00&loc=07'>Eastbluff</a></li>
          				<li><a href='?sch=00&loc=08'>Genesee Highlands</a></li>
          				<li><a href='?sch=00&loc=11'>La Jolla Garden Villas</a></li>
          				<li><a href='?sch=00&loc=14'>La Jolla Terrace</a></li>
          				<li><a href='?sch=00&loc=15'>La Jolla Village Park</a></li>
          				<li><a href='?sch=00&loc=16'>La Jolla Village Tennis Club</a></li>
          				<li><a href='?sch=00&loc=21'>Las Palmas</a></li>
                    </ul> 
                </li> 
               <li class=\"submenu\">
                	<a href=\"#\">M - U</a>
                   	<ul>
                        <li class=\"noborder\">
          				<a href='?sch=00&loc=22'>Madrid</a></li>
          				<li><a href='?sch=00&loc=23'>Marbella</a></li>
          				<li><a href='?sch=00&loc=26'>Pines Of La Jolla</a></li>
          				<li><a href='?sch=00&loc=27'>Playmor Terrace</a></li>
                		<li><a href='?sch=00&loc=30'>The Terraces</a></li>
          				<li><a href='?sch=00&loc=33'>University Woods</a></li>
                    </ul> 
                </li>  
               <li class=\"submenu\">
                	<a href=\"#\">V - Z</a>
                   	<ul>
                        <li class=\"noborder\">
                		<a href='?sch=00&loc=35'>Venetian</a></li>
          				<li><a href='?sch=00&loc=36'>Verano</a></li>
          				<li><a href='?sch=00&loc=37'>Villa La Jolla</a></li>
          				<li><a href='?sch=00&loc=38'>Villas Mallorca</a></li>
          				<li><a href='?sch=00&loc=39'>Villa Tuscana</a></li>
          				<li><a href='?sch=00&loc=40'>Villa Vicenza</a></li>
          				<li><a href='?sch=00&loc=42'>Woodlands North</a></li>
          				<li><a href='?sch=00&loc=43'>Woodlands South</a></li>
          				<li><a href='?sch=00&loc=44'>Woodlands West</a></li>
                    </ul> 
                </li>                                   
			</ul>		
        </li>
    </ul>
</div></div>
<script type=\"text/javascript\">
var dropdown=new TINY.dropdown.init(\"dropdown\", {id:'menu', active:'menuhover'});
</script>
<!--End Drop Down-->";
}
function echoTop(){
echo "
<div id=\"intro\">
<div id=\"title\">
<p><font size=\"+3\">"; echoName(); echo "</font></p></div>
<div id=\"image\" align=\"right\">
<!--Facebook-->
<script src=\"http://connect.facebook.net/en_US/all.js#xfbml=1\"></script><fb:like href='http://www.coroomer.com/apartments/?sch=01&apt="; echoURL(); echo"' show_faces=\"false\" width=\"360\" text-align=\"left\" action=\"recommend\" font=\"arial\"></fb:like>
<!--Twitter-->
<a href=\"http://twitter.com/share\" class=\"twitter-share-button\" data-count=\"horizontal\" data-via=\"coroomer\">Tweet</a><script type=\"text/javascript\"src=\"http://platform.twitter.com/widgets.js\"></script> 
</div>
</div>  
<div id=\"bar\" align=\"right\">      
</div>
";	
}
//Table Information
function echoInfo(){

global $currAdd;

	$extract = mysql_query("SELECT * FROM info");			
	$numrows = mysql_num_rows($extract);
	
	while($row = mysql_fetch_assoc($extract)){
		
		$apt 		=	$row['apt'];
		$room1 		=	$row['room1'];
		$room2 		= 	$row['room2'];
		$room3	 	=	$row['room3'];
		$website 	=	$row['website'];
		$forrent 	=	$row['forrent'];
		$address	=	$row['address'];
		$phone 		=	$row['phone'];
		$email 		=	$row['email'];
		$mon 		=	$row['mon'];
		$tues	 	= 	$row['tues'];
		$wed	 	=	$row['wed'];
		$thur	 	=	$row['thur'];
		$fri		=	$row['fri'];
		$sat 		=	$row['sat'];
		$sun 		=	$row['sun'];
		$details	=	$row['details'];
//Apartment Output
if ($apt==$currAdd)
switch($apt){
	case 00:
	case 01:
	case 02:
	case 04:
	case 05:
	case 06:
	case 9:
	case 12:
	case 13:
	case 17:
	case 18:
	case 19:
	case 20:
	case 25:
	case 28:
	case 29:
	case 31:
	case 32:
	case 34:
	echo"
<table width='100%' valign=\"top\" align=\"left\" cellspacing=\"10\">
<tr valign=\"top\">
	<td>
		<b>Price:</b>
	</td>
	<td>
		1 Bedroom: $room1 <br>
		2 Bedroom: $room2 <br>
		3 Bedroom: $room3 <br>
	</td>
</tr>
<tr valign=\"top\">
	<td>
		<b>Website:</b>
	</td>
	<td>
		<a href=\"$website\" target=\"_blank\">Website</a> <br />
		<a href=\"$forrent\" target=\"_blank\">ForRent.com</a>
	</td>
</tr>
<tr valign=\"top\">
	<td>
		<b>Address:</b> 
	</td>
	<td>
		$address
	</td>
</tr>
<tr valign=\"top\">
	<td>
		<b>Contact:</b>
	</td>
	<td>
		Phone: $phone <br>
		Email: $email
	</td>
</tr>
<tr valign=\"top\">
	<td>
		<b>Office Hours:</b>
	</td>
	<td>
		Monday 			$mon<br />
		Tuesday 		$tues <br />
		Wednesday 		$wed <br />
		Thursday 		$thur <br />
		Friday 			$fri <br />
		Saturday 		$sat <br />
		Sunday 			$sun
	</td>
</tr>
<tr valign=\"top\">
	<td>
	<b>Details:</b>
	</td>
	<td>
	$details
	</td>	
</tr>
<tr></tr>
</table>";
break;
//Condo Output
	case 03:
	case 07:
	case 8:
	case 11:
	case 14:
	case 15:
	case 16:
	case 21:
	case 22:
	case 23:
	case 26:
	case 27:
	case 30:
	case 33:
	case 35:
	case 36:
	case 37:
	case 38:
	case 39:
	case 40:
	case 42:	
	case 43:
	case 44:
	echo"
<table width='100%' valign=\"top\" align=\"left\" cellspacing=\"10\">
<tr valign=\"top\">
Condos are privately owned and must be sublet by it's owners. <br>
If you want a Condo, try using Craigslist and other related online resources.
<tr>
	<td>&nbsp;
	</td>
</tr>
</table>
"; 
break;	
//La Jolla Del Sol,Nobel Court,Whispering Pines
	case 10:
	case 24:
	case 41:
	echo"
	<table width='100%' valign=\"top\" align=\"left\" cellspacing=\"10\">
<tr valign=\"top\">
	<td>
		<b>Price:</b>
	</td>
	<td>
		1 Bedroom: $room1 <br>
		2 Bedroom: $room2 <br>
		3 Bedroom: $room3 <br>
	</td>
</tr>
<tr valign=\"top\">
	<td>
		<b>Website:</b>
	</td>
	<td>
		<a href=\"$website\" target=\"_blank\">Website</a> <br />
	</td>
</tr>
<tr valign=\"top\">
	<td>
		<b>Address:</b> 
	</td>
	<td>
		$address
	</td>
</tr>
<tr valign=\"top\">
	<td>
		<b>Contact:</b>
	</td>
	<td>
		Phone: $phone <br>
		Email: $email
	</td>
</tr>
<tr valign=\"top\">
	<td>
		<b>Office Hours:</b>
	</td>
	<td>
		Monday  	$mon<br />
		Tuesday 	$tues <br />
		Wednesday 	$wed <br />
		Thursday	$thur <br />
		Friday 		$fri <br />
		Saturday 	$sat <br />
		Sunday 		$sun
	</td>
</tr>
<tr valign=\"top\">
	<td>
	<b>Misc:</b>
	</td>
	<td>
	$details
	</td>	
</tr>
<tr></tr>
</table>
";
break;
	}    
  }
}
function echoLeft(){
echo "
<div id=\"left\">";

$id = isset($_GET['id']) ? $_GET['id'] : 1;
echo "
<div class=\"TabView\" id=\"TabView\">


<!-- ***** Tabs ************************************************************ -->

<div class=\"Tabs\" style=\"width: 452px;\">
  <a ";($id == 1) ? 'class="Current"' : 'href="?s=0&p=0"'; echo ">Information</a>
  <a ";($id == 2) ? 'class="Current"' : 'href="?s=0&p=0"'; echo ">Photos</a>
  <a ";($id == 3) ? 'class="Current"' : 'href="?s=0&p=0"'; echo ">Reviews</a>
  <a ";($id == 4) ? 'class="Current"' : 'href="?s=0&p=0"'; echo ">Sublets</a>
</div>


<!-- ***** Pages *********************************************************** -->

<div class=\"Pages\" style=\"width: 450px; height: 300px;\">
<!-----------------------Page 1-----------------------> 
  <div class=\"Page\" style=\'display:"; ($id == 1) ? 'block' : 'none'; echo "'>
    <div class=\"Pad\">";
  echoInfo();
  echo"
  <!--Start Google Maps-->
  <div class=\"map\" id=\"map_canvas\"></div><!--End Google Maps--> 

  </div></div>
<!-----------------------Page 2----------------------->   
  <div class=\"Page\" style='display: ";($id == 2) ? 'block' : 'none'; echo"'><div class=\"Pad\">";
  echoImage();
  echo "
  <!--Start Facebook-->		
    <div id=\"fb-root\">
	</div><script src=\"http://connect.facebook.net/en_US/all.js#appId=184693381548630&amp;amp;xfbml=1\"></script><fb:comments href=\"www.coroomer.com\" numposts=\"7\" width=\"600\" publish_feed=\"true\"></fb:comments> 
    <div id=\"fb-root\"></div> 
    <script> 
      window.fbAsyncInit = function() {
        FB.init({appId: '131721900223207', status: true, cookie: true,
                 xfbml: true});
      };
      (function() {
        var e = document.createElement('script');
        e.type = 'text/javascript';
        e.src = document.location.protocol +'//connect.facebook.net/en_US/all.js';
        e.async = true;
        document.getElementById('fb-root').appendChild(e);
      }());
    </script> 
<!--End Facebook--> 
  </div></div>
<!-----------------------Page 3----------------------->   
  <div class=\"Page\" style='display: ";($id == 3) ? 'block' : 'none'; echo"'><div class=\"Pad\"> ";
  echoYelp();
  echoReviews();
  echo "
  </div></div>
<!-----------------------Page 4----------------------->   
  <div class=\"Page\" style='display: ";($id == 4) ? 'block' : 'none'; echo"'><div class=\"Pad\"> ";
  echoSublets();
  echo "
  </div></div>
<!-----------------------End Pages----------------------->  
</div>

</div>

<script type=\"text/javascript\">
function tabview_aux(TabViewId, CurrentId)
{
  var TabView = document.getElementById(TabViewId);

  // ***** Tabs *****

  var Tabs = TabView.firstChild;
  while (Tabs.className != \"Tabs\") Tabs = Tabs.nextSibling;
  var Tab  = Tabs   .firstChild;
  var i    = 0;

  do
  {
    if (Tab.tagName == \"A\")
    {
      i++;
      Tab.href         = \"javascript:tabview_switch('\"+TabViewId+\"', \"+i+\");\";
      Tab.className    = (i == CurrentId) ? \"Current\" : \"\";
      Tab.blur();
    }
  }
  while (Tab = Tab.nextSibling);

  // ***** Pages *****

  var Pages = TabView.firstChild;
  while (Pages.className != 'Pages') Pages = Pages.nextSibling;
  var Page  = Pages  .firstChild;
  var i     = 0;

  do
  {
    if (Page.className == 'Page')
    {
      i++;
      if (Pages.offsetHeight) Page.style.height = (Pages.offsetHeight-2)+\"px\";
      Page.style.display  = (i == CurrentId) ? 'block' : 'none';
    }
  }
  while (Page = Page.nextSibling);
}


// ***** Tab View **************************************************************

function tabview_switch(TabViewId, id) { tabview_aux(TabViewId, id); }
function tabview_initialize(TabViewId) { tabview_aux(TabViewId,  1); }
</script>
<script type=\"text/javascript\">
tabview_initialize('TabView');
</script>

</div><!--End Left-->
";
}
function echoRight(){
echo "<div id=\"right\">";
echoAdvertise(); 
echo "
</div>
<div id=\"right\"> ";
echoVoter();
echo "
</div>
<div id=\"right\">
<script type='text/javascript'>
var ws_wsid = '1b7c021f06aa4f109d0ffded425238ba';
var ws_address = '"; echoAddress(); echo "';var ws_width = '290';var ws_height = '500';var ws_layout = 'vertical';var ws_transit_score = 'true';
var ws_commute = 'true';
var ws_map_modules = 'all';
</script><style type='text/css'>#ws-walkscore-tile{position:relative;text-align:left}#ws-walkscore-tile *{float:none;}#ws-footer a,#ws-footer a:link{font:11px/14px Verdana,Arial,Helvetica,sans-serif;margin-right:6px;white-space:nowrap;padding:0;color:#000;font-weight:bold;text-decoration:none}#ws-footer a:hover{color:#777;text-decoration:none}#ws-footer a:active{color:#b14900}</style><div id='ws-walkscore-tile'><div id='ws-footer' style='position:absolute;top:464px;left:3px;width:284px'><form id='ws-form'><a id='ws-a' href='http://www.walkscore.com/' target='_blank'>What's Your Walk Score?</a><input type='text' id='ws-street' style='position:absolute;top:18px;left:0px;width:252px' /><input type='image' id='ws-go' src='http://cdn.walkscore.com/images/tile/go-button.gif' height='15' width='22' border='0' alt='get my Walk Score' style='position:absolute;top:18px;right:0px' /></form></div></div><script type='text/javascript' src='http://www.walkscore.com/tile/show-walkscore-tile.php'></script>
</div>
";	
}
function echoFooter(){
echo "
<div id=\"footer\">
    <p id=\"r\">Copyright © 2011 CoRoomer.com</p>
  </div>
</div>
<!--Start Google Analytics-->
<script type=\"text/javascript\">

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
";	
}
//Reviews, Voter, Sublet Functions, Images

/*Review Thread*/
function echoReviews(){

global $currAdd;

$queryget = "SELECT * FROM `reviews` WHERE page = '$currAdd' ORDER BY time DESC";
 $info = mysql_query($queryget);
     if(!$info) die(mysql_error());
/*	 
if(isset($_POST['submit'])) {
  if(!addslashes($_POST['username'])) die('<u>ERROR:</u> You must enter a name to add a review');
  if(!addslashes($_POST['subject']))  die('<u>ERROR:</u> Enter a subject to your review');
  if(!addslashes($_POST['comment']))  die('<u>ERROR:</u> Cannot add review if you do not enter one!');

$q ="INSERT INTO `reviews` (page, date, time, username, subject, comment) 
VALUES ('".$_POST['page']."', '".$_POST['date']."', '".$_POST['time']."', '".addslashes(htmlspecialchars($_POST['username']))."', '".addslashes(htmlspecialchars($_POST['subject']))."', '".addslashes(nl2br(htmlspecialchars($_POST['comment'])))."')";

echo "<script type='text/javascript'>
	$(document).ready(function(){
	alert('Success! Refresh the page to view your review.');
	}); 
	</script>";

$q2 = mysql_query($q);
  if(!$q2) die(mysql_error());

} else {
?>
<form name="comments" action="<? $_SERVER['PHP_SELF']; ?>" method="post">
<input type="hidden" name="page" value="<? echo($currAdd); ?>">
<input type="hidden" name="date" value="<? echo(date("F j Y")); ?>">
<input type="hidden" name="time" value="<? echo(time()); ?>">

<table width="567px" border="0" cellspacing="5px" cellpadding="0">
   <tr> 
       <td><div align="left">Name:</div></td> 
       <td><input name="username" type="text" size="30" value=""></td>
   </tr>
   <tr>
       <td><div align="left">Subject:</div></td>
       <td><input type="text" name="subject" size="30" value=""></td>
    </tr>
    <tr>
       <td><div align="left">Review:</div></td>
       <td><textarea name="comment" cols="60" rows="12" wrap="VIRTUAL"></textarea></td>
    </tr>
    <tr>
    <td></td> 
       <td><div align="right">
            
        <input type="submit" name="submit" value="Submit"></div></td>
    </tr>
  </table>
</form>
<?
}
*/
   $info_rows = mysql_num_rows($info);
if($info_rows > 0) {

echo '<font size = "+2" color = "#2F4F4F">Reviews From CoRoomer.com</font><hr><br><br>';
while($info2 = mysql_fetch_object($info)) {  
echo '<div style="border:3px solid cyan;-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px; word-wrap:break-word;">';  
echo '<table width="100%">';
echo '<tr>';   
echo '<td><b>'.stripslashes($info2->subject).'</b></a></td>';
echo '</tr><tr>';
echo '<td colspan="2"> '.stripslashes($info2->comment).' </td>';
echo '</tr>';
echo '<td><i>Posted by '.stripslashes($info2->username).' on '.$info2->date.' at '.date('h:i A', $info2->time).'<i></div></td>';
echo '</table>';
echo '</div>';
echo '<br>';
}
} 
else echo 'There are no reviews for this location.';	
}
/*Voter*/
function echoVoter(){

global $currAdd;

//Likes
$like = mysql_query("SELECT * FROM rate WHERE likes = 1 AND apt = '$currAdd' ");
$numlike = 0;
while($row = mysql_fetch_assoc($like)){	
	$numlike++;
}
//Dislikes
$dislike = mysql_query("SELECT * FROM rate WHERE likes = 0 AND apt = '$currAdd'");
$numdislike = 0;
while($row = mysql_fetch_assoc($dislike)){	
	$numdislike++;
}
//Total
$total = mysql_query("SELECT * FROM rate WHERE apt = '$currAdd'");
$numtotal = 0;
while($row = mysql_fetch_assoc($total)){
	$numtotal++;
}
//Calculate Bars
$likewidth = ($numlike/($numtotal+1)) * 120;
$dislikewidth = ($numdislike/($numtotal+1)) * 120;

//Display 
?>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js'></script>
<script type='text/javascript'>
$(document).ready(function(){
	
	$("#voter").submit(function() {
	
	var like     = $('#likebutton').attr('value');
    var currAdd   = $('#currAdd').attr('value');
   
  		$.ajax({
			type: "POST",
			url: "vote.php",
			data: "like=" + like +"& currAdd="+ currAdd,   
			success: submitFinished
			});
			
			function submitFinished( response ) {
  response = $.parseJSON( response );

  if ( response[0] == "success" ) {
	  	alert('Thanks for voting!');
		$('#numlike').html(response[1]).show();
		$('#likewidth').animate({width:response[2]}, 800 );
	} else {
		alert('You only get one vote per apartment!');
	}
}
	return false;
	});
	
	$("#voter2").submit(function() {
	
	var dislike  = $('#dislikebutton').attr('value');
	var currAdd   = $('#currAdd').attr('value');

		
		$.ajax({
			type: "POST",
			url: "vote.php",
			data: "dislike=" + dislike +"& currAdd="+ currAdd,  
			success: submitFinished
			});
			
			function submitFinished( response ) {
  response = $.parseJSON( response );

  if ( response[0] == "success" ) {
	 	alert('Thanks for voting!');
		$('#numdislike').html(response[1]).show();
		$('#dislikewidth').animate({width:response[2]}, 800);
	} else {
		alert('You only get one vote per apartment!');
	}
}
	return false;
	});
});
</script>

<form name='voter' id='voter' method='post' >
<table align='left' width='' border='0' cellpadding='0' cellspacing='0'>
      <tr>
        <td>
			<div id='blue'><input type='image' name='like' id='likebutton' value='like' src='../images/voter/like.png'/></div>
            <input type='hidden' name='currAdd' id='currAdd' value='<? echo $currAdd ?>' />
        </td>
        <td align='left'>
			<b><div id="numlike"><? echo $numlike ?></div> Like &nbsp&nbsp&nbsp&nbsp&nbsp </b>
        </td>
        <td id="likewidth" width='<? echo $likewidth ?> px' >
			<div id='like'></div>
		</td>
      </tr>
</table>
</form>
<br /><br /><br /><br /><br />
<form name='voter2' id='voter2' method='post'>
<table align='left' width='' border='0' cellpadding='0' cellspacing='0'>
      <tr>
        <td>
			<div id='red'><input type='image' name='dislike' id='dislikebutton' value='dislike' src='../images/voter/dislike.png'/></div>
            <input type='hidden' name='currAdd' id='currAdd' value='<? echo $currAdd ?>' />
        </td>
        <td align='left'>
			<b><div id="numdislike"><? echo $numdislike ?></div> Dislike &nbsp </b>
        </td>
        <td id="dislikewidth" width='<? echo $dislikewidth ?> px' >
			<div id='dislike'></div>
		</td>
	  </tr>
  </table>
</form>
<?
}
/*Sublet*/
function echoSublets(){
	
	global $currAdd;
	
	$extract = mysql_query("SELECT * FROM sublet ORDER BY id DESC");			
	$numrows = mysql_num_rows($extract);
	
	while($row = mysql_fetch_assoc($extract)){
		
		$apt 		=	$row['apt'];
		$id 		=	$row['id'];
		$subject 	= 	$row['subject'];
		$price 		=	$row['price'];
		$email 		=	$row['email'];
		$duration	=	$row['duration'];
		$expire 	=	$row['expire'];
		$comments	=	$row['comments'];

		if($apt==$currAdd){
			echo "<font size='3px' color='#333333'>
			<b>$$price sublet at&nbsp;";echoName(); echo"<br /></b>
			<font size='2px'>
			<b>$subject<br></b>
			</font>
			<table><td><b>Contact: </b><font color='#17778F'>$email<br></font></td></table>
			<u>Comments:</u> $comments<br>
			<i>Post expires on $expire</i>
			<br><br></font>";  
			$posted = true;
			}
	}	
	if(!$posted)
		echo "Sorry, there are no postings for this location at this time. Check the sublet page to view postings from all apartments.";
}
/*Advertisements*/
function echoAdvertise() {
echo "<a href = 'http://www.UCSDFMyLife.com' target = '_blank'><img src='../images/ucsdfmylife.jpg' alt='UCSDFMyLife' width='300' height='250'></a>";
}
/*Image Viewer*/
function echoImage() {	

echo'
<style type="text/css">
/*Image Galary CSS*/
div.sc_menu { background-color:white; position:relative; height: 60px; width: 200px; overflow: none; }
ul.sc_menu { display: block; height: 130px;
	/*Width Determines Number of Images*/	
	width: 3000px; padding: 0px 0px 0 15px;
	/*Remove Defaut Styling*/
	margin: 0px; list-style: none; }
.sc_menu li {display: block; float: left; margin: 0 0px; }
.sc_menu img {
/*Change Image Size*/
    height:50px;
    width:50px;
/*Use filter:Alpha for IE*/
	filter:alpha(opacity=75);	
	opacity: 0.75; }
.sc_menu img:hover {filter:alpha(opacity=100); opacity: 1; }
/*Pop Up CSS*/
.tooltip { display:none; background:transparent url(http://www.coroomer.com/images/lytebox/tooltip3.png); background-repeat:no-repeat;
/*Pop Up Size*/
background-size:130px 29px;
font-size:12px;
font-family:segoe ui;
color:black;
height:120px;
width:130px;
padding:5px 8px;}
</style>';

/* Javascript */
echo '<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>

<script type="text/javascript" language="javascript" src="http://www.coroomer.com/lytebox/lytebox.js"></script>

<link rel="stylesheet" href="http://www.coroomer.com/lytebox/lytebox.css" type="text/css" media="screen" />';


/*POPUP Jquery*/
echo
'<script> 
$(document).ready(function() {
$(" a[title]").stop().tooltip({ position: "bottom center", opacity: 0.8}); });
</script>';

/*Image Gallery Jquery*/
echo'<script type="text/javascript">
$(function(){
    var div = $("div.sc_menu"),
    ul = $("ul.sc_menu"),
    ulPadding = 15;
    var divWidth = div.width();
	
    //Remove scrollbars
    div.css({overflow: "hidden"});
	
    //Find last image container
    var lastLi = ul.find("li:last-child");
	
    //When user move mouse over menu
    div.mousemove(function(e){

//Gallery needs to account for the length of the image bar and padding
var ulWidth = lastLi[0].offsetLeft + lastLi.outerWidth() + ulPadding ;
var left = (e.pageX - div.offset().left) * (ulWidth-divWidth)/(divWidth);

//This is to calculate where the gallery will scroll to
      div.scrollLeft(left);  
    });
});
</script>';

echo '
<div class="sc_menu">
<ul class="sc_menu">';

global $currAdd;

$extract = mysql_query ("SELECT * FROM image WHERE apt = $currAdd");  
while($row = mysql_fetch_assoc($extract)){
	$description 	=	$row['description'];
	$image	 		=	$row['image'];
		
echo 
'<li>
<a href="http://www.coroomer.com/apartments/image.php?id='.$row['id'].'" rel="lytebox[apartment]" title="'.$row['description'].'">
<img src="http://www.coroomer.com/apartments/image.php?id='.$row['id'].'" ></a>
</li>';
}
if (!$image)
echo
'<li>
<rel="lytebox[apartment]" title="No Image">
<img src="../images/lytebox/noimage.gif">
<img src="../images/lytebox/noimage.gif">
<img src="../images/lytebox/noimage.gif">
<img src="../images/lytebox/noimage.gif">
<img src="../images/lytebox/noimage.gif">
<img src="../images/lytebox/noimage.gif">
<img src="../images/lytebox/noimage.gif">
<img src="../images/lytebox/noimage.gif">
<img src="../images/lytebox/noimage.gif">
<img src="../images/lytebox/noimage.gif">
</li>';

echo '</ul></div>';
}
function echoYelpName(){
global $currAdd;

	$extract = mysql_query("SELECT * FROM info");			
	$numrows = mysql_num_rows($extract);
	
	while($row = mysql_fetch_assoc($extract)){
		$apt 		=	$row['apt'];
		$yelp 		=	$row['yelp'];

if ($apt==$currAdd)
echo $yelp;	
	}	
}
function echoYelp(){
require_once ('oauth.php');

global $currAdd;

	$extract = mysql_query("SELECT * FROM info");			
	$numrows = mysql_num_rows($extract);
	
	while($row = mysql_fetch_assoc($extract)){
		$apt 		=	$row['apt'];
		$yelp 		=	$row['yelp'];

if ($apt==$currAdd)
$name = $yelp;
	}	

// For example, request business with id 'the-waterboy-sacramento'
$unsigned_url = "http://api.yelp.com/v2/business/$name";

// Set your keys here
$consumer_key = "UI4xzsmDyrxmrd2VAyorDw";
$consumer_secret = "nIlF1lPbgwwDq49GY8a72l8OjxQ";
$token = "Jle_d3JKhTjfDNPWm2GXsMcphYJ9TvZK";
$token_secret = "tnCMGu-GgJyuB1UX4mf2fDK1CV4";

// Token object built using the OAuth library
$token = new OAuthToken($token, $token_secret);

// Consumer object built using the OAuth library
$consumer = new OAuthConsumer($consumer_key, $consumer_secret);

// Yelp uses HMAC SHA1 encoding
$signature_method = new OAuthSignatureMethod_HMAC_SHA1();

// Build OAuth Request using the OAuth PHP library. Uses the consumer and token object created above.
$oauthrequest = OAuthRequest::from_consumer_and_token($consumer, $token, 'GET', $unsigned_url);

// Sign the request
$oauthrequest->sign_request($signature_method, $consumer, $token);

// Get the signed URL
$signed_url = $oauthrequest->to_url();

// Send Yelp API Call
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $signed_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
$response = curl_exec($ch);
curl_close($ch);

// Handle Yelp response data
$obj = json_decode($response,true);

global $currAdd;

	$extract = mysql_query("SELECT * FROM info");			
	$numrows = mysql_num_rows($extract);
	
	while($row = mysql_fetch_assoc($extract)){
		$apt 		=	$row['apt'];
		$yelp 		=	$row['yelp'];

if ($apt==$currAdd)
switch($apt){
	case 00:
	case 01:
	case 02:
	case 04:
	case 05:
	case 06:
	case 9:
	case 12:
	case 13:
	case 17:
	case 18:
	case 19:
	case 20:
	case 24:
	case 25:
	case 28:
	case 29:
	case 31:
	case 32:
	case 34:
	case 41:
//Create Output
//Apartment Name
echo '<table>';
echo '<tr>';
echo	'<td>';
echo 		'<a href="http://www.yelp.com" target="_blank"><img src="../images/yelpreview.gif"></a><br>';
echo 		'<a href="http://www.yelp.com/biz/'; echoYelpName(); echo ' "target="_blank"><font face = "arial" color = "#CD0000" size = "5"><b>'; echo $obj['name']; echo '</b></font></a><hr>'; 
echo	'</td>';
echo '</tr>';
//5 Star Rating
echo '<tr>';
echo	'<td>';
echo 		'<font face = "arial" color = "#575757"><b>';	echo'Overall Rating:'; echo '</b></font>';
echo	'</td>';
echo '</tr>';
echo '<tr>';
echo	'<td>';
echo 		'<img src="'; echo $obj['rating_img_url']; echo '">';
echo	'</td>';
echo '</tr>';
//Review Count
echo '<tr>';
echo	'<td>';
echo 		'<font face = "arial" color = "#575757" size="2">Based on&nbsp'; echo $obj['review_count']; echo '&nbsp;Reviews</font>';
echo	'</td>';
echo '</tr>';	 
echo '</table>';
echo '<br />';

echo '<font face = "arial" color = "#575757" size="2"><b>';	echo'Latest Yelp Reviews'; echo '</b></font>';
//Gather Review Data
foreach($obj['reviews'] as $reviews) {
echo '<div style="border:3px solid cyan;-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;">';
echo '<table width="550px">';	
echo '<tr>';
echo	'<td>';
echo 		'<img src="'; echo $reviews['rating_image_small_url']; echo '">';
echo	'</td>';
echo '</tr>';
echo '<tr>';
echo	'<td>';
echo 		'<font face = "arial">'; echo $reviews['excerpt']; echo '</font>'; echo '<a style="text-decoration:none;" href="'; echo $obj['url']; echo		'#hrid:'; echo $reviews['id']; echo '" target="_blank"><font color = "#0099CC"> read more.</a></font>';
echo	'</td>';
echo '</tr>';
echo '<tr>';
echo	'<td>';
echo 		'<font face = "arial" size = "2">';
echo 		'Posted by&nbsp';
//Gather User Data
echo 		'<img src="'; echo $reviews['user']['image_url']; echo ' "width = "20" height = "20"><b>';
echo 		$reviews['user']['name'];
echo 		'</b>&nbsp;on&nbsp;</font><a href="http://www.yelp.com" target="_blank"><img src="../images/yelpbutton.png" top:"10px"></a>';
echo	'</td>';
echo '</tr>';
echo '</table>';
echo '</div>';
echo '<br />';	
	  }	
	}
  }
}    
?>