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
    <?php
    include 'functions/Functions.php';
    echo "HELLO " . $_SESSION['firstname'] . " " . $_SESSION['lastname'] . " ! ";
    ?>

    <table class="table">
        <thead>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>User Image</th>
            <th>Option</th>
            
        </thead>
        <tbody>
            
            <?php 
            
            foreach (get_all_users() as $row) { ?>
                <tr>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['lname'] ?></td>
                    <td><?php if(!empty($row['img'])){
                        ?>
                            <img src="uploads/<?php echo $row['img'] ?>" alt="">
                        <?php
                    }else{
                        echo "<td>NO IMAGE</td>";
                    } ?>
                    </td>
                    <td><a href="upload.php?user_id=<?php echo $row['user_id'] ?>">UPLOAD IMAGE</a></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>

    <a href="logout.php">LOGOUT</a>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>