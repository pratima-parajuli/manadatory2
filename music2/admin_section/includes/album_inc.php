<?php
require_once "../dbh_inc.php";

require "function_inc.php";

if (isset ($_POST ["submit"])){
    
    $title = $_POST["title"];
    $artist_id = $_POST["artist_id"];
   
    if (emptyInputAlbum($title,$artist_id )!== false){
        // header ("location:../customer.php?error = emptyinput");
        echo "emptyinput";
        exit();
    }
    // 
//     // if (emailExists($conn, $email)!== false){
//     //     header ("location:../customer.php?error = Email taken");
//     //     exit();
//     // }


createAlbum($conn,$title,$artist_id);
}

else{
    // header ("location:../ customer.php");
    echo "access properly";
    exit();
}
   
