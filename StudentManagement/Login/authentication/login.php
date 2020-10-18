<?php
include_once'../config/db_conn.php'
?>
<?php
if(isset ($_POST['login'])){

    $username =$_POST['username'];
    $password =$_POST['password'];

  if(empty($username) || empty($password)) {
  	header("Location:../loginform.php?error=Fields_are_empty");
  	exit();
  }
  else{
  	$query = "SELECT * FROM students WHERE username = '?' ";
  	$stmt = mysqli_stmt_init($conn);

  	if(!mysqli_stmt_prepare($stmt, $query)) {
  		header("Location:../loginform.php?error=prepared_statement");
  		exit();
  	}
  	else
  	{
  		mysqli_stmt_bind_param($stmt, 's', $username);
  		mysqli_stmt_execute($stmt);
  		$result = mysqli_stmt_get_result($stmt);
  		$row = mysqli_fetch_assoc($result);
  		if($row){

  			$verifypassword = password_verify($password, $row['password']);
  			if ($verifypassword == false) {
  				header("Location:../loginform.php?error=password_is_not_correct");
  				exit();
  			}
  			else{
  				session_start();
  				$_SESSION['username'] = $row['username'];
  				header("../Location:../index.php?message=User_Loggedin_susccessfully");
  				exit();
  			}
  		}
  	}
  }
}
else
{
	header("Location: ../loginform.php?error=Login_False");
}
?>
