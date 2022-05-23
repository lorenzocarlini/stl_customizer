<?php
session_start(); 
include "db_connect.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(save-info == true){
        associa indirizzo a id user
    }

  $order = //file oggetto ordinato
  $quantity = //quantità
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $address = $_POST['address'];
  $country = $_POST['country'];
  $region = $_POST['region'];



  //validation
  if(empty($firstName) || empty($lastName) || empty($address) || empty($country) || empty($region)){
    echo "<h1> Error.  </h1>   <a href=./checkout.php> Click here to return to checkout </a>";
    exit();
  }

    $query = "INSERT INTO public.order(order,firstName,lastName,address,country,region) 
    values ('$firstName','$lastName','$address', '$country','$region')";
    if($result = pg_query($dbconn,$query)){
      //echo "Data Added Successfully.";
    }

    else{
    echo "order falied.";
    }

  pg_close($con); 
}

?>
