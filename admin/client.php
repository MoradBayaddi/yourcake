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
    <title>Gestion de Client</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="dist/css/style2.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    
<![endif]-->
<!-- <script>
function confirmDelete(id) 
{
    if (confirm(“Are you sure you want to delete this data?”)) 
    {
            window.location.href = “delete.php?id=” + id;
    } 
    else 
    {
    return false;
    }   
}
</script> -->


<script type="text/javascript">
                                            // function delete_id(id)
                                            // {
                                            //     if(confirm('Sure To Remove This Record ?'))
                                            //     {
                                            //         window.location.href="supprimerCli.php?delete_id="+id;
                                            //     }
                                            // }
                                        </script>
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
                        <h4 class="page-title">Gestion de Clients</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Client</li>
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
                <!-- Chart-1 -->
               
                
                <div class="container" >
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6" >
                                    <h2><b>Les Clients</b> </h2>
                                </div>
                                
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        
                                     </th>
                                    <th>ID</th>
                                    <th>NOM</th>
                                    <th>ville</th>
                                    <th>Adresse</th>
                                    <th>Telephone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
            <?php
            
                            
            $query="SELECT  * FROM `client` ";
             $query_run=mysqli_query($conn,$query);
             while($row=mysqli_fetch_array($query_run))
      {
             ?>
                            
                            <tbody>
                                <tr>
                                    <td>
                                        
                                    </td>
                                    <td><?php echo $row['IdClient'];?></td>
                                    <td><?php echo $row['PrenomClt'];?></td>
                                    <td><?php echo $row['Ville'];?></td>
                                    <td><?php echo $row['AdresseClt'];?></td>
                                    <td><?php echo $row['Tele'];?></td>
                                    <td><?php echo $row['login'];?></td>
                                    <td>
                                        
                                         <a href="supprimerCli.php?delete_id=<?php echo $row['IdClient']; ?>" onclick="return confirm('Voulez vous vraiment supprimer ce client ?? !');">
                                        <i class="fas fa-trash-alt" title="Supprimer"></i></a>

                                        
                                    </td>
                                </tr>
                                
                                <?php
      }
                                ?>
                            </tbody>
                        </table>
                    <!-- paggination -->
                        
                    
                    
                    </div>
                </div>
                <!-- modal modifier -->
<!--                
                <div id="ClientModal" class="modal fade " >
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                                <div class="modal-header">
                                    <h4 class="modal-title">Modifier le client</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name">Prenom</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Ville</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Adress</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Telephone</label>
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
                 -->
                <!-- modal supprimer -->
                <div id="SPClientModal" class="modal fade " >
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="POST" action="supprimerCli.php">
                          <div class="modal-header">
                            <h4 class="modal-title">Suppression de Client</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          </div>
                          <div class="modal-body">
                            <p>Tu es sûre que tu veux supprimer ce client.</p>
                            <!-- <p class="text-warnig"><small>tu sure</small></p> -->
                          </div>
                          <div class="modal-footer">
                           <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                            <input type="submit" class="btn btn-danger" value="Supprimer">
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
                
                <!-- ENd chart-1 -->
                <!-- Chart-2 -->
               
                <!-- End Chart-2 -->
                <!-- Cards -->
                
                  
                    
                <!-- End cards -->
                <!-- Chart-3 -->
               
                <!-- End chart-3 -->
                <!-- Charts -->
                
                <!-- End Charts -->
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
    <script src="assets/libs/chart/matrix.interface.js"></script>
    <script src="assets/libs/chart/excanvas.min.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="assets/libs/flot/jquery.flot.time.js"></script>
    <script src="assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/libs/chart/jquery.peity.min.js"></script>
    <script src="assets/libs/chart/matrix.charts.js"></script>
    <script src="assets/libs/chart/jquery.flot.pie.min.js"></script>
    <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="assets/libs/chart/turning-series.js"></script>
    <script src="dist/js/pages/chart/chart-page-init.js"></script>
</body>

</html>