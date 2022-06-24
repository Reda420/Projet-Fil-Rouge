<?php
  include ("../connect.php");
  include ("../navbar.php");
  $getdata = "SELECT prix, vehicule, images FROM vehicule " ;
  $conn = mysqli_query($connect, $getdata);
  // if ($conn -> num_rows > 0){
  // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Home | Roayl Rental Service</title>
    <link rel="icon" href="../rrssvg.svg">
</head>
<body style="background: #303030;">


    <div class="container-fluid main-layout">
        <div class="content-holder">
            <h1 style="letter-spacing: 5px;" >LUXURY CAR </h1>
            <p>WITH PERSONAL DRIVER RESERVATION</p>
        </div>
    </div>

    <div class="continer-fluid mt-5 text-center ">

        <h2 style="color: #F4B425;">MOST PREFERED FLEETS</h2>

</div>
<div class="container text-center">
    <div class="card-deck mt-5">
  <div class="card" style="border: none;background: #303030;">
    <img class="card-img-top" src="../image1.jpg" alt="Card image cap">
    <div class="card-body">
      <p class="card-text0">Mercedes-Benz Maybach S-Class</p>
      <form action="http://localhost/rrs/fleet/index.php">
      <!-- <button class="btn btn-warning my-2 my-sm-0" >RENT</button>  -->
    </form>
    </div>
  </div>
  <div class="card" style="border: none;background: #303030;">
    <img class="card-img-top" src="../image2.jpg" alt="Card image cap">
    <div class="card-body">
      <p class="card-text0">Mercedes-Benz GLS-Class</p>
      <form action="http://localhost/rrs/fleet/index.php">
      <!-- <button class="btn btn-warning my-2 my-sm-0" >RENT</button> -->
    </form>
    </div>
  </div>
  <div class="card" style="border: none;background: #303030;">
    <img class="card-img-top" src="../image3.webp" alt="Card image cap">
    <div class="card-body" >
      <p class="card-text0">Mercedes-Benz Vito Line SPORT</p>
      <form action="http://localhost/rrs/fleet/index.php">
      <!-- <button class="btn btn-warning my-2 my-sm-0" >RENT</button> -->
    </form> 
    </div>
  </div>
    </div>
  
</div>
    <div class="container-fluid ">
        <div class="mid-layout" >
                <div class="mid-layout2"  >
                    <h1>TAKING YOU ANYWHERE <br> YOU WANT OR NEED TO BE</h1>
                </div>

             
        </div>
          
         <div class="mid-layout3" >
                <img src="../Home3w.png" style="width:102%" class="img" alt="Responsive image">

        </div>

    </div>

    <div class="container text-center">
    <div class="card-deck">
  <div class="card">
  <h1 class="card-title">1</h1>  
    <div class="card-body">
      <p class="card-text">
        <small class="text-muted">Professional
        <br> Car Driver</small></p>
    </div>
  </div>
  <div class="card">
  <h1 class="card-title">2</h1>  
    <div class="card-body">
      <p class="card-text">
        <small class="text-muted">Fast Car Delivery Service</small></p>
    </div>
  </div>
  <div class="card ">
  <h1 class="card-title">3</h1>  
    <div class="card-body">
      <p class="card-text">
        <small class="text-muted">Large Selection Of Luxury Vehicles</small></p>
    </div>
  </div>
</div>
</div>

<footer class="bg text-center text-lg-start mt-5">
  <!-- Copyright -->
  <div class="container">
<img class="rounded mt-5" src="../rrssvg.svg" alt="">
<p class= "mt-5 ">+212 65 45 56 98 09<br>rentalroyalservice@gmail.com<br>Branes Rue Saules Tanger, MA 90000, Morocco</p>
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
  <!-- Grid container  -->


    <div class="text-center text-white">
    © 2020 Copyright:
    <a class="text" style="color: #F4B425;" href="https://mdbootstrap.com/">Rentalroyalservice2022</a>
  </div>

</footer>

<script src="https://unpkg.com/scrollreveal"></script>
<script src="main.js"></script>

</body>
</html>