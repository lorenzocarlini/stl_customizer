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
    echo "<h1> Error. </h1>   <a href=./login.html> Click here to login </a>";
    exit();
  }
  if($password!=$confirmPassword){
    echo "<h1> Error. </h1>   <a href=./login.html> Click here to login </a>";
  }

  //check if email already in
  $q1=" select * from public.user where email = $1";
  $result = pg_query_params($dbconn,$q1,array($email));
  if($line=pg_fetch_array($result,null,PGSQL_ASSOC)) {
    $_SESSION['message'] = "User already exists! <a href=./login.php> Click here to login </a>";
    header("Location: ./register.php"); 
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
        
        $_SESSION['message'] = "Invalid Login";
        header("Location: ./register.php");  
        exit;
      }
    }
    else{
      $_SESSION['message'] = "Invalid Login";
      header("Location: ./register.php");  
    }
  }
  /*
    $query = "SELECT * FROM public.user"; 

    $rs = pg_query($dbconn, $query) or die("Cannot execute query: $query\n");
  
  while ($row = pg_fetch_row($rs)) {
    echo "$row[0] $row[1] $row[2] \n";
  }
  */
  pg_close($con); 
}

?>



