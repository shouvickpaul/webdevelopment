<?php
    $conn = mysqli_connect("localhost", "root", "", "ecommerce_store") or die(mysqli_error($conn));
    
    if(!isset($_SESSION)){
        session_start();
    }
?>