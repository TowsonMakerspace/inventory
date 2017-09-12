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
 echo "$_POST[email] $_POST[password]";
 setcookie("email", "admin@localhost");
 setcookie("name", "admin");
 setcookie("id", "1");
 header('Location: /inventory/');
}
if (empty($_COOKIE['name'])){
 echo "<form method='post'>e:<input name='email'>p:<input name='password'><input type='submit'></form>";
 die();
}
// menu
include_once('menu.php');
?>
