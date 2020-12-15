<?php
require_once "../dbh_inc.php";
require_once "../header.php";

if (isset ($_GET ["artistid"])) {
    $artistid = $_GET['artistid'];
    $name = $_POST['fname'];
        // echo $name;
    
        if(empty($title) !== false ) {
            echo "You did not fill out the required fields.";
        }
        $sql = "UPDATE `artist` SET `Name` = '$name' WHERE `artist`.`ArtistId` = $artistid";
        // echo $sql;
        $data = mysqli_query($conn, $sql);
        
        if ($data){
            echo "Artist Updated";
        }
        else {
            echo "Not Updated";
        }
}