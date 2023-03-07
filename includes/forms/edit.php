<?php
include '../dbconfiq.php';
if(isset($_POST['edituser'])){

    $uid = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['username'];

    mysqli_query($con, "UPDATE users SET username = '$name', email = '$email' where id = '$uid'");
    $msg = "User record updated successfully!";
        echo "<script type='text/javascript'>
        alert('$msg');
        window.location = '../../backend/templates/users.php';
    </script>";

}

if(isset($_POST['editpost'])){
    
    $title = $_POST['name'];
    $message = $_POST['descr'];
    $file = $_FILES['file']['name'];
    $pid = $_POST['id'];
    $status = $_POST['status'];

        $query = mysqli_query($con, "UPDATE tracks SET name = '$title', descr = '$message', status='$status' file ='$file'WHERE id = '$pid'");
        $target = "img/" . basename($file);
        move_uploaded_file($_FILES['file']['tmp_name'], $target);
        if ($query == true) {

            $msg = "Post updated successfully!";
            $uploadOk = 1;
            echo "<script type='text/javascript'>
            alert('$msg');
            window.location = '../../frontend/templates/edit.php?pid=$pid';
        </script>";
        } else {

            $msg = "An error ocuured! File is too large.";
            $uploadOk = 0;
            echo "<script type='text/javascript'>
            alert('$msg');
            window.location = '../../frontend/templates/edit.php?pid=$pid';
        </script>";
        }
}