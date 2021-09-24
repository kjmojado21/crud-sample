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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
          <div class="card mt-5 mx-auto w-50">
              <div class="card-header bg-info text-center border-none">
                  <p class="lead text-light">
                      Register an account
                  </p>
              </div>
              <div class="card-body">
                  <form action="" method="post">
                      <input type="text" name="fname" placeholder="FIRSTNAME" id="" class="form-control mt-3">
                      <input type="text" name="lname" placeholder="LASTNAME" id="" class="form-control mt-3">
                      <input type="text" name="username" placeholder="USERNAME" id="" class="form-control mt-3">
                      <input type="text" name="password" placeholder="PASSWORD" id="" class="form-control mt-3">
                      <button type="submit" class="btn btn-info mt-3" name="register">Register</button>
                  </form>
              </div>
              <div class="card-footer">
                  <a href="login.php">LOGIN HERE</a>
                  <?php 
                    if(isset($_POST['register'])){
                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        $login_id = add_login_table($username,$password);

                        if(!empty($login_id)){
                            add_user_table($fname,$lname,$login_id);
                        }


                    }
                  ?>
              </div>
          </div>
      </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>