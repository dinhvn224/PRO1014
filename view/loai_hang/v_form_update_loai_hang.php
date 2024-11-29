<form class="row g-3" action="loai_hang.php" method="POST">
    <div class="col-md-6">
        <input type="number" value="<?php echo $loai_hang_by_id['ma_loai']; ?>" name="ma_loai" hidden>
        <br>
        <label class="form-label">Tên loại</label>
        <input type="text" class="form-control" name="ten_loai" value="<?php echo $loai_hang_by_id['ten_loai']; ?>">
        <button type="submit" class="btn btn-primary" name="action" value="save" style="padding: 5px 10px;  ">Lưu</button>
    </div>
</form>