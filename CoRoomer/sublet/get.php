<?php

require('connect.php');

$query = mysql_query("SELECT * FROM sublet WHERE id = ".mysql_real_escape_string($_GET['id']));
$row = mysql_fetch_array($query);

$col = intval($_GET['col']);

if(isset($row['img'.$col]) && $row['img'.$col] != NULL)
{
    $content = $row['img'.$col];
}
else
{
    exit; // col is not existent, or image is empty
}

header('Content-type: image/jpg');
echo $content;
exit;




?>