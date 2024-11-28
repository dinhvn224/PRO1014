<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Tên hàng hóa</th>
            <th scope="col">Đơn giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Tổng</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($chi_tiet_don_hang as  $loai) {
        ?>
            <tr>
                <td><?php echo $loai['ten_hang_hoa'] ?></td>
                <td><?php echo $loai['gia_tien'] ?></td>
                <td><?php echo $loai['so_luong'] ?></td>
                <td><?php echo $loai['so_luong']*$loai['gia_tien'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

