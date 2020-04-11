<?php

include 'conn.php';

//extract($_POST);
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $q = "INSERT INTO `crudtable`(`username`, `password`) VALUES ('$username','$password')";
    $query = mysqli_query($con,$q);    
}

?>
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
    <div class="col-lg-4 m-auto">
        <form action="" method="post" class="form-group">
            <br><br><div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Insert Operations</h1>
                </div><br>
                 <label for="">Username: </label>
                 <input type="text" name="username" id="username" class="form-control" ><br>

                 <label for="">Password: </label>
                 <input type="password" name="password" id="password"  class="form-control" >
                <br>
                 <button class="btn btn-success" type="submit" name="submit">Submit</button>
                 <br>            
            </div>
        </form>
    </div>

</body>
</html>