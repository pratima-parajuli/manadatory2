<?php 
session_start();
require_once "dbh_inc.php";

            
 if (isset($_POST['login'])) {
      $password = $_POST["password"];
       $pwd=password_hash($password,PASSWORD_DEFAULT);
       $verifypassword1 = password_verify('admin',$pwd);
       if ($verifypassword1==true)
       $sql = "SELECT * FROM admin"; 
       $result = mysqli_query($conn, $sql);

       $count = mysqli_num_rows($result);
      
       if($count == 1) {
        //redirect to home page
        // echo "logged in";
        header ("location:admin.php");
        $_SESSION['passsword'] = $password;
        } else {
        $message = "Invalid Username or Password Please Try Again";
    }
   
    }
 ?>
 <!-- $loggedInEmail = $_SESSION["username"]; -->
 