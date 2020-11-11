<?php
//connet to my sql
$con= mysqli_connect("localhost","root","","shoutit");
//test connection
if(mysqli_connect_errno()){
  echo 'Failed ro connect mysql '.$mysqli_connect_error();
}
