<?php
session_start()
  include ("../navbar.php");
  include ("../connect.php");
  if (isset($_POST["sumit"])){
    $tripstart=$_POST["trip-start"];
    $appttime=$_POST["appt-time"];
    $sql="INSERT INTO reservation(`dateDebut`, `dateFin`) VALUES ('$tripstart','$appttime')";
    mysqli_query($connect,$sql);
  }
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
        <title>Our Fleet | Roayl Rental Service</title>
    <link rel="icon" href="../rrssvg.svg">
</head>
<body style="background: #303030;">

    <?php
  if(isset($_POST["submit"])){

    $insertData ="INSERT INTO reservation('id_resirvation','dateDebut','dateFin','id_client','id_vehicule') VALUES('1','1','1')";
    $result = $connect -> query($insertData); 

 }
    ?>

       
  


    <div class="container-fluid main-layout">
        <div class="content-holder">
            <h1 style="letter-spacing: 5px;" >RESERVATION</h1>
        </div>
    </div>
<form action="index.php" method="post">
    <div class="continer-fluid mt-5 text-center ">
   <h2 style="color: #F4B425;">CHOOSE A TIME</h2>

<label for="start" style="color:white;" class="time" ></label>

<input type="date" id="start" name="trip-start"
       min="2022-06-01" max="2022-12-31">

       <label for="appt-time" style="color:white;" class="time" ></label>
<input id="appt-time" type="time" name="appt-time">
</div>

<div class="continer-fluid mt-5 text-center ">
   <h2 style="color: #F4B425;">CHOOSE A VEHICLE</h2>

<select class="form-select" aria-label="Default select example">
  <option selected>Select a Categorie</option>
  <option value="1">SEDAN</option>
  <option value="2">SUV</option>
  <option value="3">VAN</option>
</select>

<select class="form-select" aria-label="Default select example">
  <option selected>Select a Vehicle</option>
  <option value="1">GLC Coupé</option>
  <option value="2">CLS</option>
  <option value="3">GLE</option>
  <option value="3">GLS</option>
</select>
</div>

<div class="continer-fluid mt-5 text-center ">
   <h2 style="color: #F4B425;">PERSONAL INFORMATION</h2>
   <input type="text" class="info" placeholder="Full Name">
   <input type="text" class="info" placeholder="Email">
   <br>
   <input type="text" class="info" placeholder="Phone Number">
   <input type="text" class="info" placeholder="CIN">
</div>

<div class="continer-fluid mt-5 text-center ">

    <button class="btn btn-warning my-2 my-sm-0" type="submit" name="submit" style="width:200px;">SUBMIT</button>
  </form>
</div>


<script src="js.js"></script>
</body>
</html>