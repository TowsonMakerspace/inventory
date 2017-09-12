<?PHP
include_once('header.php');
// public list of who has what checked out
$r = mysqli_query($database, "select * from CHECKOUT order by ID");
?>
<table width="100%" border="1" cellpadding="0" cellspacing="0">
 <?PHP 
 while($checkout=mysqli_fetch_array($r,MYSQLI_ASSOC)){
  echo "<tr><td>$checkout[hardware_id]</td><td>$checkout[users_id]</td><td>$checkout[date_out]</td><td>$checkout[date_back]</td></tr>";
 }
 ?>
</table>
