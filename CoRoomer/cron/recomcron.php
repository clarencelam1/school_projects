<?php

mysql_connect ("localhost","coroom5_mike","76891111") or die(mysql_error());
mysql_select_db ("coroom5_laregencia") or die(mysql_error());

$time = time();

mysql_query ("DELETE FROM roommates WHERE exp < $time ");



?>