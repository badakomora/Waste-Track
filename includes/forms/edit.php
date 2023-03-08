<?php
include '../dbconfiq.php';
if(isset($_POST['editorder'])){

    $uid = $_POST['id'];
    $status = $_POST['status'];

    mysqli_query($con, "UPDATE orders SET status = '$status' where id = '$uid'");
    $msg = "User Order updated successfully!";
        echo "<script type='text/javascript'>
        alert('$msg');
        window.location = '../../backend/templates/users.php';
    </script>";

}

if(isset($_POST['edittrack'])){
    
    $title = $_POST['name'];
    $message = $_POST['descr'];
    $file = $_FILES['file']['name'];
    $pid = $_POST['id'];

        $query = mysqli_query($con, "UPDATE tracks SET name = '$title', descr = '$message', file ='$file'WHERE id = '$pid'");
        $target = "img/" . basename($file);
        move_uploaded_file($_FILES['file']['tmp_name'], $target);
        if ($query == true) {

            $msg = "Track updated successfully!";
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