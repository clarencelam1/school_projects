<?
echoFlyer();
?>

<?
function echoFlyer()
{
?>
<style>

textarea {resize:none; outline:none;}
.resize {width:90px; height:auto;
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
background-size:170px 70px;

font-size:13px;
font-family:segoe ui;
color:black;

/******************** popup container ******************/
	height:53px;
	width:153px;
	padding:12px 10px;
	overflow:auto;
	
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
$(" a[title]").stop().tooltip({ position: "bottom center", opacity: 0.9});
});

</script>

<div style="font-family:segoe ui; width:420px; margin:auto;">
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
<textarea id="textarea" class="style" name="description" cols="28" rows="3" onKeyDown=
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


