<?php

mysql_connect("localhost","coroom5_mike","76891111");
mysql_select_db("coroom5_laregencia");


//get current address
$currAdd = $_POST['currAdd'];

//Check IP
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
	
	
//If Click Like
if ( $_POST['like']  )
{
	$ipquery = mysql_query ("SELECT * FROM rate WHERE ip = '$ip' AND apt = '$currAdd' ");
	$ipquery = mysql_fetch_assoc($ipquery);
	$ipquery = $ipquery['ip'];
	
	if ($ipquery == $ip){
		
	//communicate to Ajax	
	$fail = "fail";
	echo json_encode( array( $fail, $numlike ) );
	
	}
	else
	{
	$rankqry = mysql_query ("SELECT * FROM rank WHERE apt = '$currAdd' ");
	$rankqry = mysql_fetch_assoc($rankqry);
	$rankqry = $rankqry['rank'];

	$rankupdate = $rankqry + 1;

		if($rankupdate < 0)
		{
		$rankupdate = 0;
		}

	mysql_query ("UPDATE rank SET rank = '$rankupdate' WHERE apt = '$currAdd' ");
	$likesqry = mysql_query ("SELECT * FROM rank WHERE apt = '$currAdd' ");
	$likesqry = mysql_fetch_assoc($likesqry);
	$likesqry = $likesqry['likes'];
	
	$likesupdate = $likesqry +1;
	
mysql_query ("UPDATE rank SET likes = '$likesupdate' WHERE apt = '$currAdd' ");	
		
	mysql_query ("INSERT INTO rate VALUES ('','$currAdd', '1', '$ip')");			
	
// count Likes and dislikes
$like = mysql_query("SELECT * FROM rate WHERE likes = 1 AND apt = '$currAdd' ");
$numlike = 0;
while($row = mysql_fetch_assoc($like)){	
$numlike++;
}

$dislike = mysql_query("SELECT * FROM rate WHERE likes = 0 AND apt = '$currAdd'");
$numdislike = 0;
while($row = mysql_fetch_assoc($dislike)){	
	$numdislike++;
}


//count Total
$total = mysql_query("SELECT * FROM rate WHERE apt = '$currAdd'");
$numtotal = 0;
while($row = mysql_fetch_assoc($total)){
	$numtotal++; }

//calculate like bar width
$likewidth = ($numlike/($numtotal+1)) * 120;


	//communicate to Ajax
	$success = "success";
	echo json_encode( array( $success, $numlike, $likewidth ) ) ;

    
	
	}
}
//If Click Dislike
if ( $_POST['dislike']  )
{
	$ipquery = mysql_query ("SELECT * FROM rate WHERE ip = '$ip' AND apt = '$currAdd' ");
	$ipquery = mysql_fetch_assoc($ipquery);
    $ipquery = $ipquery['ip'];
	
	if ($ipquery == $ip)
	{
    
	//communicate to Ajax
	$fail = "fail";
	echo json_encode( array( $fail, $numdislike ) );
	
	}
	else
	{
		
	$rankqry = mysql_query ("SELECT * FROM rank WHERE apt = '$currAdd' ");
	$rankqry = mysql_fetch_assoc($rankqry);
	$rankqry = $rankqry['rank'];

	$rankupdate = $rankqry - 1;

	if($rankupdate < 0)
	{
	$rankupdate = 0;
	}

	mysql_query ("UPDATE rank SET rank = '$rankupdate' WHERE apt = '$currAdd' ");

	$dislikesqry = mysql_query ("SELECT * FROM rank WHERE apt = '$currAdd' ");
	$dislikesqry = mysql_fetch_assoc($dislikesqry);
	$dislikesqry = $dislikesqry['dislikes'];
	
	$dislikesupdate = $dislikesqry +1;
	
	mysql_query ("UPDATE rank SET dislikes = '$dislikesupdate' WHERE apt = '$currAdd' ");	
		
	mysql_query ("INSERT INTO rate VALUES ('','$currAdd', '0', '$ip')");	

//Count Likes and Dislikes
$dislike = mysql_query("SELECT * FROM rate WHERE likes = 0 AND apt = '$currAdd'");
$numdislike = 0;
while($row = mysql_fetch_assoc($dislike)){	
$numdislike++;
}

$like = mysql_query("SELECT * FROM rate WHERE likes = 1 AND apt = '$currAdd' ");
$numlike = 0;
while($row = mysql_fetch_assoc($like)){	
$numlike++;
}


//count Total
$total = mysql_query("SELECT * FROM rate WHERE apt = '$currAdd'");
$numtotal = 0;
while($row = mysql_fetch_assoc($total)){
	$numtotal++; }

//calculate dislike bar width
$dislikewidth = ($numdislike/($numtotal+1)) * 120;



	//communicate to Ajax
	$success = "success";
	echo json_encode( array( $success, $numdislike, $dislikewidth ) ) ;
	

	}
  }	

?>