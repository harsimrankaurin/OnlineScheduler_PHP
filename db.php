<?php
$conn = mysql_connect('localhost','root',''); //server name, user_name, password
$database = mysql_select_db('os');				

if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
?>
