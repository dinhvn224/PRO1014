<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Mã đơn hàng</th>
            <th scope="col">Tên khách</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Địa Chỉ</th>
            <th scope="col">Trạng thái</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($don_hang_user as  $loai) {
        ?>
            <tr>
                <td><?php echo $loai['id_don_hang'] ?></td>
                <td><?php echo $loai['ten_khach_hang'] ?></td>
                <td><?php echo $loai['email_khach_hang'] ?></td>
                <td><?php echo $loai['sdt'] ?></td>
                <td><?php echo $loai['ten_phuong_xa'].','.$loai['ten_quan_huyen'].','.$loai['ten_tinh']; ?></td>
                <td><?php 
                    if($loai['trang_thai'] == 1){
                        echo 'Đang Xử Lí';
                    }else if($loai['trang_thai'] == 2){
                        echo 'Đang Giao Hàng';
                    }else if($loai['trang_thai'] == 3){
                        echo 'Đã Giao';
                    }?></td>
                <td><a href="don_hang.php?ma_don=<?php echo $loai['id_don_hang'] ?>">
                    <form action="don_hang.php" method="post">
                    <input type="text" name="id" value="<?php echo $loai['id_don_hang'] ?>" hidden>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

