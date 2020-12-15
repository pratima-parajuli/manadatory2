<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel = "stylesheet" href= "../style.css">
    <link rel = "stylesheet" href = "http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src= "http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
</head>
<body>
   
    <h1>Welcome To Admin Pannel<h1>
    <body>
    <nav class="nav">

        <ul>
            <li class="logo"> MyMusic </li>
            
            <div class="items">
                <!-- <li><a href="admin.php">Home</a></li>
                <li><a href="">Album</a></li>
                <li><a href="">Artist</a></li>
                <li><a href="">Track</a></li> -->
                <li><a href="login.php">login</a></li>
                <?php 
                    if(isset($_SESSION["username"])){ ?>
                         <li><a href="profile.php">Profile</a></li> 
                    <?php
                    }
                ?>
            </div>
        
       
        </ul>
    </nav>  
    


