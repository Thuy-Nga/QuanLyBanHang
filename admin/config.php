<?php 
    $conn = new mysqli('localhost', 'root', '', 'quanlybanhang');
    if($conn->connect_error){
        die('Kết nối thất bại');
    }

?>