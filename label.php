<?PHP
include('header_minimum.php');
// this file will be for 4" x 5" labels ( fedex )
$id = $_GET['id'];
$r = mysqli_query($database, "select * from HARDWARE where ID = '$id' ");
$hardware=mysqli_fetch_array($r,MYSQLI_ASSOC);
?>
<center>
  <div class='title'>TOWSON</div>
  <div class='title'>MAKERSPACE</div>
  <div class='part'><?PHP echo $hardware['NAME']; ?></div>
  <div class='description'><?PHP echo $hardware['DESCRIPTION']; ?></div>
  <div><img src='barcode.php?barcode=TMS-RENTAL-<?PHP echo $hardware['ID']; ?>'></div>
</center>
<style>
  body{ margin:0px; padding:0px; }  
  .title { font-size:30px; }
  .part { font-size:20px; }
  .description { font-size:15px; }
</style>
