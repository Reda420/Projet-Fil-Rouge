
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="../rrssvg.svg">
</head>
<body>

<nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="http://localhost/rrs/home/index.php">
            <img src="../rrssvg.svg" width="30" height="30" style="box-shadow: 0 2px 2px -2px rgba(0,0,0,.2);"  >
        </a>
        
        <div class="collapse navbar-collapse ">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
            <li class="nav-item" style="margin-left: 530px;" >
                <a class="nav-link" href="http://localhost/rrs/home/index.php" style="margin-left:50px;" >HOME </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/rrs/fleet/index.php">OUR FLEET</a>
            </li>
            </ul>
            <form  action="http://localhost/rrs/login/index.php" class="form-inline my-2 my-lg-0">
<?php
    session_start();
                    if (isset($_SESSION['fullname'])){
                        echo '
                        <h4 class="nav-link" >'.$_SESSION['fullname'].'</h4>
                        <a href="../logout.php" id="loginLink"><img src="../logout.png"></a>';
                    }
                       else {
                        echo ' <button  type="submit" name="login" class="btn btn-warning my-2 my-sm-0" id="login"> 
                        <a href="../login/index.php" id="loginLink">Login</a>
          ,              ';
                    }
?>

                    
                            
            </form>
        </div>
    </nav>
</body>
</html>

