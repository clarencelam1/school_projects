<?php

mysql_connect ("localhost","coroom5_mike","76891111") or die(mysql_error());
mysql_select_db ("coroom5_ads") or die(mysql_error());

$time = time();

mysql_query ("DELETE FROM consumer WHERE exp < $time ");

mysql_query ("DELETE FROM coupon WHERE exp < $time ");

mysql_query ("UPDATE apartment SET login = 0 WHERE login >= 10 "); 


?>