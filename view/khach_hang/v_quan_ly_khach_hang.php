<table class="table caption-top">
    <caption>List of users</caption>
    <thead>
        <tr>
            <th scope="col">Mã khách hàng</th>
            <th scope="col">Họ tên</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($khach_hang as $khach) {
        ?>
        <tr>
            <td><?php echo $khach['ma_khach_hang'] ?></td>
            <td><?php echo $khach['ho_ten'] ?></td>
            <td><?php echo $khach['email'] ?></td>
            <td><a href="./khach_hang.php?ma_khach_hang=<?php echo $khach['ma_khach_hang'] ?>">
                    <button type="button" class="btn btn-warning">Sửa</button></a>
                <form action="khach_hang.php" method="post">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="data" value="<?php echo $khach['ma_khach_hang'] ?>">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php } ?>

    </tbody>
</table>

