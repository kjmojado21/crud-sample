<?php 
include 'functions/Functions.php';

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="card w-50 mx-auto mt-5">
            <div class="card-header bg-info text-light text-center">
                <p class="lead">
                    LOGIN HERE
                </p>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" name="username" placeholder="USERNAME" id="" class="form-control mt-3">
                        </div>
                        <div class="col-6">
                            <input type="text" name="password" placeholder="PASSWORD" id="" class="form-control mt-3">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-grid">
                            <button type="submit" name="login" class="btn btn-info mt-3">LOGIN</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <a href="register.php" class="text-decoration-none">NO ACCOUNT? REGISTER HERE</a>
            </div>

        </div>
    </div>
    <?php 
        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            login($username,$password);
        }
    
    ?>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>