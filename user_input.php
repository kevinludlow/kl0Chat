<?php

//get the user name (if available)
$user = $_GET['user'];
$colorname = $_GET['colorname'];
$colormsg = $_GET['colormsg'];

//pick the appropriate colors
switch( $colorname )
{
  case 'd8182d':
    $cn_b = "checked";
    break;
  case 'eb6f17':
    $cn_c = "checked";
    break;
  case 'd6d016':
    $cn_d = "checked";
    break;
  case '0b710d':
    $cn_e = "checked";
    break;
  case 'c313a6':
    $cn_f = "checked";
    break;
  default:
    $cn_a = "checked";
    break;
}    

switch( $colormsg )
{
  case 'd8182d':
    $cm_b = "checked";
    break;
  case 'eb6f17':
    $cm_c = "checked";
    break;
  case 'd6d016':
    $cm_d = "checked";
    break;
  case '0b710d':
    $cm_e = "checked";
    break;
  case 'c313a6':
    $cm_f = "checked";
    break;
  default:
    $cm_a = "checked";
    break;
}

echo "<form action=\"send.php\" method=\"POST\">
      <table width=\"100%\" bgcolor=\"#f1f3f5\" cellspading=\"0\" style=\"border: 1px solid #c0c0c0\">
      <tr>
        <td width=\"40%\">
	  <table>
	  <tr><td>Your Name:</td><td><input type=\"text\" size=\"40\" name=\"user\" value=\"$user\"><input type=\"submit\" value=\"Send\"></td></tr>
	  <tr><td valign=\"top\">Your Message:</td><td><textarea name=\"msg\" rows=\"10\" cols=\"40\"></textarea></td></tr>
	  <tr><td></td><td><input type=\"submit\" value=\"Send Message\"></td></tr>
	  </table>
	</td> 
	<td valign=\"top\">
	  <table>
	  <tr>
	    <td>Color of Your Name:</td>
	    <td><input type=\"radio\" name=\"colorname\" value=\"000000\" \"$cn_a\"><img border=\"1\" src=\"images/color_black.jpg\"></td>
	    <td><input type=\"radio\" name=\"colorname\" value=\"d8182d\" \"$cn_b\"><img border=\"1\" src=\"images/color_red.jpg\"></td>
	    <td><input type=\"radio\" name=\"colorname\" value=\"eb6f17\" \"$cn_c\"><img border=\"1\" src=\"images/color_orange.jpg\"></td>
	    <td><input type=\"radio\" name=\"colorname\" value=\"d6d016\" \"$cn_d\"><img border=\"1\" src=\"images/color_yellow.jpg\"></td>
	    <td><input type=\"radio\" name=\"colorname\" value=\"0b710d\" \"$cn_e\"><img border=\"1\" src=\"images/color_green.jpg\"></td>
	    <td><input type=\"radio\" name=\"colorname\" value=\"c313a6\" \"$cn_f\"><img border=\"1\" src=\"images/color_purple.jpg\"></td>
	  </tr>
	  <tr>
	    <td>Color of Your Message:</td>
            <td><input type=\"radio\" name=\"colormsg\" value=\"000000\" \"$cm_a\"><img border=\"1\" src=\"images/color_black.jpg\"></td>
            <td><input type=\"radio\" name=\"colormsg\" value=\"d8182d\" \"$cm_b\"><img border=\"1\" src=\"images/color_red.jpg\"></td>
            <td><input type=\"radio\" name=\"colormsg\" value=\"eb6f17\" \"$cm_c\"><img border=\"1\" src=\"images/color_orange.jpg\"></td>
            <td><input type=\"radio\" name=\"colormsg\" value=\"d6d016\" \"$cm_d\"><img border=\"1\" src=\"images/color_yellow.jpg\"></td>
            <td><input type=\"radio\" name=\"colormsg\" value=\"0b710d\" \"$cm_e\"><img border=\"1\" src=\"images/color_green.jpg\"></td>
            <td><input type=\"radio\" name=\"colormsg\" value=\"c313a6\" \"$cm_f\"><img border=\"1\" src=\"images/color_purple.jpg\"></td>
	  </tr>  
	  </table>
	</td>
      </tr>
      </table>
      </form>";

echo "</body>
      </html>";
	

mysql_close($dbh);

?>
