<?PHP
// Connect to MySQL
$database = mysqli_connect('localhost', 'root', '');

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


mysqli_query($database, "CREATE DATABASE IF NOT EXISTS inventory");

$query = "SELECT ID FROM USERS";
$result = mysqli_query($database, $query);

if(empty($result)) {
                $query = "CREATE TABLE USERS (
                          ID int(11) AUTO_INCREMENT,
                          EMAIL varchar(255) NOT NULL,
                          PASSWORD varchar(255) NOT NULL,
                          PERMISSION_LEVEL int,
                          APPLICATION_COMPLETED int,
                          APPLICATION_IN_PROGRESS int,
                          PRIMARY KEY  (ID)
                          )";
                $result = mysqli_query($dbConnection, $query);
}

// this is intended to be a single page site
$config_file = 'settings.json';
if (!file_exists($config_file)){
 die("setup required");
}







?>
