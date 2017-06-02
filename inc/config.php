<?php
$host="localhost"; // Host name - localhost or view in hosting cpanel what they give you
$username="addurl-359f52"; // Mysql username
$password="84j5uJfxc6kG"; // Mysql password
$db_name="addurl-359f52"; // DataBase name

//define ("SITE_URL","http://add.url.ph"); 
define ("SITE_URL","http://rockradio.host/eco"); // your website name here 
define ("IP",$_SERVER['REMOTE_ADDR']); 
define ("LANG","en");
define ("SITENAME","Add Site Info");  // your logo is here
define ("SLOGAN","Submit All Sites"); 

// Connect to server and select database
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
?>
