<div class="container">
    <form id="myForm" class="mt-5" method="POST">
        <h1 class="py-5">Chọn địa chỉ khi đặt hàng của bạn </h1>
        <div class="row">
            <div>
                <div class="form-group">
                    <label for="province">Tỉnh/Thành phố</label>
                    <select id="tinh" name="tinh" class="form-control" required>
                        <option value="">Chọn một tỉnh</option>
                        <?php foreach ($tinh as $tinh) { ?>
                            <option value="<?php echo $tinh['id_tinh']; ?>">
                                <?php echo $tinh['ten_tinh']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Quận/Huyện</label>
                    <select id="quan_huyen" name="quan_huyen" class="form-control" required>
                        <option value="">Chọn một quận/huyện</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="phuong_xa">Phường/Xã</label>
                    <select id="phuong_xa" name="phuong_xa" class="form-control" required>
                        <option value="">Chọn một xã</option>
                    </select>
                </div>
            </div>
            <div>
                <div class="form-group my-4 d-flex flex-column">
                    <label for="">Thông tin khách hàng</label>

                    <input type="text" class="form-control" value="<?= $_SESSION['ho_ten'] ?>" required disabled>
                    <input type="text" class="form-control" value="<?= $_SESSION['email'] ?>" required disabled>
                    <input class="form-control" name="sdt" id="sdt" type="number" placeholder="Nhập số điện thoại nhận hàng" required>
                </div>
                <div class="form-group my-4 d-flex flex-column">
                    <label>Thông tin đơn hàng</label>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>Tên sản phẩm</td>
                                <td>Đơn giá</td>
                                <td>Số lượng</td>
                                <td>Tổng giá</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include_once "controller/c_gio_hang.php";
                            $arrPro = explode(".", rtrim($_GET['id_gio_hang']));
                            echo '<h1></h1>';
<<<<<<< HEAD
                            $tong=0;
                            for ($i = 0; $i < count($arrPro)-1; $i++) {
                            
                            $dat_hang = (new C_gio_hang())->gio_hang_by_id($arrPro[$i]);  
                            $tong+=$dat_hang[0]['tong_gia'];
=======
                            for ($i = 0; $i < count($arrPro)-1; $i++) {
                            
                            $dat_hang = (new C_gio_hang())->gio_hang_by_id($arrPro[$i]);  
>>>>>>> 842220d63a67da108ca282de3b917a9f7ffba787
                            ?>

                                <tr>
                                    <td><?=$dat_hang[0]['ten_hang_hoa']?></td>
                                    <td><?=$dat_hang[0]['don_gia'] ?></td>
                                    <td><?=$dat_hang[0]['so_luong_san_pham'] ?></td>
                                    <td><?=$dat_hang[0]['tong_gia'] ?></td>
                                </tr>
                        
                <?php }

                ?>
<<<<<<< HEAD
                <tr >
                    <td class="bg-success text-white" colspan="3">Tổng tiền</td>
                    <td ><?=$tong?></td>
            </tr>

=======
>>>>>>> 842220d63a67da108ca282de3b917a9f7ffba787
                </tbody>
                    </table>
                <input type="submit" name="add_salee" class="btn btn-primary w-100 form-input my-3" value="Đặt hàng">
                </div>
            </div>
    </form>
    <?php
    // include_once "ex_dat_hang.php";
    include_once 'model/database.php';
    if (isset($_POST['add_salee'])) {
        
        
        $id = $_SESSION['id'];
        $ten_khach_hang = $_SESSION['ho_ten'];
        $email_khach_hang = $_SESSION['email'];
        $xa = $_POST['phuong_xa'];
        $huyen = $_POST['quan_huyen'];
        $tinh = $_POST['tinh'];
        $sdt = $_POST['sdt'];
        $queryDH = "INSERT INTO `don_hang`(`ma_khach_hang`,`ten_khach_hang`, `email_khach_hang`, `xa`, `huyen`, `tinh`, `sdt`, `trang_thai`)
        VALUES (?,?,?,?,?,?,?,?)";  
        (new database())->pdo_execute_run($queryDH, $id, $ten_khach_hang, $email_khach_hang, $xa, $huyen, $tinh, $sdt, 1);

        $oderID = (new database())->pdo_query_one('select MAX(id_don_hang) from don_hang;');
        
<<<<<<< HEAD
        $queryCTDH = "INSERT INTO `ct_don_hang`(`hang_hoa_id`, `color_id`, `capacity_id`, `so_luong`, `id_don_hang`, `tong_ct`)
        VALUES(?,?,?,?,?,?)";
        for ($i = 0; $i < count($arrPro)-1; $i++) {        
        $dat_hang = (new C_gio_hang())->gio_hang_by_id($arrPro[$i]);  
        $don_gia =  $dat_hang[0]['don_gia'];
=======
        $queryCTDH = "INSERT INTO `ct_don_hang`(`hang_hoa_id`, `color_id`, `capacity_id`, `so_luong`, `id_don_hang`)
        VALUES(?,?,?,?,?)";
        for ($i = 0; $i < count($arrPro)-1; $i++) {        
        $dat_hang = (new C_gio_hang())->gio_hang_by_id($arrPro[$i]);  
>>>>>>> 842220d63a67da108ca282de3b917a9f7ffba787
        $ma_san_pham =  $dat_hang[0]['ma_san_pham'];
        $color_id =  $dat_hang[0]['color_id'];
        $capacity_id =  $dat_hang[0]['capacity_id'];
        $so_luong_san_pham =  $dat_hang[0]['so_luong_san_pham'];

<<<<<<< HEAD
        (new database())->pdo_execute($queryCTDH, $ma_san_pham , $color_id,  $capacity_id, $so_luong_san_pham, $oderID[0], $so_luong_san_pham*$don_gia);
=======
        (new database())->pdo_execute($queryCTDH, $ma_san_pham , $color_id,  $capacity_id, $so_luong_san_pham, $oderID[0]);
>>>>>>> 842220d63a67da108ca282de3b917a9f7ffba787
        $xoa_gio_hang = (new C_gio_hang())->xoa_gio_hang($arrPro[$i],  $id);
        
    }
    echo"<script>
    window.location.href = 'index.php?checkout=success';
    </script>";
}
    ?>
</div>

<script>
    $(document).ready(function() {
        $('#tinh').on('change', function() {
            var id_tinh = $(this).val();
            $.ajax({
                url: "dat_hang.php",
                method: "POST",
                data: {
                    id_tinh: id_tinh,
                    action: "select_huyen"
                },
                success: function(data) {
                    var huyen_list = JSON.parse(data);
                    console.log(huyen_list);

                    $('#quan_huyen').empty();
                    $.each(huyen_list, function(i, huyen) {
                        $('#quan_huyen').append($('<option>', {
                            value: huyen.id_quan_huyen,
                            text: huyen.ten_quan_huyen
                        }));
                    });
                    $('#phuong_xa').empty();
                }
            });
        });

        $('#quan_huyen').on('change', function() {
            var id_quan_huyen = $(this).val();
            $.ajax({
                url: "dat_hang.php",
                method: "POST",
                data: {
                    id_quan_huyen: id_quan_huyen,
                    action: "select_phuong_xa"
                },
                success: function(data) {
                    var phuong_xa_list = JSON.parse(data);
                    console.log(phuong_xa_list);
                    $('#phuong_xa').empty();
                    $.each(phuong_xa_list, function(i, phuong_xa) {
                        $('#phuong_xa').append($('<option>', {
                            value: phuong_xa.id_phuong_xa,
                            text: phuong_xa.ten_phuong_xa
                        }));
                    });
                }
            });
        });

        $('#sdt').on('change', function(e) {
            e.preventDefault();

            var id_tinh = $('#tinh').val();
            var id_quan_huyen = $('#quan_huyen').val();
            var id_phuong_xa = $('#phuong_xa').val();
            var sdt = $('#sdt').val();

            var dataToSend = {
                id_phuong_xa: id_phuong_xa,
                id_quan_huyen: id_quan_huyen,
                id_tinh: id_tinh,
                sdt: sdt,
                action: "dat_dia_chi"
            };

            $.ajax({
                url: "dat_hang.php",
                method: "POST",
                data: dataToSend,
                success: function(data) {
                    var dia_chi_cu_the = JSON.parse(data);
                    console.log(dia_chi_cu_the);

                    $('#tinhInput').val(dia_chi_cu_the[0].ten_tinh);
                    $('#huyenInput').val(dia_chi_cu_the[0].ten_quan_huyen);
                    $('#xaInput').val(dia_chi_cu_the[0].ten_phuong_xa);
                },
                error: function(xhr, status, error) {
                    // Xử lý lỗi khi gửi yêu cầu AJAX
                    console.log("Lỗi khi gửi yêu cầu: " + error);
                }
            });

        });


    });
</script>