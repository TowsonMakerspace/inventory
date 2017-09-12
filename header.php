<?PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);
$SECURITY="has a simple value";
// contents of settings.php
// <?PHP
// $database_password="your db password";
$config_file = 'settings.php';
if (!file_exists($config_file)){
 die("setup required");
}
include_once('settings.php');
include_once('database.php');
include_once('functions.php');
if (isset($_POST['email']) && isset($_POST['password'])){
 $e = $_POST['email'];
 $p = $_POST['password'];
 $r = mysqli_query($database, "select * from USERS where EMAIL = '$e' and PASSWORD = '$p'");
 $d = mysqli_fetch_array($r,MYSQLI_ASSOC);
 if($d['ID']){
  //echo "$_POST[email] $_POST[password]";
  setcookie("email", $e);
  setcookie("name", $d['NAME']);
  setcookie("id", $d['ID']);
  header('Location: /inventory/');
 }else{
   echo "<li>Login Failed</li>";
 }
}
if (empty($_COOKIE['name'])){
 echo "<form method='post'>e:<input name='email'>p:<input name='password'><input type='submit'></form>";
 die();
}
// menu
include_once('menu.php');
?>
