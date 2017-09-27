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
?>
