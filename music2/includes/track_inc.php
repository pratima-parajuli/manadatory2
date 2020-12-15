<?php
require_once "dbh_inc.php";

if (isset ($_POST["submit"])){
$name = $_POST["name"];
$album_id = $_POST ["album_id"];
$mediatype_id = $_POST["mediatype_id"];
$artist_id = $_POST ["genre_id"];
$composer = $_POST["composer"];
$milisecond = $_POST ["milisecond"];
$album_id = $_POST["album_id"];
$unit_price = $_POST ["unit_price"];

if(isset($name) || ($album_id)|| ($mediatype_id) || ($artist_id)
||($composer) || ($milisecond) ||($album_id) || ($unit_price) == '') {
        echo "You did not fill out the required fields.";
    }
   
$sql = "INSERT INTO `track` VALUES (NULL, '$name', '$album_id','$mediatype_id', '$artist_id',
'$composer', '$milisecond','$album_id', '$unit_price')";
}

 if ($conn-> query($sql)== true){
    echo "album added sucess";

}
else {
    echo "problem in adding album";
}
$conn -> close();

   