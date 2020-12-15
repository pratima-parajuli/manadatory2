<?php
require_once "dbh_inc.php";

if (isset ($_POST["submit"])){
$name = $_POST["name"];

if(!isset($name)== '') {
        echo "You did not fill out the required fields.";
        exit();
    }
   
$sql = "INSERT INTO `artist` VALUES (NULL, '$name')";
}

 else if ($conn-> query($sql)== true){
    echo "Artist added sucess";
    exit();
}
else {
    echo "problem in adding artist";
}
$conn -> close();

   
    // if (emptyInputSignup($firstname,  $lastname , $password, $company,$address, $city, $state,$country,
    // $postalcode,$phonenumber, $fax,$email)!== false){
    //     header ("location:../customer.php?error = emptyinput");
    //     exit();
    // }

//     // echo "$sql";
// }

// if ($conn-> query($sql)== true){
//     echo "signup sucess";

// }
// else {
//     echo "problem in signup :$sql <br> $conn->error";
// }
// $conn -> close();


