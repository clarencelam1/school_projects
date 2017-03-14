<?php  
header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='ISO-8859-1'?>";
?>
<Response>
	<Say>Thank you. I'll get back to you in a few days.</Say>
<?php 
$Response5 = $_REQUEST['RecordingUrl'];
$r1 = $_GET['r1'];
$r1 = $r1.$Response5;
?>	

    <Pause length="1"/>
    <Say>
      Here's how you did.
    </Say>
    <Gather action="gather_playback.php?r1=<? echo $r1 ?>" method="GET">
        <Say>Press numbers 1 through 5 to hear your answers or press 8 to try a random question.</Say>
    </Gather>
        
	<Pause length="120"/>	
    <Say>You have been inactive for 2 minutes. Call ended.</Say>	        
</Response>