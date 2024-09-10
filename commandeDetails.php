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
  <link rel="stylesheet" href="style/Panel.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="style/commande.css?v=<?php echo time(); ?>">
  
</head>
<body>
<!---NavBar Hedar -->
<div class="d2">
<?php

 
include('include/navbar12.php');
?>





<form action="supprimer_commande.php" method="post">

    <div id="commande_details" class="container"><!-- start container  -->
  
    <div style="position: relative;
    right: 43px;" class="col "><h2 class="h1_title1" data-tilt> Commandes details</h2><br><br></div>

            <div style="width:100%;" class="row ;">
                <div style="width:12.5%; border: 1px solid #9e9e9e85;"  class="col-2 pt-2 pb-2 ">Image</div>
                <div style="width:12.5%; border: 1px solid #9e9e9e85;"  class="col-2 pt-2 pb-2 ">Num de commande</div>
                <div style="width:12.5%; border: 1px solid #9e9e9e85;" class="col-2 pt-2 pb-2 ">Nom de cake</div>
               
                <div style="width:12.5%; border: 1px solid #9e9e9e85;" class="col-2 pt-2 pb-2 ">Weight</div>
                <div style="width:12.5%; border: 1px solid #9e9e9e85;" class="col-2 pt-2 pb-2 ">Prix</div>
                <div style="width:12.5%; border: 1px solid #9e9e9e85;" class="col-2 pt-2 pb-2 ">Date commande</div>
                <div style="width:12.5%; border: 1px solid #9e9e9e85;" class="col-3 pt-2 pb-2 ">Statut</div>
                <div style="width:12.5%; border: 1px solid #9e9e9e85;"class="col-3 pt-2  ">Annuler</div>
                
            </div><!--end row -->
    
       
<?php
include('include/connectiondb.php');


			$idUs=$_SESSION['id'];
$res=mysqli_query($conn,"SELECT distinct(c.idCommande), c.*,comande.DateFaireCommande,
comande.Staut_Id,c.IdProduct,produit.Image_Product,produit.ProuductName 
from c INNER join comande on c.idCommande=comande.idCommande 
INNER join produit on produit.IdProduct=c.IdProduct 
where comande.IdClient='$idUs' and Staut_id!='4' and Staut_id!='5' ");



 $totalprix=0;
if ($res->num_rows > 0) {
  
 
// output data of each row
$count=0;
while($row=mysqli_fetch_assoc($res)) {
 
  ?>
<!-- html -->
     


           <?php $idstaut=$row['Staut_Id'];
         
           $_SESSION[ 'AllCommande'][$count]=array(
            'idCommande'=>$row['idCommande'],
            'id'=>$row['id'],
            'idProdu'=>$row['IdProduct'],
            );
            $count=count( $_SESSION[ 'AllCommande'])+1;
           $resul=mysqli_query($conn,"SELECT TypeStaut from staut where Staut_Id='$idstaut' ");
           $rows=mysqli_fetch_assoc($resul);

           $totalprix+=$row['prix'];
           
           ?>
            <div style="width:100%;" class="row ">
                <div style="width:12.5%; border: 1px solid #9e9e9e85;" class="col-sm-2 pt-2 pb-2 "><img width="100%"  src="img/<?php echo $row['Image_Product'] ;?>" alt=""></div>
                <div style="width:12.5%; border: 1px solid #9e9e9e85;" class="col-sm-2 pt-2 pb-2 "><?php echo $row['idCommande']

 ?></div>
                <div style="width:12.5%; border: 1px solid #9e9e9e85;" class="col-sm-2 pt-2 pb-2 "><?php echo $row['ProuductName'] ?></div>
                <div style="width:12.5%; border: 1px solid #9e9e9e85;" class="col-sm-2 pt-2 pb-2 "><?php echo $row['Wegiht'] ?>kg</div>
                <div style="width:12.5%; border: 1px solid #9e9e9e85;" class="col-sm-2 pt-2 pb-2 "><?php echo $row['prix'] ?> Dhs</div>
                <div style="width:12.5%; border: 1px solid #9e9e9e85;" class="col-sm-2 pt-2 pb-2 "><?php echo $row['DateFaireCommande'] ?></div>
                <div style="width:12.5%; border: 1px solid #9e9e9e85;" class="col-sm-2 pt-2 pb-2 "><?php echo $rows['TypeStaut'] ?> </div>
                <div style="width:12.5%; border: 1px solid #9e9e9e85;" class="col-sm-2 pt-2 pb-2 ">
                    
                <?php 
                    $num_cmd=$row['IdProduct'];
                    $_SESSION['idC']=$row['id'];
                    $_SESSION['idP']=$row['IdProduct'];
                    $_SESSION['idCom']=$row['idCommande'];
                    $weight=$row['ProuductName'];
                   $idcommande=$row['idCommande'];
                   $id=$row['id'];

                    echo
                    '<a  class="btn btn_p_panier "style="    padding: 3px;
                    margin-top: 18px;
                    color: white;
                    border-radius: 13px;
                    height: 62px;
                    width: 122px;
                    
                    text-align: center;"name="btn_annuler_cmd" id="btn_annuler_cmd"
                    href="supprimer_commande.php?num_cmd='.$num_cmd.'&weight='.$weight.'&idcommande='.$idcommande.'&id='.$id.'">'
                ?>
                Annuler la commande
                </a>
                   
                 
                    
                </div>
                
            </div>
    

    
<?php
}
}







?>

<div class="row mt-5 justify-content-center">
<!-- <div class="col-sm-3">
        
                    echo
                    '<a class="btn btn_p_panier "style="padding:15px 30px;color: white; ;"name="btn_annuler_cmd" id="btn_annuler_cmd"
                    href="supprimer_tous_commande.php">'
                ?>
                Annuler toutes les commandes
                </a>
</div> -->
</div>

</div> <!--end container -->

</form>


<!-- ----------------------------------------------------------------------------------------------------------------------- -->

<!-- Final Payment -->
<?php
 
 if($totalprix>0){
 $resulfinal=mysqli_query($conn,"SELECT * from comande where 	IdClient ='$idUs' ");
           $rowsf=mysqli_fetch_assoc($resulfinal);
?>

<center> <div  class="col-md-4">
                        <div style="width: 591px;
    position: relative;
    right: 40px;
    bottom: 35px;" class="card mb-4">
                          <div class="card-header py-3">
                           
                              <h5  class="mb-0"> Final payment  </h5>

                          </div>
                          <div class="card-body">
                            <ul class="list-group list-group-flush">
                             
                           
                              <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                Date livraison:
                                <span><strong>
                                <?php  echo $rowsf['Datee'] ?>
                                </strong></span>
                              </li>
                              <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                Total (
tout produit):
                                <span><strong>
                                <?php  echo $totalprix.'Dh' ?>
                                </strong></span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                               La livraison:
                                <span> <strong>20Dh</strong></span>
                              </li>
                              <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                <div>
                                  <strong>Total final:</strong>
                                
                                </div>
                                <span><strong>
                                <?php  if( $totalprix==0) echo $totalprix;
                                else {
                                  $amountship=$totalprix+20;
                                  echo $amountship.'Dh';
                                }  ?>
                                </strong></span> 
                              </li>
                            </ul>
                
                            <div class="-pas -bg-wt">
                                <p style="color: black; font-weight: bold; margin-top: 10px;" class="-fs12 -ptxs">Les articles Your Cake sont éligibles à la livraison 20Dh
                                pour plus de détails contactez nous dans cet email yourcake@gmail.com
                                &nbsp;</p></div>
                          </div>
                        </div>
                    </div> </center>
                    <?php
 }
 if($totalprix==0){
  
  // $id_client=$_SESSION['id'];
            
 
       
  // $query = "UPDATE `comande` 
  //           SET 
            
  //           Staut_Id ='4'
           
  //           WHERE idClient='$id_client'";
  //  $result=$conn->query($query);
 }
 ?>
<!-- product card meilleur ventes -->

<div class="row g-3">
           <h2> Nos clients ont également acheté</h2>
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

 
include('include/footer.php');
?>
</div>

</body>
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
<?php
    }
    ?>
    