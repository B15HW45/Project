<?php
// for database connection
$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "Project";
//creating a connection
$conn = mysqli_connect($host,$db_user,$db_pass,$db_name);
//checking the connection
if (!$conn) {
    echo "Connection failed:" . mysqli_connect_error();
}
?>