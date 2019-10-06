<?php
mysqli_set_charset($conn, "utf8");
$result = $conn->query('SELECT * FROM NhomHangHoa WHERE MaNhom =' . $_GET['idnhom'] .' ;');
$nhomhh = $result->fetch_assoc();
?>
<div class="col-md-9 content">
    <form action="quanli_nhomhh/xuli.php?idnhom=<?php echo $nhomhh['MaNhom'] ?>" method="POST">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th colspan="2" style="text-align:center;"><h4>Sửa Nhóm Sản Phẩm</h4></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ID Nhóm</td>
                    <td>
                        <input type="text" name="idnhom" class="form-control" disabled value="<?php echo $_GET['idnhom'];  ?>">
                    </td>
                </tr>
                <tr>
                    <td>Tên nhóm hàng hóa:</td>
                    <td>
                        <input type="text" name="nhomhh" class="form-control" value="<?php echo $nhomhh['TenNhom'] ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <button type="submit" name="suanhom" class="btn btn-primary" style="width:270px;">Sửa nhóm sản phẩm</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>