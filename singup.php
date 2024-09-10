<?php
session_start();
if(isset($_SESSION['email']))
{
  echo '<script type = "text/javascript">';
  echo 'alert("Deja conncter")';
  echo '</script>';
  echo '<script type = "text/javascript">';
 echo 'window.location.href = "profil.php"';
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
  <link rel="stylesheet" href="style/Signup.css?v=<?php echo time(); ?>">
 <link rel="stylesheet" href="style/Style.css?v=<?php echo time(); ?>">
 
  
    <title>Signup</title>
</head>
<body>
    <!-- include navbar 1 et 2  -->

    <?php
     include "include/navbar12.php";
     ?>

    <!--  end include navbar 1 et 2  -->
   <div class="d2">
   <section class="vh-50" style="background-color: rgba(244, 248, 255, 0.788);">
        <div class="container ">
          <div class="row  justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card1 text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="eurordiv">
                      
                      
                      <p id="peuror"></p>
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Créez Votre Compte</p>
      
                      <form id="form" class="mx-1 mx-md-4" method="POST" action="register.php"  onsubmit="return Validation(); ">
                      <div class="d-flex flex-row align-items-center mb-4">
                          
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" name="IdClient" for="form3Example1c">Votre Id</label>
                            <input name="IdClient" type="text" id="idclt" class="form-control"  placeholder="Votre ID" />
                            
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                          
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" name="prenom" for="form3Example1c">Prenom</label>
                            <input  name="prenom" type="text" id="prenom" class="form-control"  placeholder="Votre Prenom" />
                            
                          </div>
                        </div>
                        
                       
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" name="email" for="form3Example3c">Email</label>
                            <input name="email" type="email" id="email" class="form-control" placeholder="Votre Email " />
                            
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                        
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4c">Mot Pass</label>
                            <input type="password" name="password_1" id="password" class="form-control" placeholder="*****" />
                            <div class="form-outline flex-fill mb-0">
                            <label class="form-label"  for="form3Example4c">Repter Mot Pass</label>
                            <input type="password" name="password_2" id="password2" class="form-control" placeholder="*****" />
                           
                          </div>
                          </div>
                         
                        </div>
      
                        <!-- <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="form3Example4cd" class="form-control" />
                            <label class="form-label" for="form3Example4cd">Repeter Mot Pass</label>
                          </div>
                        </div> -->
                        <div class="d-flex flex-row align-items-center mb-4">
                            
                            <div class="form-outline flex-fill mb-0">
                                <label class="form-label" for="form3Example4cd">Tele</label>
                              <input type="tel" name="tel" id="tele" class="form-control" placeholder="06........" />
                              
                            </div>
                            
                          </div>
                          <div class="d-flex flex-row align-items-center mb-4">
                            
                            <div class="form-outline flex-fill mb-0">
                                <label class="form-label" for="form3Example4cd">Ville</label>
                              <input type="text" name="ville" id="ville" class="form-control" placeholder="votre adresse " />
                              
                            </div>
                            
                            
                          </div>
                         <div class="d-flex flex-row align-items-center mb-4">
                            
                            <div class="form-outline flex-fill mb-0">
                                <label class="form-label" for="form3Example4cd">Adresse</label>
                              <input type="text" name="adresse" id="adresse" class="form-control" placeholder="votre adresse " />
                              
                            </div>
                            
                            
                          </div>
                          
                          <div class="d-flex flex-row align-items-center mb-4">
                            
                            <div class="form-outline flex-fill mb-0">
                             
                              <div class="form-check">
                                
                                
                              </div>
                            </div>
                          </div>
      
                        <div class="form-check d-flex justify-content-center mb-5">
                          <input
                            class="form-check-input me-2"
                            type="checkbox"
                            value=""
                            id="form2Example3c"
                          />
                          <label class="form-check-label" for="form2Example3">
                          Je suis d'accord avec toutes les déclarations dans <a href="terms.php">
Conditions d'utilisation</a>
                          </label>
                        </div>
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        
                          <button type="submit" name="send" class="btn1 btn-primary btn-lg" >Register </button>
                        </div>
      
                      </form>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
                      <img src="img/1445007519.svg" class="img-fluid" alt="Sample image">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
   
      <?php
     include "include/footer.php";
    
     ?>
</div>

<script>
  


</script>

    <!-- -------------------------- -->
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
<?php
}
?>