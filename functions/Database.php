<?php 
session_start();



function db_connect(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'dev_app_db';


    return $conn = new mysqli($servername,$username,$password,$db_name);
}



?>