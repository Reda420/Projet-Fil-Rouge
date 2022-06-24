<?php
  include("connect.php");
  require_once("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css.css">
        <title>Thank You! | Roayl Rental Service</title>
    <link rel="icon" href="../rrssvg.svg">
</head>
<body style="background: #303030;">

<div class="continer-fluid mt-5 text-center ">
<h2 style="color: #F4B425; margin-top:200px; ">THANK YOU FOR CHOOSING US MR.<?php
echo'
    <h1 style="color: white;">'.$_SESSION['fullname'].'</h1>';
    ?></h2>
<h3 style="color: #F4B425;">YOU WILL BE CONTACTED SOON TO CONFIRM YOUR RESERVATION </h3>


</div>
</div>
</div>




</body>
</html>