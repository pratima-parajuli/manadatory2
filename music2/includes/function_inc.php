<?php
@require_once "dbh_inc.php";


function emptyInputSignup($firstname,  $lastname , $password, $company,$address, $city, $state,$country,
$postalcode,$phonenumber, $fax,$email){
    $result;
    if (empty($firstname)|| empty($lastname)|| empty ($password)|| empty($company)|| empty($address) ||empty($city) 
    || empty($state) || empty($country) ||empty ($postalcode) || empty ($phonenumber) || empty($fax) || empty($email)){
    $result = true;
}
    else {
    $result = false;
    }
    return $result;
}

// function emailExists($conn, $email){
//     $sql= "SLECT * FROM customer WHERE Email= $email";
//     $stmt = mysqli_stmt_init($conn);
//     if (!mysqli_stmt_prepare($stmt, $sql)){
//         header ("location:../customer.php?error = stmtfailed");
//         exit();
//     }
//     mysqli_stmt_bind_param($stmt, "s", $email);
//     mysqli_stmt_execute($stmt);

//     $resulData= mysqli_stmt_get_result ($stmt);

// if ($row = mysqli_fetch_assoc($resulData)){
//     return $row;
// }
// else {
//     $result = false;
//     return $result;
// }
//     mysqli_stmt_close ($stmt);
// }

function createUser($conn,$firstname, $lastname ,$password, $company,$address, $city, $state,$country,$postalcode,
$phonenumber, $fax,$email)
{
    // echo "$sql";
    $sql = "INSERT INTO `customer` VALUES(NUll,?,?,?,?,?,?,?,?,?,?,?,?)";


    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header ("location:../customer.php?error = stmtfailed");
        exit();
    }
    $hashedPwd= password_hash($password,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssssssssssss",$firstname,  $lastname , $hashedPwd, $company,$address, $city, $state,$country,
    $postalcode,$phonenumber, $fax,$email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header ("location:../customer.php?error = none");
    exit();

}


function emptyArtistname($artistName){
    $result;
    if (empty($artistName)){
        $result= true;
    }

else {
    $result = false;
    }
    return $result;
}
function addArtist($conn,$artistName)
{
    $sql = "INSERT INTO `artist` VALUES(NUll,?)";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header ("location:../artist.php?error = stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s",$artistName);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header ("location:../artist.php?error = none");
    
    echo "artist added";
    exit();

}



// // echo 'aa';
// function loginUSer ($conn, $username, $password){
//     echo $username;
//     echo $password;
//     $encrypted_password = password_verify($password, PASSWORD_DEFAULT);
//     echo $encrypted_password;
//     $sql = "SELECT * FROM customer WHERE Email = '$username' && Password = '$encrypted_password'";
//     // query run
//     $result = mysqli_query($conn, $sql);
//     $row = mysqli_num_rows($result);
//     if($row>0) {
//         session_start();
//         $_SESSION["username"] = $username;
//         echo $_SESSION["username"];
//     } else {
//         echo 'user not found';
//     }

//     function addAlbum(){

//     }

//     function addAlbum ($conn, $title, $artist_id){
//         echo "hee";
//         echo $title;
//         echo $artist;
//         $sql = "INSERT INTO `album` VALUES (NULL, '$title', '$artist_id ')";
//         // query run
//         if (mysqli_query($conn,$sql)){
//             echo "Album Added";

//         }
//         else {
//             echo "problem in addition :$sql <br> $conn->error";
//         }
//     }
    
// // }
// //         $conn -> close();
//     @require_once "footer.php";

   
    // $stmt = mysqli_prepare($conn, $sql) or die(mysqli_error($conn));
    // $result = mysqli_stmt_execute($stmt);


    // $result1 = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_array($result1);
    // print_r($row);
    // while ($r = mysqli_fetch_array($conn, $sql)) { // line 32
    //     $id = $r['id'];
    //     echo '<br/>user id'.$id;
    // }

    // print_r($result1);
    // echo $result1;
    // echo $result;}
