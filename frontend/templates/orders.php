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
    <a href="#" class="navbar-brand text-dark" style="font-size: 30px;"><b>Waste Track Management  System</b></a>
    <form class="form-inline">
        <div class="input-group mt-3"> 
            <p><a class="text-dark m-3 " href="./home.php">Dashboard</a></p>
            <p><a class="text-dark m-3 " href="orders.php">My Orders</a></p>
            <p><a class="text-dark m-3" href="../../includes/logout.php">Log Out</a></p>
        </div>
    </form>
</nav>

<div class="container body">

    <table class="table table-striped" style="width: 100%;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Track Id</th>
                <th scope="col">Track name</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <?php
        include '../../includes/dbconfiq.php';
        $query = mysqli_query($con, "SELECT * FROM orders WHERE orderedby = '".$_SESSION['email']."'");
        $count = 1;
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tbody>
                <tr>
                    <form action="../../includes/forms/edit.php" method="post">
                        <td scope="row"><?php echo $count; ?></td>
                        <td><?php echo $row['id']; ?></td>
                        <?php
                        $query1 = mysqli_query($con, "SELECT * FROM tracks where id = '".$row['trackid']."'");
                        while ($row1 = mysqli_fetch_array($query1)) {
                        ?>
                        <td><?php echo $row1['name']; ?></td>
                        <?php } ?>
                        <td><?php echo $row['status']; ?></td>
                </tr>
            </tbody>
        <?php $count++; } ?>
    </table>

</div>