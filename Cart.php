<?php
session_start();
include('include/connectiondb.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){

if(isset($_POST['Add_To_Cart']) )
{
   $id=$_POST['prodId'];
   $user_check_query = "SELECT * FROM produit WHERE IdProduct ='$id'  ";
   $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_array($result);
        if(isset($_SESSION['products_'])) 
        {
         $myitems=array_column($_SESSION['products_'], 'id');
         $mywieght=array_column($_SESSION['products_'], 'wegiht');
         if(in_array($_POST['prodId'], $myitems) and in_array($_POST['btnradio'], $mywieght) )
           {
            echo"<script>
            alert('Item Already Added');
            window.location.href='Panel.php';
          </script>";
          }
          else{ 
             $count=count($_SESSION['products_']);
         $_SESSION[ 'products_'][$count]=array(
            'id'=>$user['IdProduct'],
            'product'=>$user['ProuductName'],
            'img'=>$user['Image_Product'],
            'prix'=>$_POST['prixsum'],
            'wegiht'=>$_POST['btnradio'],);
            header("location: Panel.php");
         
         }
        
           }
        
    
   else{ $_SESSION[ 'products_'][0]=array(
        'id'=>$user['IdProduct'],
        'product'=>$user['ProuductName'],
        'img'=>$user['Image_Product'],
        'prix'=>$_POST['prixsum'],
        'wegiht'=>$_POST['btnradio'],

        
       
            
    );header("location: Panel.php");
   
   
   
   
   }

}




if(isset($_POST['Remove_Item']))
{
  foreach($_SESSION[ 'products_'] as $key => $value)
  {
    if($value[ 'id']==$value[ 'id']  )
    {
      unset ($_SESSION['products_'][$key]);
      $_SESSION['products_']=array_values ($_SESSION['products_']);
     
      // echo"<script>
      //   alert('Item Removed');
      //   window.location.href='index.php'
      // </script>";
      header("location: Panel.php");
     exit();
      
       

}

  }
  


}

}



?>

