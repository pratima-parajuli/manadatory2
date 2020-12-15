<?php
if (isset($_GET['artistid'])){
    echo $_GET['artistid'];
}
?>
<h2>HTML Forms</h2>

<form action="/music2/admin_section/includes/update.php?artistid=<?php echo $_GET['artistid'] ?>" method="POST">
  <input type="hidden" value="<?php echo $_GET['artistid'] ?>">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <input type="submit" value="Submit">
</form>
