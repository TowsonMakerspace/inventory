<?PHP
include_once('header.php');
// public list of who has what checked out
$r = mysqli_query($database, "select * from CHECKOUT order by ID");
?>
<table width="100%" border="1" cellpadding="0" cellspacing="0">
 <tr>
  <td>Hardware</td>
  <td>Member</td>
  <td style='background-color:orange;'>Checked Out</td>
  <td style='background-color:lightgreen;'>Checked In</td>
 </tr>
  
 <?PHP 
 while($checkout=mysqli_fetch_array($r,MYSQLI_ASSOC)){
  echo "<tr><td>".hardware($checkout['hardware_id'])."</td><td>".members($checkout['users_id'])."</td><td style='background-color:orange;'>$checkout[date_out]</td><td style='background-color:lightgreen;'>$checkout[date_back]</td></tr>";
 }
 ?>
</table>
