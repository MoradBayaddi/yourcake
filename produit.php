
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
  <link rel="stylesheet" href="style/Style_produits.css?<?php echo time(); ?>">
  
  <title>Produit</title>
</head>

<body>
   <!-- include navbar 1 et 2  -->
   <div class="d2">
     <?php
     include "include/navbar12.php";
     include "include/connectiondb.php"
    
     ?>
<?php
 $pro_id =$_GET['pro_id'];
$query="SELECT * from produit WHERE IdProduct='$pro_id';";
        $query_run=mysqli_query($conn,$query);
        $row=mysqli_fetch_array($query_run);
       $numCategorie= $row["NumCategorie"];
        
        ?>

<div class="container mt-5 mb-5">
 
<form action="Cart.php" method="POST">
 <div class="row">
     <div class="col-md-5">
         <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
             <div class="carousel-inner">
               <div class="carousel-item active">
                <?php echo '<img src="img/'.$row['Image_Product'].'" class="d-block w-100" alt="...">'?>
               </div>
               <div class="carousel-item">
               <?php echo '<img src="img/'.$row['img2'].'" class="d-block w-100" alt="...">'?>
               </div>
               <div class="carousel-item">
                
               </div>
             </div>
             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
             </button>
           </div>
     </div>
     
     <div class="col-md-7">
         
         <?php
             echo'<h2>'.$row["ProuductName"].'</h2>'
         ?>
         <?php
         echo '<h4 id="prix1">'.$row["Prix"]. '</h4>';
        $s=$row["Prix"];
       
        
        
      
     
         ?>
         <span class="prixdh">Dh</span>
         
  
   
        
         <span id="prix2"></span>

         
         <?php echo'<input id="prodId" name="prodId" type="hidden" value='.$row['IdProduct'].''?>
        </b>
         <h5 style="font-size: large;"><b>Choisir Poids:
</b></h5>

<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
             <input value="0.5" type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
             <label class="btn btn-outline-dark" for="btnradio1" data-tilt data-tilt-scale="1.1">
               0.5 <span>Kg</span></label>
           
             <input value="1" type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" >
             <label class="btn btn-outline-dark" for="btnradio2" data-tilt data-tilt-scale="1.1">
              1<span>Kg</span></label>
           
             <input value="2" type="radio" class="btn-check" name="btnradio" id="btnradio3" onchange="change()" autocomplete="off">
             <label class="btn btn-outline-dark" for="btnradio3" data-tilt data-tilt-scale="1.1">
              2<span>Kg</span></label>

             <input value="3" type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
             <label class="btn btn-outline-dark" for="btnradio4" data-tilt data-tilt-scale="1.1">
              3<span>Kg</span></label>

             <input value="4" type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
             <label class="btn btn-outline-dark" for="btnradio5" data-tilt data-tilt-scale="1.1">
              4<span>Kg</span></label>
         </div>
         
        
         <br> 
        
         <!-- <h5><b>Decoration de Cake:
</b> </h5>
       
           <input placeholder="Happy Birthday Yassine -Congratulation " type="text" id="msgcake" name="textmsg">  -->
       
         
         <button data-tilt  style="margin-top:35px;" type="submit" class="panier" name="Add_To_Cart">Ajouter au panier</button><br><br>
         <input type="hidden" id="prixsum" name="prixsum" value=<?php echo $s  ?> >
         </form>
        
       
         <h3 id="desc_title"><u>Description :</u> </h3>
         <?php
         $query="SELECT * from produit WHERE IdProduct='$pro_id';";
         $query_run=mysqli_query($conn,$query);
         $row=mysqli_fetch_array($query_run);
        
          echo '<div class="desc">'
           .$row["Description_Details"].
          '</div>'
         ?>
     </div>
     
 </div>
 <br>
         <div class="prod_1"  ><p><img src="produits_img/paiment_sec.png" alt=""> Il est soigneusement préparé le cake et de haute qualité</p></div>
         <div class="prod_1" ><p><img src="produits_img/Livraison.png" alt=""> Livraison  à partir de 20 Dhs <br>
           <p>delivery from 20 Dhs</p>
        </p></div>
        <h2>Produits Similaires</h2>
<div class="row g-3">
<?php
        $query="SELECT  * FROM `Produit` where NumCategorie='$numCategorie' and IdProduct!='$pro_id' Limit 4";
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
<div id="card1" class="card" style="width: 16rem;">



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

 
 
</div>
<?php 
       
    
        
     
        
   
 
    include "include/footer.php";
   
    ?>
</div>



 <!-- <script src=""></script> -->
 <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <!-- bootstrap.js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- font awsome -->
  <script src="https://kit.fontawesome.com/f7066038ac.js" crossorigin="anonymous"></script>

  <!-- my script -->
  <script src="js/script.js?<?php echo time(); ?>"></script>
  <!-- vanilla tilt -->
  <script src="js/vanilla_tilt.js"></script>

     </body>
     </html>