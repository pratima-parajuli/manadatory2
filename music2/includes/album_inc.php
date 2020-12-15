<?php
require_once "dbh_inc.php";

if (isset ($_POST["submit"])){
$title = $_POST["title"];
$artist_id = $_POST ["artist_id"];
if(!isset($title) || ($artist_id) == '') {
        echo "You did not fill out the required fields.";
    }
   
$sql = "INSERT INTO `album` VALUES (NULL, '$title', '$artist_id ')";
}

 if ($conn-> query($sql)== true){
    echo "album added sucess";

}
else {
    echo "problem in adding album";
}
$conn -> close();

   