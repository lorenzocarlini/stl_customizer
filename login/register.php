<?php
session_start(); 
include "db_connect.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST'){



  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];

  //validation
  if(empty($name) || empty($email) || empty($password) || empty($confirmPassword)){
    die('Please fill all requests');
  }

  //check if email already in
  $q1=" select * from public.user where email = $1";
  $result = pg_query_params($dbconn,$q1,array($email));
  if($line=pg_fetch_array($result,null,PGSQL_ASSOC)) {
    echo "<h1> utente già registrato </h1>   <a href=./login.html> Click here to login </a>";
  }
  else{



    $query = "INSERT INTO public.user(name,email,password) 
    values ('$name','$email','" .md5($password)."')";
    if($result = pg_query($dbconn,$query)){
      //echo "Data Added Successfully.";
      $q1 ="select * from public.user where email = $1 and password =$2";
      $result = pg_query_params($dbconn, $q1, array($email, md5($password)));
      if($line=pg_fetch_array($result,null,PGSQL_ASSOC)){ 
          //echo "Login Successfully";  
          
          
          $_SESSION['id'] = $line['id'];

          $_SESSION['name'] = $line['name'];

          header("Location: ./../index.php");  
          exit();

      }
      else{
        
        echo "Invalid Details";
      }
    }
    else{
    echo "Error.";
    }
    $query = "SELECT * FROM public.user"; 

    $rs = pg_query($dbconn, $query) or die("Cannot execute query: $query\n");
  }
  /*
  while ($row = pg_fetch_row($rs)) {
    echo "$row[0] $row[1] $row[2] \n";
  }
  */
  pg_close($con); 
}

?>



