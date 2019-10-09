<?php
$sql = "SELECT MAX(MSHH) AS MAX_MSHH FROM HangHoa;";
$result = $conn->query($sql);
$manhom = $result->fetch_assoc();
?>
<div class="col-md-9 content">
    <form action="quanli_hh/xuli.php" method="POST" enctype = "multipart/form-data">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th colspan="2" style="text-align:center;">
                        <h4>Thêm Sản phẩm</h4>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mã sản phẩm:</td>
                    <td>
                        <input type="text" name="mahh" class="form-control" value="<?php echo ($manhom['MAX_MSHH'] + 1) ?>" disabled>
                    </td>
                </tr>
                <tr>
                    <td>Tên sản phẩm:</td>
                    <td>
                        <input type="text" name="tenhh" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Giá sản phẩm:</td>
                    <td>
                        <input type="text" name="gia" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Số lượng:</td>
                    <td>
                        <input type="text" name="soluonghh" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Nhóm sản phẩm</td>
                    <td>
                        <select name="manhom" id="input" class="form-control" required="required">
                            <?php
                            mysqli_set_charset($conn, "utf8");
                            $sql_nhom = "SELECT * FROM NhomHangHoa;";
                            $result_nhom = $conn->query($sql_nhom);                            
                            while($nhom = $result_nhom->fetch_assoc()){
                            ?>
                                <option value="<?php echo $nhom['MaNhom'] ?>"><?php echo $nhom['TenNhom'] ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Hình</td>
                    <td>
                        <label for="exampleFormControlFile1">Upload hình ảnh cho sản phẩm</label>
                        <input type="file" name="hinh" class="form-control-file">
                    </td>
                </tr>
                <tr>
                    <td>Mô tả chi tiết</td>
                    <td>
                        <textarea name="motahh" id="input" class="form-control" rows="5"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <button type="submit" name="themhh" class="btn btn-primary" style="width:270px;">Thêm sản phẩm</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>