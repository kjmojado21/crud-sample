<?php 
include 'Database.php';

function add_login_table($username,$password){
    $conn = db_connect();
    $sql = "INSERT INTO login(username,password)VALUES('$username','$password')";
    $result = $conn->query($sql);

    if($result == TRUE){
        return $conn->insert_id;
    }else{
        die('ERROR: '.$conn->error);
    }

}

function add_user_table($fname,$lname,$login_id){
    $conn = db_connect();
    $sql = "INSERT INTO users(fname,lname,login_id)VALUES('$fname','$lname','$login_id')";
    $result = $conn->query($sql);

    if($result==TRUE){
        echo "<div class = 'alert alert-success mt-3'>Registered Successfully <strong><a href='login.php'>LOGIN HERE</a></strong></div>";
    }else{
        die('ERROR: '.$conn->error);
    }

}

function login($username,$password){
    $conn = db_connect();
    $sql = "SELECT * FROM login INNER JOIN users ON login.login_id = users.login_id WHERE login.username ='$username' AND login.password= '$password'";
    $result = $conn->query($sql);

    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $_SESSION['firstname'] = $row['fname'];
        $_SESSION['lastname'] = $row['lname'];
        $_SESSION['id'] = $row['login_id'];
        if($row['status'] == 'U'){
            
            header('location:user_dashboard.php');
        }else{
            header('location:admin_dashboard.php');
        }

    }else{
        echo "<div class = 'alert alert-danger mt-3'>INVALID CREDENTIALS</div>";
    }

}
function get_all_users(){
    $conn = db_connect();
    $sql = "SELECT * FROM users INNER JOIN login ON users.login_id = login.login_id";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        $container = array();
        while($row = $result->fetch_assoc()){
            $container[] = $row;
        }
        return $container;
    }else{
        return FALSE;
    }
}

function upload_photo($id,$filename){
    $conn = db_connect();
    $sql = "UPDATE users SET img = '$filename' WHERE user_id = '$id'";
    $result = $conn->query($sql);
    if($result == TRUE){
        return 1;
    }else{
        return 0;
    }
}





?>