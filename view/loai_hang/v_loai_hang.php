<br>
<button><a href="loai_hang.php?store">Tạo thêm loại hàng</a></button>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Mã loại</th>
            <th scope="col">Tên loại</th>
            <th scope="col">Hành động </th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($loai_hang as  $loai) {
        ?>
            <tr>
                <td><?php echo $loai['ma_loai'] ?></td>
                <td><?php echo $loai['ten_loai'] ?></td>
                <td><a href="./loai_hang.php?ma_loai=<?php echo $loai['ma_loai'] ?>">
                        <button type="button" class="btn btn-warning">Sửa</button></a>

                    <form action="loai_hang.php" method="post">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="data" value="<?php echo $loai['ma_loai'] ?>">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
