<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $workerid = $_POST['location'];
      $days = $_POST['guests'];
      $startdate = $_POST['arrivals'];
      $enddate = $_POST['leaving'];

      $request = " insert into book_form(name, email, phone, address, workerid, days, startdate, enddate) values('$name','$email','$phone','$address','$workerid','$days','$startdate','$enddate') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>