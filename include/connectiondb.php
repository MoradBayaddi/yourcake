<?php
//<!--========== PHP CONNECTION TO DATABASE ==========-->
    $host = "localhost";
    $username = "root";
     $pass = "";
    

    $dbname = "yourcake";
    //create connection
    $conn = mysqli_connect($host, $username, $pass, $dbname);
    //check connection
    if(mysqli_connect_error()){
        echo "Connection failed: " ;
        exit();
    }
    
   
  

    

?>