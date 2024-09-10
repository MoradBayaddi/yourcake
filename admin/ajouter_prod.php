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
<?php
                      
if(isset($_POST['send']))
{
    

        $idp=$_POST['id_p'];
        $nom_p =  $_POST['nom_p'];
        $prix = $_POST['prix'];
        $desc =$_POST['desc'];
        $desc_det = $_POST['desc_det'];
        $img = $_POST['img'];
        $cat =  $_POST['categorie'];
        $flavour = $_POST['flavour'];
        $img2 = $_POST['img2'];

        $user_check_query = "SELECT * FROM produit WHERE IdProduct='$idp'  ";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_array($result);
         
       // if user exists
            if ($user['IdProduct'] == $idp )
            {
              
              echo '<script type = "text/javascript">';
              echo 'alert("ce produit est deja utilise !!")';
              echo '</script>';
            }

            // else if ($user['login'] == $email) 
            // {
              
            //     echo '<script type = "text/javascript">';
            //     echo 'alert("ce email est deja utilise !!")';
            //     echo '</script>';
            // }
            else
            { 
            $query = "INSERT INTO produit (IdProduct,ProuductName,Prix,Decription,Description_Details,Image_Product,NumCategorie,id_Flavour,img2) 
            VALUES('$idp', '$nom_p','$prix','$desc','$desc_det','$img','$cat','$flavour','$img2')";
            mysqli_query($conn, $query);
            // $query2=" SELECT  * FROM `produit` where IdProduct='$idp' ";
            // mysqli_query($conn, $query);
            echo '<script type = "text/javascript">';
            echo 'alert("Bien Ajouter");';
            echo 'window.location.href = "produit.php" ';
            echo '</script>';
            }
                   



                          
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
    <title>Ajouter des produit</title>
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
                                    <li class="breadcrumb-item"><a href="produit.php">Produits</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Ajouter Produits</li>
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
                                 <!-- <div class="col-sm6">
                                     <button href="#addpoduit" type="button" class="btn btn-success" data-toggle="modal">Ajouter un produit</button>
                                    </div> -->
                                
                            </div>
                        </div>


                <form action="ajouter_prod.php" method="post">
                
                                <div class="modal-header">
                                    <h4 class="modal-title">Ajouter un Produit</h4>
                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="id_p">ID de produits</label>
                                        <input name="id_p" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nom de produit</label>
                                        <input name="nom_p" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="prix">Prix</label>
                                        <input name="prix" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Description">Description</label>
                                        <input name="desc" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Description_details">Description details</label>
                                        <input name="desc_det" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input name="img" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="image2">Image 2:</label>
                                        <input name="img2" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label  for="cat">Categorie</label>
                                        <br>
                                 
                                        <select id="categorie" name="categorie">
                                            <!-- tan3mro dropdown list  mn database b categorie -->
                                            <!-- onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text" -->

        <?php
        $query="SELECT  * FROM `categorie` ";
        $query_run=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($query_run))
 {
        ?>       
                                        <option  value="<?php echo $row['NumCategorie'] ?>">
                                        <?php echo $row['NomCategorie'] ?>
                                        </option>
        <?php
 }
        ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Flavour">Flavour</label>
                                        <br>
                                        <select id="flavour" name="flavour" >
     <!-- tan3mro dropdown list  mn database b flavour  -->
                                        <?php
        $query="SELECT  * FROM `flavour` ";
        $query_run=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($query_run))
 {
        ?>       
                                        <option value="<?php echo $row['id_Flavour'] ?>">
                                        <?php echo $row['NameFlavour'] ?>
                                        </option>
        <?php
 }
        ?>
                                        </select>
                                    </div>
                                   
                                    <div class="modal-fooder">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                                        <input type="submit" name="send" class="btn btn-success" value="Ajouter">
                                    </div>
                                </div>
                            
                </form>
               
                
                 
                
                
                
                
                
                
                
                
                
                
                
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