<?php
if(isset($_POST['sub']))
{
    session_start();
    $datecom=$_POST['datee'];
    $prenom=$_POST['prenom'];
    $tele=$_POST['tele'];
    $adress=$_POST['adresss'];
    $email=$_POST['email'];
    $message=$_POST['messagecake'];
    $idcl=$_SESSION['id'];
    $total=$_SESSION['total'];
    $somme=$_SESSION['sumProducts'];
    $ship=$_SESSION['ship'];
   
    if(empty($datecom) or empty($prenom) or  empty($tele) or  empty($adress) or  empty($email) )
    {
        echo '<script type = "text/javascript">';
        echo 'alert("vous aver remplir tous chams!!")';
        echo '</script>';
        echo 'window.location.href = "commander.php" ';
    }
    else{
        include "include/connectiondb.php";
   
    
        // 		// $sql_cart = "SELECT * FROM products where product_id = $key";
        // 	  //  $result_cart = mysqli_query($conn, $sql_cart);
        // 	  //  $row_cart = mysqli_fetch_assoc($result_cart); 
        // 		// $price_product = $row_cart["price"];
        // 		//  $q  = $value["quantity"];
      
        // 	  //  $insertordersItems = "INSERT INTO comande (Datee,PrixTotal,PrixSomme ,Adresse_livraison,Tele_Distignateur,email,livraison_Prix,MessageCake,IdClient,Staut_Id,IdProduct)
      //     //  VALUES ('$_POST['date']', '$_SESSION['total']', '$_SESSION['sumProducts']','$_POST['adresss']','$_POST['tele']','$_POST['email']','20','$_POST['messagecake']','$_SESSION['id']','1','$value['id']')";
        
          $insertordersItems = "INSERT INTO comande (Datee, PrixTotal,PrixSomme ,Adresse_livraison,Tele_Distignateur,email,livraison_Prix,MessageCake,IdClient,Staut_Id) 
        	 VALUES ('$datecom','$total','$somme','$adress','$tele','$email','$ship','$message','$idcl','1')";
            mysqli_query($conn, $insertordersItems);
            $order_id=mysqli_insert_id($conn);
      
       foreach($_SESSION['products_'] as $key=>$val){
		$idP=$val['id'];
		
		$prix=$val['prix'];
        $wegiht=$val['wegiht'];
		$insertordersdetails="INSERT INTO c (idCommande,IdProduct,prix,Wegiht) 
        VALUES ('$order_id','$idP','$prix',$wegiht)";
       mysqli_query($conn, $insertordersdetails);
		// mysqli_query("insert into `detailscommande`(idCommande,IdProduct,prix) values('$order_id','$key','$qty','$price')");
	}
       
       unset($_SESSION['products_']);
       echo '<script type = "text/javascript">';
        echo 'alert("Commande ete avec succès")';
        echo '</script>';
        echo '<script type = "text/javascript">';
       echo 'window.location.href = "index.php"';
        echo '</script>';
       
       
    }

    

   
    
        
}

?>