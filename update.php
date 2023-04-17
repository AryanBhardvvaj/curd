<?php
    include 'main.php';

    if(isset($_POST['done'])){

        $id=$_GET['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $q = "update curdtable set id =$id ,username = '$username' , password = '$password' where id=$id" ;

        $query = mysqli_query($conn,$q);

        header('location:display.php');

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="col-lg-6 m-auto">

        <form method="post">
            <br><br>

            <div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">
                        Update operation
                    </h1>

                </div>
                <label>Username : </label>
                <input type="text" name="username" class="form-control"><br>
               
                <label>Password : </label>
                <input type="password" name="password"><br>

                <button class="btn btn-success" type="submit" name="done">
                    Submit
                </button>

            </div>
        </form>

    </div>
    
</body>
</html>