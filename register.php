<?php
// session_start();
include 'functions.php';

if(isset($_POST['submit'])){
   
    $conn = new loginDashboard();
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $sql1="SELECT * FROM admin WHERE username='$username'";     
    $sql2="INSERT INTO admin VALUES ( '$username', '$pass')";
    $conn->register($sql1, $sql2);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link type="text/css" href="css/index.css" rel="stylesheet">

    <title>Register</title>
</head>
<body>
  <div class="wrapper">  
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-4">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-1">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">For membership, register here!</h1>
                                    </div>
                                    <form class="user" action="" method="post">
                                        <div class="form-group">
                                            <input class="form-control form-control-user" type="text" name="username" placeholder="Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control form-control-user" type="password" name="password" placeholder="Enter Password">
                                        </div>
                                        <button type="submit" name="submit" value="Register" class="btn btn-primary btn-user btn-block">Register</button>
                                        <button type="submit" formaction="index.php" value="GO_BACK"  class="btn btn-primary btn-user btn-block">Login Page</button>
                                        <hr>
                                    </form>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
        </div> 
    </div> 
  </div>

  <footer class="footer">&copy;<a href="https://www.github.com/Lin-Kon">Linkon</a></footer>
</body>
</html>