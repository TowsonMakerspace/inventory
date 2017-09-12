<?PHP
include_once('header.php');
/*
$query = "CREATE TABLE HARDWARE (
ID int(11) AUTO_INCREMENT,
NAME varchar(255) NOT NULL,
DESCRIPTION text,
PERMISSION_LEVEL int,
APPLICATION_COMPLETED int,
APPLICATION_IN_PROGRESS int,
PRIMARY KEY  (ID)
)";
*/
if(isset($_POST['NAME']) && isset($_POST['DESCRIPTION'])){
  mysqli_query($database, "insert into HARDWARE (NAME,DESCRIPTION) values ('$_POST[NAME]','$_POST[DESCRIPTION]')");
}
$r = mysqli_query($database, "select * from HARDWARE order by NAME");
?>

<form method="post">
  <table border="1" cellpadding="0" cellspacing="0" width="100%"><tr>
    <td align="right">Equipment</td>
    <td><input name="NAME"></td>
    <td align="right">Description</td>
    <td><textarea name="DESCRIPTION"></textarea></td>
    <td><input type="submit"></td>
    </tr></table>

<table border="1" cellpadding="0" cellspacing="0" width="100%">
 <?PHP 
 while($hardware=mysqli_fetch_array($r,MYSQLI_ASSOC)){
  echo "<tr><td>$hardware[NAME]</td><td>$hardware[DESCRIPTION]</td><td><img src='barcode.php?barcode=TMS-RENTAL-$hardware[ID]'></td></tr>";
 }
 ?>
</table>
