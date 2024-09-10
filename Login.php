<?php
include("include/connectiondb.php");
session_start();
if(isset($_SESSION['email']))
{
  echo '<script type = "text/javascript">';
  echo 'alert("Deja conncter")';
  echo '</script>';
  echo '<script type = "text/javascript">';
 echo 'window.location.href = "Profil.php"';
  echo '</script>';


    }
    else{

    
   
    






if(isset($_POST['send']))
{
 

 

  
  $email=$_POST['login'];
  $pass=$_POST['password'];
  //check
 	//Checking is user existing in the database or not
   $query = "SELECT * FROM `client` WHERE login='$email' and MotPass='$pass'
  ";
     $result = mysqli_query($conn,$query);
     $rows= mysqli_num_rows ($result);
     $row=mysqli_fetch_array($result);
    
    if($rows==1){
      if($row['role']=='admin')
      {
        $_GET['cat']=true;
        session_start();
          $_SESSION['email']=$email;
          $_SESSION['role']=$row['role'];
         
          header("Location: admin/index.php");
          
       
        }
        else{
          $_GET['cat']=true;
          session_start();
          $_SESSION['email']=$email;
          $_SESSION['id']=$row['IdClient'];
         
          
          

      
          header("Location: Profil.php");
       


        }
          
       
      }
     
      else {
        echo '<script type = "text/javascript">';
        echo 'alert("ce id ou email ou MoTPass Pas Correct !!")';
        echo '</script>';
       
        
      }
  
     
         
    
   
       

    
     



    }
    

 

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
  <!-- styling -->
  <link rel="stylesheet" href="style/Style.css?<?php echo time() ?>">
    <title>Document</title>

</head>
<body>
     <!-- include navbar 1 et 2  -->

     <?php
     include "include/navbar12.php";
     ?>

    <!--  end include navbar 1 et 2  -->
    <div class="d2">
      
    <main style="background-color: rgba(244, 248, 255, 0.788);" >
        <form  id="login_form" class="form_class"  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >
        <div id="euror" ></div>
            <div class="form_div">
                <label>Email</label>
                <input class="field_class input-lg" name="login" type="text" required placeholder="entre votre email" autofocus >
                <label>Mot Pass:</label>
                <input minlength="1" id="pass" class="field_class" name="password" required type="password" placeholder="entre votre password">
                <button style="color:white;"  class="submit_class" name="send" type="submit" form="login_form" >connexion</button>
            </div>
            <div class="info_div">
                <a href="singup.php"><p>Pas de compte ? Créez-en un</p></a>
            </div>
        </form>
        
    </main>
   
     <!-- include footre 1  -->

  <?php
     include "include/footer.php";
     ?>
 </div>
    <!--  end include footre  -->

     <!-- <script src=""></script> -->
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <!-- bootstrap.js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- font awsome -->
  <script src="https://kit.fontawesome.com/f7066038ac.js" crossorigin="anonymous"></script>

  <!-- my script -->
  <script src="js/auth Register login.js"></script>
  <!-- vanilla tilt -->
  <script src="js/vanilla_tilt.js"></script>
</body>
</html>
<?php
}
?>