<?php

include 'main.php';
   

    $q = "SELECT * FROM `curdtable`";

    $query = mysqli_query($conn,$q);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-lg-12">
            <h1 class="text-warning text-center">Display table data</h1>

            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>

                <?php
                    include 'main.php';

                        $q = "SELECT * FROM `curdtable`";

                        $query = mysqli_query($conn,$q);

                        while ($res= mysqli_fetch_array($query)){

                ?>

                <tr>
                <th><?php echo $res['id'];?></th>
                <th><?php echo $res['username'];?></th>
                <th><?php echo $res['password'];?></th>
                <th><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id'];?>"class="text-white">Delete</th>
                <th><button class="btn-primary btn"><a href="update.php?id=<?php echo $res['id'];?>"class="text-white">Update</th>
                
                
                    
                </tr>
            <?php
                        }

        ?>
            </table>




        </div>
    </div>
    
</body>
</html>