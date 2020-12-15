<?php

@require "dbh_inc.php";

if (isset ($_POST ["submit"])){
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $password = $_POST["password"];
    $company = $_POST["company"];
    $address = $_POST["address"];
    $city = $_POST ["city"];
    $state = $_POST["state"];
    $country = $_POST["country"];
    $postalcode = $_POST["postalcode"];
    $phonenumber = $_POST["phonenumber"];
    $fax = $_POST ["fax"];
    $email = $_POST ["email"];

  
    require "function_inc.php";

    if (emptyInputSignup($firstname,  $lastname , $password, $company,$address, $city, $state,$country,
    $postalcode,$phonenumber, $fax,$email)!== false){
        header ("location:../customer.php?error = emptyinput");
        exit();
    }
    // if (emailExists($conn, $email)!== false){
    //     header ("location:../customer.php?error = Email taken");
    //     exit();
    // }

    createUser($conn,$firstname,  $lastname , $password, $company,$address, $city, $state,$country,
    $postalcode,$phonenumber, $fax,$email);
}

    else{
        header ("location:../ customer.php");
        exit();
    }

    

    // $dob = $_POST ["dob"];
    // $sql = "INSERT INTO `customer` VALUES ('$firstname', '$lastname','$password',
    // '$company','$address', '$city','$state','$country', '$postalcode','$phonenumber','$fax','$email');";
// }
// else {
//     echo "we are in wrong way";
// }
    

    // $sql = "INSERT INTO `customer` VALUES(NULL, '$firstname', '$lastname', '$password', '$company', ' $address', '$city', '$state', '$country', ' $postalcode', 
    // '$phonenumber', '$fax', '$email')";
    // //  echo "$sql";

    // }
    
    // if ($conn-> query($sql)== true){
    //     echo "signup sucess";
    //     // header ("location:../signup.php");backclash le folder vandai baira access garauxa
    
    // }
    // else {
    //     echo "problem in signup :$sql <br> $conn->error";
    // }
    // $conn -> close();

    