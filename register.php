<?php
session_start();

// initializing variables


// connect to the database
include "include/connectiondb.php";

// REGISTER USER
if (isset($_POST['send'])) 
{
  // receive all input values from the form
 
  $id_client=$_POST['IdClient'];
  $prenom =  $_POST['prenom'];
  $email = $_POST['email'];
  $adresse =$_POST['adresse'];
  $ville = $_POST['ville'];
  $tel = $_POST['tel'];
  $password_1 =  $_POST['password_1'];
  $password_2 = $_POST['password_2'];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($id_client) ||empty($prenom)||empty($email)||empty($adresse)||empty($ville)||
  empty($tel)||empty($password_1)||empty($password_2)) 
  {
    
    echo '<script type = "text/javascript">';
        echo 'alert("tous les champs sont obligatoires !!");';
        
        echo '</script>';
  }


    
     //correct infos
    
      
        $user_check_query = "SELECT * FROM client WHERE IdClient='$id_client'   ";
        $result = mysqli_query($conn, $user_check_query);
        $rows= mysqli_num_rows ($result);
        $user_check_query2 = "SELECT * FROM client WHERE login='$email'   ";
        $resulte = mysqli_query($conn, $user_check_query2);
        $rowse= mysqli_num_rows ($resulte);

        if($rows==1 or $rowse==1)
        {
          echo "<script>alert('Cet email ou id déjà utiliser'); window.location.href='Login.php';</script>";
        }
        
        else{
          $query = "INSERT INTO client (idClient,  PrenomClt,login,AdresseClt,Ville,Tele,MotPass) 
          VALUES('$id_client',  '$prenom','$email','$adresse','$ville','$tel','$password_1')";
           $result= mysqli_query($conn, $query);
            if ( $result > 0)
            {
              echo "<script>alert('Bien Ajouter'); window.location.href='Login.php';</script>";
        
            }

        }

        
       // if user exists
          
            // else{

            
          
        
              
      
           
              
            // }
   
            }
          
        
      
      
     
 
     

 
  
  // if (empty($email)) { array_push($errors, "Email is required"); }
  // if (empty($password_1)) { array_push($errors, "Password is required"); }
  


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  
  
  

  // Finally, register user if there are no errors in the form
  // if ($errors === 0) {
  	
  // }


  
?>

