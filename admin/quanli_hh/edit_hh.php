<?php
mysqli_set_charset($conn, "utf8");
$result = $conn->query('SELECT * FROM HangHoa, NhomHangHoa WHERE HangHoa.MaNhom = NhomHangHoa.MaNhom AND MSHH =' . $_GET['idhh'] . ' ;');
$hh = $result->fetch_assoc();
?>
<div class="col-md-9 content">
    <form action="quanli_hh/xuli.php?idhh=<?php echo $hh['MSHH'] ?>" method="POST" enctype = "multipart/form-data">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th colspan="2" style="text-align:center;">
                        <h4>Sửa Sản Phẩm</h4>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ID Sản Phẩm</td>
                    <td>
                        <input type="text" name="mahh" class="form-control" disabled value="<?php echo $_GET['idhh'];  ?>">
                    </td>
                </tr>
                <tr>
                    <td>Tên Sản Phẩm:</td>
                    <td>
                        <input type="text" name="tenhh" class="form-control" value="<?php echo $hh['TenHH'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Giá Sản Phẩm:</td>
                    <td>
                        <input type="text" name="gia" class="form-control" value="<?php echo number_format($hh['Gia']) ?>">
                    </td>
                </tr>
                <tr>
                    <td>Số lượng:</td>
                    <td>
                        <input type="text" name="soluonghh" class="form-control" value="<?php echo $hh['SoLuongHang'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Hình</td>
                    <td>

                        <img src="quanli_hh/upload_hinh/<?php echo $hh['Hinh'] ?>" class="img-responsive hinhsp" alt="Image">
                        <br>
                        <label for="exampleFormControlFile1">Upload hình ảnh cho sản phẩm</label>
                        <input type="file" name="hinh" class="form-control-file">
                    </td>
                </tr>
                <tr>
                    <td>Nhóm:</td>
                    <td>
                        <select name="manhom" id="input" class="form-control" required="required">
                            <?php
                            $sql_nhom = "SELECT * FROM NhomHangHoa;";
                            $re = $conn->query($sql_nhom);
                            while ($row = $re->fetch_assoc()) {
                                ?>
                                <option value="<?php echo $row['MaNhom'] ?>"><?php echo $row['TenNhom'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Mô tả:</td>
                    <td>
                        <textarea name="motahh" id="input" class="form-control" rows="5"><?php echo $hh['MoTaHH'] ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <button type="submit" name="suahh" class="btn btn-primary" style="width:270px;">Sửa sản phẩm</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>