<?php
    $conn = mysqli_connect("localhost:3308", "root", "", "store") 
    or die(mysqli_error($conn));
    
    if(!isset($_SESSION)){
        session_start();
    }
?>