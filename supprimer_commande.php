<?php
session_start();
include('include/connectiondb.php');

if(!isset($_SESSION['email']))
  {
    echo '<script type = "text/javascript">';
    echo 'alert("acceder au votre compte ou bien creer un !");';
    echo 'window.location.href = "login.php" ';
    echo '</script>';// Redirecting To Profile Page
  }
  else
    { 
       
        if(isset($_GET['num_cmd']))
        {
          $num_cmd=$_GET['num_cmd'];
          $weight=$_GET['weight'];
          $id=$_GET['id'];
          $idComm=$_GET['idcommande'];
        }
        $id_client=$_SESSION['id'];
       $idCommande= $_SESSION['idCom'];
            $quer=" SELECT c.idCommande FROM `c` INNER JOIN comande on comande.idCommande=c.idCommande WHERE comande.IdClient='$id_client' GROUP by c.idCommande HAVING COUNT(c.idCommande)=1  ";
            $resulta=$conn->query($quer);
            $rows= mysqli_num_rows ($resulta);
          
            
                  if($rows==1)
              {
                $queryUpdate = " UPDATE comande
                INNER JOIN 
                c ON comande.idCommande = c.idCommande
            SET 
                comande.Staut_Id = '4'
     where comande.idCommande=(select  c.idCommande from comande INNER join c on comande.idCommande=c.idCommande
GROUP by c.idCommande 

             HAVING COUNT(c.idCommande)=1) and c.idCommande=' $idCommande'";
              $resultupdate=$conn->query($queryUpdate);
///       Update PrixTotal
              

                }
                $queryUpdatePrix = " UPDATE comande
              INNER JOIN 
              c ON comande.idCommande = c.idCommande
          SET 
              comande.PrixTotal =comande.PrixTotal-c.prix
   where c.idCommande='$idCommande' ";
            $resultupdatePrix=$conn->query($queryUpdatePrix);


            $idP=$_SESSION["idP"];
            $idC=$_SESSION["idC"];
            // $weight= $_SESSION['weight'];
            //insert into table SuppC
            $querySupp="INSERT INTO `supc`(`idCommande`, `id`, `idProuduct`) VALUES (' $idCommande','$idC','$idP')";
            $result=$conn->query($querySupp);
            $query="DELETE T1 FROM c AS T1 
            INNER JOIN produit AS T2 ON T1.IdProduct = T2.IdProduct
           WHERE T1.IdProduct ='$num_cmd' and T2.ProuductName='$weight' and T1.id='$id'";
            $result=$conn->query($query);
           
           

           

            if ( $result > 0)
            {
                echo '<script type = "text/javascript">';
                echo 'alert("Votre commande a ete annule !");';
                echo 'window.location.href = "commandeDetails.php" ';
                echo '</script>';// Redirecting To Profile Page
            }
       
       
        
    }

  
?>