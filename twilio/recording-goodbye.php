<?php  
require_once("classes.php");
header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='ISO-8859-1'?>";
?>
<Response>
	<Say>Okay.</Say>
<?php 
$Response1 = $_REQUEST['RecordingUrl'];
?>
    <Say>
      What is your biggest weakness?
    </Say>
    <Record
        action="recording-goodbye2.php?r1=<? echo $Response1 ?>"
        method="GET"
		finishOnKey="#"
        maxLength="600"
        />
	<Pause length="120"/>	
    <Say>You have been inactive for 2 minutes. Call ended.</Say>	        
</Response>