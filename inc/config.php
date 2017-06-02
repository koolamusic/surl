<?php
$host="localhost"; // Host name - localhost or view in hosting cpanel what they give you
$username="root"; // Mysql username
$password="MYPASSWORD123"; // Mysql password
$db_name="addm"; // DataBase name

//define ("SITE_URL","http://add.url.ph"); 
define ("SITE_URL","http://localhost/add"); // your website name here 
define ("IP",$_SERVER['REMOTE_ADDR']); 
define ("LANG","en");
define ("SITENAME","Ponzi Database");  // your logo is here
define ("SLOGAN","TRACK EVERY PONZI"); 

// Connect to server and select database
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
?>
