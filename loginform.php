<?php

   $connection = mysqli_connect('localhost','root','','log_db');

   if(isset($_POST['send'])){
      $f_name = $_POST['a'];
      $l_name = $_POST['b'];
      $email = $_POST['c'];
      $phone = $_POST['d'];
      $address = $_POST['e'];
      $days = $_POST['f'];
      $startdate = $_POST['g'];
      $enddate = $_POST['h'];

      $request = " insert into log_db(f_name, l_name,email, phone, address, days, startdate, enddate) values('$a','$b','$c','$d','$e','$f','$g','$h') ";
      mysqli_query($connection, $request);

      header('location:login.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>