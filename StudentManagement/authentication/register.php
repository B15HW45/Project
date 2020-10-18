<?php

include_once '../Config/db_conn.php';

if(isset ($_POST['register'])){

    $username =$_POST['username'];
    $email = $_POST['email'];
    $password =$_POST['password'];
    $passwordrep=$_POST['re-password'];

    if(empty($username) || empty($email) || empty($password) || empty($passwordrep) ){
        header ("Location:../registrationform.php?error=your_fields_are_empty");
        exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location:registrationform.php?error=mail_error");
        exit();
    }
    elseif(preg_match("/^[a-zA-Z0-9]*$/,$username"))
    {
        header("Location:../registrationform.php?error=username_error");
        exit();
    }

    elseif($password !== $passwordrep){
        header("Location:../registrationform.php?error=password_didnot_match");
    }
    // prepared statement to check the database for already regiesterd username
    else{
        $query = "SELECT username FROM students WHERE username =?;";
        $stmt= mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $query)){
                header("Location:../registrationform.php?error=query");
                exit();
            }

            else {
                //use s for string

                // mysqli_bind_param($stmt,"s",$username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result ($stmt);


                $resultCheck = mysqli_stmt_num_rows($stmt);
                if($resultCheck > 0)
                {
                    //username is already registrationed
                    header("Location:../registrationform.php?error=username_already_exists");
                    exit();
                }
                else{

                    $query="INSERT INTO students (username,email,password) VALUES (?,?,?);";
                    $stmt=mysqli_stmt_init($conn);

                    if(!mysqli_stmt_prepare($stmt,$query))
                    {
                        header("Location:../registrationform.php?error=query");
                        exit();
                    }

                    else
                    {
                        $encpassword= password_hash($password,PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt,"sss",$username,$email,$encpassword);
                        mysqli_stmt_execute($stmt);
                        header("Location:../Login/loginform.php?message=RegistrationSuccess_Please_Login");
                        exit();
                	}

           		}

       		}
   		}
	}

 else {
        header("Location:registrationform.php?error=please_submit_this_form_first");
    	}
?>