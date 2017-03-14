<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CoRoomer - Sublet</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="../styles/home.css" type="text/css" />
<!--Begin Tiny Script-->
<link rel="stylesheet" href="../tinybox/tiny.css" type="text/css" />
<script type="text/javascript" src="../tinybox/tiny.js"></script>
<!--Begin Lytebox-->
<script type="text/javascript" src="../lytebox/lytebox.js"></script>
<link rel="stylesheet" type="text/css" href="../lytebox/lytebox.css" />
<!--End Lytebox-->
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js'></script>
</head>
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
    <p><font size="+2">Sublet Postings From All Apartments</font></p>
  </div>

<? require ("sublet.php"); ?>

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