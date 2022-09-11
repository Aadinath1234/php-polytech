<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   
  // create  connection
   $mysqli = new mysqli($servername, $username, $password);
  // check connection
   if($mysqli->connect_error){
     die("Connection failed");
       }
   echo "Connected successfully";
   ?>