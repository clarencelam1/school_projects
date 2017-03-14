<?
header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='ISO-8859-1'?>";

$r0 = $_GET['r1'];
?>  
<Response>
	<Say>Thank you. Here's what you said.</Say>
    <Play><?php echo $_REQUEST['RecordingUrl']; ?></Play>
    
    <Gather action="gather_playback.php?r1=<? echo $r0 ?>" method="GET">
        <Say>Press 9 to try another question or press numbers 1 through 5 to hear your previous responses.</Say>
    </Gather>
   
	<Pause length="120"/>	
    <Say>You have been inactive for 2 minutes. Call ending.</Say>        
</Response> 