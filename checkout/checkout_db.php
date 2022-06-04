<?php
ini_set('display_errors', 'on'); 
error_reporting(E_ALL);
session_start(); 
include "../login/db_connect.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  $model = $_POST['model'];
  $text_color = $_POST['text_color'];
  $base_color = $_POST['base_color'];
  $printing_material = $_POST['printing_material'];
  $quantity = $_POST['quantity'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $address = $_POST['address'];
  $country = $_POST['country'];
  $region = $_POST['region'];

  $id = $_SESSION['id'];
  $instant = 'now';


  //validation

  if(empty($printing_material) || !is_numeric($text_color) || !is_numeric($base_color) || !is_numeric($quantity) || empty($firstName) || empty($lastName) || empty($address) || empty($country) || empty($region)){
    echo "<h1> Error. non tutti i campi pieni  </h1>   <a href=./checkout.php> Click here to return to checkout </a>";
    echo "<h1> $printing_material </h1> $text_color \n $base_color \n $quantity \n $firstName \n $lastName \n $address \n $country \n $region";
    exit();
  }

  $q1 ="select * from public.user where id = $1";
  $result = pg_query_params($dbconn, $q1, array($id));
  if($line=pg_fetch_array($result,null,PGSQL_ASSOC)){ 
    if($line['name'] != $_SESSION['name']){
      session_unset();
      session_destroy();
      echo "<h1> User not logged successfully </h1>   <a href=./login.html> Click here to login </a>";
    }
  }
  else {
    session_unset();
    session_destroy();
    echo "<h1> User not logged successfully </h1>   <a href=./login.html> Click here to login </a>";
  }




  $query = "INSERT INTO public.order(model,text_color,base_color,printing_material,quantity,firstName,lastName,address,country,region,user_id,instant) 
  values ('$model','$text_color','$base_color','$printing_material','$quantity','$firstName','$lastName','$address','$country','$region','$id','$instant')";
  if($result = pg_query($dbconn,$query)){
    echo "<h1> sto per eseguire la query</h1>";
    header("Location: ./../orderConfirmed.html");  
    exit();
  }
  else{
  echo "<h1> Error. ordine non andato a buon fine  </h1>   <a href=./checkout.php> Click here to return to checkout </a>";
  }
}

?>
