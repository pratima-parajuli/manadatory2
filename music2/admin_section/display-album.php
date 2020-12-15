<?php
require_once "dbh_inc.php";
?>

<div>
 
      <table id="myTable">
      <?php 
        // if(isset($_POST["username"])){
         
      
        //     if ($resultcheck>0){
        //       while($row = mysqli_fetch_assoc($result)){
                           
              echo '<thead>';
              echo  '<tr>';
              echo  '<th>AlbumId</th>';
              echo  '<th>Title</th>';
              echo  '</thead>';
              
              // echo '<tbody>';
              // echo     '<tr>';
              // echo     '<td>'.$row['AlbumId'].'</td>';
              // echo     '<td>'.$row['Title'].'</td>';
              // echo '</tr>';
              // echo '</tbody>';
              echo '<tr>';
            echo '<td>Ram</td>';
            echo '<td>21</td>';
           echo '<td>Male</td>';
            echo '<td>Doctor</td>';
        echo '</tr>';

              // }
            // }
          // }