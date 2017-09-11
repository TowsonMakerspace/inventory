<?PHP
// Connect to MySQL
$link = mysql_connect('localhost', 'root', '');
$q = "CREATE DATABASE IF NOT EXISTS inventory";


// this is intended to be a single page site
$config_file = 'settings.json';
if (!file_exists($config_file)){
 die("setup required");
}







?>
