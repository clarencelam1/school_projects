<?php  
header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='ISO-8859-1'?>";
?>
<Response>
	<Say>Interesting.</Say>
<?php 
$Response4 = $_REQUEST['RecordingUrl']; 
$r1 = $_GET['r1'];
$r1 = $r1.$Response4;
?>	
    <Say>
      Do you have any questions for me?
    </Say>
    <Record
        action="recording-goodbye5.php?r1=<? echo $r1 ?>"
        method="GET"
		finishOnKey="#"
        maxLength="600"
        />
	<Pause length="120"/>	
    <Say>You have been inactive for 2 minutes. Call ended.</Say>	       
</Response>