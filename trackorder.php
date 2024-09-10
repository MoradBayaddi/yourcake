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
  <link rel="stylesheet" href="style/TrackOrder.css.css">
  <link rel="stylesheet" href="style/Style.css">
  <title>Profil</title>
</head>

<body>
<?php
    include 'include/navbar12.php';
    ?>
  <!-- mn hna ------------------------------------------------------------------------------------- -->
  <div class="container trackorder_div mt-5">
      <div class="row mb-5">
          <div class="col-sm-4 mt-5">
              <img style="width: 110%;" src="img/trackorder.avif" alt="">
          </div>
          <div class="col-sm-8 pe-5 ps-5 ">
              <h2>Track Order</h2>
              <form action="">
                 <div class="row mb-5">

                    <div class="col">
                        <label for="id_order">Order Id*</label>
                      <br>
                      <input class="tro_txt" type="text" name="id_order" id="">
                      </div>

                      <div class="col">
                        <label for="Email">Email/Phone Number*</label>
                      <br>
                      <input class="tro_txt" type="text" name="Email" id="">
                      </div>
                 </div>
                 <div class="row">
                     <input class="btn_order_track" type="submit" value="track order">
                 </div>
                  
              </form>

          </div>
      </div>
      <div class="row">
          <p>
            * Due to the current lockdown norms, deliveries might be delayed by a few hours and may not be delivered as per selected time slots.
            <br>* We are working round the clock to bring happiness to your doorstep, while making sure we follow the highest safety standards.
            <br>* We will keep you posted via email about the delivery status
          </p>
      </div>
  </div>
      <!-- mn hna ------------------------------------------------------------------------------------- -->

  










    <!-- include footre 1  -->

    <?php
     include "include/footer.php";
     ?>

    <!--  end include footre  -->
         
  


<!-- test test -->

<script type="text/javascript">
var abc= document.getElementById("prix1").innerText;

<?php $abc = "<script>document.write(abc)</script>"?>   
</script>



  <!-- navbar  -->

  <!-- footer -->
  <!-- ------------------------------------------------------------------------------------------------------------- -->

  <!-- <script src=""></script> -->
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <!-- bootstrap.js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- font awsome -->
  <script src="https://kit.fontawesome.com/36dc84739e.js" crossorigin="anonymous"></script>

  <!-- my script -->
  <script src="js/script.js"></script>
  <!-- vanilla tilt -->
  <script src="js/vanilla_tilt.js"></script>
</body>
</html>