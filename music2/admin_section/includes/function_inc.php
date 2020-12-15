<?php

@require_once "../dbh_inc.php";

function emptyInputArtist($name){
    $result;
    if (empty($name)){
        $result= true;
     
    }

else {
    $result = false;
    
    }
    return $result;
}
function createArtist($conn,$name)
{
  
    $sql = "INSERT INTO `artist` VALUES(NUll,?)";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header ("location:../artist.php?error = stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s",$name);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header ("location:../artist.php?error = none");
    
    echo "artist added";
    exit();

}

function emptyInputAlbum($title,$artist_id){
    $result;
    
    if (empty($title)|| empty($artist_id)){
        $result = true;
        // print_r($result);
        // die;
    }
    else {
        $result = false;
      
    }
    return $result;
}
 

function createAlbum($conn,$title,$artist_id)
{
 
    // $sql = "INSERT INTO `album` VALUES(NUll,?,?)";
    $sql= "INSERT INTO `album` VALUES (NULL, '$title', '$artist_id')";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "stmt failed";
        exit();
    }
    // mysqli_stmt_bind_param($stmt, "ss",$title,$artist_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    // header ("location:../artist.php?error = none");
    
    echo "artist added";
    exit();

}


function emptyInputTrack($name,$album_id,$mediatype_id,$genre_id,$composer,$milisecond,$bytes,$unit_price){
    $result;
    if (empty($name) || empty ($album_id) ||empty($mediatype_id) || empty ($genre_id)
     ||empty($milisecond) || empty ($bytes) || empty ($unit_price)){
        $result= true;
    }

else {
    $result = false;
    }
    return $result;
}

function createTrack($conn,$name, $album_id,$mediatype_id,$genre_id,
$composer,$milisecond, $bytes,$unit_price)
{
  
    $sql = "INSERT INTO `track` VALUES(NUll,?,?,?,?,?,?,?,?)";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header ("location:../artist.php?error = stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssssssss",$name,  $album_id,$mediatype_id,$genre_id,
    $composer,$milisecond, $album_id,$unit_price);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    // header ("location:../artist.php?error = none");
    
    echo "artist added";
    exit();

}

