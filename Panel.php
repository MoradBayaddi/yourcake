
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
  <!-- styling -->
  <link rel="stylesheet" href="style/Panel.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="style/Style.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php
    
    include 'include/navbar12.php';
    ?> <div class="d2">
    <?php
  














  




?>

    <section class="s1" >
        <div class="container py-5 ">
          <?php
         
          if($count==0){
            unset($_SESSION['products_']);
            ?>
            <div class="d-flex justify-content-between align-items-center mb-5">
            <h2>Panier</h2>
            <h5 style="margin-bottom=60px;"> Vous n'avez rien dans votre panier. Ajoutons le Cake à votre panier</h5>
            <div class="image" id="image">
                 <img src="img/emptyCart.cb27a821.svg" alt="ssss" >
            </div>
            
          <?php
          }
          
          else{
            
            ?>
            <?php $count=0; if(isset($_SESSION['products_'])) $count=count($_SESSION['products_']); ?>
 <div class=" card-registration card-registration-2" style="background-color: #fff;" style="border-radius: 15px;">
                <div class="card-body p-0">
                  <div class="row g-0">
                    <div class="col-lg-8" id="">
                      <div class="p-5">
                        <div class="d-flex justify-content-between align-items-center mb-5">
                          <h1 class="fw-bold mb-0 text-black">Panier</h1>
                          <h6 class="mb-0 text-muted"><span>
                          (<?php echo $count;?>)
                          </span> items</h6>
                        </div>
                        <hr class="my-4">
                        <?php
                if(isset($_SESSION['products_'])){
                  $total=0;
                  $_SESSION['ship']=20;
                          foreach($_SESSION['products_'] as $key=>$value)
                          {
                            $total=$total+$value['prix'];
                            ?>
                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                          <div class="col-md-2 col-lg-2 col-xl-2">
                            
                              <?php echo'<img src="img/'.$value['img'].'" class="img-fluid rounded-3" alt="image">';?>
                              
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            
                            <h6 class="text-black mb-0"><?php echo $value['product'];?></h6>
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                           
      
                            <input  id="form1" min="1" name="quantity" value="1" type="hidden"
                              class="form-control form-control-sm" />
      
                              <input class="iquantity"  name="id"  type="hidden" value='<?php echo$value['id']?>' 
                                
                                
                               />
                          </div>
                          
                          <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 id="prixitem" class="mb-0"><?php echo $value['prix'];?>Dh<input type="hidden" class="iprice" value='<?php echo $value['prix'];?>'/></h6>
                            <h6 class=""><?php echo $value['wegiht'];?>Kg</h6>
                          </div>
                          <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                            <form  action="Cart.php" method="post">
                               <button value="<?php echo $value['id'];?>" name="Remove_Item"  class="text-muted"><i class="fas fa-times"></i></button></form>
                           
                          </div>
                        </div>
                        <?php
                          }

                        }
                        ?>
                        
                     
      
                        <hr class="my-4">
      
                       
                       
      
                        <div class="pt-5">
                          <h6 class="mb-0"><a href="AllProuducts.php" class="text-body"><i
                                class="fas fa-long-arrow-alt-left me-2"></i>Continuer mes achats</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class=" mb-4">
                          <div class="card-header py-3">
                            <h5 class="mb-0">RÉSUMÉ DU PANIER</h5>
                          </div>
                          <div class="card-body">
                            <ul class="list-group list-group-flush">
                              <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                Les Produits
                                <span><strong><?php echo $total;
                                $_SESSION['sumProducts']=$total;
                                ?>Dh</strong></span>
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
                                
                                <span><strong><?php if($total==0)
                                {
                                  $_SESSION['ship']=0;
                                  $gl=$_SESSION['ship']+$total;
                                  echo  $gl ;
                                }
                                else{
                                  echo $_SESSION['ship']+$total;
                                  $_SESSION['total']=$_SESSION['ship']+$total;
                                }

                                ?>Dh</strong></span>
                              </li>
                            </ul>
                
                            <button type="button" class="btn btn-primary btn-lg btn-block">
                                <a id="commande" href="commander.php">Commander</a>
                            </button>
                            <div class="-pas -bg-wt">
                                <p style="color: black; font-weight: bold; margin-top: 10px;" class="-fs12 -ptxs">Les articles Your Cake sont éligibles à la livraison 20Dh&nbsp;</p></div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
            <?php
          }
       
          ?>
           
             
              </div>
            
            
          
       
        
        
      </section>
        <!-- include footre 1  -->
         <?php
            include("include/footer.php");
         ?>
    
      </div>
</div>

    <!--  end include footre  -->

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



