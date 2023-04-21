<?php
   $server = "localhost";
   $username = "root";
   $password ="";
   $db="bank";

   $con = mysqli_connect($server , $username,$password , $db);
   if(!$con){
    die("Connection to this database dailed due to" .mysqli_connect_error());
   }

?>