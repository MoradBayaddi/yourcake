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
  <link rel="stylesheet" href="style/reg.css?v=<?php echo time(); ?>">

  

</head>
<body>
  
<!---NavBar Hedar -->
<div class="d2">
  <?php
  include('include/navbar12.php')
  ?>
  <div class="container-fluid mt-5 mb-5">
        <div class="row ">
            <div class="row">
                <div style="position: relative;
    right: 43px;" class="col "><h2 class="h1_title1" data-tilt> Mettre À Jour Votre Adresse </h2><br><br></div>
              


            <div class="col-sm-12  ">
                <div class="row justify-content-center ">
                    <div class="col-md-6">
                        <div style="width: auto;" class="card registereff">
                        <header class="card-header">
                            
                            <h4 class="card-title mt-2"><?php echo $_SESSION['email'];  ?></h4>
                        </header>
                        <article class="card-body">
                        <form method="post" action="Mise_a_jour_profile.php">
                            <div class="form-row">
                                
                                <div class="col form-group">
                                    <label></label>
                                    <input  type="text" class="form-control" name="txtprenom" placeholder="Prenom ">
                                </div> <!-- form-group end.// -->
                            </div> <!-- form-row end.// -->
                          
                          
                        <div class="col-md-12">
                            <label></label>
                            <input  type="text" class="form-control" name="txtadresse" placeholder="Adresse">
                        </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label></label>
                                <input type="text" class="form-control" name="txtville" placeholder="Ville">
        
                                <div class="form-group col">
                                    <label></label>
                                    <input  type="text" class="form-control" name="txttel" placeholder="Telephone ">
                                </div> <!-- form-group end.// -->
        
                                <br><br>
                                
                            </div> <!-- form-row.// -->
                           
                            <div class="form-group">
                                <button style="color:#fff"; type="submit" data-tilt name="btn_modifier"  class="btn btn_p_panier "> Enregistrer  </button>
                                <button style="color:#fff";  type="reset" data-tilt  class="btn btn_p_panier "> Annuler  </button>
                                <a style="color:#fff"; class="btn btn_p_panier" href="changer_pass.php">changer le mot de passe</a>
                            </div> <!-- form-group// -->      
                                                                    
                        </form>


   
   
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
<?php
$username = "";
$email    = "";
$errors = 0; 

// connect to the database
include("include/connectiondb.php");
 

if(isset($_POST['btn_modifier']))
{
   
    $prenom = mysqli_real_escape_string($conn, $_POST['txtprenom']);
    $adresse = mysqli_real_escape_string($conn, $_POST['txtadresse']);
    $ville = mysqli_real_escape_string($conn, $_POST['txtville']);
    $tel = mysqli_real_escape_string($conn, $_POST['txttel']);

    if(empty($prenom)||empty($adresse)||empty($ville)||
    empty($tel))
    {

    
        echo '<script type = "text/javascript">';
        echo 'alert("tous les champs sont obligatoires !!");';
      
        echo '</script>';
    }
    else
    {
            
            // $user_check_query = "SELECT * FROM client WHERE id_client='$id_client' ";
            // $result = mysqli_query($db, $user_check_query);
            // $user = mysqli_fetch_array($result);

                    $id_client=$_SESSION['email'];
            


                    $query = "UPDATE `client` 
                    SET 
                    
                    `PrenomClt`='$prenom',
                    `AdresseClt`='$adresse',
                    `Ville`='$ville',
                    `Tele`='$tel'
                    WHERE login='$id_client'";
                    mysqli_query($conn, $query);
                    echo '<script type = "text/javascript">';
                            echo 'alert("modifier avec succes !!");';
                            echo 'window.location.href = "Profil_Info.php" ';
                            echo '</script>';  

                //     $select = mysqli_query($conn," SELECT * FROM client WHERE idClient='$id_client'");
                //     $row  = mysqli_fetch_array($select);

                // if(is_array($row)) 
                //     {
                //         $_SESSION["id"]=$row['idClient'];
                //         $_SESSION["Username"] = $row['login'];
                       
                //         $_SESSION["fname"]=$row['PrenomClt'];

                //         if($prenom==$row['PrenomClt'] && $adresse==$row['AdresseClt']
                //         && $ville==$row['Ville'] && $tel==$row['Tele'])
                //         {
                //             echo '<script type = "text/javascript">';
                //             echo 'alert("modifier avec succes !!");';
                //             echo 'window.location.href = "Profil_Info.php" ';
                //             echo '</script>';  
                        
                //         }
                //         else
                //         {
                //             echo '<script type = "text/javascript">';
                //             echo 'alert("il ya un problem  !!");';
                //             echo 'window.location.href = "Mise_a_jour_profile.php" ';
                //             echo '</script>';  
                //         }
                    

                    
                //     }
                    
             
    }

       
}
?>
     
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

