<?php
require_once "header.php";
?>
    <div class="full">
        <form action= "includes/login_inc.php" method="POST">
            <h1 class="head1"> Login</h1>
            <div class="area">
            
            <input type='text' class="text1" placeholder="Email" name="email"><br>
            <input type="password" class="text1" placeholder="New Password" name="password"><br><br>
            
            <button class="button" type="submit" name="submit">Login</button>
            <!-- <h2>OR</h2>
            <a href="file:///D:/css/music/signup.html"><button class="button" type="button">Sign Up</button></a> -->
            </div>
        </form>
    </div>

<?php
    @require "footer.php";