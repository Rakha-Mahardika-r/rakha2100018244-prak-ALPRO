<?php 
    $database = 'buku_tamu';
    $host = 'localhost';
    $user = 'root';
    $pass = '';

    $conn = mysqli_connect($host, $user, $pass, $database);

    if(! $conn){
        echo mysqli_error($conn);
        exit();
    }
?>