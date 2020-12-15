<?php
require_once "../dbh_inc.php";



if (isset ($_POST ["submit"])){
    
    $name = $_POST["name"];
 
    require "function_inc.php";
   
    if (emptyInputArtist($name)!== false){
        // print_r ("khai sakidaina jsto xa");
        // die;    
        echo "empty input";
        // header ("location:../customer.php?error = emptyinput");
        exit();
    }
    // if (emailExists($conn, $email)!== false){
    //     header ("location:../customer.php?error = Email taken");
    //     exit();
    // }

    createArtist($conn,$name);
}

    else{
        // header ("location:../ customer.php");
        echo "please access correctly";
        exit();
    }
