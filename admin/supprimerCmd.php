<?php
include "../include/connectiondb.php";



if(isset($_GET['delete_id']))
{
    $idC=$_GET['delete_id'];


    $sql_query1="DELETE FROM supc WHERE idCommande='$idC'";
    $sql_query="DELETE FROM c WHERE idCommande='$idC'";
            
     if(mysqli_query($conn,$sql_query1)&&mysqli_query($conn,$sql_query))
     {
        $sql_query="DELETE FROM comande WHERE idCommande='$idC'";
        if(mysqli_query($conn,$sql_query))
        {
            echo '<script type = "text/javascript">';
            echo 'alert("Cette commade a ete supprime !");';
            echo 'window.location.href = "commandesan.php" ';
            echo '</script>';// Redirecting To Profile Page
        }
     }


     
    //  
}
else{
    echo '<script type = "text/javascript">';
        echo 'alert("errrrr !");';
        echo 'window.location.href = "commadesan.php" ';
        echo '</script>';// Redirecting To Profile Page
}

?>