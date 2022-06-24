<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css%22%3E">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login | Roayl Rental Service</title>
    <link rel="icon" href="../rrssvg.svg">
</head>
<body class="bodyy">

<nav class="navbar navbar-expand-lg">
<a  class="navbar-brand" href="http://localhost/rrs/home/index.php">
    <img src="../rrssvg.svg" width="30" height="30" alt="">
</a>
  
  <div class="collapse navbar-collapse ">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
      <li class="nav-item " style="margin-left: 530px;" >
        <a class="nav-link" href="http://localhost/rrs/home/index.php" style="margin-left:50px;">HOME </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/rrs/fleet/index.php">OUR FLEET</a>
      </li>

    </ul>
  </div>
</nav>

<?php
include ("../connect.php");
session_start();
if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = $_POST ['password'];
$sql = "SELECT * FROM client WHERE email='$email' AND pass='$password'";
$result = mysqli_query($connect, $sql);
$DB = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) > 0)
{
  foreach($result as $row){
    $_SESSION["idClient"]=$row["id_client"];
    $_SESSION["fullname"]=$row["nomcomplete"];
  }
  header("location:../home/index.php");
    

  }
  else{
    echo '<div class="alert alert-warning" role="alert">
    This Email Or Password Doesnt Existe
    </div>';
  }
}
?>


    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="bg text-white" style="color: #F4B425; ">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
      

      <form action="index.php" method="post">
                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="typeEmailX" style="color:black">Email</label>
                        <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" />                      
                    </div>
      
                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="typePasswordX" style="color:black">Password</label>
                        <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" />
                    </div>
      
                    <p class="small pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
      
                    <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submit">Login</button>
  
                  </div>
      </form>
                  <div>
                    <p class="mb-0">Don't have an account? <a href="http://localhost/rrs/signup/index.php" class="text-white-50 fw-bold">Sign Up</a>
                    </p>
                  </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>  
      

</body>
</html>