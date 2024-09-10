<?php
include "../include/connectiondb.php";



if(isset($_GET['delete_id']))
{
    $idc=$_GET['delete_id'];
    // $query = "UPDATE `produit` SET `NumCategorie`='' WHERE NumCategorie='$idc'";
            
    //         mysqli_query($conn, $query);
     $sql_query="DELETE FROM categorie WHERE NumCategorie='$idc'";
     if(mysqli_query($conn,$sql_query))
     {
        echo '<script type = "text/javascript">';
        echo 'alert("Cette categorie a ete supprime !");';
        echo 'window.location.href = "categorie.php" ';
        echo '</script>';// Redirecting To Profile Page
     }
    //  
}
else
{
    echo '<script type = "text/javascript">';
        echo 'alert("errrrr !");';
        echo 'window.location.href = "categorie.php" ';
        echo '</script>';// Redirecting To Profile Page
}

?>