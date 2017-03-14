<?
mysql_connect ("localhost","coroom5_mike","76891111") or die(mysql_error());
mysql_select_db ("coroom5_laregencia") or die(mysql_error());


$id = mysql_real_escape_string ($_REQUEST['id']);

$query = mysql_query("SELECT * FROM flyer WHERE id= $id ");
$row = mysql_fetch_array($query);
$content = $row['image'];

header('Content-type: image/jpg');
echo $content;

?>














