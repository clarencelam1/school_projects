<?
mysql_connect ("localhost","coroom5_mike","76891111");
mysql_select_db("coroom5_laregencia");

$time = time();

mysql_query ("DELETE FROM flyer WHERE exp < '$time'"); 

?>
