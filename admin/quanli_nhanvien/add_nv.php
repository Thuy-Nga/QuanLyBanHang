<?php
$sql = "SELECT MAX(MSNV) AS MAX_MSNV FROM NhanVien;";
$result = $conn->query($sql);
$manv = $result->fetch_assoc();
?>
<div class="col-md-9 content">
    <form action="quanli_nhanvien/xuli.php" method="POST">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th colspan="2" style="text-align:center;">
                        <h4>Thêm Nhân Viên</h4>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mã nhân viên:</td>
                    <td>
                        <input type="text" name="manv" class="form-control" value="<?php echo ($manv['MAX_MSNV'] + 1) ?>" disabled>
                    </td>
                </tr>
                <tr>
                    <td>Họ tên nhân viên:</td>
                    <td>
                        <input type="text" name="tennv" class="form-control">
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
                    <td>Chức vụ</td>
                    <td>
                        <select name="chucvu" id="input" class="form-control" required="required">
                            <option value="admin">Admin</option>
                            <option value="nv">Nhân viên</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <button type="submit" name="themnv" class="btn btn-primary" style="width:270px;">Thêm nhân viên</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>