<?php
       
        
            if(isset($_GET['numcat']))
             {
                $num_cat=$_GET['numcat'];
                echo '<div class="row g-3">';
               
               
               
            
                $query="SELECT  * FROM `Produit` Where NumCategorie='cat1' ";
                $query_run=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($query_run))
                {
                  ?>
                  <div class="col-12 col-md-6 col-lg-3" id="card0">
                        <div id="card1" class="card" style="width: 19rem;">
                             <?php echo'<img src="img/'.$row['Image_Product'].'" class="card-img-top" alt="image">';?>
                                   <div class="card-body">
                                       <?php echo '<h5>'.$row['ProuductName'].  '</h5>' ?>
                                       <?php echo '<p class="card-text" >'.$row['Decription'].  '</p>' ?>
                                       <?php echo '<h5>'.$row['Prix'].'Dh'.   '</h5>' ?>
                                      
                                       
                                      
                             
                      </div>
                </div>
             </div>
                <?php
                
                        }
 
 
                
                  ?>
          
          
          <?php echo '</div>';
               
             }
        ?>