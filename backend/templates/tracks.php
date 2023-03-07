<?php include './header.php'; ?>

<div class="container">
    <div class="jumbotron p-3" style="display: flex; justify-content:space-between">
        <h2>Tracks</h2>
        <h6><?php echo $_SESSION['username']; ?> <br> <?php echo $_SESSION['email']; ?></h6>
        <button class="btn btn-primary">Add Track</button>
    </div>
    <hr>
</div>
<div class="container body">

    <table class="table table-striped" style="width: 100%;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Track Name</th>
                <th scope="col">Track Id</th>
                <th scope="col">Track Description</th>
                <th scope="col">File</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <?php
        $query = mysqli_query($con, "SELECT * FROM tracks");
        $count = 1;
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tbody>
                <tr>
                    <form action="../../includes/forms/edit.php" method="post">
                        <td scope="row"><?php echo $count; ?></td>
                        <td><input type="text" name="username" value="<?php echo $row['name']; ?>"></td>
                        <td><?php echo $row['id'] ?></td>
                        <td><input type="text" value="<?php echo $row['descr']; ?>"></td>
                        <td><img src="<?php echo $row['file']; ?>" width="45" height="45" alt=""></td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button class="btn btn-warning" type="submit" name="editpost">Edit</button>
                        </td>
                    </form>
                    <td>
                        <form action="../../includes/forms/delete.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit" class="btn btn-danger" name="deleteuser">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        <?php $count++; } ?>
    </table>

</div>