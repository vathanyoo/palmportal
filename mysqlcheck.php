<?php
$link = mysql_connect('mysql-node122-env-5174948.paas.leapgio.cloud', 'root', 'FSOvsi05232');
//if connection is not successful you will see text error
if (!$link) {
       die('Could not connect: ' . mysql_error());
}
//if connection is successfuly you will see message bellow
echo 'Connected successfully';
 
mysql_close($link);
?>