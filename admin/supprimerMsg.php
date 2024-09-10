<?php
include "../include/connectiondb.php";



if(isset($_GET['msgid']))
{
    $idmsg=$_GET['msgid'];
     $sql_query="DELETE FROM contactus WHERE id='$idmsg'";
     if(mysqli_query($conn,$sql_query))
     {
        echo '<script type = "text/javascript">';
        echo 'alert("Ce message a ete supprime !");';
        echo 'window.location.href = "messages.php" ';
        echo '</script>';// Redirecting To Profile Page
     }
    //  
}
else
{
    echo '<script type = "text/javascript">';
        echo 'alert("errrrr !");';
        echo 'window.location.href = "messages.php" ';
        echo '</script>';// Redirecting To Profile Page
}

?>