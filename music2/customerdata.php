<?php
// require_once "header.php";
require_once "includes/dbh_inc.php";

$sql = "select * from customer ";

$result = mysqli_query($conn, $sql);

//fetch the resulting row as an array

$customer = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_close($conn);

print_r($customer);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once ("templates/header.php");?>
    <h4 class = "center grey-text"> Customer</h4>
    <div class="container">
    <div class = "row">
    <?php foreach ($customer as $customer) {?>

    <div class = "col s6 md3"> 
    <div class = "card z-depth-0">
    <div class = "card content center" >
    <h6><?php echo htmlspecialchars($customer["Email"]);?></h6>
    <div> <?php echo htmlspecialchars($customer["Firstname"]);?> </div>
    <h6><?php echo htmlspecialchars($customer["lastname"]);?></h6>
    <div> <?php echo htmlspecialchars($customer["password"]);?> </div>
    </div>
    <div class = "card-action right -allign">
    <a class= "brand-text" href= "#">More info</a>
    </div>
   
    </div>
    </div>

    <?}?>

    </div>
</body>
</html>