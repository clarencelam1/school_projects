<!DOCTYPE HTML>
<html>
	<head>
		<title>
			My recordings
		</title>
		<body>
			<h1>My recordings</h1>
		<?php
    // Include the PHP TwilioRest library 
	include 'Services/Twilio.php';
    
    // Twilio REST API version 
    $ApiVersion = "2010-04-01";
    
    // Set our AccountSid and AuthToken 
	$accountSid = 'AC00352579dd87fbde0027bb0b89b75652';
	$authToken  = '23ec79fa6e46001d6a8a3c518d44a686';

	// @start snippet
    // Instantiate a new Twilio Rest Client 
	$client = new Services_Twilio($accountSid, $authToken);
	echo ("<table>");
	foreach($client->account->recordings as $recording) {
  		echo "<tr><td>{$recording->duration} seconds</td> ";
  		echo "<td><audio src=\"https://api.twilio.com/2010-04-01/Accounts/$accountSid/Recordings/{$recording->sid}.mp3\" controls preload=\"auto\" autobuffer></audio></td>";
  		echo "<td>{$recording->date_created}</td>";
  		echo "<td>{$recording->sid}</td></tr>";
	}
	echo ("<table>");
	// @end snippet
    ?>
	</body>
</html>