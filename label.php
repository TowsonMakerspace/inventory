<?PHP
include('header_minimum.php');
// this file will be for 4" x 5" labels ( fedex )
$id = $_GET['id'];
$r = mysqli_query($database, "select * from HARDWARE where ID = '$id' ");
$hardware=mysqli_fetch_array($r,MYSQLI_ASSOC);
?>
<center>
  <div><img height='275' width='275' src='http://www.towsonmaker.space/wp-content/uploads/2017/08/Towson.png'></div>
  <h1><?PHP echo $hardware['NAME']; ?></h1>
  <h3><?PHP echo $hardware['DESCRIPTION']; ?></h3>
  <div><img src='barcode.php?barcode=TMS-RENTAL-<?PHP echo $hardware['ID']; ?>'></div>
</center>
<style>
  body{ margin:0px; padding:0px; }  
</style>
