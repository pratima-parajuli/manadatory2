<?php
   require "header.php";
   
   require "dbh_inc.php";
 
   
   ?>
    <div>
 
      <table id="myTable">
      <?php 
       
          // function fetchCustomerdata($conn){
            
            $sql = "select * from album";
            $result = mysqli_query($conn,$sql);
            $resultcheck = mysqli_num_rows($result);
            echo '<thead>';
            echo  '<tr>';
            echo  '<th>AlbumId</th>';
            echo  '<th>Title</th>';
            echo  '<th>Artist ID</th>';
            echo  '<th>Delete</th>';
            echo  '<th>Update</th>';
            echo  '<th>Add</th>';
            echo  '</thead>';
      
            if ($resultcheck>0){
            
              while($row = mysqli_fetch_assoc($result)){
                           
            

                echo '<tbody>';
                                        echo     '<tr>';
                                        echo     '<td>'.$row['AlbumId'].'</td>';
                                        echo     '<td>'.$row['Title'].'</td>';
                                        echo     '<td>'.$row['ArtistId'].'</td>';
                                       
                                        echo     '<td>'."<a href='includes/delete.php?albumid=$row[AlbumId]'>Album</a>".'</td>';
                                        echo     '<td>'."<a href='#'>Album</a>".'</td>';
                                        echo     '<td>'."<a href='album.php'>Album</a>".'</td>';
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

