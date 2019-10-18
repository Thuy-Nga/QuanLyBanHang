<div class="content">
    <div class="content_left">
        <?php
        include 'content_left/list.php';
        ?>
	</div>
	<div class="content_right">
	<?php
		if (isset($_GET['quanly']) && ($_GET['quanly']) != '') {
			$tam = $_GET['quanly'];
		} else {
			$tam = '';
		}
		if ($tam == 'chitietsp') {
			include 'content_right/chitietsp.php';
		}elseif($tam == 'nhom'){
			include 'content_right/nhom.php';
		}elseif ($tam == 'dathang') {
			include('modules/right/dathang.php');
		} elseif ($tam == 'dangkymoi') {
			include('modules/right/dangkymoi.php');
		} elseif ($tam == 'dangnhap') {
			include('modules/right/dangnhap.php');
		} elseif ($tam == 'xulygiohang') {
			include('modules/right/xulygiohang.php');
		} elseif ($tam == 'camon') {
			include('modules/right/camon.php');
		} else {
			include 'content_right/sanpham.php';
		}
		?>
</div>
</div>

<div class="clear"></div>