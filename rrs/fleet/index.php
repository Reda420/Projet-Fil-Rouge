<?php
  include ("../navbar.php");

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
        <title>Our Fleet | Roayl Rental Service</title>
    <link rel="icon" href="../rrssvg.svg">
</head>
<body style="background: #303030;">

    <div class="container-fluid main-layout">
        <div class="content-holder">
            <h1 style="letter-spacing: 5px;" >OUR FLEET</h1>
        </div>
    </div>   
     <div class="container text-center" id="container">
      
 <?php 
   include ("../connect.php");
   $getdata = "SELECT * FROM vehicule" ;
   $conn = $connect->query($getdata);
   if($conn->num_rows>0)
    while ($result = $conn ->fetch_assoc()){
      $_session["vehicule"]= $result ["vehicule"];
  echo'

    <div class="card-dick mt-5">
    <div class="card" style="border:none;">
      <a href="desc.php?desc='.$result["id_vehicule"].'"><img class="card-img-top" src="../sedan/'.$result["images"].'"></a>
    </div>
    <div class="card-body">
    <p class="card-text0">'.$_session["vehicule"].'</p>
    <p class="card-text0">'.$result["prix"].' Mad/hour</p>


    </div>
    </div> 
  
'; 
}
?> 
</div>



<footer class="bg text-center text-lg-start mt-5">
  <!-- Copyright -->
  <div class="container">
<img class="rounded mt-5" src="../rrssvg.svg" alt="">
<p class= "mt-5 " >+212 65 45 56 98 09<br>rentalroyalservice@gmail.com<br>Branes Rue Saules Tanger, MA 90000, Morocco</p>
</div>


<div class="container p-4 pb-0">
    <!-- Section: Social media -->
    
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-floating m-1"  style="background-color: #F4B425;" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-floating m-1" style="background-color: #F4B425;" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>
      <!-- Github -->
      <a class="btn btn-floating m-1" style="background-color: #F4B425;" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!--  Grid container  -->


    <div class="text-center text-white">
    © 2020 Copyright:
    <a class="text" style="color: #F4B425;" href="https://mdbootstrap.com/">Rentalroyalservice2022</a>
  </div>
  <!-- Copyright -->
</footer>

<!-- <div class="container text-center">
  <div class="row text-white">
    <div class="col-sm">
      <h1 style="">1</h1>  
      <p>Professional
        <br> Car Driver</p> 
    </div>

    <div class="col-sm">
      <h1>2</h1>  
      <p>Fast Car Delivery Service</p> 
    </div>

    <div class="col-sm">
      <h1>3</h1>  
      <p>Large Selection Of Luxury Vehicles</p> 
   </div>

  </div>
</div> -->
</body>
</html>