<?php

$host = "localhost";
$user = "database";
$pswd = "32KLkdpN";
$db = "database";

$connection = mysql_connect($host,$user,$pswd);
if(!$connection)
{
   exit(mysql_error());
}
if(!mysql_select_db($db,$connection))
{
   exit(mysql_error());
}
mysql_select_db($db,$connection);
?>
