<?php
include 'database.php';
// check if form submitted

if(isset($_POST['submit'])){
   $user=mysqli_real_escape_string($con,$_POST['user']);
   $message=mysqli_real_escape_string($con,$_POST['message']);
   //set the timezone

   date_default_timezone_set('America/New_York');
   $time =date('h:i:s a',time());

   // validataion
   if(!isset($user) || $user== ''  || !isset($message) || $message== ''){
         $error="please fill in youy name and message both";
         header("Location: /firstproject/index.php?error=".urlencode($error));
        exit();
   }

   else{
    $query ="INSERT INTO shouts (user,message,time) VALUES ('$user','$message','$time')";
    //if the qurey isnot able to insert
    if(!mysqli_query($con,$query)){
      die('ERROR'.mysqli_error($con));
    }
    //if inssert redirect to index
    else{
      header("Location: /firstproject/index.php");
      exit();
    }

   }


}
