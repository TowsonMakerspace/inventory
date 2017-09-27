<?PHP
include('header_minimum.php');
// this file will be for 4" x 5" labels ( fedex )
$id = $_GET['id'];
$r = mysqli_query($database, "select * from HARDWARE where ID = '$id' ");
$hardware=mysqli_fetch_array($r,MYSQLI_ASSOC);
$sponsor = '';
if ($hardware['SPONSOR'] != ''){
  $sponsor = $hardware['SPONSOR']; 
}
?>
<center>
  <div class='title'>TOWSON</div>
  <div class='title'>MAKERSPACE</div>
  <div class='part'>Part: <?PHP echo $hardware['NAME']; ?></div>
  <div class='description'>Description: <?PHP echo $hardware['DESCRIPTION']; ?></div>
  <div><img src='barcode.php?barcode=TMS-RENTAL-<?PHP echo $hardware['ID']; ?>'></div>
  <div class='sponsor'>Sponsor: <?PHP echo $sponsor; ?></div>
</center>
<style>
  body{ margin:0px; padding:0px; }  
  .title { font-size:30px; }
  .part { font-size:20px; }
  .description { font-size:15px; }
  .sponsor { font-size:20px; border:5px black ridge; font-variant:small_caps; padding:5px; margin:5px; }
</style>
