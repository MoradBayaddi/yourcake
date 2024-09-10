<?php
include "../include/connectiondb.php";
session_start();
$idc=$_SESSION['idc'];
if (isset($_POST['statut']))
{
  $ids =  $_POST['statut'];

  $query = "UPDATE `comande` SET `Staut_Id`='$ids' WHERE idCommande='$idc'";
            
            mysqli_query($conn, $query);
            // $query2=" SELECT  * FROM `produit` where IdProduct='$idp' ";
            // mysqli_query($conn, $query);
            echo '<script type = "text/javascript">';
            echo 'alert("Commande modifer avec succes");';
            echo 'window.location.href = "commandes.php" ';
            echo '</script>';
}
else{
  echo '<script type = "text/javascript">';
  echo 'alert("errrrrr statut !!");';
  echo 'window.location.href = "DetailOrders.php" ';
  echo '</script>';// Redirecting To Profile Page
}

?>