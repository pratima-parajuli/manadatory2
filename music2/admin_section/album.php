<?php
require_once "header.php";
?>
    <div class="full">
        <form action= "includes/album_inc.php" method="POST">
            <h1 class="head1"> Album</h1>
            <div class="area">
            
            <input type='text' class="text1" placeholder="Title" name="title"><br>
            <input type="number" class="text1" placeholder="Artist ID" name="artist_id"><br><br>
            
            <button class="button" type="submit" name="submit">Add Album</button>
            <!-- <h2>OR</h2>
            <a href="file:///D:/css/music/signup.html"><button class="button" type="button">Sign Up</button></a> -->
            </div>
        </form>
    </div>

<?php
    @require "footer.php";