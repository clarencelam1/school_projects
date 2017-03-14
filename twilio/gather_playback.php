<?php  
header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='ISO-8859-1'?>";


$digit = $_GET['Digits'];

$r1 = $_GET['r1'];
$r0 = $_GET['r1'];

$r5 = substr ($r1, strrpos($r1,"http"), strlen($r1));
$r1 = substr ($r1, 0, strlen($r1)-strlen($r5));

$r4 = substr ($r1, strrpos($r1,"http"), strlen($r1));
$r1 = substr ($r1, 0, strlen($r1)-strlen($r4));

$r3 = substr ($r1, strrpos($r1,"http"), strlen($r1));
$r1 = substr ($r1, 0, strlen($r1)-strlen($r3));

$r2 = substr ($r1, strrpos($r1,"http"), strlen($r1));
$r1 = substr ($r1, 0, strlen($r1)-strlen($r2));


$play = "";
switch ($digit){
	case 1:
		$play = $r1;
		break;
	case 2:
		$play = $r2;
		break;
	case 3:
		$play = $r3;
		break;
	case 4:
		$play = $r4;
		break;
	case 5:
		$play = $r5;
		break;
	case 6:
	case 7:
	case 8:
	case 0:
		break;			
	case 9:
$questions = array("Why do you want to work at this company?", "What relevant experience do you have?", "What relevant experience do you have?", "What's your greatest strength?","Tell me about a problem you encountered and how you solved it.","Why do you want this job?");

$random = array_rand($questions, 1);
$say = $questions[$random];
		break;	
}
?>	
<Response>
<? 	if($digit == 1 || $digit == 2 || $digit == 3 || $digit == 4 || $digit == 5 || $digit == 9){	

		if($digit == 9)
			$nine = TRUE;			
		else{
			$nine = FALSE;
			echo "<Say>";
			echo "Question"; echo $digit; echo "Response";
			echo "</Say>";
			echo "<Play>"; echo $play; echo"</Play>";
			
			echo "<Gather action='gather_playback.php?r1="; echo $r0; echo"' method='GET'>
    				<Say>Please enter another number or press 9 to try a random question. </Say>
 					</Gather>";
		}
	}
  	elseif($digit == 0 || $digit == 6 || $digit == 7 || $digit == 8){
		echo "<Say>Invalid number. Please try again.</Say>";
		
		echo "<Gather action='gather_playback.php?r1="; echo $r0; echo "' method='GET'>
    			<Say>Please enter another number or press 9 to try a random question. </Say>
  				</Gather>";    
}
    if($nine == TRUE){
		echo "<Say>"; echo $say; echo "</Say>
    <Record
        action='random_playback.php?r1="; echo $r0; echo "' method='GET' maxLength='100' finishOnKey='#'/> ";
	}
?> 
        
	
  
</Response>