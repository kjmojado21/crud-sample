<?php 
include 'functions/Functions.php';
$user_id = $_GET['user_id'];

?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="picture" id="">
    <button type="submit" name="upload">upload</button>
</form>

<?php 
    if(isset($_POST['upload'])){
        $picture = $_FILES['picture']['name'];
        $target_dir = 'uploads/';
        $target_file = $target_dir.basename($picture);

        $validate = upload_photo($user_id,$picture);

        if($validate == 1){
            move_uploaded_file($_FILES['picture']['tmp_name'],$target_file);
            header('location:admin_dashboard.php');
        }else{
            echo "ERROR IN UPLOADING IMAGE";
        }


    }
?>