<?php

include("settings.php");

$dbh= mysql_connect ( $DB_HOST, $DB_USER, $DB_PASS )
      or die ('I cannot connect to the database because: ' . mysql_error());

mysql_select_db ( $DB_NAME );

//send the information
$now = time();
$user = $_POST["user"];
$msg = $_POST["msg"];
$colorname = $_POST["colorname"];
$colormsg = $_POST["colormsg"];

if($colorname == "")
  $colorname = "000000";
if($colormsg == "")
  $colormsg = "000000";

$query = "insert into ".$DB_NAME.".klochat(id, timestamp, user, msg, colorname, colormsg) values('', '$now', '$user', '".addslashes( $msg )."', '$colorname', '$colormsg')";
$result = mysql_query($query);


mysql_close($dbh);

header("Location: user_input.php?user=$user&colorname=$colorname&colormsg=$colormsg");

?>  
