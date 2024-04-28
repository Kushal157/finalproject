<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="http://localhost/ofbms/index.php" class="btn">Flight_management</a>
      <a href="http://localhost/Hotel_Booking_Management_System/admin/index.php" class="btn">Hotel_management</a>
      <a href="http://localhost/php_prg/Car-Rental-Portal-Using-PHP-and-MySQL-V2.5/carrental/admin/index.php" class="btn">car-rental_management</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>