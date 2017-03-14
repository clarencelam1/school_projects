<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <!--Start Favicon, change it if you like-->
  <link rel="shortcut icon" href="" /> 
  <!--Start Google Initialize-->
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript" src="oawhet.js"></script>
  <script type="text/javascript" src="googlemap.js"></script>
  <script src="http://connect.facebook.net/en_US/all.js"></script> <!--Facebook Analytics Initialize-->
  <!--End Google Initialize-->
  <!--Begin Tiny Script-->
  <link rel="stylesheet" href="tinybox/tiny.css" type="text/css" />
  <script type="text/javascript" src="tinybox/tiny.js"></script>
  <!--End Tiny Box-->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="google-site-verification" content="tUvmbnpOiLOYERI73HO011D7cipo6DkYFG_VgWZ1L3A" />
  <title>CoRoomer.com - UC San Diego Off Campus Housing</title> 
  <meta name="Description" content="UC San Diego off campus housing simplified. Apartments, roommates and sublets.">
  <meta http-equiv="keywords" content="UC San Diego, Off Campus Housing, Apartments Near UCSD, Roommates, Sublet, Townhouses, Apartments" /> 
  <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
  <link href="styles/home.css" rel="stylesheet" type="text/css" />
</head>
<body onLoad="initialize()" onUnload="GUnload()">
<!--Start Browser Check-->
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js'></script>
<?

require_once("browser.php");
$browser = new Browser();
if( $browser->getBrowser() == Browser::BROWSER_IE) {
	echo "
<script type='text/javascript'>
$(document).ready(function(){
alert('CoRoomer.com is not functional in Internet Explorer. Please try another browser.');
}); 
</script>";
}

?>
<!--End Browser Check-->

<!----------------------------------------Header--------------------------------------------->
	<div id="content">
		<h1><a href="index.php"><img src="images/logo.png"></a></h1>
		<ul id="top">
			<li><a href="sublet/?s=0&p=0"></a></li>
			<create><li2><a href="sublet/add/index.php"></a></li2></create>
			<li3><a href="flyer/index.php"></a></li3>
			<li4><a href="roommates/index.php"></a></li4>
		</ul>
        
<!--Begin Create-->
<script>
	var feedback_btn = document.getElementsByTagName("create")[0];
	var feedback_link = feedback_btn.getElementsByTagName("a")[0];

	if(feedback_btn.style.WebkitTransform == undefined && feedback_btn.style.MozTransform == undefined && feedback_btn.style.OTransform == undefined && feedback_btn.filters == undefined) {
	}
	feedback_link.onclick = function(e){ e.preventDefault(); TINY.box.show(
	{html:
	'<iframe src="sublet/add/index.php" width="520px" height="640px" frameborder="0"><p>Your browser does not support iframes.</p></iframe>'	
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
							<a href='apartments/?sch=00&loc=00'>Archstone La Jolla</a></li>
                			<li><a href='apartments/?sch=00&loc=01'>Archstone La Jolla Colony</a></li>
                			<li><a href='apartments/?sch=00&loc=02'>Archstone UTC</a></li>
                			<li><a href='apartments/?sch=00&loc=10'>La Jolla Del Sol (UCSD Staff/Faculty)</a></li>
                			<li><a href='apartments/?sch=00&loc=12'>La Jolla International Garden</a></li>
                			<li><a href='apartments/?sch=00&loc=13'>La Jolla Palms</a></li>
                			<li><a href='apartments/?sch=00&loc=19'>La Scala</a></li>
                			<li><a href='apartments/?sch=00&loc=20'>Las Flores</a></li>
                    	</ul>
                        </li> 
                        <li class="submenu">
                			<a href="#">M - Z</a>
                   		<ul>
                        <li class="noborder">
                    		<a href='apartments/?sch=00&loc=17'>Mirada at La Jolla Colony</a></li>
							<li><a href='apartments/?sch=00&loc=24'>Nobel Court</a></li>
                			<li><a href='apartments/?sch=00&loc=25'>Pacific Gardens</a></li>
                			<li><a href='apartments/?sch=00&loc=29'>Regents La Jolla</a></li>
                			<li><a href='apartments/?sch=00&loc=32'>Trieste</a></li>
                			<li><a href='apartments/?sch=00&loc=41'>Whispering Pines</a></li>
                    	</ul>
                        </li> 
                    </ul>
                <li class="submenu">
                	<a href="#">Up to 3 Bedroom</a>
                   	<ul>
                        <li class="noborder">
            			<a href='apartments/?sch=00&loc=04'>Canyon Park</a></li>
                		<li><a href='apartments/?sch=00&loc=05'>Costa Verde Village</a></li>
                		<li><a href='apartments/?sch=00&loc=06'>Costa Verde Towers</a></li>
                		<li><a href='apartments/?sch=00&loc=09'>La Jolla Crossroads</a></li>
                		<li><a href='apartments/?sch=00&loc=18'>La Regencia</a></li>
                		<li><a href='apartments/?sch=00&loc=31'>The Villas at Renaissance</a></li>
                		<li><a href='apartments/?sch=00&loc=28'>Regents Court</a></li>
                		<li><a href='apartments/?sch=00&loc=34'>Valentia</a></li>
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
               			<a href='apartments/?sch=00&loc=03'>Cambridge</a></li>
          				<li><a href='apartments/?sch=00&loc=07'>Eastbluff</a></li>
          				<li><a href='apartments/?sch=00&loc=08'>Genesee Highlands</a></li>
          				<li><a href='apartments/?sch=00&loc=11'>La Jolla Garden Villas</a></li>
          				<li><a href='apartments/?sch=00&loc=14'>La Jolla Terrace</a></li>
          				<li><a href='apartments/?sch=00&loc=15'>La Jolla Village Park</a></li>
          				<li><a href='apartments/?sch=00&loc=16'>La Jolla Village Tennis Club</a></li>
          				<li><a href='apartments/?sch=00&loc=21'>Las Palmas</a></li>
                    </ul> 
                </li> 
               <li class="submenu">
                	<a href="#">M - U</a>
                   	<ul>
                        <li class="noborder">
          				<a href='apartments/?sch=00&loc=22'>Madrid</a></li>
          				<li><a href='apartments/?sch=00&loc=23'>Marbella</a></li>
          				<li><a href='apartments/?sch=00&loc=26'>Pines Of La Jolla</a></li>
          				<li><a href='apartments/?sch=00&loc=27'>Playmor Terrace</a></li>
                		<li><a href='apartments/?sch=00&loc=30'>The Terraces</a></li>
          				<li><a href='apartments/?sch=00&loc=33'>University Woods</a></li>
                    </ul> 
                </li>  
               <li class="submenu">
                	<a href="#">V - Z</a>
                   	<ul>
                        <li class="noborder">
                		<a href='apartments/?sch=00&loc=35'>Venetian</a></li>
          				<li><a href='apartments/?sch=00&loc=36'>Verano</a></li>
          				<li><a href='apartments/?sch=00&loc=37'>Villa La Jolla</a></li>
          				<li><a href='apartments/?sch=00&loc=38'>Villas Mallorca</a></li>
          				<li><a href='apartments/?sch=00&loc=39'>Villa Tuscana</a></li>
          				<li><a href='apartments/?sch=00&loc=40'>Villa Vicenza</a></li>
          				<li><a href='apartments/?sch=00&loc=42'>Woodlands North</a></li>
          				<li><a href='apartments/?sch=00&loc=43'>Woodlands South</a></li>
          				<li><a href='apartments/?sch=00&loc=44'>Woodlands West</a></li>
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
<!-----------------top        



 Box--------------------------------------------->
		<div id="intromain">
        
        <!--Start Facebook-->
        <div id="facebook">
		<script> 
		FB.init({ 
		appId:'184693381548630', cookie:true, 
	 	status:true, xfbml:true 
		});
    	</script> 
<p align="right"><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="www.coroomer.com" show_faces="true" width="350" font=""></fb:like></p></div>
		<!--End Facebook-->
        
        <h2><b>UC San Diego Off Campus Housing</b></h2>
		<font size="-1"><img src="images/sort/downarrow.gif">MAP BELOW IS CLICKABLE<img src="images/sort/downarrow.gif"><br />
		APARTMENTS = <font color="#70DBDB">BLUE</font> | TOWNHOUSES = <font color="#CC00FF">PURPLE</font></font>
        </div>
<!----------------------------------------Map--------------------------------------------->
<!--Start Google Map-->
<div class="map" id="map_canvas">
</div><!--End Google Map-->
		
<!----------------------------------------Footer--------------------------------------------->	
<div id="footer" align="center"><hr>
<span class ="title" style="font:x-small; color:#000;"> Copyright © 2011 CoRoomer.com |</span>
<contact><a href="../info/contact.php"><span class ="title" style="font:x-small; color: #000;">Contact</span></a> | </contact>
<terms><a href="../info/terms.php"><span class ="title" style="font:x-small; color: #000;">Terms of Use</span></a> | </terms>
<privacy><a href="../info/privacy.php"><span class ="title" style="font:x-small; color: #000;">Privacy</span></a> </privacy>
	</div>   
</div>
<!--Light Box Scripts-->
<script>
	var contact_btn = document.getElementsByTagName("contact")[0];
	var contact_link = contact_btn.getElementsByTagName("a")[0];

	if(contact_btn.style.WebkitTransform == undefined && contact_btn.style.MozTransform == undefined && contact_btn.style.OTransform == undefined && contact_btn.filters == undefined) {
	}
	contact_link.onclick = function(e){ e.preventDefault(); TINY.box.show(
	{html:
	'<iframe src="info/contact.php" width="520px" height="430px" frameborder="0"><p>Your browser does not support iframes.</p></iframe>'	
		, width: 520, height:430
	}) 
};
</script>
<script>
	var terms_btn = document.getElementsByTagName("terms")[0];
	var terms_link = terms_btn.getElementsByTagName("a")[0];

	if(terms_btn.style.WebkitTransform == undefined && terms_btn.style.MozTransform == undefined && terms_btn.style.OTransform == undefined && terms_btn.filters == undefined) {
	}
	terms_link.onclick = function(e){ e.preventDefault(); TINY.box.show(
	{html:
	'<iframe src="info/terms.php" width="550px" height="600px" frameborder="0"><p>Your browser does not support iframes.</p></iframe>'	
		, width: 550, height:600
	}) 
};
</script>
<script>
	var privacy_btn = document.getElementsByTagName("privacy")[0];
	var privacy_link = privacy_btn.getElementsByTagName("a")[0];

	if(privacy_btn.style.WebkitTransform == undefined && privacy_btn.style.MozTransform == undefined && privacy_btn.style.OTransform == undefined && privacy_btn.filters == undefined) {
	}
	privacy_link.onclick = function(e){ e.preventDefault(); TINY.box.show(
	{html:
	'<iframe src="info/privacy.php" width="550px" height="600px" frameborder="0"><p>Your browser does not support iframes.</p></iframe>'	
		, width: 550, height:600
	}) 
};
</script>
<!--End Lightbox Scripts-->
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