<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Tên hàng hóa</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Màu</th>
            <th scope="col">Dung lượng</th>
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
                <td><img style="height: 10rem;" src="public/asset/<?= $loai['hinh'] ?>" alt="..."></td>
                <td><?php echo $loai['ten_color'] ?></td>
                <td><?php echo $loai['ten_capacity'] ?></td>
                <td><?php echo $loai['don_gia'] ?></td>
                <td><?php echo $loai['so_luong'] ?></td>
                <td><?php echo $loai['so_luong']*$loai['don_gia'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

