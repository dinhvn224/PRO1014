<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Mã đơn hàng</th>
            <th scope="col">Tên khách</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Địa Chỉ</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Xem</th>
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
                        echo 'Chờ xác nhận';
                    }else if($loai['trang_thai'] == 2){
                        echo 'Đã xác nhận';
                    }else if($loai['trang_thai'] == 3){
                        echo 'Đang vận chuyển';
                    }else if($loai['trang_thai'] == 4){
                        echo 'Giao hàng thành công';
                    }else if($loai['trang_thai'] == 5){
                        echo 'Hoàn thành';
                    }?></td>
                <td><a href="user_don_hang.php?ma_don=<?php echo $loai['id_don_hang'] ?>">Xem</a></td>
                <?php 
                    if($loai['trang_thai'] == 1){
                       ?>
                       <td><a href="user_don_hang.php?huy_ma_don=<?php echo $loai['id_don_hang'] ?> "id="cancelButton">Hủy đơn</a></td>
                       <?php
                    }
                    ?>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script>document.getElementById("cancelButton").addEventListener("click", function (event) {
    const confirmCancel = confirm("Bạn có chắc chắn muốn hủy?");
    if (confirmCancel) {
        // Hiển thị thông báo hủy thành công
        const successMessage = document.getElementById("successMessage");
        successMessage.style.display = "block";
    }
});
</script>

