<?php
   require "header.php";
   
   require "dbh_inc.php";
 
   
   ?>
    <div>
 
      <table id="myTable">
      <?php 
       
          // function fetchCustomerdata($conn){
            
            $sql = "select * from track";
            $result = mysqli_query($conn,$sql);
            $resultcheck = mysqli_num_rows($result);
            echo '<thead>';
            echo  '<tr>';
            echo  '<th>TrackId</th>';
            echo  '<th>Name</th>';
            echo  '<th>AlbumId</th>';
            echo  '<th>MediaTypeId</th>';
            echo  '<th>GenreID</th>';
            echo  '<th>Composer</th>';
            echo  '<th>Time in Seconds</th>';
            echo  '<th>Byte</th>';
            echo  '<th>UnitPrice</th>';
          
            echo  '<th>Delete</th>';
            echo  '<th>Update</th>';
            echo  '<th>Add</th>';
            echo  '</thead>';
      
            if ($resultcheck>0){
            
              while($row = mysqli_fetch_assoc($result)){
                           
            

                echo '<tbody>';
                                        echo     '<tr>';
                                        echo     '<td>'.$row['TrackId'].'</td>';
                                        echo     '<td>'.$row['Name'].'</td>';
                                        echo     '<td>'.$row['AlbumId'].'</td>';
                                        echo     '<td>'.$row['MediaTypeId'].'</td>';
                                        echo     '<td>'.$row['GenreId'].'</td>';

                                        echo     '<td>'.$row['Composer'].'</td>';
                                        echo     '<td>'.$row['Milliseconds'].'</td>';
                                        echo     '<td>'.$row['Bytes'].'</td>';
                                        echo     '<td>'.$row['UnitPrice'].'</td>';
                                       
                                        echo     '<td>'."<a href='includes/delete.php?trackid=$row[TrackId]'>Track</a>".'</td>';
                                        echo     '<td>'."<a href='#'>Track</a>".'</td>';
                                        echo     '<td>'."<a href='track.php'>Track</a>".'</td>';
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

