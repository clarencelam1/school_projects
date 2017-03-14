<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CoRoomer - Flyers</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="../styles/home.css" type="text/css" />
<!--Begin Tiny Box-->
<script type="text/javascript" src="../tinybox/tiny.js"></script>
<link href="../tinybox/tiny.css" rel="stylesheet" type="text/css" />
<!--End Tiny Box-->
<!--Begin Image Viewer-->
<script type="text/javascript" src="http://www.coroomer.com/flyer/images/getalbumpics.php?id=flyer"></script>
<script type="text/javascript" src="images/ddphpalbum.js"></script>
<link rel="stylesheet" type="text/css" href="images/ddphpalbum.css" />
<!--End Image Viewer-->
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
    <p><font size="+2">Flyers</font></p>
  </div>

<!--Begin Flyer-->
<?
echoFlyer();
?>

<?
function echoFlyer()
{
?>
<style>

<?
mysql_connect("localhost","coroom5_mike","76891111");
mysql_select_db("coroom5_laregencia");

$rowquery = mysql_query("SELECT * FROM flyer");
$rowquery = mysql_num_rows($rowquery);
$rowimg = $rowquery/7;
$rowpx = $rowimg * 90;
$pageheight = $rowpx + 630; ?>

body {height:<? echo $pageheight; ?>px;}

textarea {resize:none; outline:none;}
.resize {width:90px; height:90px;
padding:8px; margin:5px; 
-webkit-box-shadow: 0px 0px 6px 0.3px black;
-moz-box-shadow: 0px 0px 6px 0.3px black;
box-shadow: 0px 0px 6px 0.3px black;}
.resize:hover{background-color:#00FFFF;}
#container {width: 90%; height:100%; margin: auto; overflow:hidden;}
.style {
border-color: Transparent;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
border:0.3px solid gray;
-webkit-box-shadow: inset 0px 0px 10px 0.3px #808080;
-moz-box-shadow: inset 0px 0px 10px 0.3px #808080;
box-shadow: inset 0px 0px 10px 0.3px #808080; }


/*******************  begin pop-ups CSS ****************/

.tooltip {
	word-wrap: break-word;
	display:none;
	background:transparent url(http://www.coroomer.com/images/popup/whitepopup.png);
background-repeat:no-repeat;

/******************** set popup size *******************/
background-size:178px 110px;

font-size:13px;
font-family:segoe ui;
color:black;

/******************** popup container ******************/
	height:83px;
	width:159px;
	padding:18px 12px;
	
	
}


</style>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
<script type="text/javascript" language="javascript" src="http://www.coroomer.com/lytebox/lytebox.js"></script>
<script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script> 
<link rel="stylesheet" href="http://www.coroomer.com/lytebox/lytebox.css" type="text/css" media="screen" />
<script language="javascript" type="text/javascript">
function limitText(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
}

$(document).ready(function() {
$(" a[title]").stop().tooltip({ position: "bottom center", opacity: 0.95});
});

</script>

<div style="font-family:segoe ui; width:700px; margin:auto;">
<fieldset>
<table cellpadding="3" >
<form method = "post" enctype="multipart/form-data" >
<legend><font size="6"><b>Upload Flyer</b></font></legend>
<tr>
    <td>
Upload Image
    </td>
    <td>
<input type="file" name="img">
    </td>
</tr>
<tr>
    <td>
Short Description
    </td>
    <td>
<textarea id="textarea" class="style" name="description" cols="40" rows="3" onKeyDown=
"limitText(this.form.description,this.form.countdown,60);" onKeyUp="limitText(this.form.description,this.form.countdown,60);"></textarea>
    </td>
</tr>
<tr>
    <td></td>
    <td>
<font size="3">(Maximum characters: 60)<br>
You have <input readonly type="text" name="countdown" size="3" value="60"> characters left.</font>
    </td>
    <td><input id="airplane" type="image" name="submit" src="http://www.coroomer.com/images/airplane2.png" height="45" width="45" 
onMouseOver="document.getElementById('airplane').src ='http://www.coroomer.com/images/airplane.png';"
onMouseOut="document.getElementById('airplane').src='http://www.coroomer.com/images/airplane2.png';">
     </td>
</tr>
</form>
</table>
</fieldset>
</div><br>
<hr><br>
<? 
mysql_connect("localhost","coroom5_mike","76891111");
mysql_select_db("coroom5_laregencia");

$description = $_POST['description'];

//create expiration date
$time = time();
$exp = $time + (1209600);

if (isset ($_POST['submit_x']))
{
	//get image attributes
    $type  = $_FILES['img']['type'];
	$size  = $_FILES['img']['size'];
    $name  = $_FILES['img']['tmp_name'];
		
	
	//check if valid image type	
	if ( !(
	($_FILES['img']["type"] == "image/bmp")
	||($_FILES['img']["type"] == "image/gif")
	||($_FILES['img']["type"] == "image/jpeg")
	||($_FILES['img']["type"] == "image/png")
	||($_FILES['img']["type"] == "image/tiff")
	))
	{
		echo'<script> alert("That is not a valid image file"); </script>';
	}
	else
	{	
	 //check if it fits size limitations
	 if( $size > 2000000 )
	 {
		echo'<script> alert("The image file size is too big"); </script>';
	 }
	 else {	
	    $img = addslashes(file_get_contents ($_FILES['img']['tmp_name']));
        mysql_query("INSERT INTO flyer VALUES('','$img','$description','$exp')");
		//if flyer is submitted, refresh the page so the user doesn't accidently resubmit it 
		echo'<script> 
		function success(){
		var success = alert("Your Flyer has been Submitted.");
		if (success == false)
		{ window.location.reload();} 
		else{window.location.reload();}
		} success();
	    </script>';
	 }
	}
}

/******************************* IMAGE OUTPUT **********************************/
  $flyerqry = mysql_query("SELECT * FROM flyer");  
  $flyerrows = mysql_num_rows($flyerqry);
  if ($flyerrows == 0){
  echo '<div style="text-align:center; font-family:segoe ui; font-size:40px;">No Flyers Posted At this Moment.</div>';}
  
  echo '<div id="container">';
  while($flyer = mysql_fetch_assoc($flyerqry))
  {
	if ($flyer['description'] == "")
	{
		$flyer['description'] = "no description";
	}
	
	echo'
	<a href="flyerget.php?id='.$flyer['id'].'" rel="lytebox[flyer]" title="'.$flyer['description'].'">
	<img 
	src="flyerget.php?id='.$flyer['id'].'" class="resize" ></a>';
  }
  echo'</div>'; 
}
?>
<!--End Flyer-->

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