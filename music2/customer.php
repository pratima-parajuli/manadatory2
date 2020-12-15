<?php
@require "header.php";
require "includes/dbh_inc.php";
?>


<div class="heading">
    <h1 class="head1" > Register</h1>
</div>
<form action= "includes/signup_inc.php" method="POST">
    
<div class="area1">
    
<input type="text" class="text1" placeholder="First Name" name="fname">
<input type="text" class="text1" placeholder="Last Name" name="lname"><br>
<input type="password" class="text1" placeholder="Password" name="password"><br><br>
<input type='text' class="text1" placeholder="Company" name="company"><br>
<input type="text" class="text1" placeholder="Address" name="address">
<input type="text" class="text1" placeholder="City" name="city"><br>
<input type="text" class="text1" placeholder="State" name="state"><br><br>
<input type='text' class="text1" placeholder="Country" name="country"><br>
<input type='text' class="text1" placeholder="Postal Code" name="postalcode"><br>
<input type='text' class="text1" placeholder="Phone Number" name="phonenumber"><br>
<input type='text' class="text1" placeholder="Fax" name="fax"><br>
<input type='text' class="text1" placeholder="Email" name="email"><br>
<button class="button" type="submit" name="submit">Sign Up</button>
</form>
</table>

</div>
