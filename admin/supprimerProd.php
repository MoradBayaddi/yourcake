<?php
include "../include/connectiondb.php";

if(isset($_GET['delete_id']))
{
     $idP=$_GET['delete_id'];
     $sql_query="DELETE FROM produit WHERE IdProduct='$idP'";
     if(mysqli_query($conn,$sql_query))
     {
        echo '<script type = "text/javascript">';
        echo 'alert("Ce Produit a ete supprime !");';
        echo 'window.location.href = "produit.php" ';
        echo '</script>';// Redirecting To Profile Page
     }
     else
     {
        echo '<script type = "text/javascript">';
        echo 'alert("errrrr !");';
        echo 'window.location.href = "produit.php" ';
        echo '</script>';// Redirecting To Profile Page
     }
    //  
}
else
{
    echo '<script type = "text/javascript">';
        echo 'alert("errrrr !");';
        echo 'window.location.href = "produit.php" ';
        echo '</script>';// Redirecting To Profile Page
}


?>