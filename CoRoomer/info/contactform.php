<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js'></script>
<style>#thanks{ background-color:#BDEDFF; width:0px; height:0px; text-align:center; vertical-align:middle; overflow:hidden; }</style>

<?php
 /* Subject and email variables */
	$emailSubject = $_POST['subject'];
	$webMaster = 'coroom5@biz96.inmotionhosting.com';

/* Gathering data variables */
	$emailField = $_POST['email'];
 	$nameField = $_POST['name'];
	$commentsField = $_POST['comments'];

	$body = <<<EOD
Email: $emailField 
Name: $nameField 
Comments: $commentsField 
EOD;

	$headers = "From: $emailField\r\n";
	$headers .= "Content-type: text/html\r\n";
	$success = mail($webMaster, $emailSubject, $body, $headers);

echo "
<div id='thanks'><br><br><br><br><br><br><br><font size='+3'><b>Thank you!<br>We will get back to you as soon as possible.</b></font></div>
<script type='text/javascript'>
	$(document).ready(function(){
 	$('#thanks').animate({width:500},1000);
	$('#thanks').animate({height:400},1000);
    }); </script>";	
?>