  <?php
   require "header.php";
   require "includes/dbh_inc.php";
   
   ?>
    <div>
 
      <h2> Welcome To my Music </h2>
      <table id="myTable">
      <?php 
        if(isset($_SESSION["username"])){
          $loggedInEmail = $_SESSION["username"];

          // function fetchCustomerdata($conn){
            $sql = "select * from customer  where Email = '$loggedInEmail'";
            $result = mysqli_query($conn,$sql);
            $resultcheck = mysqli_num_rows($result);
      
            if ($resultcheck>0){
              while($row = mysqli_fetch_assoc($result)){
                           
              echo '<thead>';
              echo  '<tr>';
              echo  '<th>First Name</th>';
              echo  '<th>Last Name</th>';
              echo  '<th>Password</th>';
              echo  '<th>Company</th>';
              echo  '<th>Address</th>';
              echo  '<th>City</th>';
              echo  '<th>State</th>';
              echo  '<th>Country</th>';
              echo  '<th>Postal Code</th>';
              echo  '<th>Phone</th>';
              echo  '<th>Fax</th>';
              echo  '<th>Email</th>';
              echo  '<th>Edit Info</th>';
              echo  '<th>Edit Info</th>';
              echo  '<th>Edit Info</th>';
              echo  '</tr>';
              echo  '</thead>';
              
              echo '<tbody>';
              echo     '<tr>';
              echo     '<td>'.$row['FirstName'].'</td>';
              echo     '<td>'.$row['LastName'].'</td>';
              echo     '<td>'.$row['Password'].'</td>';
              echo     '<td>'.$row['Company'].'</td>';
              echo     '<td>'.$row['Address'].'</td>';
              echo     '<td>'.$row['City'].'</td>';
              echo     '<td>'.$row['State'].'</td>';
              echo     '<td>'.$row['Country'].'</td>';
              echo     '<td>'.$row['PostalCode'].'</td>';
              echo     '<td>'.$row['Phone'].'</td>';
              echo     '<td>'.$row['Fax'].'</td>';
              echo     '<td>'.$row['Email'].'</td>';
              echo     '<td>'."<a href='#'>Track</a>".'</td>';
              echo     '<td>'."<a href='#'>Track</a>".'</td>';
              echo     '<td>'."<a href='#'>Track</a>".'</td>';
              echo '</tr>';
              echo '</tbody>';

              }
            }
          }
           
        //     if ($stmt = mysqli_prepare($conn, $sql)) {
        //      /* execute statement */
        //     $result = mysqli_stmt_execute($stmt);
         
        //      /* bind result variables */
        //     mysqli_stmt_bind_result($stmt, $result);

        //     /* fetch values */
        //     while (mysqli_stmt_fetch($stmt)) {

        //     printf ("%s (%s)\n",$result);
            
        //     }

        //     /* close statement */
        //     mysqli_stmt_close($stmt);
        //     }

        // /* close connection */
        // mysqli_close($conn);
        // }
      
      ?>
      </table>
    </div> 

<?php
@require "footer.php";

