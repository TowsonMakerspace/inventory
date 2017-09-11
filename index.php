<?PHP
$database = mysqli_connect("localhost","root","","inventory");
// this is intended to be a single page site
$config_file = 'settings.json';
if (!file_exists($config_file)){
 die("setup required");
}






?>
