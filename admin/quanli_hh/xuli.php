<?php
include '../config.php';

$mahh = $_POST['mahh'];

if (isset($_POST['themhh'])) {
    
    $tenhh = $_POST['tenhh'];
    $gia = $_POST['gia'];
    $sl = $_POST['soluonghh'];
    $manhom = $_POST['manhom'];
    $mota = $_POST['motahh'];

    $sql_insert = "INSERT INTO HangHoa(TenHH, Gia, SoLuongHang, MaNhom, Hinh, MoTaHH) VALUES ('$tenhh', $gia, $sl, $manhom, 'oppo-a9-2020-green-1-400x400.jpg', '$mota');";
    mysqli_set_charset($conn, "utf8");
    $conn->query($sql_insert);
    header('location: ../index.php?quanly=hh&hd=lietkehh');
} 
?>