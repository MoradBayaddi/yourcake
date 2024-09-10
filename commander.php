
<?php



if(!isset($_SESSION)) 
{ 
    session_start(); 
   
} 


if( !isset($_SESSION['products_']))
{
  header("location:Panel.php");
}
if(isset($_SESSION['email'])  )
{
  
 
 
  

 
  
 
	 
	
  
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
  <link rel="stylesheet" href="style/Panel.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="style/commande.css?v=<?php echo time(); ?>">
</head>
<body>
<!---NavBar Hedar -->

<?php

 
include('include/navbar12.php');
?>
 <!-- Checkout Start -->
<div class="d2">
<div class="container-fluid pt-5">
  <form action="fairecommande.php" onsubmit="return Valide()" method="POST">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Details information</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Prenom</label>
                            <input required  class="form-control" type="text"  name="prenom" placeholder="Votre Prenom">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Adresse Livraison</label>
                            <input required  class="form-control" type="text" name="adresss" placeholder="Massira Zrektouni ">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input required  class="form-control" type="text" name="email" placeholder="example@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Telephone</label>
                            <input required  class="form-control" type="text" name="tele" maxlength = "10" minlength = "10" placeholder="0622161012">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Date livraison</label>
                            <input required  id="da" class="form-control" type="text" name="datee" placeholder="2022/05/18">
                        </div>
                       
                       
                        <div class="col-md-6 form-group">
                            <!-- <label>Decoration de Cake:</label> -->
                            <input class="form-control" name="messagecake" type="hidden" placeholder="Happy birthday Yassine -عيد ميلاد سعيد ">
                        </div>
                        <input type="hidden" nom="sumProduit" value="<?php
                               echo $_SESSION['sumProducts']?>">
                      
                        <input style="width:97%; margin:10px  " class="btn btn-primary btn-lg btn-block" id="commande" type="submit" name="sub" href="commander.php" value="Confirmer votre commande ">
                            
                 
                       
                    </div>
                </div>
               
            </div>
            
            </form>
            <div class="col-md-4">
                        <div class="card mb-4">
                          <div class="card-header py-3">
                            <h6 class="mb-0">VOTRE COMMANDE(<?php $count=0; if(isset($_SESSION['products_'])){ $count=count($_SESSION['products_']);}
                             ?><?php echo $count.'Cake)';?>
</h6>
                          </div>
                          <div class="card-body">
                            <ul class="list-group list-group-flush">
                              <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                Les Produits
                                <span><strong><?php
                               echo $_SESSION['sumProducts'].'Dh';
                                ?></strong></span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                               La livraison
                                <span> <strong>20Dh</strong></span>
                              </li>
                              <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                <div>
                                  <strong>Total amount</strong>
                                
                                </div>
                                <span><strong>
                                <!-- 
                                // {
                                //   $shipping=0;
                                //   echo $shipping+$total;
                                // }
                                // else{
                                //   echo $shipping+$total;
                                // }

                                // ?>--><?php echo $_SESSION['total'].'Dh';?></strong></span> 
                              </li>
                            </ul>
                
                            <div class="-pas -bg-wt">
                                <p style="color: black; font-weight: bold; margin-top: 10px;" class="-fs12 -ptxs">Les articles Your Cake sont éligibles à la livraison 20Dh&nbsp;</p></div>
                          </div>
                        </div>
                    </div>
        </div>
    </div>
    <!-- Checkout End -->


 


 

<!---Fottter -->

<?php

include('include/footer.php');
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
  <script src="js/script.js?<?php echo time(); ?>"></script>
 <?php
}
else{
  echo '<script type = "text/javascript">';
  echo 'alert("Doit etre connecte Mr")';
  echo '</script>';
  echo '<script type = "text/javascript">';
 echo 'window.location.href = "Login.php"';
  echo '</script>';
}
?>

