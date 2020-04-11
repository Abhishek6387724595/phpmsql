<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-lg-12">
            <br><br>
            <h1 class="text-warning text-center">Display Table Data</h1><br>
            <table class="table text-center table-striped table-hover table-bordered">
                <tr class="bg-dark text-white" >
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>


<?php
include 'conn.php';

    $q = "SELECT * FROM `crudtable`";

    $query = mysqli_query($con,$q);    
    
    while($res = mysqli_fetch_assoc($query)){
?>        
    
                <tr class="text-center">
                    <td><?php echo $res['id'];?></td>
                    <td><?php echo $res['username'];?></td>
                    <td><?php echo $res['password'];?></td>
                    <td><button class="btn btn-danger"><a href="delete.php?id=<?php echo $res['id'];?>" class="text-white">Delete</a></button></td>
                    <td><button class="btn btn-success"><a href="update.php?id=<?php echo $res['id'];?>" class="text-white">Update</a></button></td>
                </tr>
            <?php
                    }
            ?>
            </table>
        </div>
    </div>
</body>
</html>