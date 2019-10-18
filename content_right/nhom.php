<?php
$sql_nhom = "SELECT * FROM HangHoa WHERE MaNhom = '$_GET[idnhom]'";
$num_nhom = $conn->query($sql_nhom);
$count = mysqli_num_rows($num_nhom);

?>
<?php
$sql_tennhom = "SELECT TenNhom FROM NhomHangHoa WHERE MaNhom ='$_GET[idnhom]' ";
$row = $conn->query($sql_tennhom);
$dong = mysqli_fetch_array($row, MYSQLI_ASSOC);
?>
<div class="tieude"><?php echo $dong['TenNhom'] ?></div>
<ul class="product">
    <?php
    if ($count > 0) {
        while ($dong_nhom = mysqli_fetch_array($num_nhom, MYSQLI_ASSOC)) {
            ?>
            <li><a href="?quanly=chitietsp&idnhom=<?php echo $dong_nhom['MaNhom'] ?>&idhh=<?php echo $dong_nhom['MSHH'] ?>">
                    <img src="img/<?php echo $dong_nhom['Hinh'] ?>" width="150" height="150" />
                    <p><?php echo $dong_nhom['TenHH'] ?></p>
                    <p style="color:red;font-weight:bold; border:1px solid #d9d9d9; width:150px;height:30px; line-height:30px;margin-left:35px;margin-bottom:5px;"><?php echo number_format($dong_nhom['Gia']) . ' VND' ?></p>
                </a></li>
    <?php
        }
    } else {
        echo 'Hiện chưa có sản phẩm...';
    }
    ?>
</ul>
</div>