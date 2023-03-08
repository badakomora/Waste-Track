<?php include './header.php'; ?>

<div class="container">
    <div class="jumbotron p-3" style="display: flex; justify-content:space-between">
        <h2>Tracks</h2>
        <h6><?php echo $_SESSION['username']; ?> <br> <?php echo $_SESSION['email']; ?></h6>
       <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Track
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="Post" action="../../includes/forms/add.php" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Track name</label>
                    <input type="name" name="name" class="form-control border border-dark" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <textarea name="descr" class="form-control border border-dark" id="exampleInputPassword1"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">File</label>
                    <input type="file" name="file" class="form-control border border-dark" id="exampleInputPassword1">
                </div>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-dark" name="tracks" type="submit">Add </button>
            </div>
            </form>
            </div>
        </div>
        </div>
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
                    <form action="../../includes/forms/edit.php" method="post" enctype="multipart/form-data">
                        <td scope="row"><?php echo $count; ?></td>
                        <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
                        <td>#111<?php echo $row['id'] ?></td>
                        <td><input type="text" name="descr" value="<?php echo $row['descr']; ?>"></td>
                        <td><input type="file" name="file" required><img src="../../includes/forms/img/<?php echo $row['file']; ?>" width="45" height="45" alt=""></td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button class="btn btn-warning" type="submit" name="edittrack">Edit</button>
                        </td>
                    </form>
                    <td>
                        <form action="../../includes/forms/delete.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit" class="btn btn-danger" name="deletetrack">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        <?php $count++; } ?>
    </table>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>