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
    <title>Document</title>
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
  <!-- styling 
  <link rel="stylesheet" href="style/commande.css?v=">-->
  <link rel="stylesheet" href="style/Style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="style/Profileinfo.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="style/reg.css?v=<?php echo time(); ?>">

</head>
<body>
  
<!---NavBar Hedar -->
<div class="d2">
<?php

 
include('include/navbar12.php');
?>
<div id="profil_full" class="container-fluid  mt-5 ">
    <div id="profil_container" class="row">
    <div class="row justify-content-center mt-5">
       <div class="col-sm-6">
       <div style="position: relative;
    right: 43px;" class="col "><h2 class="h1_title1" data-tilt> Vos Information</h2><br><br></div>

        <?php

include('include/connectiondb.php');
$email=$_SESSION['email'];
$query="select * from client where login='$email'";
$result=$conn->query($query);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) { ?>
  <?php


?>
  <div class="row profil_info_container  justify-content-center">

<div class="col-sm-12 ">
    <div class="row">
        <div class="col-sm-6">
               <label for="Nom">Prenom :</label> 
        </div>
        <div class="col-sm-6">
            <p><b><?php echo $row['PrenomClt']; ?></b></p>
        </div>
    </div>

</div>

<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-6">
               <label for="Nom">Adresse :</label> 
        </div>
        <div class="col-sm-6">
            <p><b><?php echo $row['AdresseClt']; ?></b></p>
        </div>
    </div>

</div>



<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-6">
               <label for="Nom">Adresse email:</label> 
        </div>
        <div class="col-sm-6">
            <p><b><?php echo $row['login']; ?></b></p>
        </div>
    </div>

</div>


<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-6">
               <label for="Nom">Ville :</label> 
        </div>
        <div class="col-sm-6">
            <p><b><?php echo $row['Ville']; ?></b> </p>
        </div>
    </div>

</div>

<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-6">
               <label for="Nom">Telephone :</label> 
        </div>
        <div class="col-sm-6">
            <p><b><?php echo $row['Tele'];  ?></b> </p>
        </div>
    </div>

</div>



<div class="row mt-5 mb-5 justify-content-center">
    <div  class="col-sm-6">
        <a  href="Mise_a_jour_profile.php">
            Modifier votre profil</a>
    </div>
    <div  class="col-sm-6">
        <a  href="profil.php">
            Retour a la page precedent</a>
    </div>
</div>


</div>
  </div>
  </div>
  
  
    


   
 <?php

  }
}
?>
</div></div>
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
<?php
    }
  ?>


