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
  <!-- styling -->
 <link rel="stylesheet" href="style/Style.css?v=<?php echo time(); ?>">
  <title>Profil</title>
  <style>
   
  </style>
</head>

<body>
   <!-- include navbar 1 et 2  -->

     <?php
     include "include/navbar12.php";
     include "include/connectiondb.php"
     ?>



<div class="d2">
  
<div id="top_p_container mt-0 mb-5" class="container-fluid">
    <div class="row">
      <div class="col h1_title">
        <h2 >Resultat </h2><br><br>
      </div>

    </div>
  <div class="container-fluid">

    
<!--produits -->
<div class="row g-3">
<?php

$host = "localhost";
$user="root";
$pass="";
$dbname="yourcake";
// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) 
{
die("Connection failed: " . $conn->connect_error);
}
$mot=$_SESSION['search_mot'];

$query="select * from produit where Description_Details LIKE '%$mot%' or ProuductName like
'%$mot%'  ";
$result=$conn->query($query);

if ($result->num_rows > 0) {
// output data of each row

while($row = $result->fetch_assoc()) { ?>

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






<?php }

} else {
    
  echo "<center><h4><b>ce $mot introuvabl !!</b>  <del> </del></h4></center><br><br><br><br><br><br>";
}
$conn->close();
?>      
</div>





    </div>
    </div>


<!-- include footre 1  -->

<?php
     include "include/footer.php";
   
     ?>
     </div>
    


    <!--  end include footre  -->

   

  <!-- footer -->
  <!-- ------------------------------------------------------------------------------------------------------------- -->

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
</body>
</html>