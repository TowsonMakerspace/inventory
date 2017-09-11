<?PHP
// contents of settings.php
// <?PHP
// $database_password="your db password";
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
                          EMAIL varchar(255) NOT NULL,
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

if (isset($_POST['email']) && isset($_POST['password'])){
 echo "$_POST[email] $_POST[password]";
 setcookie("email", "admin@localhost");
 setcookie("name", "admin");
 setcookie("id", "1");
 header('Location: /inventory/');
}
if (empty($_COOKIE['name'])){
 echo "<form method='post'>e:<input name='email'>p:<input name='password'><input type='submit'></form>";
}


// public list of who has what checked out
echo "[checkout list]";

// public list of available hardware
echo "[available list]";




?>
