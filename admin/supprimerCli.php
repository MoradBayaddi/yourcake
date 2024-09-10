<?php
include "../include/connectiondb.php";



if(isset($_GET['delete_id']))
{
    $idC=$_GET['delete_id'];
     $sql_query="DELETE FROM client WHERE IdClient='$idC'";
     if(mysqli_query($conn,$sql_query))
     {
        echo '<script type = "text/javascript">';
        echo 'alert("Ce Client a ete supprime !");';
        echo 'window.location.href = "client.php" ';
        echo '</script>';// Redirecting To Profile Page
     }
    //  
}
else{
    echo '<script type = "text/javascript">';
        echo 'alert("errrrr !");';
        echo 'window.location.href = "client.php" ';
        echo '</script>';// Redirecting To Profile Page
}

?>