<?php
require_once "header.php";
?>
    <div class="full">
        <form action= "includes/track_inc.php" method="POST">
            <h1 class="head1"> Track</h1>
            <div class="area">
            
            <input type='text' class="text1" placeholder="Name" name="name"><br>
            <input type="number" class="text1" placeholder="Album ID" name="album_id"><br><br>
            <input type="number" class="text1" placeholder="Media Type ID" name="mediatype_id"><br><br>
            <input type='number' class="text1" placeholder="Genre ID" name="genre_id"><br>
            <input type="text" class="text1" placeholder="Composer" name="composer"><br><br>
            <input type='text' class="text1" placeholder="Miliseconds" name="milisecond"><br>
            <input type="number" class="text1" placeholder="Album ID" name="bytes"><br><br>
            <input type='number' class="text1" placeholder="Unit Price" name="unit_price"><br>
            <button class="button" type="submit" name="submit">Add TRack</button>
            <!-- <h2>OR</h2>
            <a href="file:///D:/css/music/signup.html"><button class="button" type="button">Sign Up</button></a> -->
            </div>
        </form>
    </div>

<?php
    @require "footer.php";