<?php

require('functions.php');
require('connect.php');

//get our current URL
$sort = $_GET['s'];	//getting sort option from our URL
$page = $_GET['p']; //getting page option from our URL
$itemsPerPage = 10; //setting the # of postings per page to 10

echo"<a name=\"bl\">";

//echo "<p class=\"button\"><a href=\"sublet/index.php\">Add New Posting</a></p> ";
echo "<br>";

//echo out sort buttons
echo "<b> Sort by </b>";
echo "<br>";
echoSortButtons();

//echo the sublets
echoSublets();

//print out the navi links for more posts
echoPageNavi();

?>