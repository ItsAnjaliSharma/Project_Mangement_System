<?php
   $con=mysqli_connect("localhost","root","","pms");
   if($con===false){
    die("Connection Error". mysqli_connect_error());
   }
?>