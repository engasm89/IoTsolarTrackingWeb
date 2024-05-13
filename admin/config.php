<?Php
$host_name = "sdb-58.hosting.stackcp.net";
$database = "Solar_db-35303137225a"; // Change your database name
$username = "solar_admin";          // Your database user id 
$password = "#Client00998";          // Your password

//error_reporting(0);// With this no error reporting will be there
//////// Do not Edit below /////////

$connection = mysqli_connect($host_name, $username, $password, $database);

if (!$connection) {
    echo "Error: Unable to connect to MySQL.<br>";
    echo "<br>Debugging errno: " . mysqli_connect_errno();
    echo "<br>Debugging error: " . mysqli_connect_error();
    exit;
}
?>
