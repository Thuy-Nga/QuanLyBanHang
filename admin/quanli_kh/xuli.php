<?php
include '../config.php';

$makh = $_POST['makh'];
$tenkh = $_POST['tenkh'];
$dc = $_POST['diachi'];
$sdt = $_POST['sdt'];

if (isset($_POST['themkh'])) {   
    $sql_insert = "INSERT INTO KhachHang(HoTenKh, DiaChi, SoDienThoai) VALUES('$tenkh', '$dc', '$sdt');";
    mysqli_set_charset($conn, "utf8");
    $conn->query($sql_insert);
    header('location: ../index.php?quanly=kh&hd=lietkekh');
} else if(isset($_POST['suakh'])){
    $id = $_GET['idkh'];
    $sql_update = "UPDATE KhachHang SET HoTenKH = '$tenkh', DiaChi = '$dc', SoDienThoai = '$sdt'  WHERE MSKH = $id";
    mysqli_set_charset($conn, "utf8");
    $conn->query($sql_update);
    header('location: ../index.php?quanly=kh&hd=lietkekh');
}else{
    $id = $_GET['idkh'];
    $sql_delete = "DELETE FROM KhachHang WHERE MSKH = '$id';";
    mysqli_set_charset($conn, "utf8");
    $conn->query($sql_delete);
    header('location: ../index.php?quanly=kh&hd=lietkekh');
}
?>