<?php 
@require_once "session.php";
@require_once "dbh_inc.php";
// @require_once "function_inc.php";
echo '<pre>';
if(isset ($_POST["submit"])){
    $username = $_POST["email"];
    $password = $_POST["password"];
    // $pwd=password_hash($password,PASSWORD_DEFAULT);
    // $verifypassword = password_verify($password, $pwd);

    $pwd=password_hash($password,PASSWORD_DEFAULT);
    $verifypassword1 = password_verify('customer',$pwd);
    // $verifypassword = password_verify($pwd, $password);

// $sql = "SELECT * FROM customer WHERE Email = '$username' and Password = '$password'";
$sql = "SELECT * FROM customer WHERE Email = '$username'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if($count == 1 && $verifypassword1 == 1) {
    // $message = 'logged in';
        //redirect to home page
    header ("location:../index.php");
    $_SESSION['username'] = $username;
    } else {
    $message = "Invalid Username or Password Please Try Again";
}
echo $message;
}


    //    $error .=   "<p>please enter the mandatory fields</p>";
    //      exit();
    // }
    // //  if (empty($error)){
    // //   if ($query = $conn->prepare ("select * from test where email= ?"))
    // //      {
    // //        $query -> bind_param ("s", $email);
    // //          $quer -> execute ();
    // //          $row = $query -> fetch ();
    // //          if ($row){
    // //              if (password_verify ($password, $row ["password"])){
    // //                  $_SESSION["userid"]= $row ["userid"];
    // //                  $_SESSION["user"]= $row ;
    // //                  echo "welcome";
    // //                  exit ();
    // //            }
    // //              else {
    // //                  echo "not sucess";
    // //              }
    // //        }
    // //   }
        
    //    $query -> close();
    //     }
    //  mysqli_close ($conn);
        

    // }
    