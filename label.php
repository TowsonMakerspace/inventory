<?PHP
include('header.php');
// this file will be for 4" x 5" labels ( fedex )
$id = $_GET['id'];
$r = mysqli_query($database, "select * from HARDWARE where ID = '$id' ");
$hardware=mysqli_fetch_array($r,MYSQLI_ASSOC);
?>
<center>
  <div><img src='http://www.towsonmaker.space/wp-content/uploads/2017/08/Towson.png'></div>
  <h1>$hardware[NAME]</h1>
  <h3>$hardware[DESCRIPTION]</h3>
  <div><img src='barcode.php?barcode=TMS-RENTAL-$hardware[ID]'></div>
</center>
