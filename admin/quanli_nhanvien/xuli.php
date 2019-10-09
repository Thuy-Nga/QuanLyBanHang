<?php
include '../config.php';

$manv = $_POST['manv'];
$tennv = $_POST['tennv'];
$dc = $_POST['diachi'];
$sdt = $_POST['sdt'];
$chucvu = $_POST['chucvu'];
if($chucvu == 'nv'){
    $chucvu = 'nhân viên';
}else{
    $chucvu = 'admin';
}
if (isset($_POST['themnv'])) {   
    $sql_insert = "INSERT INTO NhanVien(HoTenNV, ChucVu, DiaChi, SoDienThoai) VALUES('$tennv', '$chucvu', '$dc', '$sdt');";
    mysqli_set_charset($conn, "utf8");
    $conn->query($sql_insert);
    header('location: ../index.php?quanly=nv&hd=lietkenv');
} else if(isset($_POST['suanv'])){
    $id = $_GET['idnv'];
    $sql_update = "UPDATE NhanVien SET HoTenNV = '$tennv', ChucVu = '$chucvu', DiaChi = '$dc', SoDienThoai = '$sdt'  WHERE MSNV = $id";
    mysqli_set_charset($conn, "utf8");
    $conn->query($sql_update);
    header('location: ../index.php?quanly=nv&hd=lietkenv');
}else{
    $id = $_GET['idnv'];
    $sql_delete = "DELETE FROM NhanVien WHERE MSNV = '$id';";
    mysqli_set_charset($conn, "utf8");
    $conn->query($sql_delete);
    header('location: ../index.php?quanly=nv&hd=lietkenv');
}
?>