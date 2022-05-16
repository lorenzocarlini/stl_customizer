<?php
include "db_connect.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $hashpassword = md5($_POST['password']);
    $email = pg_escape_string($_POST['email']);
    $q1 ="select * from public.user where email = $1 and password =$2";
    $result = pg_query_params($dbconn, $q1, array($email, $hashpassword));
    if($line=pg_fetch_array($result,null,PGSQL_ASSOC)){ 
        $name = $line['name'];
        //echo "Login Successfully";  
        header("Location: ./../index2.php?name=$name");  
    }else{
        
        echo "Invalid Details";
    }
}
?>