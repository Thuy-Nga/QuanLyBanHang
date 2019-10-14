<?php
mysqli_set_charset($conn, "utf8");
$result = $conn->query('SELECT * FROM KhachHang WHERE MSKH =' . $_GET['idkh'] . ' ;');
$kh = $result->fetch_assoc();
?>
<div class="col-md-9 content">
    <form action="quanli_kh/xuli.php?idkh=<?php echo $kh['MSKH'] ?>" method="POST">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th colspan="2" style="text-align:center;">
                        <h4>Sửa Thông Tin Khách Hàng</h4>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mã skhách hàng</td>
                    <td>
                        <input type="text" name="makh" class="form-control" disabled value="<?php echo $_GET['idkh'];  ?>">
                    </td>
                </tr>
                <tr>
                    <td>Họ tên nhân viên</td>
                    <td>
                        <input type="text" name="tenkh" class="form-control" value="<?php echo $kh['HoTenKH'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td>
                        <input type="text" name="diachi" class="form-control" value="<?php echo $kh['DiaChi'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Số điện thoại:</td>
                    <td>
                        <input type="text" name="sdt" class="form-control" value="<?php echo $kh['SoDienThoai'] ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <button type="submit" name="suakh" class="btn btn-primary" style="width:270px;">Sửa khách hàng</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>