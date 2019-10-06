
<div class="col-md-9">
    <table class="table content">
        <thead class="thead-dark">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Nhóm</th>
                <th scope="col">Hình</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
            mysqli_set_charset($conn, "utf8");
            $index = 1;
            $result = $conn->query('select * from hanghoa;');
            if (($result->num_rows) > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td scope="row"><?php echo $index ?></td>
                        <td><?php echo $row['TenHH'] ?></td>
                        <td><?php echo $row['Gia'] ?></td>
                        <td><?php echo $row['SoLuongHang'] ?></td>
                        <td><?php
                                    $sql_nhom = "SELECT * FROM NhomHangHoa WHERE MaNhom =" . $row['MaNhom'] . ";";
                                    $result_nhom = $conn->query($sql_nhom);
                                    $ten_nhom = $result_nhom->fetch_assoc();
                                    echo $ten_nhom['TenNhom'];
                                    ?></td>
                        <td> <img src="../img/<?php echo $row['Hinh']  ?>" class="img-responsive hinhsp" alt="Image">
                        <td> <?php echo $row['MoTaHH'] ?> </td>
                        <td>
                            <a href="index.php?quanly=nhomhh&hd=suanhom&idnhom=<?php echo $row['MaNhom']  ?>" title="Sửa">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="quanli_nhomhh/xuli.php?idnhom= <?php echo $row['MaNhom'] ?>" class="btn_delete" title="Xóa">
                                <i class="fas fa-trash-alt" style="color: red;"></i>
                            </a>

                        </td>

                    </tr>
            <?php
                    $index++;
                }
            }
            ?>
        </tbody>
    </table>
</div>
