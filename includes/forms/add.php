<?php
session_start();
include '../dbconfiq.php';
if (isset($_POST['postbtn'])) {

    $title = $_POST['title'];
    $message = $_POST['message'];
    $file = $_FILES['file']['name'];
    $user_id = $_SESSION['user_id'];
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    $select = mysqli_query($con, "SELECT * FROM posts WHERE file = '$file' AND file_ext = '$ext' And user_id = '$user_id'");
    $selectrows = mysqli_num_rows($select);
    if ($selectrows >= 1) {
        $msg = "File already Exists!";
        $uploadOk = 0;
        echo "<script type='text/javascript'>
        alert('$msg');
        window.location = '../../frontend/templates/home.php';
    </script>";
    } else {

        $query = mysqli_query($con, "INSERT INTO posts(user_id, title, message, file, file_ext) VALUES('$user_id', '$title', '$message', '$file', '$ext')");
        $target = "img/" . basename($file);
        move_uploaded_file($_FILES['file']['tmp_name'], $target);
        if ($query == true) {

            $msg = "Post added successfully!";
            $uploadOk = 1;
            echo "<script type='text/javascript'>
            alert('$msg');
            window.location = '../../frontend/templates/home.php';
        </script>";
        } else {

            $msg = "An error ocuured! File is too large.";
            $uploadOk = 0;
            echo "<script type='text/javascript'>
            alert('$msg');
            window.location = '../../frontend/templates/home.php';
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
