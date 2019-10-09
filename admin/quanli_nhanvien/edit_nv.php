<?php
mysqli_set_charset($conn, "utf8");
$result = $conn->query('SELECT * FROM NhanVien WHERE MSNV =' . $_GET['idnv'] . ' ;');
$nv = $result->fetch_assoc();
?>
<div class="col-md-9 content">
    <form action="quanli_nhanvien/xuli.php?idnv=<?php echo $nv['MSNV'] ?>" method="POST">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th colspan="2" style="text-align:center;">
                        <h4>Sửa Thông Tin Nhân Viên</h4>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mã số nhân viên</td>
                    <td>
                        <input type="text" name="manv" class="form-control" disabled value="<?php echo $_GET['idnv'];  ?>">
                    </td>
                </tr>
                <tr>
                    <td>Họ tên nhân viên</td>
                    <td>
                        <input type="text" name="tennv" class="form-control" value="<?php echo $nv['HoTenNV'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td>
                        <input type="text" name="diachi" class="form-control" value="<?php echo $nv['DiaChi'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Số điện thoại:</td>
                    <td>
                        <input type="text" name="sdt" class="form-control" value="<?php echo $nv['SoDienThoai'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Chức vụ</td>
                    <td>
                        <select name="chucvu" id="input" class="form-control" required="required">
                            <?php
                            if ($nv['ChucVu'] == 'nhân viên') {
                                ?>
                                <option value="admin">Admin</option>
                                <option value="nv" selected>Nhân viên</option>
                            <?php
                            } else {
                                ?>
                                <option value="admin" selected>Admin</option>
                                <option value="nv">Nhân viên</option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <button type="submit" name="suanv" class="btn btn-primary" style="width:270px;">Sửa nhân viên</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>