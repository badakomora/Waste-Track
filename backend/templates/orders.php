<?php include './header.php'; ?>

<div class="container">
    <div class="jumbotron p-3" style="display: flex; justify-content:space-between">
        <h2>Users</h2>
        <h6><?php echo $_SESSION['username']; ?> <br> <?php echo $_SESSION['email']; ?></h6>
    </div>
    <hr>
</div>
<div class="container body">

    <table class="table table-striped" style="width: 100%;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Track Id</th>
                <th scope="col">Track name</th>
                <th scope="col">Ordered By</th>
                <th scope="col">Status</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <?php
        $query = mysqli_query($con, "SELECT * FROM orders");
        $count = 1;
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tbody>
                <tr>
                    <form action="../../includes/forms/edit.php" method="post">
                        <td scope="row"><?php echo $count; ?></td>
                        <td><input type="text" name="id" value="<?php echo $row['id']; ?>"></td>
                        <?php
                        $query1 = mysqli_query($con, "SELECT * FROM tracks where id = '".$row['trackid']."'");
                        while ($row1 = mysqli_fetch_array($query1)) {
                        ?>
                        <td><?php echo $row1['name']; ?></td>
                        <?php } ?>
                        <td><?php echo $row['orderedby'] ?></td>
                        <td>
                            <select name="status" id="">
                                <option class="bg-warning" value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
                                <option value="Approve">Approve</option>
                                <option value="Decline">Decline</option>
                            </select>
                        </td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button class="btn btn-warning" type="submit" name="edituser">Edit</button>
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