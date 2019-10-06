<?php 
    $sql = "SELECT MAX(MaNhom) AS MAX_MA FROM NhomHangHoa;";
    $result = $conn->query($sql);
    $manhom = $result->fetch_assoc();
?>
<div class="col-md-9 content">
    <form action="quanli_nhomhh/xuli.php" method="POST">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th colspan="2" style="text-align:center;"><h4>Thêm nhóm sản phẩm</h4></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mã nhóm:</td>
                    <td>
                        <input type="text" name="manhom" class="form-control" value="<?php echo ($manhom['MAX_MA'] + 1 )?>" disabled>
                    </td>
                </tr>
                <tr>
                    <td>Tên nhóm hàng hóa:</td>
                    <td>
                        <input type="text" name="nhomhh" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <button type="submit" name="themnhom" class="btn btn-primary" style="width:270px;">Thêm nhóm sản phẩm</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>