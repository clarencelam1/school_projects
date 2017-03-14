<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js'></script>
<style>#thanks{ background-color:#BDEDFF; width:0px; height:0px; text-align:center; vertical-align:middle; overflow:hidden; }</style>
<?php
//connect include
require("../connect.php");
require('../functions.php');


//grab Post data
$subject 	= $_POST['subject'];
$email 		= $_POST['email'];
$price 		= $_POST['price'];
$duration	= $_POST['duration'];
$comments 	= $_POST['comments'];
$apt 		= $_POST['apt'];
$embed      = $_POST['utube']; 
$imgid 		= $_POST['imgid'];

//check if youtube embed code is put in and take source url of the embed code
if (!$embed)
{
	$utube = "none";
}
else
{
	$width = strpos("$embed","http");
	$utube = substr("$embed",$width,40);
}

//check if there are any file upload fields, if there are, retrieve temp files
if ($imgid > 0)
{
	for ($i=1; $i<=$imgid; $i++)
	{
	${'img' . $i} = "img".$i;
	${'type' . $i}  = $_FILES[${'img' . $i}]['type'];
	${'size' . $i}  = $_FILES[${'img' . $i}]['size'];
    ${'file' . $i}  = $_FILES[${'img' . $i}]['tmp_name'];
	${'file' . $i} = addslashes(file_get_contents ($_FILES[${'img' . $i}]['tmp_name']));
		
		//check if valid image type	
		if ( !(
		($_FILES[${'img' . $i}]["type"] == "image/bmp")
		||($_FILES[${'img' . $i}]["type"] == "image/gif")
		||($_FILES[${'img' . $i}]["type"] == "image/jpeg")
		||($_FILES[${'img' . $i}]["type"] == "image/png")
		||($_FILES[${'img' . $i}]["type"] == "image/tiff")
		))
		{
			die("That is not a valid image file");
		}
		
		//check if it fits size limitations
		if( ${'size' . $i} > 1000000 )
		{
			die("The image file size is too big");
		}
	}
}

if(strlen($subject)==0||strlen($email)==0||strlen($price)==0)
echo "Please fill out all the fields.<br>";

if(!eregi('^[0-9\.]+$',$price))
echo "Something is wrong with the price you entered, make sure the exclude the $ and please try again.<br>";

else {
		if($duration==1)
		$expire = date('F d Y', strtotime('+7 days'));
		else if ($duration==2)
		$expire = date('F d Y', strtotime('+14 days'));
		else if ($duration==4)
		$expire = date('F d Y', strtotime('+1 month'));	

//add comment
$comments = addslashes(nl2br(htmlspecialchars($_POST['comments'])));

$write = mysql_query("INSERT INTO sublet
VALUES('','$subject','$email','$price','$expire','$apt','$comments','$utube','$imgid','$file1','$file2','$file3','$file4','$file5','$file6')");

echo "
<div id='thanks'><br><br><br><br><br><br><br><br><br><br><br><br><font size='+3'><b>Success! Check the sublet page to view your post.</b></font></div>
<script type='text/javascript'>
$(document).ready(function(){
$('#thanks').animate({width:507},1000);
$('#thanks').animate({height:620},1000);
}); 
</script>";
}


?>