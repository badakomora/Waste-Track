<?php
session_start();
include '../includes/dbconfiq.php';
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $msg = '';
  
    $query = mysqli_query($con, "SELECT * FROM users where email = '$email'");
    $row = mysqli_fetch_assoc($query);
    
    if ($row >= 1) {
      if (password_verify( $password, $row['password'])) {
        
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
  
        header('refresh: 0, ./templates/home.php');
        $msg = "Login Access Granted. WELCOME!";
        echo "<script type='text/javascript'>alert('$msg');</script>";

      } else {
        header('refresh: 0, ./');
        $msg = "Login Access Denied. Please use the correct credentials";
        echo "<script type='text/javascript'>alert('$msg');</script>";
      }
    } else {
  
      header('refresh: 0, ./');
      $msg = "This user does not exist. Please use the correct credentials";
      echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    
  }elseif (isset($_POST['Register'])){
   
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


    $users = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
    $rows = mysqli_num_rows($users);
    if($rows >= 1){
        $msg = "This user ALready Exists. Please use a different email to sign Up.";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        header("refresh: 0, ./"); 
    }else{
        $insert = mysqli_query($con, "INSERT INTO users(email, username, password) VALUES('$email', '$username', '$password')");
        $msg = "Registration Successful! Procced to sign in.";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        header("refresh: 0, ./#SignIn"); 
    }

}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-lg d-flex justify-content-between navbar-light bg-white shadow sticky-top">
    <a href="#" class="navbar-brand text-dark" style="font-size: 30px;"><b>Waste Track Management  System</b></a>
    <!-- <p> <a href="../backend/index.php" class="text-dark fw-bold">Admin here</a></p> -->
</nav>

<div class="container justify-content-center row m-5 p-5">
    


    <div class="col-lg-6">
        <div class="bg-white">
            <h4 class="mb-4 text-dark">Signup for account</h4>
            <hr>
            <form method="Post" action="">
            <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Username</label>
                    <input type="username" name="username" class="form-control border border-dark" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control border border-dark" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control border border-dark" id="exampleInputPassword1">
                </div>
                <div class="d-grid">
                    <button class="btn btn-dark" name="Register" type="submit">Sign Up</button>
                </div>
            </form>
        </div>
    </div>





    <div class="col-lg-6" id="SignIn">
        <div class="bg-white">
            <h4 class="mb-4 text-dark">Signin to account</h4>
            <hr>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control border border-dark" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control border border-dark" id="exampleInputPassword1">
                </div>
                <!-- <p class="small"><a class="text-dark" href="forget-password.html">Forgot password?</a></p> -->
                <div class="d-grid">
                    <button class="btn btn-dark" name="login" type="submit">Sign In</button>
                </div>
            </form>
            <div class="mt-3">
               
            </div>
        </div>
    </div>




</div>



</body>
</html>