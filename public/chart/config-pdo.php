<?Php
$host_name = "localhost";
$database = "id19337666_db"; // Change your database name
$username = "id19337666_mydb";          // Your database user id 
$password = "#Client00998";           // Your password

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "<br>Error!: " . $e->getMessage() . "<br/>";
echo "<br><br><font color=red>
Check MySQL login details inside <b>config.php</b> file</font>";
die();
}
?>
