<?php
$sql = "SELECT MAX(MSKH) AS MAX_MSKH FROM KhachHang;";
$result = $conn->query($sql);
$makh = $result->fetch_assoc();
?>
<div class="col-md-9 content">
    <form action="quanli_kh/xuli.php" method="POST">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th colspan="2" style="text-align:center;">
                        <h4>Thêm Khách Hàng</h4>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mã khách hàng:</td>
                    <td>
                        <input type="text" name="makh" class="form-control" value="<?php echo ($makh['MAX_MSKH'] + 1) ?>" disabled>
                    </td>
                </tr>
                <tr>
                    <td>Họ tên nhân viên:</td>
                    <td>
                        <input type="text" name="tenkh" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td>
                        <input type="text" name="diachi" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Số điện thoại:</td>
                    <td>
                        <input type="text" name="sdt" class="form-control">
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <button type="submit" name="themkh" class="btn btn-primary" style="width:270px;">Thêm khách hàng</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>