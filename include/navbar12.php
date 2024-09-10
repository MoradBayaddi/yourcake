<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!-- navbar 1 -->
<nav class="navbar sticky-top  navbar-expand-lg nav1 ">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">YourCake</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex ms-auto" method="post" action="search_result.php">
                <input class="form-control  " name="search_mot" type="text" placeholder="Search"
                required oninvalid="this.setCustomValidity('Remplire le champs sil veux plais')"
                  oninput="this.setCustomValidity('')" aria-label="Search">
                <button name="btn_search" class="btn fa fa-search" type="submit"></button>
            </form>

            <?php 
            
                if(isset($_POST['btn_search']))
                {
                  $mot=$_POST['search_mot'];
                  $_SESSION['search_mot']=$mot;
                  
                }

                ?>
                
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="trackorder.php"> <div class="Icon"  ><i style="text-align: center;" class="fas fa-shipping-fast"></i></div>Suivi commande</a>
                  </li> -->
                  <li class="nav-item">
                  <?php  if(isset($_SESSION['email'])){
                        ?>
                         <a href="profil.php" class="nav-link"> <div class="Icon "><i style="text-align: center;" id="c2" class="fas fa-users"></i></div>Profile</a>
                         <li class="nav-item">
                    <a class="nav-link" href="logout.php"> <div class="Icon"  ><i class="fas fa-sign-out-alt"></i></div>Logout</a>
                  </li>
                        
                        <?php
                        

                    } 
                    else{
                      ?>
                      <?php
                      $cat=false;
                      ?>
                       <a href="Login.php" class="nav-link"> <div class="Icon"><i style="text-align: center;" id="c2" class="fas fa-users"></i></div>
se connecter/S'inscrire</a>
                       <?php
                    }
                    ?>
                    
                    
                    
                    
                   
                    
                   
                  </li>
                  <li class="nav-item">
                    <?php $count=0; if(isset($_SESSION['products_'])) $count=count($_SESSION['products_']); ?>
                    <a class="nav-link" href="Panel.php"><div class="Panel.php" ><i style="text-align: center;" class="fas fa-shopping-cart"></i> <sup style="color:red; font-size: 12px;" >(<?php echo $count;?>)</sup></div>Panier</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="#con"><div class="Icon"><i class="fa-solid fa-message"></i></div>Contactez-nous</a>
                  </li> -->
          
              
              
            </ul>
            
          </div>
        </div>
      </nav>
  <!-- navbar 2 -->
  <nav class="navbar  navbar-expand-lg nav2 " id="nav2">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  me-auto mb-2 mb-lg-0 ">
          <li class=" nav-item dropdown">
              <a class="nav-link" href="AllProuducts.php">Cakes</a>
              
          </li>

          <!-- ?NumCategorie='.$num_cat.' -->
           <?php 
   include 'include/connectiondb.php';
      $query="SELECT  * FROM `categorie` ";
     
      $query_run=mysqli_query($conn,$query);
        
      while($row=mysqli_fetch_array($query_run))
      {
        ?>
        <li class="nav-item dropdown">
        <?php $num_cat=$row["NumCategorie"];
        echo '<a class="nav-link" href="categorie.php?numcat='.$num_cat.'">'.$row['NomCategorie'].'</a>'?>
       
        
                   
      
      

</li>  <?php         
      }
        ?>
        
          
   
        
      </div>
    </div>
  </nav>