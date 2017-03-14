<?php  
header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='ISO-8859-1'?>";

$Response3 = $_REQUEST['RecordingUrl']; 
$r1 = $_GET['r1'];
$r1 = $r1.$Response3;
?>

<Response>
	<Say>Alright.</Say>
    <Say>
      What was your biggest accomplishment in your last job?
    </Say>
    <Record
        action="recording-goodbye4.php?r1=<? echo $r1 ?>"
        method="GET"
		finishOnKey="#"
        maxLength="600"
        />
	<Pause length="120"/>	
    <Say>You have been inactive for 2 minutes. Call ended.</Say>	         
</Response>