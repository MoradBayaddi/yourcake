

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-T4Zs9sDyCSPBz2h43Lr1rjr/7bLP/XTnlDh/1O71CUxX9Pd3qBymD0Pb/qKpIMtH1e51Za5g/+F0o5x5X5H5ag==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap -->
  <link rel="stylesheet" href="style/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- styling -->
  <link rel="stylesheet" href="style/Style.css?v=<?php echo time(); ?>">
  <title>Accueil</title>
</head>
<style>
 
</style>
<body>
   <!-- include navbar 1 et 2  -->

     <?php
     include "include/navbar12.php";
     include "include/connectiondb.php"
     ?>

    <!--  end include navbar 1 et 2  -->

  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item">
        <img src="img/slidephoto.avif" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="img/mothers_day_bakingo_homepage_banner_desktop_0.avif" class="d-block w-100" alt="...">
      </div>
      
      
      <div class="carousel-item">
        <img src="img/dil_se_dessert_homepage_banner_desktop_2_1.avif" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span  class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span  class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--    

  -->


  <div class="d2">
    <!--Start How to Order-->
        <div  class="container">
          <div class="how-to-order">
            <div class="subtitle">
                <h2 class="order-subtitle">COMMENT     &nbsp; COMMANDER</h2>
            </div>
            <div  class="row" >
                <div  data-aos="fade-left" data-aos-duration="1000" data-aos-offset="200" class="col-2">
                  <i class="fas fa-birthday-cake"></i>
                  <p><b>Choisissez votre gâteau</b></p>
                </div>
                <div  data-aos="fade-out" data-aos-duration="500" data-aos-offset="150" class="col-2">
                  <i class="fas fa-cart-plus"></i>
                  <p><b>
Ajouter au panier</b></p>
                </div>
                <div  data-aos="fade-out" data-aos-duration="500" data-aos-offset="150" class="col-2">
                  <i class="fas fa-money-check-alt"></i>
                  <p><b>Vérifier</b></p>
                </div>
                 <div  data-aos="fade-in" data-aos-duration="500" data-aos-offset="150" class="col-2">
                 <i class="fas fa-box-open"></i>
                 <p><b>Nous l'emballons</b></p>
                </div>
                  <div  data-aos="fade-right" data-aos-duration="1000" data-aos-offset="200" class="col-2">
                  <i class="fas fa-shipping-fast"></i>
                  <p><b>Livraison rapide</b></p>
                </div>
            </div>
         </div>
        </div>
        <!--End How to Order!-->
        <div  class="container">
          <h2>Tendance Cake</h2>
        </div>

       
 <div  id="card0"class="row g-3">
           
   <?php 
   include 'include/connectiondb.php';
      $query="SELECT  * FROM `Produit` LIMIT 8";
      $query_run=mysqli_query($conn,$query);
      while($row=mysqli_fetch_array($query_run))
      {
        ?>
      <div class="col-12 col-md-6 col-lg-3" >
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
  
  <button class="b1"> <?php
      
      $row='voir plus';
     
        
      echo '<a style="color: var(--second-color-red);text-decoration: none;
     " href="AllProuducts.php">'.$row.'</a>'
        ?></button>
   </div>




<h2>Mini Cake</h2>
<div class="row g-3">
<?php 
   include 'include/connectiondb.php';
      $query="SELECT  * FROM `Produit` where NumCategorie ='cat1' Limit 4";
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
  


  <button class="b1"> <?php
      $num_cat='cat1';
      $row='voir plus';
     
        
      echo '<a style="color: var(--second-color-red);text-decoration: none;
     " href="categorie.php?numcat='.$num_cat.'">'.$row.'</a>'
        ?></button>

 
</div>
<h2>Desginer Cake</h2>
<div class="row g-3">
<?php 
   include 'include/connectiondb.php';
      $query="SELECT  * FROM `Produit` where NumCategorie ='cat7' Limit 4";
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

<button class="b1"> <?php
      $num_cat='cat7';
      $row='voir plus';
     
        
      echo '<a style="color: var(--second-color-red);text-decoration: none;
     " href="categorie.php?numcat='.$num_cat.'">'.$row.'</a>'
        ?></button>

</div>

<h2>Photo Cake</h2>
<div class="row g-3">
  

<?php 
   include 'include/connectiondb.php';
      $query="SELECT  * FROM `Produit` where NumCategorie ='cat4' Limit 4";
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



<button class="b1"> <?php
      $num_cat='cat4';
      $row='voir plus';
     
        
      echo '<a style="color: var(--second-color-red);text-decoration: none;
     " href="categorie.php?numcat='.$num_cat.'">'.$row.'</a>'
        ?></button>

</div>
<div class="container-fluid contact_form">

  <div class="row mt-5 pe-5 ps-5">
    <!-- start image div -->
    <div class="col-sm-6">
      <img style="width: 90%;height: 90%;" src="img/contact_form.avif" alt="">
    </div>
    <!-- end image div -->


    <!-- start form div -->
    <div id="con" class="col-sm-6 ">
      <div class="row">
        <h1 class="title_font">..Contactez-nous pour plus!</h1>
      </div>
      <div class="row ">
        <form action="contactus.php" method="POST">
          <div class="row ">
            <div class="col-sm-6">
              <label for="name">Votre Nom <span style="color:#f75872;">*</span></label>
              <br>
              <input requirde style="width: 100%;" type="text" name="name" id="">
            </div>
            <div class="col-sm-6">
              <label for="Number">Telephone <span style="color:#f75872;">*</span></label>
              <br>
              <input required style="width: 100%;" type="text" name="Number" id="">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col">
                <label for="email">Email <span style="color:#f75872;">*</span> </label><br>
                <input required style="width: 100%;" type="email" name="email" id="">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col">
                <label for="Message">Message <span style="color:#f75872;">*</span> </label><br>
                <textarea required style="width: 100%;" name="Message" id=""  rows="3"></textarea>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col">
              <input style="width: 100%;" type="submit" name="submit" class="btn_sub" value="Submit Form">
            </div>
          </div>
          
        </form>
      </div>
    </div><!-- end form div -->
    
  </div>

</div>
<div data-aos="fade-in" data-aos-duration="1000" data-aos-offset="200" class="about-section">
  <h2>
À propos de nous</h2>
  <p>Nous sommes exactement ce que vous recherchez. Oui, nous sommes un groupe de gâteaux et de boulangeries en ligne certifié Teames, spécialisé dans la livraison de délices absolument irrésistibles. Actuellement, nous livrons des gâteaux à Marrakech, Casa</p>
  <p>. 
Nous ne sommes pas qu'une boulangerie, nous ne sommes pas que des boulangers. En fait, nous sommes comme vous, une bande de gourmands passionnés de gourmandise.</p>
</div>




</div>






  <!-- include footre 1  -->

  <?php
     include "include/footer.php";
     ?>
     </div>

    <!--  end include footre  -->

  

  <!-- footer -->
  <!-- ------------------------------------------------------------------------------------------------------------- -->
<script>
  window.addEventListener('scroll', function() {
  if (window.scrollY > 50) {
    var navbar = document.querySelector('.nav1');
    // box-shadow: 
    // transition: ;
    navbar.style.boxShadow = '0px 4px 15px rgba(43, 45, 66, 0.3)';
    navbar.style.transition='0.5s';
  } else {
    var navbar = document.querySelector('.navbar');
    navbar.style.boxShadow = 'none';
  }
});
</script>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
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