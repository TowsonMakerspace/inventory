<?PHP
// Connect to MySQL
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

// Make my_db the current database
$db_selected = mysql_select_db('inventory', $link);

if (!$db_selected) {
  // If we couldn't, then it either doesn't exist, or we can't see it.
  $sql = 'CREATE DATABASE inventory';

  if (mysql_query($sql, $link)) {
      echo "Database inventory created successfully\n";
  } else {
      echo 'Error creating database: ' . mysql_error() . "\n";
  }
}


// this is intended to be a single page site
$config_file = 'settings.json';
if (!file_exists($config_file)){
 die("setup required");
}





mysql_close($link);

?>
