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
            


            <div class="col-sm-12  ">
                <div class="row justify-content-center ">
                    <div class="col-md-6">
                        <div style="width: auto;" class="card registereff">
                        <header class="card-header">
                            
                            <h4 class="card-title mt-2">Mise a jour de mot de passe</h4>
                        </header>
                        <article class="card-body">
                        <form action = "changer_pass.php" method = "post">
                        <h4></h4>
                            <div class="form-group">
                                <label></label>
                              
                               
        
                                <label></label>
                                <input  class="form-control" type="password" name="txtpass1" placeholder="Le nouveau Mot de passe"> <br>
                                <input  class="form-control" type="password" name="txtpass2" placeholder="Confirmer le nouveau mote de passe "><br>
                                <br>
                                <button  style="color:#fff"; type="submit" data-tilt name="btn_modifier_pass"  class="btn btn_p_panier "> Enregistrer  </button>
                                <button  style="color:#fff"; type="reset" data-tilt  class="btn btn_p_panier "> Vider  </button>
                            </div> <!-- form-group end.// --> 
                            <br><br> 
                        </form>
<?php
$username = "";
$email    = "";
$errors = 0; 

// connect to the database
include("include/connectiondb.php");

 if(isset($_POST['btn_modifier_pass']))
 {

    $password_1 = mysqli_real_escape_string($conn, $_POST['txtpass1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['txtpass2']);


    if(empty($password_1)||empty($password_2))
    {

    
        echo '<script type = "text/javascript">';
        echo 'alert("tous les champs sont obligatoires !!");';
        echo 'window.location.href = "changer_pass.php" ';
        echo '</script>';
    }
    else
    {
            $id_client=$_SESSION['email'];
            
         
       
          
             if ($password_1 != $password_2) 
                {
                echo '<script type = "text/javascript">';
                echo 'alert("le mot de passe incorrect !!");';
                echo 'window.location.href = "changer_pass.php" ';
                echo '</script>';
                }
            else
            {
                    $query = "UPDATE `client` SET 
                    `MotPass`='$password_1'
                    WHERE login='$id_client'";
                    mysqli_query($conn, $query);

                    $select = mysqli_query($conn," SELECT * FROM client WHERE login='$id_client' ");
                    $row  = mysqli_fetch_array($select);

           
                    if($password_1===$row['MotPass'])
                    {
                        echo '<script type = "text/javascript">';
                        echo 'alert("modifier avec succes !!");';
                        echo 'window.location.href = "Profil_Info.php" ';
                        echo '</script>';  
                        
                     }
             }
    }

       
}
// ?>
                        



                        
                        </article> <!-- card-body end .// -->
                        <div class="border-top card-body text-center">retour a la page precedent<a id="btn_cn_vous" 
                         href="Mise_a_jour_profile.php">Annuler</a></div>
                        </div> <!-- card.// -->
                        <span></span>
                    </div> <!-- col.//-->
                        
                        </div> <!-- row.//-->
                        
                    
                    </div> 
                    

                    
            </div>
            </div>


    <?php
  include("include/footer.php");

?>
 </div>
 <!-- <script src=""></script> -->
 <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <!-- bootstrap.js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- font awsome -->
  <script src="https://kit.fontawesome.com/36dc84739e.js" crossorigin="anonymous"></script>

  <!-- my script -->
  <script src="js/script.js"></script>
  <!-- vanilla tilt -->
  <script src="js/vanilla_tilt.js"></script>
</body>
</html>
<?php
    }
    ?>

