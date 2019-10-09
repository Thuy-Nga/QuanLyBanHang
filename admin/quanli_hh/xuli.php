<?php
include '../config.php';

$mahh = $_POST['mahh'];
$tenhh = $_POST['tenhh'];
$gia = $_POST['gia'];
$sl = $_POST['soluonghh'];
$manhom = $_POST['manhom'];
$mota = $_POST['motahh'];
$tennhom = $_POST['tennhom'];
$id = $_GET['idhh'];
if (isset($_FILES['hinh'])) {
    $errors = array();
    $hinh_name = $_FILES['hinh']['name'];
    $hinh_size = $_FILES['hinh']['size'];
    $hinh_tmp = $_FILES['hinh']['tmp_name'];
    $hinh_type = $_FILES['hinh']['type'];
    $hinh_ext = strtolower(end(explode('.', $_FILES['hinh']['name'])));

    $expensions = array("jpeg", "jpg", "png");

    if (in_array($hinh_ext, $expensions) === false) {
        $errors[] = "Chỉ hỗ trợ upload file JPEG, JPG hoặc PNG.";
    }
    
    if (empty($errors) == true) {
        move_uploaded_file($hinh_tmp, "upload_hinh/$hinh_name");
        move_uploaded_file($hinh_tmp, "img/$hinh_name");
    }
}

if (isset($_POST['themhh'])) {
    $hinh_name = $_FILES['hinh']['name'];
    $sql_insert = "INSERT INTO HangHoa(TenHH, Gia, SoLuongHang, MaNhom, Hinh, MoTaHH) VALUES ('$tenhh', $gia, $sl, $manhom, '$hinh_name', '$mota');";
    mysqli_set_charset($conn, "utf8");
    $conn->query($sql_insert);
    header('location: ../index.php?quanly=hh&hd=lietkehh');
} elseif (isset($_POST['suahh'])) {
    if ($_FILES['hinh']['name'] != '') {
        $hinh_name = $_FILES['hinh']['name'];
        $sql_update = "UPDATE HangHoa SET TenHH = '$tenhh', Gia = '$gia', SoLuongHang = '$sl', MaNhom = '$manhom', Hinh = '$hinh_name',  MoTaHH = '$mota'  WHERE MSHH = $id";
    } else {
        $sql_update = "UPDATE HangHoa SET TenHH = '$tenhh', Gia = '$gia', SoLuongHang = '$sl', MaNhom = '$manhom', MoTaHH = '$mota'  WHERE MSHH = $id";
    }

    mysqli_set_charset($conn, "utf8");
    $conn->query($GLOBALS['sql_update']);
    header('location: ../index.php?quanly=hh&hd=lietkehh');
} else{
    $idhh = $_GET['idhh'];
    $sql_delete = "DELETE FROM HangHoa WHERE MSHH = $idhh;";
    $conn->query($sql_delete);
    header('location: ../index.php?quanly=hh&hd=lietkehh');
}
