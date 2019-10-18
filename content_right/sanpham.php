<?php
$sql_moinhat = "SELECT * FROM HangHoa ORDER BY MSHH DESC LIMIT 0,6";
$row_moinhat = $conn->query($sql_moinhat);
?>
<div class="tieude">Sản phẩm mới nhất</div>
<ul class="product">
	<?php
	while ($dong_moinhat = mysqli_fetch_array($row_moinhat, MYSQLI_ASSOC)) {
		?>
		<li><a href="?quanly=chitietsp&idnhom=<?php echo $dong_moinhat['MaNhom'] ?>&idhh=<?php echo $dong_moinhat['MSHH'] ?>">
				<img src="img/<?php echo $dong_moinhat['Hinh'] ?>" width="150" height="150" />
				<p><?php echo $dong_moinhat['TenHH'] ?></p>
				<p style="color:red;font-weight:bold; border:1px solid #d9d9d9; width:150px;
                            height:30px; line-height:30px;margin-left:35px;margin-bottom:5px;"><?php echo number_format($dong_moinhat['Gia']) . ' ' . 'VNĐ' ?></p>
			</a></li>
	<?php
	}
	?>
</ul>
<div class="clear"></div>
<?php
$sql_nhom = $conn->query("SELECT * FROM NhomHangHoa ");
while ($dong_loai = mysqli_fetch_array($sql_nhom, MYSQLI_ASSOC)) {
	echo '<div class="tieude">' . $dong_loai['TenNhom'] . '</div>';
	$sql_nhomsp = "SELECT * FROM NhomHangHoa INNER JOIN HangHoa on HangHoa.MaNhom = NhomHangHoa.MaNhom where HangHoa.MaNhom ='" . $dong_loai['MaNhom'] . "'";
	$row = $conn->query($sql_nhomsp);
	$count = mysqli_num_rows($row);
	if ($count > 0) {
		?>
		<ul class="product">
			<?php
					while ($dong = mysqli_fetch_array($row, MYSQLI_ASSOC)) {
						?>
				<li><a href="?quanly=chitietsp&idnhom=<?php echo $dong['MaNhom'] ?>&idhh=<?php echo $dong['MSHH'] ?>">
						<img src="./img/<?php echo $dong['Hinh'] ?>" width="150" height="150" />
						<p><?php echo $dong['TenHH'] ?></p>
						<p style="color:red;font-weight:bold; border:1px solid #d9d9d9; width:150px;
                            height:30px; line-height:30px;margin-left:35px;margin-bottom:5px;"><?php echo number_format($dong['Gia']) . ' ' . 'VNĐ' ?></p>
					</a>
				</li>
		<?php
				}
			} else {
				echo '<h4 style="margin:5px;font-style:italic;color:#000">Hiện chưa có sản phẩm...</h4>';
			}
			?>
		</ul>
		<div class="clear"></div>
	<?php
	}
	?>