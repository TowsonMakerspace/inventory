<?PHP
if(empty($SECURITY)){ die('No direct file access'); }
global $database;
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
                          NAME varchar(255) NOT NULL,
                          PASSWORD varchar(255) NOT NULL,
                          PERMISSION_LEVEL int,
                          APPLICATION_COMPLETED int,
                          APPLICATION_IN_PROGRESS int,
                          PRIMARY KEY  (ID)
                          )";
                $result = mysqli_query($database, $query);
                mysqli_query($database, "insert into USERS (NAME,EMAIL,PASSWORD,PERMISSION_LEVEL) values ('admin','admin@localhost','password','99') ");
}
$query = "SELECT ID FROM HARDWARE";
$result = mysqli_query($database, $query);
if(empty($result)) {
         echo "creating table";
                $query = "CREATE TABLE HARDWARE (
                          ID int(11) AUTO_INCREMENT,
                          NAME varchar(255) NOT NULL,
                          DESCRIPTION text,
                          PERMISSION_LEVEL int,
                          APPLICATION_COMPLETED int,
                          APPLICATION_IN_PROGRESS int,
                          PRIMARY KEY  (ID)
                          )";
                $result = mysqli_query($database, $query);
}
$query = "SELECT ID FROM CHECKOUT";
$result = mysqli_query($database, $query);
if(empty($result)) {
         echo "creating table";
                $query = "CREATE TABLE CHECKOUT (
                          ID int(11) AUTO_INCREMENT,
                          hardware_id int,
                          users_id int,
                          date_out datetime,
                          date_back datetime,
                          PRIMARY KEY  (ID)
                          )";
                $result = mysqli_query($database, $query);
}
?>
