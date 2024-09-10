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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
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
                        <h4 class="page-title">Gestion des produits</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Produits</li>
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
                <!-- ============================================================== -->
                <div class="container" >
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6" >
                                    <h2><b>Les Produits</b> </h2>
                                   
                                </div>
                                 <div class="col-sm6">
                                     <a href="ajouter_prod.php"  class="btn btn-success" >Ajouter un produit</a>
                                    </div>
                                
                            </div>
                        </div>


                      
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        
                                     </th>
                                    <th>Id Produit</th>
                                    <th>Nom</th>
                                    <th>Prix</th>
                                    <th>Decription</th>
                                    <th>Description Details</th>
                                    <th>Nom Categorie</th>
                                    <th>Flavour</th>
                                    <th>image</th>
                                </tr>
                            </thead>
                            <?php
            
                            
            $query="SELECT
            p.IdProduct,
            p.ProuductName,
            p.Prix ,
            p.Decription ,
            p.Description_Details,
            p.Image_Product, 
            c.NomCategorie, 
            flavour.NameFlavour 
            FROM produit p 
            INNER JOIN categorie c 
            INNER join flavour on 
            p.NumCategorie=c.NumCategorie and 
            flavour.id_Flavour=p.id_Flavour order by p.IdProduct;  ";
             $query_run=mysqli_query($conn,$query);
             while($row=mysqli_fetch_array($query_run))
      {
             ?>
                            <tbody>
                                <tr>
                                    <td>
                                        
                                    </td>
                                    <th><?php echo $row['IdProduct'] ;?></th>
                                    <th><?php echo $row['ProuductName'] ;?></th>
                                    <th><?php echo $row['Prix'] ;?></th>
                                    <th><?php echo $row['Decription'] ;?></th>
                                    <th><?php echo $row['Description_Details'] ;?></th>
                                    <th><?php echo $row['NomCategorie'] ;?> </th>
                                    <th><?php echo $row['NameFlavour'] ;?></th>
                                    <th><img style="width:100px;" src="../img/<?php echo $row['Image_Product'] ;?>" alt="" srcset=""></th>
                                    <th></th>
                                    <td>
                                        <a href="modifier_prod.php?edit=<?php echo $row['IdProduct']; ?>" class="edit" ><i class="fas fa-edit" title="Ajouter Produit"></i> </a>
                                        
                                        <a href="supprimerProd.php?delete_id=<?php echo $row['IdProduct']; ?>" onclick="return confirm('Voulez vous vraiment supprimer ce Produit ?? !');">
                                        <i class="fas fa-trash-alt" title="Supprimer"></i></a>

                                        
                                    </td>
                                </tr>
                                
                                
                                
                                <?php
      }
                                ?>
                            </tbody>
                          
                        </table>
                    
                    
                    
                    </div>
                </div>
                
                <!-- modal Ajouter un produit -->
                
                <div id="addpoduit" class="modal fade " >
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                                <div class="modal-header">
                                    <h4 class="modal-title">Ajouter un Produit</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name">Le nom</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">La categorie</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Description</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Prix</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="modal-fooder">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                                        <input type="submit" class="btn btn-success" value="Ajouter">
                                    </div>
                                </div>
                            </form>
                    </div>
                  </div>
                </div>
                
                 <!-- modal modifier un produit -->
                <div id="ProduitModal" class="modal fade " >
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                                <div class="modal-header">
                                    <h4 class="modal-title">Modifier un Produit</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name">Le nom</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">La categorie</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Description</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Prix</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="modal-fooder">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                                        <input type="submit" class="btn btn-success" value="Ajouter">
                                    </div>
                                </div>
                            </form>
                    </div>
                  </div>
                </div>
                
                 <!-- modal supprimer -->
                <!-- <div id="SPProduitModal" class="modal fade " >
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                          <div class="modal-header">
                            <h4 class="modal-title">Suppression de Produit</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          </div>
                          <div class="modal-body">
                            <p>Tu es sûre que tu veux supprimer ce Produit.</p>
                            <p class="text-warnig"><small>tu sure</small></p>
                          </div>
                          <div class="modal-footer">
                           <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                           <?php 
                                            // $IdProduct=$row["IdProduct"]; 
                                            // echo
                                            // '<a  class="btn btn-danger"
                                            //  name="SuppP" href="supprimerProd.php?IdProduct='.$IdProduct.'">'
                                         ?>
                            <a   value="Supprimer"></a>
                          </div>
                        </form>
                    </div>
                  </div>
                </div> -->
                
                
                
                
                
                
                
                
                
                
                
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