<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Sign Up | Roayl Rental Service</title>
    <link rel="icon" href="../rrssvg.svg">
</head>
<body>


<nav class="navbar navbar-expand-lg">
<a  class="navbar-brand" href="http://localhost/rrs/home/index.php">
    <img src="../rrssvg.svg" width="30" height="30" alt="">
</a>
  
  <div class="collapse navbar-collapse ">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
      <li class="nav-item " style="margin-left: 530px;">
        <a class="nav-link" href="http://localhost/rrs/home/index.php" style="margin-left:50px;">HOME </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/rrs/fleet/index.php">OUR FLEET</a>
      </li>

    </ul>
  </div>
</nav>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="bg text-white" style="color: #F4B425; ">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-0 mt-md-0 pb-5">
                  <form action="index.php" method="POST">
                  <div class="form-outline form-white mb-2">
                        <label class="form-label" for="typeEmailX" style="color:black">Full Name</label>
                        <input name="fullname" type="name" id="typeEmailX" class="form-control form-control-lg" />                      
                    </div>

                    <div class="form-outline form-white mb-2">
                        <label class="form-label" for="typeEmailX" style="color:black">Phone Number</label>
                        <input name="phone" type="phone" id="typeEmailX" class="form-control form-control-lg" />                      
                    </div>

                    <div class="form-outline form-white mb-2">
                        <label class="form-label" for="typeEmailX" style="color:black">Email</label>
                        <input name="email" type="email" id="typeEmailX" class="form-control form-control-lg" />                      
                    </div>
      
                    <div class="form-outline form-white mb-2">
                        <label class="form-label" for="typePasswordX" style="color:black">Password</label>
                        <input name="password" type="password" id="typePasswordX" class="form-control form-control-lg" />
                    </div>

                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="typePasswordX" style="color:black">CIN</label>
                        <input name="cin" type="TEXT" id="typePasswordX" class="form-control form-control-lg" />
                    </div>
      

      
                    <button class="btn btn-outline-light btn-lg px-5" name="submit" type="submit">Register</button>
                    </form>
  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>    
      
      <?php
      session_start();
  include ("../connect.php");

  if (isset($_POST["submit"])){
    $fullname=$_POST["fullname"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cin=$_POST["cin"];
    $_SESSION["fullname"]=$fullname;

    $insert="INSERT INTO client(`nomcomplete`, `telephone`, `email`, `cin`, `pass`)values('$fullname', '$phone', '$email','$cin', '$password')";
     mysqli_query($connect,$insert);
     header("location:../home/index.php");
  }

?>
</body>
</html>