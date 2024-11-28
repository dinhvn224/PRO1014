<form class="row g-3" action="hang_hoa.php" method="POST" enctype="multipart/form-data">

    <div class="col-md-6">
        <input type="hidden" name="action2" value="<?php echo $action; ?>">

        <label class="form-label">Tên hàng hoá</label>
        <input type="text" class="form-control" name="ten_hang_hoa"
            value="" required>

        <label class="form-label">Đơn giá </label>
        <input type="number" class="form-control" name="don_gia" value="" required>

        <label class="form-label">Giảm giá</label>
        <input type="number" class="form-control" name="giam_gia" value="" required>

        <label class="form-label">Hình </label>
        <input type="file" class="form-control" name="hinh" value="" required>

        <label class="form-label">Ngày nhập</label>
        <input type="date" class="form-control" name="ngay_nhap" value="" required>

        <label class="form-label">Mô tả</label>
        <input type="text" class="form-control" name="mo_ta" value="" required>

        <label class="form-label">Mã loại </label>

        <br> <select name="ma_loai" id="" required>
    <?php
    foreach ($loai_hang as $loai) {
    ?>
        <option value="<?php echo $loai['ma_loai'] ?>">
            <?php echo $loai['ten_loai']; ?>
        </option>
    <?php } ?>
</select>


        <button type="submit" class="btn btn-primary" name="action2" value="create" style="padding: 5px 10px; ">Lưu</button>
    </div>
</form>