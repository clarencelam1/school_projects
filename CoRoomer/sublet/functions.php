<?php
/*Sublet Page Functions*/
//getting  URL
$currAdd = $_SERVER["REQUEST_URI"];
$currAdd = substr($currAdd,0,-8);
//if our page variable in our url gets to be two digits, we have to chop off another character at the end of our URL.
if($_GET['p']>9)
	$currAdd = substr($currAdd,0,-1);

/*print out a message to the user if there are no postings for this apartment*/
function echoNoPostings($posted){
	if(!$posted)
		echo "Sorry, there are no available postings at this time. Please check again later.";
}

/*echo out the page navi links at the bottom of the page*/
function echoPageNavi(){
	
	global $currAdd;
	if("/sublet/"==$currAdd){
		$numPages = getNumPages();
		
	global $sort, $page;
	if($page != 0){
		$prev = $page - 1;
		echo  "<a href=\"http://www.coroomer.com/sublet/?s=$sort&p=$prev\">Prev</a> ";
	}
	
	$z = 0;
	while($z<$numPages){
		$x = $z + 1;
		if($page==$z)
		echo  "<a href=\"http://www.coroomer.com/sublet/?s=$sort&p=$z\"><b>$x</b></a> ";
		
		else
		echo  "<a href=\"http://www.coroomer.com/sublet/?s=$sort&p=$z\">$x</a> ";
		$z++;
	}
	if($page != $z-1){
		$next = $page + 1;
		echo "<a href=\"http://www.coroomer.com/sublet/?s=$sort&p=$next\">Next</a>";
	}
  }
}
/*This function generates html that lists postings the sublet page*/
function echoPostingsSublet($id,$apt,$name,$subject,$price,$email,$expire,$comments,$utube,$imgid,$img1,$img2,$img3,$img4,$img5,$img6){
	
$destination = "<a href='http://www.coroomer.com/apartments?sch=00&loc=";
$destination = $destination.$apt;
$destination = $destination."'>";
$destination = $destination.$name;
$destination = $destination."</a>";
	if($name=="Other")
		$destination = $name;
		
	echo "<font size='4px' color='#333333'>
	<table>
	<tr>
		<td>
			<b>$$price sublet at <i>$destination</i></b></font>
		</td>
	</tr>
	<tr>
		<td>";	
		if($imgid > 0)
		{
			for ($i=1; $i<=$imgid; $i++)
			{		
echo '<a href="get.php?id='.$id.'&col='.$i.'" rel="lytebox['.$id.']" ><img src="get.php?id='.$id.'&col='.$i.' "  class="hover"  width="25" height="25" /></a>';				
			}
		}
		$strmatch = strpos("$utube","www");
	    $strmatch2 = substr("$utube",$utubestr,28);
		
			if ($strmatch2 == "http://www.youtube.com/embed")
			{		
				echo "<a href='$utube' rel='lyteframe[$id]' ><img src='utube.png' class='hover'  width='48' height='38' /></iframe></a>";	
			}
		
	echo"
		</td>
	<tr>
		<td>
		<font size='3px'>
		<b>$subject</b><br>
		<font color='#17778F'>$email</font>
		</td>
		<td></td>
	</tr>
	<table bgcolor='#666666' cellspacing='1px'>
	<tr bgcolor='white'>		
		<td>
		<u>Comments</u>: $comments<br>
		</td>
	</tr>
	</table>
		<i>Post expires on $expire</i>
		<br><br>
		</font></table>";
}
/*This function generates html that lists the options for sorting the sublet postings*/
function echoSortButtons(){
	$z=0;
	
	global $addressArray,$sort,$currAdd; //This line of code declares global variables so that they are within the scope of the function
	while($z<sizeof($addressArray)){		
		if($addressArray[$z]==$currAdd){	//we need the to check the where to link to
		
			//for underlining
			echo "<div class=\"underlineSublet\">";
			
			if($sort==1){																		
				echoSortDownArrow();
				echo "<a href=\"http://www.coroomer.com/apartments$addressArray[$z]?s=0&p=0#bl\">Oldest</a>|";
			}
			else{
				echoSortUpArrow();
				echo "<a href=\"http://www.coroomer.com/apartments$addressArray[$z]?s=1&p=0#bl\">Newest</a>|";
			}
			if($sort==2){
				echoSortDownArrow();
				echo "<a href=\"http://www.coroomer.com/apartments$addressArray[$z]?s=3&p=0#bl\">Highest Price</a>";
			}
			else{
				echoSortUpArrow();
				echo "<a href=\"http://www.coroomer.com/apartments$addressArray[$z]?s=2&p=0#bl\">Lowest Price</a>";
			}
				echo "</div>";
			//This is commented out because we do not want to sort by apartment	  
			/*	  if(preg_match("/4/",))
				  echo "^ <a href=\"http://www.coroomer.com/apartments$currAddddressArray[$z]?s=5\">Apartment</a><br>";

				  else
				  echo "V <a href=\"http://www.coroomer.com/apartments$currAddddressArray[$z]?s=4\">Apartment</a><br>";
			 */	  			 		
			echo "<br><br>";  
			}
		$z++;
	}
	//The sublet page has to be handed differently
	if("/sublet/"==$currAdd){	
		if($sort==1){
			echoSortDownArrow();
			echo "<a href=\"http://www.coroomer.com/sublet/?s=0&p=0\">Oldest</a>|";			
		}
		else{
			echoSortUpArrow();
			echo "<a href=\"http://www.coroomer.com/sublet/?s=1&p=0\">Newest</a>|";
		}
		if($sort==2){
			echoSortDownArrow();
			echo "<a href=\"http://www.coroomer.com/sublet/?s=3&p=0\">Highest Price</a>";
		}
		else{
			echoSortUpArrow();
			echo "<a href=\"http://www.coroomer.com/sublet/?s=2&p=0\">Lowest Price</a>";
		}
		echo "<br><br>";
	}
}

function echoSortUpArrow(){
	echo "<img src=\"../../images/sort/uparrow.gif\" alt=\"up\" height=\"12\" width=\"10\"/>";
}
function echoSortDownArrow(){
	echo "<img src=\"../../images/sort/downarrow.gif\" alt=\"down\" height=\"12\" width=\"10\"/>";
}

/*This function the number of pages we need */
function getNumPages(){
	global $itemsPerPage;
	$extract1 = mysql_query("SELECT * FROM sublet ORDER BY id DESC");
	$numrows = mysql_num_rows($extract1);	

	$numPages = 0;

	while(($numrows-=$itemsPerPage)>0)
		$numPages++;
	
	return $numPages+1;
}

/*This function gets our postings from our database*/
function echoSublets(){

	global $sort;
	global $addressArray,$page,$itemsPerPage,$currAdd; //This line of code declares global variables so that they are within the scope of the function


	switch($sort){
	case 0:
		$extract = mysql_query("SELECT * FROM sublet ORDER BY id DESC");
		break;
	case 1:
		$extract = mysql_query("SELECT * FROM sublet ORDER BY id ASC");
		break;
	case 2:
		$extract = mysql_query("SELECT * FROM sublet ORDER BY price DESC");
		break;
	case 3:
		$extract = mysql_query("SELECT * FROM sublet ORDER BY price ASC");
		break;
	}
				
	$numrows = mysql_num_rows($extract);
	
	//getting the number of pages we need and initializing variables
	$numPages = getNumPages();
	$posted = false;
	$timesPosted = 0;
	
	$z=0;
	while($row = mysql_fetch_assoc($extract)){
		//grabbing data from our table
		$apt 		=	$row['apt'];
		$id 		=	$row['id'];
		$subject 	= 	$row['subject'];
		$price 		=	$row['price'];
		$email 		=	$row['email'];
		$duration	=	$row['duration'];
		$expire 	=	$row['expire'];
		$comments	=	$row['comments'];

		$utube      =   $row['utube'];
		$imgid	    =	$row['imgid'];
		$img1	    =	$row['img1'];
		$img2	    =	$row['img2'];
		$img3	    =	$row['img3'];
		$img4	    =	$row['img4'];
		$img5	    =	$row['img5'];
		$img6	    =	$row['img6'];
	
	$extractname = mysql_query("SELECT * FROM info WHERE apt = '$apt'");			
	$numname = mysql_num_rows($extractname);
	
	while($row = mysql_fetch_assoc($extractname)){
		$name 		=	$row['name'];
	}

		//deleting expired postings
		if($expire == date('F d Y'))
			$delete = mysql_query("DELETE FROM sublet WHERE id = '$id'");

		//echo all sublet postings
		if("/sublet/"==$currAdd&&($page*$itemsPerPage<=$timesPosted)&&($timesPosted<($page+1)*$itemsPerPage)){	
			
			echoPostingsSublet($id,$apt,$name,$subject,$price,$email,$expire,$comments,$utube,$imgid,$img1,$img2,$img3,$img4,$img5,$img6);	
			$posted = true;		
		}	
		$timesPosted++;
		$z++;
	}	
	//echo out an error message if there are no postings for the apartment
	echoNoPostings($posted);
}

/*This functions returns the full URL of our current page*/
/*function curPageURL() {
	$pageURL = 'http';
	// if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}
*/

?>

