<?PHP
// Connect to MySQL
$config_file = 'settings.php';
if (!file_exists($config_file)){
 die("setup required");
}
include('settings.php');
$database = mysqli_connect('localhost', 'root', $database_password, 'inventory');

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$query = "SELECT ID FROM USERS";
$result = mysqli_query($database, $query);

if(empty($result)) {
         echo "creating table";
                $query = "CREATE TABLE USERS (
                          ID int(11) AUTO_INCREMENT,
                          EMAIL varchar(255) NOT NULL,
                          PASSWORD varchar(255) NOT NULL,
                          PERMISSION_LEVEL int,
                          APPLICATION_COMPLETED int,
                          APPLICATION_IN_PROGRESS int,
                          PRIMARY KEY  (ID)
                          )";
                $result = mysqli_query($database, $query);
}

// this is intended to be a single page site








?>
