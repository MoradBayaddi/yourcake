<?php
session_start();
if(!isset($_SESSION['email']))
{
  echo '<script type = "text/javascript">';
  echo 'alert("Doit etre connecte Mr")';
  echo '</script>';
  echo '<script type = "text/javascript">';
 echo 'window.location.href = "Login.php"';
  echo '</script>';
?>


<?php
    }
    else{
      ?>


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
  <link rel="stylesheet" href="style/Style_produits.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="style/Style.css?<?php echo time() ?>">
 
  <link rel="stylesheet" href="style/profile.css?<?php echo time() ?>">
  <link rel="stylesheet" href="style/Style_produits.css?<?php echo time() ?>">


    <title>Document</title>
<style>
  

   h5{
    
    font-size: 22px;
    font-family: 'Pacifico';
}
 p{
    font-weight: 500;
}

</style>
</head>

     <!-- include navbar 1 et 2  -->

     



<body style="margin: 0;padding: 0;">
  <!-- ------------------------------------------------------ -->

<?php
     include "include/navbar12.php";
     ?>
  <?php
// include "session.php";
//session_start();

?>
  
<!-- body profil -->
<div class="d2">
<br><br>
<?php
$login=$_SESSION['email'];
$query="SELECT * from client WHERE login='$login';";
$query_run=mysqli_query($conn,$query);
$row=mysqli_fetch_array($query_run);

   
  
?>
<center><h1>bienvenu <?php echo $row["PrenomClt"];  ?>  </h1></center>
<div id="profil_full" class="container-fluid mt-5 ">
    <div id="profil_container" class="All">
    <div class="row justify-content-center mt-5">
        <div class="col-sm-6">
           <div class="row profil_item">
            <h5 ><span class="fas fa-user-circle"></span><a  class="profil_item_link"
             href="Profil_Info.php">
                Information</a> </h5> <br><br>
           </div>
           <div class="row profil_item">
            <h5 ><span class="fas fa-user-circle"></span> <a class="profil_item_link" 
            href="Mise_a_jour_profile.php">
                Modifier mon compte</a> </h5> <br><br>
           </div>
           <div class="row profil_item">
            <h5 ><span class="fas fa-shopping-cart"></span><a class="profil_item_link" 
            href="commandeDetails.php">
                Historique et détails de mes commandes</a>  </h5> <br><br>
           </div>
           <div class="row profil_item">
            <h5 ><span class="fas fa-undo"></span><a class="profil_item_link" 
            href="index.php">
                 Retours accueil</a>
                </h5> <br><br>
           </div>
            

        </div>
        
    </div>  <br><br>  <br><br>
 
      <h2 class="text-center"><b>Produits recommandés </b></h2>
      <div class="row g-3">
       
           <?php 
           include 'include/connectiondb.php';
              $query="SELECT  * FROM `Produit` LIMIT 4";
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
?>
  

    

<!-- ----------------------------------------------------------------------------------------------------------------------- -->
<?php include "include/footer.php"?>
</div>


  <!-- ------------------------------------------------------------------------------------------------------------- -->




  <!-- codepen -->

 
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
</script>
</body>
</html>
<?php
    }
  ?>
