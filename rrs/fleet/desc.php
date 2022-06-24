<?php
      include ("../navbar.php");
      include ("../connect.php");
      $id_vehicule = $_GET['desc'];
      $getdata="SELECT * FROM vehicule WHERE id_vehicule = '$id_vehicule'";
      $result = $connect -> query($getdata); 
      if($result -> num_rows > 0){

      }
      if(isset($_POST["submit"])){
        $idClient=$_SESSION["idClient"];
        $id_vehicule=$_SESSION["id_vehicule"];
        $datedebut=date('Y-m-d',strtotime($_POST["datedebute"]));
        $datefin=date('Y-m-d',strtotime($_POST["datefin"]));
        $insertData ="INSERT INTO reservation(dateDebut,id_client,id_vehicule,dateFin) VALUES ('$datedebut','$idClient','$id_vehicule','$datefin')";
        mysqli_query($connect,$insertData);
        header("location:../ty.php");
        
     }
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
<div class="bigdiv">
<div class="leftdiv" >
<?php

            while($row=$result -> fetch_assoc()) {
                $_SESSION["id_vehicule"]=$row["id_vehicule"];
                    echo'<img class="card-img-top" src="../sedan/'.$row["images"].'">
           

</div>
<div class="rightdiv">
<h1>'.$row["vehicule"].'</h1>
    <p>'.$row["description"].'</p>
    <h2>'.$row["prix"].' Mad/day</h2>
    
<div class="iners">
                <div style="margin-right: 20px; margin-top:20px ">
    <h5>Needed From The</h5>
    <form action=""method="post">
<label for="start" style="color:white;" class="time" ></label>

<input type="date" name="datedebute" id="start" name="trip-start"
       min="2022-06-01" max="2022-12-31">
</div>

<div style="margin-top:20px ">
<h5>To The</h5>
<label for="start" style="color:white;" class="time" ></label>

<input type="date" name="datefin" id="start" name="trip-start"
       min="2022-06-01" max="2022-12-31">


</div>

</div>

<div class="continer-fluid mt-5 text-center ">
       <button class="btn btn-warning my-2 my-sm-0" type="submit" name="submit" style="width:150px; margin-left:327px ">
       SUBMIT</button>

</div>
</div>
</form>';

 }


?>


</body>