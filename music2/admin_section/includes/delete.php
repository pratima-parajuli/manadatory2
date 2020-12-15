<?php
require_once "../dbh_inc.php";
require_once "../header.php";



if (isset ($_GET ["artistid"])){
$albumId = $_GET['artistid'];
// echo $albumId;
// echo 'asdasd';
$sql = "DELETE FROM ARTIST WHERE artistid= $albumId";
// -- DELETE FROM TRACK WHERE AlbumId= @AlbumId
// -- DELETE FROM ALBUM WHERE AlbumId= '$albumId'";
// DELETE FROM album WHERE AlbumId= '$albumId 
print_r ($sql);
// die;
$data = mysqli_query($conn, $sql);
if ($data){
    echo "record deleted from artist";
}
else {
    echo "record not deleted";
}
}


// if (isset ($_GET ["trackid"])){
//     $trackId = $_GET['trackid'];
    
//     $sql = "CREATE PROCEDURE AL_DELETEALBUM
//     @AlbumId  INT 
//     AS BEGIN  DELETE FROM TRACK WHERE AlbumId= @AlbumId
//     DELETE FROM ARTIST WHERE AlbumId= @AlbumId
//     DELETE FROM ALBUM WHERE AlbumId= '$albumId'"
//     ;
//     // DELETE FROM album WHERE AlbumId= '$albumId 
//     print_r ($sql);
//     die;
//     $data = mysqli_query($conn, $sql);
//     if ($data){
//         echo "record deleted from album";
//     }
//     else {
//         echo "record not deleted";
//     }
//     }

//     if (isset ($_GET ["artistid"])){
//         $artistID = $_GET['trackid'];
        
//         $sql = "CREATE PROCEDURE AL_DELETEALBUM
//         @AlbumId  INT 
//         AS BEGIN  DELETE FROM TRACK WHERE AlbumId= @AlbumId
//         DELETE FROM ARTIST WHERE AlbumId= @AlbumId
//         DELETE FROM ALBUM WHERE AlbumId= '$albumId'"
//         ;
//         // DELETE FROM album WHERE AlbumId= '$albumId 
//         print_r ($sql);
//         die;
//         $data = mysqli_query($conn, $sql);
//         if ($data){
//             echo "record deleted from album";
//         }
//         else {
//             echo "record not deleted";
//         }
//         }

// ?>