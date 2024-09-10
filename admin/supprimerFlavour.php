<?php
include "../include/connectiondb.php";



if(isset($_GET['delete_id']))
{
    $idf=$_GET['delete_id'];
     $sql_query="DELETE FROM flavour WHERE id_Flavour='$idf'";
     if(mysqli_query($conn,$sql_query))
     {
        echo '<script type = "text/javascript">';
        echo 'alert("Ce flavour a ete supprime !");';
        echo 'window.location.href = "flavour.php" ';
        echo '</script>';// Redirecting To Profile Page
     }
    //  
}
else
{
    echo '<script type = "text/javascript">';
        echo 'alert("errrrr !");';
        echo 'window.location.href = "flavour.php" ';
        echo '</script>';// Redirecting To Profile Page
}

?>