<?php


include("include/connectiondb.php");


if(isset($_POST["submit"]))
{

    $name = $_POST['name'];
    $email =$_POST['email'];
    $tele = $_POST['Number'];
    $message = $_POST['Message'];

    


$sql = "INSERT into contactus (name,email,message, tele ,created_date) VALUES('" . $name . "','" . $email . "','" . $message . "','" . $tele . "','" . date('Y-m-d') . "')";


$success = $conn->query($sql);


if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}


                echo'<script type = "text/javascript">';
                echo 'alert("Merci pour votre message monsieur !");';
                echo 'window.location.href = "index.php" ';
                echo '</script>';// Redirecting To Profile Page
}
?>