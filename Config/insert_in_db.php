<?php
include_once 'db_conn.php';
$id = $_POST['idd'];
$name = $_POST['namee'];
$phone = $_POST['phonee'];
$address = $_POST['addresss'];
$email = $_POST['emaill'];
$qualifications = $_POST['qualificationn'];
$experience = $_POST['experiencee'];
$about = $_POST['aboutt'];

$insertsql ="INSERT INTO `student`(`user`, `name`, `phone`, `address`, `email`, `qualifications`, `experience`, `about`) VALUES ('$id','$name','$phone','$address','$email','$qualifications','$experience','$about');";

mysqli_query($conn, $insertsql);
header("Location: ../blog_list.php");

?>


<?php
include_once 'db_conn.php';
$id = $_POST['iddd'];
$name = $_POST['nameed'];
$phone = $_POST['phoneed'];
$address = $_POST['addresssd'];
$email = $_POST['emailld'];
$qualifications = $_POST['qualificationnd'];
$experience = $_POST['experienceed'];
$about = $_POST['abouttd'];

$insertsqll ="INSERT INTO `teacher`(`user`, `name`, `phone`, `address`, `email`, `qualifications`, `experience`, `about`) VALUES ('$id','$name','$phone','$address','$email','$qualifications','$experience','$about');";

mysqli_query($connect, $insertsqll);
header("Location: ../blog_list.php");

?>