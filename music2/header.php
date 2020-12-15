<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> my music</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href = "http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src= "http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  
    </head>
   
   <body>
    <nav class="nav">

        <ul>
            <li class="logo"> MyMusic </li>
            
            <div class="items">
                <li><a href="index.php">Home</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="login.php">login</a></li>
                <li><a href="customer.php">Sign Up</a></li>
                <?php 
                    if(isset($_SESSION["username"])){ ?>
                         <li><a href="profile.php">Profile</a></li> 
                    <?php
                    }
                ?>
            </div>
        
        <li class="search-icon">
            <input type="search"  placeholder="Search..">
            <button type="submit"><i class="fa fa-search"></i></button>
        </li>
        </ul>
    </nav>  