

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--Normalize-->
   <link rel="stylesheet" href="style/normalize.css">
   <!--Font Awsom library-->
   <link rel="stylesheet" href="style/all.min.css"> 
  <!-- google font Pacifico -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <!-- google font monserrat -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> 

  <!--Font Flowers-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Send+Flowers&display=swap" rel="stylesheet">
  <!-- codepen -->
  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" -->
  <!-- rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="style/bootstrap.min.css">
  <!-- styling -->
  <link rel="stylesheet" href="style/Style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="style/AllProudct.css">
  <title>Prouducts</title>
  <style>
    .all{
margin-bottom:20px
    }
    @media (max-width:391px) {
      h3{
      
      
      font-size:22px;
      white-space: nowrap;
      position: relative;
      margin:auto;
      left:20%;
      bottom:50px
      }
     .box select{
       
        
       
        width:250px;
        position: relative;
        right:240px;
        top: 10px;
      }
    

    }
  </style>
</head>

<body>
   <!-- include navbar 1 et 2  -->

     <?php
     include "include/navbar12.php";
       include 'include/connectiondb.php';
     ?>

    <!--  end include navbar 1 et 2  -->

  
  

    <div class="d2">
        <div class="all">
        <h3 class="">Obtenez votre gâteau maintenant à Marrakech</h3>
             <div class="box">
                   <form method="POST">
                   <select name="Cars">
                           <option value="H">Trié : haut en bas</option>
                       <option value="H">haut en bas</option>
                         <option value="L">bas en haut</option>
          
                        </select>
                        <input  style=" height:42px;background-color:#f75872; border radius:10px; padding:6px; width: 73px;
    height: 37px;margin-right: 14px;margin-top: 8px; color:#fff;border:1px solid #f75872;" type="submit" name="env" value="Trié">
</form>
                </div>
      
        </div>
        
       <?php
       
        
       $va=false;
        if(isset($_POST['env'])){
          $va=true;
            $gets=$_POST['Cars'];
           if($gets=='H')
           {
               echo '<div class="row g-3">';
               
   include 'include/connectiondb.php';
      $query="SELECT  * FROM `Produit` ORDER BY Prix DESC";
      $query_run=mysqli_query($conn,$query);
      while($row=mysqli_fetch_array($query_run))
      {
        ?>
       <div class="col-12 col-md-6 col-lg-3" id="card0">
<?php 
        $pro_id=$row["IdProduct"]; 
        echo
       '<a id="product_detail" name="product_detail" href="produit.php?pro_id='.$pro_id.'">'
        ?>
<div id="card1" class="card" style="width: 19rem;">



<?php echo'<img src="img/'.$row['Image_Product'].'" class="card-img-top" alt="image">';?>


<div class="card-body">
  
<?php echo '<h5>'.$row['ProuductName'].  '</h5>' ?>
                   <?php echo '<p class="card-text" >'.$row['Decription'].  '</p>' ?>
                   <?php echo '<h5>'.$row['Prix'].'Dh'.   '</h5>' ?>
</div>
</div>
</a>
</div>
      <?php
      
      }
        ?>


<?php echo '</div>';
    
               
           }
            
           else if($gets=='L'){
            echo '<div class="row g-3">';
               
            
               $query="SELECT  * FROM `Produit` ORDER BY Prix  ";
               $query_run=mysqli_query($conn,$query);
               while($row=mysqli_fetch_array($query_run))
               {
                 ?>
               <div class="col-12 col-md-6 col-lg-3" id="card0">
<?php 
        $pro_id=$row["IdProduct"]; 
        echo
       '<a id="product_detail" name="product_detail" href="produit.php?pro_id='.$pro_id.'">'
        ?>
<div id="card1" class="card" style="width: 19rem;">



<?php echo'<img src="img/'.$row['Image_Product'].'" class="card-img-top" alt="image">';?>


<div class="card-body">
  
<?php echo '<h5>'.$row['ProuductName'].  '</h5>' ?>
                   <?php echo '<p class="card-text" >'.$row['Decription'].  '</p>' ?>
                   <?php echo '<h5>'.$row['Prix'].'Dh'.   '</h5>' ?>
</div>
</div>
</a>
</div>
               <?php
               
                       }


               
                 ?>
         
         
         <?php echo '</div>';
             
           }
           
        } 
        ?>
        
        
        <?php
         if($va==false)
         {
           ?>
           <div class="row g-3">
          
          <?php
          
            
                $query="SELECT  * FROM `Produit` ORDER BY Prix DESC";
                $query_run=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($query_run))
                {
                  ?>
                  <div class="col-12 col-md-6 col-lg-3" id="card0">
<?php 
        $pro_id=$row["IdProduct"]; 
        echo
       '<a id="product_detail" name="product_detail" href="produit.php?pro_id='.$pro_id.'">'
        ?>
<div id="card1" class="card" style="width: 19rem;">



<?php echo'<img src="img/'.$row['Image_Product'].'" class="card-img-top" alt="image">';?>


<div class="card-body">
  
<?php echo '<h5>'.$row['ProuductName'].  '</h5>' ?>
                   <?php echo '<p class="card-text" >'.$row['Decription'].  '</p>' ?>
                   <?php echo '<h5>'.$row['Prix'].'Dh'.   '</h5>' ?>
</div>
</div>
</a>
</div>
                <?php
                }
                  ?>
          
          
            </div>   
            <?php
          }
         ?>
        
        
            
        

  
   

  <!-- include footre 1  -->

  <?php
     include "include/footer.php";
     ?>
     </div>

    <!--  end include footre  -->

  

  <!-- footer -->
  <!-- ------------------------------------------------------------------------------------------------------------- -->

  <!-- <script src=""></script> -->
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <!-- bootstrap.js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- font awsome -->
  <script src="https://kit.fontawesome.com/f7066038ac.js" crossorigin="anonymous"></script>

  <!-- my script -->
  <script src="js/script.js"></script>
  <!-- vanilla tilt -->
  <script src="js/vanilla_tilt.js"></script>
</body>
</html>




