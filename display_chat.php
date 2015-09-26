<?php

include("settings.php");

$dbh= mysql_connect ( $DB_HOST, $DB_USER, $DB_PASS )
      or die ('I cannot connect to the database because: ' . mysql_error());

mysql_select_db ( $DB_NAME );

//first find how many exist
$query = "select count(id) from ".$DB_NAME.".klochat";
$result = mysql_query($query);
$row = mysql_fetch_row($result);
$ctr = $row[0];

//set the counter
$start = $ctr - $DISPLAY;

$query = "select * from ".$DB_NAME.".klochat order by id limit $start, $DISPLAY";
$result = mysql_query($query);
$numrows = mysql_num_rows($result);

echo "<html>

        <head>
	  <META HTTP-EQUIV=Refresh CONTENT=\"3; URL=display_chat.php\">
	</head>
	
      <body>";

echo "<table style=\"padding-bottom: 20px; padding-top: 20px\">
      <tr><td colspan=\"2\"><font style=\"font-size: 14px\"><u>Conversation Below:</u></font></td></tr>";

      for($i = 0; $i < $numrows; $i++)
      {
        $row = mysql_fetch_array($result);

	//get the colors
	$cn = $row['colorname'];
	$cm = $row['colormsg'];

	if($cn == "")
	  $cn = "000000";
	if($cm == "")
	  $cm = "000000";

	//create the timestamp
	$time = $row['timestamp'];
	$time = strftime("%D %T", ($time + 7200));
	$time = "<font style=\"color: #666666; font-size: 8px\"> (received: $time)</font>";
	  
	echo "<tr>
	        <td valign=\"top\" style=\"border-right: 1px solid #c0c0c0; padding-right: 10px\" width=\"10%\" align=\"right\">
		  <font style=\"font-size: 12px; color: #$cn\">".$row['user']."</font>
		</td>
		<td>
		  <font style=\"font-size: 12px; color: #$cm\">".$row['msg']."</font>$time
		</td>
	      </tr>";
      }
      
echo "</table>";

echo "</body>
      </html>";
	

mysql_close($dbh);

?>
