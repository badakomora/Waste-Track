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
</head>
<body>

<nav class="navbar navbar-expand-lg  navbar-light bg-white shadow d-flex justify-content-between sticky-top">
    <a href="#" class="navbar-brand text-dark" style="font-size: 30px;"><b>Waste Track Management System</b></a>
    <form class="form-inline">
        <div class="input-group mt-3"> 
            <p><a class="text-dark m-3 " href="./home.php">Dashboard</a></p>
            <p><a class="text-dark m-3 " href="orders.php">My Orders</a></p>
            <p><a class="text-dark m-3" href="../../includes/logout.php">Log Out</a></p>
        </div>
    </form>
</nav>


<div class="container-fluid">


<div class="row mt-3">
   
<?php
include '../../includes/dbconfiq.php';
  $query = mysqli_query($con, "SELECT * FROM tracks");
  while ($row = mysqli_fetch_array($query)) {
?>

  <div class="col-4">
  <div class="card">
      <img class="card-img-top" src="../../includes/forms/img/<?php echo $row['file']; ?>" alt="Bologna">
      <div class="card-body">
        <h4 class="card-title"><?php echo $row['name']?></h4>
        <h6 class="card-subtitle mb-2">Track Id: #111<?php echo $row['id']?></h6>
        <p class="card-text"><?php echo $row['descr']?> </p>
        
        <?php 
          $query1 = mysqli_query($con, "SELECT * FROM orders where trackid = '".$row['id']."'");
          if(mysqli_num_rows($query1) >= 1){
          while($row1 = mysqli_fetch_array($query1)){?>
                <a href="#" class="btn btn-warning" style="cursor:no-drop;">Track Busy</a>
                <?php }}else{?>
                <a href="../../includes/forms/add.php?tid=<?php echo $row['id'];?>" class="btn btn-primary">Order Track</a>
       <?php }?>
        
      </div>
    </div>
  </div>

  <?php }?>
    
    
</div>

</div>


</body>
</html>
