<?php
$sql = "SELECT * FROM HangHoa WHERE MSHH='$_GET[idhh]'";
$num = $conn->query($sql);
$dong = mysqli_fetch_array($num, MYSQLI_ASSOC);
?>
<div class="tieude">Chi tiết sản phẩm</div>

<div class="box_chitietsp">
	<div class="box_hinhanh">
		<img src="img/<?php echo $dong['Hinh'] ?>" data-zoom-image="imgs/op-lung-sony-z3-pelosi-50.jpg" width="200" height="200" />
	</div>
	<div class="box_info">
		<form action="update_cart.php?idhh=<?php echo $dong['MSHH'] ?>" method="post" enctype="multipart/form-data">
			<p>
				<strong>Tên sản phẫm: </strong><em style="color:red"><?php echo $dong['TenHH'] ?></em></p>

			<p><strong>Mã sản phẩm:</strong> <?php echo $dong['MSHH'] ?> </p>
			<p><strong>Giá bán:</strong><span style="color:red;"> <?php echo number_format($dong['Gia']) . ' ' . 'VNĐ' ?></span></p>
            <p><strong>Mô tả sản phẩm: </strong><?php echo $dong['MoTaHH'] ?></p>
            <p style="text-decoration:underline;color:blue;"><strong> Tình trạng:</strong> 
                <?php 
                    if($dong['SoLuongHang'] > 0){
                        echo "<p>Còn hàng</p>";
                    }else{
                        echo "<p>Hết hàng</p>";
                    }
                ?>
            </p>

			<p><strong>Số lượng:</strong><input type="text" name="soluong" size="3" value="1" /></p>
			<input type="submit" name="add_to_cart" value="Mua hàng" style="margin:10px;width:100px;height:40px;background:#9F6;color:#000;font-size:18px;border-radius:8px;" />

		</form>


	</div><!-- Ket thuc box box_info -->
</div><!-- Ket thuc box chitiet sp -->
<div class="clear"></div>