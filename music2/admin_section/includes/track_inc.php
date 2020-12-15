<?php
require_once "../dbh_inc.php";



if (isset ($_POST ["submit"])){

    $name = $_POST["name"];
    $album_id = $_POST["album_id"];
    $mediatype_id = $_POST["mediatype_id"];
    $genre_id = $_POST["genre_id"];
    $composer = $_POST["composer"];
    $milisecond = $_POST["milisecond"];
    $bytes = $_POST["bytes"];
    $unit_price = $_POST["unit_price"];

    require "function_inc.php";
    
    if (emptyInputTrack($name,$album_id,$mediatype_id,$genre_id,$composer,$milisecond,$bytes,$unit_price) !==false){
        echo "empty input";
        // header ("location:../customer.php?error = emptyinput");
        exit();
    }
    // if (emailExists($conn, $email)!== false){
    //     header ("location:../customer.php?error = Email taken");
    //     exit();
    // }

    createTrack($conn,$name,$album_id,$mediatype_id ,$genre_id,$composer,$milisecond, $bytes,$unit_price);
}

    else{
        // header ("location:../ customer.php");
        echo "please access form correctly";
        exit();
    }
