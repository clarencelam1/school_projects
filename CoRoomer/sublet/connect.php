<?php
$connect = mysql_connect("localhost","coroom5_c9lam","Stupid12") or die("Error connecting to db1");
mysql_select_db("coroom5_laregencia") or die("Error connecting to db2");
$queryget = mysql_query("SELECT * FROM sublet ORDER BY id DESC") or die("Error with query");




//require('data.php');
//require('../../functions.php');
//$currAdd = curPageURLz();



/*$z=0;
$y=0;
while($z<sizeof($addressArray)){

		$x=$z+1;
		if($x==sizeof($addressArray))
		$x=$z-4;		
		if(preg_match($addressArray[$z],$currAdd)&&!preg_match($addressArray[$x],$currAdd)){	
		$y=$z;
		
		}
		$z++;
}
*/
//echo "hi";
//$queryget = mysql_query("SELECT * FROM people ORDER BY id DESC") or die("Error with query");
//echo "hi";

//$name = $addressArray[$y];
//$name = substr($name,1,strlen($name)-2);
//$name = substr($name,-1);
//echo $name;
?>