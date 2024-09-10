<?php
session_start();

if(!isset($_SESSION['email']))
  {
    echo '<script type = "text/javascript">';
    echo 'alert("acceder au votre compte ou bien creer un !");';
    echo 'window.location.href = "Login.php" ';
    echo '</script>';// Redirecting To Profile Page
  }
  else
    { 
     
        
      
            $id_client=$_SESSION['id'];
            include('include/connectiondb.php');
          
            foreach($_SESSION[ 'AllCommande'] as $key=>$val){
             
              
              $idP=$val['idCommande'];
              
              $prix=$val['id'];
                  $wegiht=$val['idProdu'];
              $insertordersdetails="INSERT into supc (idCommande, id, idProuduct) VALUES ('.$idP.','.$prix.','.$wegiht.')"; 
                 mysqli_query($conn, $insertordersdetails);
              // mysqli_query("insert into `detailscommande`(idCommande,IdProduct,prix) values('$order_id','$key','$qty','$price')");
            
          }
            unset($_SESSION[ 'AllCommande']);
               
   
  //  foreach ($_SESSION[ 'AllCommande'] as $row) {
  //   $fieldVal1 = $row[0];
  //   $fieldVal2 = $row[1];
  //   $fieldVal3 = $row[2];

  //   $query ="INSERT INTO supc (idCommande, id, idProuduct) VALUES ( '". $fieldVal1."','".$fieldVal2."','".$fieldVal3."' )";
  //   mysqli_query($conn, $query);
  
}

            $query="DELETE T1 FROM c AS T1 
            INNER JOIN comande AS T2 ON T1.idCommande = T2.idCommande
            WHERE T2.IdClient = '$id_client'";
           
            $result=$conn->query($query);

            if ($result > 0)
            {
                echo '<script type = "text/javascript">';
                echo 'alert("commande a supprimé avec succes !");';
                echo 'window.location.href = "commandeDetails.php" ';
                echo '</script>';// Redirecting To Profile Page
            }
       
       
        
    

  
?>