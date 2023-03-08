<?php
session_start();
include '../dbconfiq.php';
if (isset($_POST['tracks'])) {

    $title = $_POST['name'];
    $message = $_POST['descr'];
    $file = $_FILES['file']['name'];
    $select = mysqli_query($con, "SELECT * FROM tracks WHERE file = '$file' AND name= '$title'");
    $selectrows = mysqli_num_rows($select);
    if ($selectrows >= 1) {
        $msg = "Track already Exists!";
        $uploadOk = 0;
        echo "<script type='text/javascript'>
        alert('$msg');
        window.location = '../../backend/templates/tracks.php';
    </script>";
    } else {

        $query = mysqli_query($con, "INSERT INTO tracks(name, descr, file) VALUES('$title', '$message', '$file')");
        $target = "img/" . basename($file);
        move_uploaded_file($_FILES['file']['tmp_name'], $target);
        if ($query == true) {

            $msg = "Track added successfully!";
            $uploadOk = 1;
            echo "<script type='text/javascript'>
            alert('$msg');
            window.location = '../../backend/templates/tracks.php';
        </script>";
        } else {

            $msg = "An error ocuured! File is too large.";
            $uploadOk = 0;
            echo "<script type='text/javascript'>
            alert('$msg');
            window.location = '../../backend/templates/tracks.php';
        </script>";
        }
    }
} elseif (isset($_GET['tid'])) {

    $user_id = $_SESSION['email'];
    $tid = $_GET['tid'];
    $message = "Pending...";
    $select = mysqli_query($con, "SELECT * FROM orders WHERE trackid = '$tid' And orderedby = '$user_id'");
    $selectrows = mysqli_num_rows($select);
    if ($selectrows >= 1) {
        $msg = "Order already Exists!";
        $uploadOk = 0;
        echo "<script type='text/javascript'>
        alert('$msg');
        window.location = '../../frontend/templates/home.php';
    </script>";
    } else {

        $query = mysqli_query($con, "INSERT INTO orders(orderedby,trackid,status) VALUES('$user_id', '$tid','$message')");
        if ($query == true) {

            $msg = "Track ordered successfully!";
            $uploadOk = 1;
            echo "<script type='text/javascript'>
            alert('$msg');
            window.location = '../../frontend/templates/home.php';
        </script>";

        } else {

            $msg = "An error ocuured!info is too large.";
            $uploadOk = 0;
            echo "<script type='text/javascript'>
            alert('$msg');
            window.location = '../../frontend/templates/home.php';
        </script>";
        }
    }
}
