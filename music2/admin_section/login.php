<?php
session_start();
require_once "header.php";
require_once "dbh_inc.php";
?>


    <div class="full">
        <form action= "login_inc.php" method="POST">
            <h1 class="head1"> Login</h1>
            <div class="area">
            
            <!-- <input type='text' class="text1" placeholder="Username" name="email"><br> -->
            <input type="password" class="text1" placeholder="Password" name="password"><br><br>
            
            <button class="button" type="submit" name="login">Login</button>
            <!-- <h2>OR</h2>
            <a href="file:///D:/css/music/signup.html"><button class="button" type="button">Sign Up</button></a> -->
            </div>
        </form>
    </div>

<?php
    @require "footer.php";

  
           
