<?php 

//tester si le admin connecter ou non
include "../include/connectiondb.php";
session_start();

if(!isset($_SESSION['role']))
  {
        echo '<script type = "text/javascript">';
        echo 'alert("vous devez connecter !!");';
        echo 'window.location.href = "../login.php" ';
        echo '</script>';// Redirecting To Profile Page
  }
  else
  {
    // $_SESSION["id_client"];
    // $_SESSION["Username"];
    // $_SESSION["Pass"];
    // $_SESSION["lname"];
    // $_SESSION["fname"];
  }


  if(isset($_GET['getid']))
  {
      $idc=$_GET['getid'];
      $_SESSION['idc']= $idc;
  }
   






?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <title>Gestion de produit</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="dist/css/style2.css" rel="stylesheet" >
    <link href="dist/css/moi.css" rel="stylesheet" >
    

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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    
<![endif]-->
<style>
    .firstdiv{
        background-color: #fff;
    width: auto;
    height: 138px;
    
    display: flex;
    justify-content: space-between;
    background-color: #3f51b580;
}
.firstdiv div{
margin:40px
}
.firstdiv div h4{
    font-size: 18px;
    color: #fff;
}



    
</style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php
     include "header.php";
        ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
     include "sidebar.php";
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Commande details</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                                    <!-- <li class="breadcrumb-item"><a href="index.php">Produits</a></li> -->
                                    <li class="breadcrumb-item active" aria-current="page">Commande details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <?php
                 if(isset($_GET['getid']))
                 {
                     $idc=$_GET['getid'];
                     
                 
                                 
                
                 }
                ?>
                <!-- ============================================================== -->
                <div class="container" >
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6" >
                                    <h2><b>Commande Statut</b> </h2>
                                   
                                </div>
                                
                                
                            </div>
                        </div>

                        <div class="firstdiv">
                           <div>
                          <h4 style="color:white"> Date livraison :</h4>
                           <?php
                               $req=mysqli_query($conn, "SELECT   
                               comande.Datee
                               from comande 
                                where comande.idCommande='$idc'");
                                           
                                            $date=mysqli_fetch_array($req)[0];
                            ?>
                               <h4 style="font-size: 16px;"><img style=" width: 27px;" src="icons8-date-64.png" alt="" ><?php echo $date;?></h4>
                              
                               
                               <?php
                               $st=mysqli_query($conn, "SELECT   
                               staut.TypeStaut
                               from comande inner join staut on
                               
                               staut.Staut_Id=comande.Staut_Id
                                where comande.idCommande='$idc'");
                                           
                                            $statut=mysqli_fetch_array($st)[0];
                               ?>
                              
                              <p style="   color: white;
    font-size: 21px;
    position: relative;
    left: 257px;
    bottom: 62px;">
                                <img style="    width: 27px;
    width: 27px;
" src="icons8-parameter-64.png" alt="" > statut : 
                                 <span style="font-size:16px;">
                                   <?php echo $statut;?>
                                  </span>
                              </p>
                           </div>
                           <div>
                           <!-- <select style="    border: 1px solid #eeeeee;
    border-radius: 9px;
    width: 176px;
    height: 40px;" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected>Change statut </option>
  <option value="1">On révision</option>
  <option value="2">Accepter</option>
  <option value="3">Delevry</option>
  <option value="4">Annuler</option>
</select> -->
<?php
if($statut!='Terminer')
{
    ?>
    <form action="Ordersedit.php" method="post">
<select 
style="    border: 1px solid #eeeeee;
    border-radius: 9px;
    width: 176px;
    height: 40px;" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"
id="statut" name="statut">
                                            <!-- tan3mro dropdown list  mn database b categorie -->
                                            <!-- onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text" -->

                      <?php
                      $query="SELECT  * FROM `staut` ";
                      $query_run=mysqli_query($conn,$query);
                      while($row=mysqli_fetch_array($query_run))
              {
                      ?>       
                                                      <option  value="<?php echo $row['Staut_Id'] ?>">
                                                      <?php echo $row['TypeStaut'] ?>
                                                      </option>
                      <?php
              }
                      ?>
</select>
<button type="submit" style="    margin-bottom: 3px;
    height: 38px;
    border-radius: 8px;
    margin-left: 5px" type="button" class="btn btn-labeled btn-primary">
                <span class="btn-label"><i class="glyphicon glyphicon-camera"></i></span>Change</button>
                </form>
<?php
}
?>



                           </div>
                        </div>
                        
                     <!-- information sur le client : -->
                     <div class="container mt-5 ">

                     
                     <h3>Client infos</h3>
                     <table class="table table-striped table-hover">
            <thead>
                                <tr>
                                    <th>ID de client</th>
                                    
                                    <th>Nom du client</th>
                                    <th>Ville</th>
                                    <th>Tele</th>
                                    
                                </tr>
    </thead>
    <?php
            
                            
            $query="SELECT 		client.IdClient, 
                              client.PrenomClt, 
                              client.Ville,
                              client.Tele
                              from comande
                              INNER join client   
                              on 
                              client.IdClient=comande.IdClient 
                              where comande.idCommande='$idc' group by IdClient";
             $query_run=mysqli_query($conn,$query);
             while($row=mysqli_fetch_array($query_run))
      {
             ?>
    <tr style="background-color:#fff">
         <th><?php echo $row['IdClient'];?></th>
        
        <td><?php echo $row['PrenomClt'];?></td>
        <td><?php echo $row['Ville'] ;?></td>
        <td><?php echo $row['Tele'] ;?></td>
        
        
    </tr>
    <?php
      }
    ?>
                          
                        </table>
                        </div>

                     <!-- information sur le client : -->
                     <h3 class="mt-5">Commande details</h3>



                        <table style="background-color:#fff" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    
                                    <th>Nom de produit</th>
                                    <th>Adresse de livraison</th>
                                    <th>numero de destinataire</th>
                                    <th>Prix </th>
                                    <th>Wegiht</th>
                                    <!-- <th>prix de livraison</th> -->
                                    
                                    
                                </tr>
    </thead>
    <?php
            $query="SELECT 
            c.*,
            comande.*,
            client.PrenomClt,
            produit.ProuductName
            from c 
            inner join comande inner join client
            inner join produit
            on comande.idCommande=c.idCommande
            and 
            client.IdClient=comande.IdClient
            and produit.IdProduct=c.IdProduct
             where comande.idCommande='$idc'";
            // else
            // {
            //   echo '<script type = "text/javascript">';
            //    echo 'alert("errrrr !!");';
            //    echo 'window.location.href = ".php" ';
            //  echo '</script>';// Redirecting To Profile Page
            // }

             $query_run=mysqli_query($conn,$query);
             while($row=mysqli_fetch_array($query_run))
      {
             ?>
    <tr style="background-color:#fff">
        
        <td><?php echo $row['ProuductName'] ;?></td>
        <td><?php echo $row['Adresse_livraison'] ;?></td>
        <th><?php echo $row['Tele_Distignateur'] ;?></th>
        <td><?php echo $row['prix'] ;?></td>
        <td><?php echo $row['Wegiht'] ;?></td>
        
        
        
    </tr>
    
    <?php
      }
    ?>     
                          
                        </table>
        <table style="background-color:#fff" class="table table-striped table-hover">
          <?php
          $result1=mysqli_query($conn, "SELECT   
          comande.PrixTotal
          from c 
          inner join comande inner join client
          inner join produit
          on comande.idCommande=c.idCommande
          and 
          client.IdClient=comande.IdClient
          and produit.IdProduct=c.IdProduct
           where comande.idCommande='$idc'");
                      
                       $prixtotal=mysqli_fetch_array($result1)[0];
                      //  prix de livraison 
          $result1=mysqli_query($conn, "SELECT   
          comande.livraison_Prix
          from c 
          inner join comande inner join client
          inner join produit
          on comande.idCommande=c.idCommande
          and 
          client.IdClient=comande.IdClient
          and produit.IdProduct=c.IdProduct
           where comande.idCommande='$idc'");
                      
                       $prixliv=mysqli_fetch_array($result1)[0];
                       
                          
          ?>
          <hr style="border-top: 3px solid #bbb;">
          <tr style="color:#eb4034;
          font-weight: bold;">
            
          <th >
            Prix de livraison :
          </th>
          <th>
            <?php echo $prixliv;?> Dhs
         </th>
          </tr>
  
  <tr>
    
  <th style="font-size:1.2rem;">
    Prix total :
  </th>
  <th style="font-size:1.2rem;
  color:#19b049;font-weight: bold;">
    <?php echo $prixtotal;?> Dhs
  </th>
  </tr>
          
        </table>
                    <!-- paggination -->
                      
                    
                    
                    </div>
                </div>
                
                
                
               
                
                
                
                
                
                
                
                
                
                
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by <b>YOUR CAKE</b>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <!-- bootstrap.js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- font awsome -->
  <script src="https://kit.fontawesome.com/36dc84739e.js" crossorigin="anonymous"></script>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

</body>

</html>