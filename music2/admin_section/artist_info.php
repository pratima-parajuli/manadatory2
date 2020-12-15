<?php
   require "header.php";
   
   require "dbh_inc.php";
 
   
   ?>
    <div>
 
      <table id="myTable">
      <?php 
       
          // function fetchCustomerdata($conn){
            
            $sql = "select * from artist";
            $result = mysqli_query($conn,$sql);
            $resultcheck = mysqli_num_rows($result);
            echo '<thead>';
            echo  '<tr>';
            echo  '<th>ArtistId</th>';
            echo  '<th>Name</th>';
            echo  '<th>Delete</th>';
            echo  '<th>Update</th>';
            // echo  '<th>Add</th>';
            echo  '</thead>';
      
            if ($resultcheck>0){
            
              while($row = mysqli_fetch_assoc($result)){
                           
            

                echo '<tbody>';
                                        echo     '<tr>';
                                        echo     '<td>'.$row['ArtistId'].'</td>';
                                        echo     '<td>'.$row['Name'].'</td>';
                                        
                                       
                                        echo     '<td>'." <a href='includes/delete.php?artistid=$row[ArtistId]'>Delete</a>".'</td>';
                                        echo     '<td>'."<a href='includes/updateform.php?artistid=$row[ArtistId]'>Update</a>".'</td>';
                                        // echo     '<td>'."<a href='artist.php'>Artist</a>".'</td>';
                                        echo '</tr>';
                                        echo '</tbody>';
                                        
              }
            }
          ?>
          <tfoot>
                                         <tr>
                                     <th>AlbumId</th>
                                      <th>Title</th>
                                      <th>ArtistId</th>
                                       
                                         <th>Edit Info</th>
                                         <th>Edit Info</th>
                                        <th>Edit Info</th>
                                        </tr>
                                        </tfoot>
     
      </table>
    </div> 

<?php
@require "..//footer.php";

