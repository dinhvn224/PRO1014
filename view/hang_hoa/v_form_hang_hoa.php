<form class="row g-3" action="hang_hoa.php" method="POST" enctype="multipart/form-data">

    <div class="col-md-6">
        <input type="hidden" name="action2" value="<?php echo $action; ?>">

        <input type="text" class="form-control" name="ma_hang_hoa"
            value="<?php echo  $hang_hoa_by_id["ma_hang_hoa"] ?>" readonly hidden>

        <label class="form-label">Tên hàng hoá</label>
        <input type="text" class="form-control" name="ten_hang_hoa"
            value="<?php echo  $hang_hoa_by_id["ten_hang_hoa"] ?>">

        <label class="form-label">Đơn giá </label>
        <input type="text" class="form-control" name="don_gia" value="<?php echo  $hang_hoa_by_id["don_gia"] ?>">

        <label class="form-label">Giảm giá</label>
        <input type="number" min="0" step="1" class="form-control" name="giam_gia" value="<?php echo  $hang_hoa_by_id["giam_gia"] ?>">

        <label class="form-label">Số lượng </label>
        <input type="number" class="form-control" name="so_luong" value="<?php echo  $hang_hoa_by_id["so_luong"] ?>" required>

        <label class="form-label">Hình </label>
        <input type="file" class="form-control" name="hinh">
        <input type="hidden" value="<?php echo  $hang_hoa_by_id["hinh"] ?>" name="img_old">

        <label class="form-label">Ngày nhập</label>
        <input type="date" class="form-control" name="ngay_nhap" value="<?php echo  $hang_hoa_by_id["ngay_nhap"] ?>">

        <label class="form-label">Mô tả</label>
        <input type="text" class="form-control" name="mo_ta" value="<?php echo  $hang_hoa_by_id["mo_ta"] ?>">





        <label class="form-label">Mã loại </label>

        <br> <select name="ma_loai" id="">
        <?php
    foreach ($loai_hang as $loai) {
        if($hang_hoa_by_id['ma_loai']==$loai['ma_loai']){
    ?>
        <option value="<?php echo $loai['ma_loai'] ?>">
            <?php echo $loai['ten_loai']; ?>
        </option>
        <?php } }?>
</select>

        <button type="submit" class="btn btn-primary" style="padding: 5px 10px; ">Lưu</button>
    </div>
</form>