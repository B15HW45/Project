<?php
// for database connection
$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "student";
//creating a connection
$conn = mysqli_connect($host,$db_user,$db_pass,$db_name);
//checking the connection
if (!$conn) {
	echo "Connection failed:" . mysqli_connect_error();
}
?>
<?php
// for database connection
$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "student";
//creating a connection
$connect = mysqli_connect($host,$db_user,$db_pass,$db_name);
//checking the connection
if (!$connect) {
	echo "Connection failed:" . mysqli_connect_error();
}
?>