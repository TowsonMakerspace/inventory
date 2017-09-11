<?PHP
include_once('header.php');
$r = mysqli_query($database, "select * from USERS order by ID");
?>
<table>
 <?PHP 
 while($users=mysqli_fetch_array($r,MYSQLI_ASSOC)){
  echo "<tr><td>$users[NAME]</td><td>$users[EMAIL]</td><td>$users[PERMISSION_LEVEL]</td></tr>";
 }
 ?>
</table>
