<div class="col-md-9">
    <table class="table content">
        <thead class="thead-dark">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Họ tên</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">SĐT</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
            mysqli_set_charset($conn, "utf8");
            $index = 1;
            $result = $conn->query('select * from KhachHang;');
            if (($result->num_rows) > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td scope="row"><?php echo $index ?></td>
                        <td><?php echo $row['HoTenKH'] ?></td>
                        <td><?php echo $row['DiaChi'] ?></td>
                        <td><?php echo $row['SoDienThoai'] ?></td>
                        <td>
                            <a href="index.php?quanly=kh&hd=suakh&idkh=<?php echo $row['MSKH']  ?>" style="margin-right: 20px; border-right: 1px solid black;" title="Sửa">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="quanli_kh/xuli.php?idkh= <?php echo $row['MSKH'] ?>" class="btn_delete" title="Xóa">
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