<?PHP
include('header.php');
// this file will be for 4" x 5" labels ( fedex )
$id = $_GET['id'];
$r = mysqli_query($database, "select * from HARDWARE order by NAME");
 while($hardware=mysqli_fetch_array($r,MYSQLI_ASSOC)){
  echo "<h1>$hardware[NAME]</h1><h3>$hardware[DESCRIPTION]</h3><br /><img src='barcode.php?barcode=TMS-RENTAL-$hardware[ID]'></td></tr>";
 }
?>
