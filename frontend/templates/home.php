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
      <img class="card-img-top" src="https://oconnorscaseih.com.au/wp-content/uploads/Davimac_35t-tracks_blue_rear-300x300.jpg" alt="Bologna">
      <div class="card-body">
        <h4 class="card-title">Track 1</h4>
        <h6 class="card-subtitle mb-2">Lorem ipsum 1</h6>
        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, consequatur labore alias animi nihil odio expedita delectus ipsa eos dolorum obcaecati excepturi vero reiciendis dolor quaerat enim aperiam fugit laboriosam? </p>
        <a href="#" class="btn btn-warning">Read More</a>
        <a href="#" class="btn btn-primary">Order Track</a>
      </div>
      <div class="card-footer">
        <small class="text-muted text-success">Ready to order</small>
      </div>
    </div>
  </div>

  <div class="col-4">
  <div class="card">
      <img class="card-img-top" src="https://www.waringa.com.au/wp-content/uploads/elementor/thumbs/Elmers-Haulmaster-Adjustable-Auger-scaled-phjhc4a6g0t4ze54mrwfxkh4s39k5gr27syerp5j8g.jpg" alt="Bologna">
      <div class="card-body">
        <h4 class="card-title">Track 2</h4>
        <h6 class="card-subtitle mb-2">Lorem ipsum 2</h6>
        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, consequatur labore alias animi nihil odio expedita delectus ipsa eos dolorum obcaecati excepturi vero reiciendis dolor quaerat enim aperiam fugit laboriosam? </p>
        <a href="#" class="btn btn-warning">Read More</a>
        <a href="#" class="btn btn-danger">Track ordered</a>
      </div>
      <div class="card-footer">
        <small class="text-muted text-danger">Ordered</small>
      </div>
    </div>
  </div>

  <div class="col-4">
  <div class="card">
      <img class="card-img-top" src="https://oconnorscaseih.com.au/wp-content/uploads/41T-Chaser-Bin-Unloading-1024x576-1-e1644273023967.jpg" alt="Bologna">
      <div class="card-body">
        <h4 class="card-title">Track 3</h4>
        <h6 class="card-subtitle mb-2">Lorem Ipsum 3</h6>
        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, consequatur labore alias animi nihil odio expedita delectus ipsa eos dolorum obcaecati excepturi vero reiciendis dolor quaerat enim aperiam fugit laboriosam?</p>
        <a href="#" class="btn btn-warning">Read More</a>
        <a href="#" class="btn btn-primary">Order Track</a>
      </div>
      <div class="card-footer">
        <small class="text-muted text-success">Ready to order</small>
      </div>
    </div>
  </div>
    
    
</div>

</div>


</body>
</html>
