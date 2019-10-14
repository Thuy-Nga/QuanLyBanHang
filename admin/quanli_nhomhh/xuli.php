<?php
include '../config.php';

$nhomhh = $_POST['nhomhh'];

if (isset($_POST['themnhom'])) {
    $sql_insert = "INSERT INTO NhomHangHoa(TenNhom) VALUES ('$nhomhh')";
    mysqli_set_charset($conn, "utf8");
    $conn->query($sql_insert);
    header('location: ../index.php?quanly=nhomhh&hd=lietkenhom');
} else if (isset($_POST['suanhom'])) {

    $idnhomhh = $_GET['idnhom'];
    $sql_update = "UPDATE NhomHangHoa SET TenNhom = '$nhomhh' WHERE MaNhom = $idnhomhh;";
    mysqli_set_charset($conn, "utf8");
    $conn->query($sql_update);
    header('location: ../index.php?quanly=nhomhh&hd=lietkenhom');
}else {
    $idnhomhh = $_GET['idnhom'];
    $sql_delete = "DELETE FROM NhomHangHoa WHERE MaNhom = $idnhomhh";
    if($conn->query($sql_delete)){
        header("location: ../index.php?quanly=nhomhh&hd=lietkenhom");
    }
}
?>
