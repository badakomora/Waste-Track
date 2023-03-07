<?php 
session_start(); 
if(!isset($_SESSION['email'])) {
$msg = "Please Sign In Correctly or your Account will be De-activated Completely!";
echo "<script type='text/javascript'>alert('$msg');</script>";
header("refresh: 0, ../");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Waste Track System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
</head>
<body>

<nav class="navbar navbar-secondary bg-secondary">
    <a href="#" class="navbar-brand text-white" style="font-family:'Dancing Script';font-size: 30px;"><b>Waste Track</b></a>
    <form class="form-inline">
        <div class="input-group mt-3"> 
            <p><a class="text-white m-3" href="">My Orders</a></p>
            <p><a class="text-white m-3" href="../../includes/logout.php">Log Out</a></p>
        </div>
    </form>
</nav>


<div class="container-fluid">


<div class="row mt-3">
   
  
  <div class="col-4">
  <div class="card">
      <img class="card-img-top" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/bologna-2.jpg" alt="Bologna">
      <div class="card-body">
        <h4 class="card-title">Bologna</h4>
        <h6 class="card-subtitle mb-2">Emilia-Romagna Region, Italy</h6>
        <p class="card-text">It is the seventh most populous city in Italy, at the heart of a metropolitan area of about one million people. </p>
        <a href="#" class="btn btn-danger">Read More</a>
        <a href="#" class="btn btn-primary">Order Track</a>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col-4">
  <div class="card">
      <img class="card-img-top" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/bologna-2.jpg" alt="Bologna">
      <div class="card-body">
        <h4 class="card-title">Bologna</h4>
        <h6 class="card-subtitle mb-2">Emilia-Romagna Region, Italy</h6>
        <p class="card-text">It is the seventh most populous city in Italy, at the heart of a metropolitan area of about one million people. </p>
        <a href="#" class="btn btn-danger">Read More</a>
        <a href="#" class="btn btn-primary">Order Track</a>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col-4">
  <div class="card">
      <img class="card-img-top" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/bologna-2.jpg" alt="Bologna">
      <div class="card-body">
        <h4 class="card-title">Bologna</h4>
        <h6 class="card-subtitle mb-2">Emilia-Romagna Region, Italy</h6>
        <p class="card-text">It is the seventh most populous city in Italy, at the heart of a metropolitan area of about one million people. </p>
        <a href="#" class="btn btn-danger">Read More</a>
        <a href="#" class="btn btn-primary">Order Track</a>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
    
    
</div>

</div>


</body>
</html>
