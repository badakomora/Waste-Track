<?php
include '../dbconfiq.php';
if(isset($_POST['deleteuser'])){

    $uid = $_POST['id'];
    $eid = $_POST['eid'];
    mysqli_query($con, "DELETE FROM users WHERE id = '$uid'");
    mysqli_query($con, "DELETE FROM orders WHERE orderedby = '$eid'");
        $msg = "User records deleted successfully!";
        echo "<script type='text/javascript'>
        alert('$msg');
        window.location = '../../backend/templates/users.php';
        </script>";

}
if(isset($_POST['deletetrack'])){

    $uid = $_POST['id'];
    $query1 = mysqli_query($con, "DELETE FROM tracks WHERE id = '$uid'");
    if($query1){
    $msg = "Track records deleted successfully!";
    echo "<script type='text/javascript'>
    alert('$msg');
    window.location = '../../backend/templates/tracks.php';
    </script>";
    }

}
if(isset($_POST['deleteorder'])){

    $uid = $_POST['id'];
    mysqli_query($con, "DELETE FROM orders WHERE id = '$uid'");
    $msg = "Order records deleted successfully!";
    echo "<script type='text/javascript'>
    alert('$msg');
    window.location = '../../backend/templates/orders.php';
    </script>";

}
