<?php
mysqli_set_charset($conn, "utf8");
$sql_nhom = "select * from nhomhanghoa order by MaNhom asc";
$row_nhom = $conn->query($sql_nhom);
?>
<div class="box_list">
    <div class="tieude">
        <h3>Loại phụ kiện</h3>
    </div>
    <ul class="list">
        <?php
        while ($dong_nhom = mysqli_fetch_array($row_nhom, MYSQLI_ASSOC)) {
            ?>
            <li><a href="index.php?quanly=loaisp&id=<?php echo $dong_nhom['MaNhom'] ?>"><?php echo $dong_nhom['TenNhom'] ?></a></li>
        <?php
        }
        ?>
    </ul>
</div>
<!--Ket thuc div box loai phu kien -->

<div class="box_list">

    <div class="tieude">
        <h3>Hàng bán chạy</h3>
    </div>
    <?php
    $sql_banchay = $conn->query("select * from HangHoa order by MSHH desc limit 8");

    ?>
    <ul class="hangbanchay">
        <?php
        while ($dong_banchay = mysqli_fetch_array($sql_banchay, MYSQLI_ASSOC)) {
            ?>
            <li><a href="?quanly=chitietsp&idloaisp=<?php echo $dong_banchay['MaNhom'] ?>&id=<?php echo $dong_banchay['MSHH'] ?>">
                    <img src="img/<?php echo $dong_banchay['Hinh'] ?>" width="150" height="150" />
                    <p><?php echo $dong_banchay['TenHH'] ?></p>
                    <p style="color:red;"><?php echo number_format($dong_banchay['Gia']) . ' ' . 'VNĐ' ?></p>
                </a></li>
        <?php
        }
        ?>
    </ul>
</div>
<!--Ket thuc div box hang ban chay -->
