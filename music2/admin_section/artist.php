<?php
require_once "header.php";

?>
    <div class="full">
        <form action= "includes/artist_inc.php" method="POST">
            <h1 class="head1"> Artist</h1>
            <div class="area">
            
            <input type='text' class="text1" placeholder="Arstis Name" name="name"><br>
           
            
            <button class="button" type="submit" name="submit">Add Artist</button>
            <!-- <h2>OR</h2>
            <a href="file:///D:/css/music/signup.html"><button class="button" type="button">Sign Up</button></a> -->
            </div>
        </form>

        <?php
    // if (isset($_GET["error"])){
    //     if ($_GET["error"]== "emptyinput"){
    
    //         echo "<p>Please enter ARtist Name</p>";
    //     }

    //     elseif($_GET["error"]== "none"){
    //         echo "<p>Artist Created</p>";
    //     }
    // }
    ?>
    </div>

<?php
    @require "footer.php";