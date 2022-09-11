<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
  //create connection
   $mysqli = mysqli_connect($servername,$username,$password);
   //check connection
   if(!$mysqli){die("connection failed");
    }
    echo "connected successfully";
?>