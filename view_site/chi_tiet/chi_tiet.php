<?php
// session_start();
?>

<div id="popup" style="transform : translate(-50%, -50%); display: none; " class="position-fixed top-50 start-50 alert alert-info">
   Thêm vào giỏ hàng thành công
</div>

<?php
if (isset($_SESSION['id'])) { ?>


    <button type="button" class="btn btn-primary position-fixed bottom-0 end-0 m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fa-solid fa-comments" style="color: #ffffff;"></i> <span class="badge text-bg-danger bg-danger">4</span>
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="exampleModalLabel">Gửi đến : Admin</h3>
                    <button type="button" class="btn-close btn btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div style="height: 450px;" class="m-3 w-100 border border-2 border-secondary overflow-auto">
                        <div class="alert alert-danger" role="alert">

                        </div>
                    </div>
                    <form action="" class="w-100 d-flex my-3">
                        <input class='form-control' type="text" placeholder="Nhập tin nhắn ...">
                        <button type="submit" id="mes1" class="btn btn-success mx-1">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php }
?>

<div class="container pb-5">
    <div id="sec-2" class="container-fluid mt-5">

        <div id="sec-2-content" class="container-fluid mt-1">
            <div class="row mt-5">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <img src="public/asset/<?= $chi_tiet_hang_hoa['hinh'] ?>" class="d-block w-100 img-slider" alt="...">
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <h4 class="">
                        <?= $chi_tiet_hang_hoa['ten_hang_hoa'] ?>
                        </h5>
                        <p class="card-text">

                            –
                            NEW
                        </p>
                        
                        <p class="fs-4 text-danger fw-bold">
                            <?= $chi_tiet_hang_hoa['don_gia'] ?> VND
                        </p>
                        <!-- <div>
                            <p><i class="fa-solid fa-hand-point-up fa-rotate-90" style="color: #218656;"></i> Sản
                                phẩm
                                chính hãng Apple mới
                                100% nguyên seal</p>
                            <p><i class="fa-solid fa-hand-point-up fa-rotate-90" style="color: #218656;"></i> Giá đã
                                bao
                                gồm VAT</p>
                            <p><i class="fa-solid fa-hand-point-up fa-rotate-90" style="color: #218656;"></i> Bảo
                                hành
                                12 tháng</p>
                            <p><i class="fa-solid fa-hand-point-up fa-rotate-90" style="color: #218656;"></i> Giảm
                                giá
                                10% khi mua phụ kiện
                                kèm theo</p>
                        </div> -->
                        <form action="" class="my-3 d-flex flex-column">
                            <div class="my-3">
                                <?php
                                    foreach ($capacity_selectall as $key => $value) {
                                        if($key==0){
                                       ?>
                                       <input type="radio" class="btn-check dungluong" value="<?php echo $value['id_capacity'];?>" name="capacity_id" id="btn-check-<?php echo ++$key;?>" checked autocomplete="off">
                                       <label class="btn tendungluong" for="btn-check-<?php echo $key;?>"><?php echo $value['ten_capacity'];?></label>
                                       <?php
                                        }else{
                                            ?>
                                            <input type="radio" class="btn-check dungluong" value="<?php echo $value['id_capacity'];?>" name="capacity_id" id="btn-check-<?php echo ++$key;?>"  autocomplete="off">
                                            <label class="btn tendungluong" for="btn-check-<?php echo $key;?>"><?php echo $value['ten_capacity'];?></label>
                                            <?php
                                        }
                                    }
                                ?>
                                
                               
                            </div>

                            <div class="my-3">
                            <?php
                                    foreach ($color_selectall as $key => $value) {
                                        if($key==0){
                                            ?>
                                            <input type="radio" class="btn-check mau rounded-circle m-3" name="color_id" value="<?php echo $value['id_color'];?>" id="btn-check-color<?php echo ++$key;?>" checked autocomplete="off">
                                            <label class="btn tenmau m-2 p-4 border  border-2" for="btn-check-color<?php echo $key;?>" style="background-color:<?php echo $value['ma_mau'];?>"></label>
                                            <?php
                                             }else{
                                                 ?>
                                                 <input type="radio" class="btn-check mau rounded-circle m-3" name="color_id" value="<?php echo $value['id_color'];?>" id="btn-check-color<?php echo ++$key;?>" autocomplete="off">
                                                 <label class="btn tenmau m-2 p-4 border  border-2" for="btn-check-color<?php echo $key;?>" style="background-color:<?php echo $value['ma_mau'];?>"></label>
                                                 <?php
                                             }
                                    }
                                ?>
                            </div>


                        </form>

                        <!-- <div class="border p-4">

                            <p><i class="fa-solid fa-gear" style="color: red;"></i> Bộ xử lý CPU:
                                chip with
                                8‑core CPU, 8‑core GPU, 16‑core Neural Engine
                            </p>
                            <p><i class="fa-solid fa-gear" style="color: red;"></i> Bộ nhớ RAM:
                                unified memory
                            </p>
                            <p><i class="fa-solid fa-gear" style="color: red;"></i> Ổ cứng:
                                SSD storage
                            </p>
                            <p><i class="fa-solid fa-gear" style="color: red;"></i> Màn hình:
                                Liquid Retina
                                display with True Tone
                            </p>
                            <p><i class="fa-solid fa-gear" style="color: red;"></i> Card màn hình:

                            </p>
                        </div> -->

                        <div class="mt-3 d-grid gap-2">

                            <!-- <button id="add" class="btn btn-danger"></button> -->
                            <button id="add" class="btn btn-danger" type="submit">Thêm vào giỏ hàng</button>

                            <a href="#" class="btn btn-success"><i class="fa-solid fa-phone"></i> Liên hệ</a>
                        </div>

                        <?php
                        // include_once 'model/m_gio_hang.php';
                        //     if (isset($_POST['add'])) {
                        //         if(isset($_SESSION['id'])){

                        //             if((new M_gio_hang())->them_sp_vao_gio_hang2($_GET['ma_hang_hoa'], $_SESSION['id'])){
                        //                 echo "<script>alert('Thêm thành công')</script>";
                        //             }else{

                        //             }
                        //         }else{
                        //             header('Location:dang_nhap.php');
                        //         }
                        //     }
                        ?>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <a href="#" class="card-title link-underline-opacity-0 link-underline">
                        <div class="card">
                            <div class="card-header">
                                Chính sách bán hàng
                            </div>
                            <div class="card-body">
                                <p><i class="fa-solid fa-check" style="color: #218656;"></i> Dùng thử 10 ngày miễn
                                    phí
                                    đổi máy. (Macbook Like New)</p>
                                <p><i class="fa-solid fa-check" style="color: #218656;"></i> Lỗi 1 Đổi 1 trong 30
                                    ngày
                                    đầu. (Macbook Like New)</p>
                                <p><i class="fa-solid fa-check" style="color: #218656;"></i> Giao hàng tận nhà toàn
                                    quốc
                                </p>
                                <p><i class="fa-solid fa-check" style="color: #218656;"></i> Thanh toán khi nhận
                                    hàng
                                    (nội thành)</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="sec-3" class="mx-5">
        <h3 class="mt-5 mb-4">Thông số kỹ thuật</h3>
        <table class="table table-striped table-bordered">
            <tbody>
                <tr>
                    <th scope="row">Bộ xử lý CPU:</th>
                    <td>
                        chip with
                        8‑core CPU, 8‑core GPU, 16‑core Neural Engine
                    </td>

                </tr>
                <tr>
                    <th scope="row">Bộ nhớ RAM:</th>
                    <td>
                        unified memory
                    </td>
                </tr>
                <tr>
                    <th scope="row">Màn hình:</th>
                    <td>1
                        Liquid Retina
                        display with True Tone
                    </td>
                </tr>
                <tr>
                    <th scope="row">Card màn hình:</th>
                    <td>

                    </td>
                </tr>
                <tr>
                    <th scope="row">Ổ cứng:</th>
                    <td>
                        SSD storage
                    </td>
                </tr>
                <tr>
                    <th scope="row">Kích thước và trọng lượng:</th>
                    <td>2.7 pounds (1.24 kg)</td>
                </tr>
                <tr>
                    <th scope="row">Camera:</th>
                    <td>
                        FaceTime HD camera
                    </td>
                </tr>
            </tbody>
        </table>
    </div> -->

    <div id="sec-4" class="mx-5 d-flex flex-column">
        <h3 class="mt-5 mb-4">Mô tả sản phẩm</h3>
        <img src="public/asset/<?= $chi_tiet_hang_hoa['hinh'] ?>" style="width: 30rem;" alt="">
        <?= $chi_tiet_hang_hoa['mo_ta'] ?>
    </div>
    <!-- <h3 class="mt-5 mb-4 m-5">Bình luận</h3>
    <div style="width: 80%" class="d-block mx-auto">
        <form style="width:100%" method="POST">
            <div class="mb-3">
                <textarea name="comment" cols="100" rows="5" class="form-control" placeholder="Mời bạn bình luận và đặt câu hỏi" required></textarea>
            </div>
            <input name='submitt' type="submit" class="btn btn-primary">
        </form> -->

        <?php
        include_once "model/m_binh_luan.php";

        foreach ($binh_luan_by_id as $comment) {
            if (isset($_POST['submitt'])) {
                if (isset($_SESSION['id'])) {
                    if ((new M_binh_luan())->them_binh_luan2($_GET['ma_hang_hoa'], $_POST['comment'], $_SESSION['id'])) {
                        echo "<script>location.href = 'index.php?ma_hang_hoa=11&ma_loai=31'</script>";
                    };
                } else {
                    header('Location:dang_nhap.php');
                }
            }
        ?>
            <div id="bl<?= $comment['ho_ten'] ?>">
                <div class="card mt-3" id="cc">
                    <div class="card-header">
                        <img src="public/asset/male.png" style="width: 1rem;" />
                        <?= $comment['ho_ten'] ?>
                    </div>
                    <div class="card-body">
                        <p class="card-title">
                            <?= $comment['noi_dung'] ?>
                        </p>
                        <a class="btn btn-secondary btn-sm" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Trả lời
                        </a>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <form style="width:100%" method="post">

                                    <div class="mb-3">
                                        <textarea name="comment" id="" cols="100" rows="5" class="form-control" placeholder="Mời bạn bình luận và đặt câu hỏi" required></textarea>
                                    </div>
                                    <input type="submit" name="submit" class="btn btn-primary" value="Gửi">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>


<div class="related-products" style="background-color: #f7f7f7; padding: 20px;">
    <!-- Phần hiển thị các sản phẩm tương tự -->
    <h2 class="related-products-title" style="font-size: 24px; margin-bottom: 20px; border-bottom: 2px solid #333; padding-bottom: 10px;">Sản phẩm
        tương tự</h2>
    <div class="related-products-list" style="display: flex; flex-wrap: wrap; gap: 20px;">
        <!-- Phần hiển thị các sản phẩm tương tự -->
        <?php foreach ($loai_hang1 as $lh) { ?>

            <a href="./index.php?ma_hang_hoa=<?= $lh['ma_hang_hoa']; ?>&ma_loai=<?= $lh['ma_loai']; ?>" class="card-title link-underline-opacity-0 link-underline">
                <div class="card">
                    <img style="height: 15rem;" src="public/asset/<?= $lh['hinh'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class=""><?= $lh['ten_hang_hoa'] ?></h5>
                        <span class="badge text-bg-warning">Đã bán: <?= $lh['da_ban'] ?></span>
                        <del><?= $lh['don_gia'] ?> đ</del>
                        <p class="fs-5 text-danger fw-bold"><?= $lh['don_gia'] ?>đ</p>

                        <a href="./index.php?ma_hang_hoa=<?= $lh['ma_hang_hoa']; ?>&ma_loai=<?= $lh['ma_loai']; ?>" class="btn btn-outline-danger mt-1"> Xem chi tiết</a>
                    </div>
                </div>
            </a>
        <?php } ?>
    </div>
</div>

<script>
    $('#add').on('click', function() {

        var ma_san_pham = <?=$_GET['ma_hang_hoa']?>;
        var so_luong = 1;
        var action = "create"; // Định nghĩa biến action và gán giá trị "create"

        var checkedCapacity = document.querySelector('input[name="capacity_id"]:checked').value;
        var checkedColor = document.querySelector('input[name="color_id"]:checked').value;

        // Tạo một đối tượng JavaScript chứa dữ liệu để gửi
        var dataToSend = {
            ma_san_pham: ma_san_pham,
            so_luong: so_luong,
            color_id: checkedColor,
            capacity_id: checkedCapacity,
            action: action
        };
        console.log("ma_san_pham: " + ma_san_pham);
        console.log("so_luong: " + so_luong);

        $.ajax({
            url: "gio_hang.php", // Đường dẫn tới tệp gio_hang.php
            method: "POST",
            data: dataToSend,
            success: function(response) {
            var data = JSON.parse(response); 
        if (data.status === "error") {
            alert("Sản phẩm này đã hết hàng.");
        } else if (data.status === "success") {
            $("#popup").hide();
            excutePopup();
        }
            }
        });
    });
    $(document).ready(function() {


        $('#binh_luan').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: 'binh_luan.php',
                type: 'POST',
                data: {
                    noi_dung: $('#noi_dung').val(),
                    ma_khach_hang: <?= $_SESSION['id'] ?>,
                    ma_hang_hoa: <?= $_GET['ma_hang_hoa'] ?>,
                    thuoc_binh_luan: 0,
                    action: 'create'
                },
                success: function(data) {
                    let data1 = JSON.parse(data);
                    $('#cc').html(data1);
                    $('#binh_luan')[0].reset();

                }
            })
        });

    });



    let dungluong = document.querySelectorAll('.dungluong');
    let tendungluong = document.querySelectorAll('.tendungluong');

    function removeAll() {
        dungluong.forEach((item, index) => {
            tendungluong[index].classList.remove('btn-success');
        })
    }
    dungluong.forEach((item, index) => {
        item.addEventListener('click', function() {
            removeAll();
            tendungluong[index].classList.toggle('btn-success');
        });
    });

    let mau = document.querySelectorAll('.mau');
    let tenmau = document.querySelectorAll('.tenmau');

    function removeAll1() {
        mau.forEach((item, index) => {
            tenmau[index].classList.remove('border-secondary');
        })
    }
    mau.forEach((item, index) => {
        item.addEventListener('click', function() {
            removeAll1();
            tenmau[index].classList.toggle('border-secondary');
        });
    });

    let pop =document.querySelector('#popup');
    pop.style.display = 'none';
    function excutePopup(){
        pop.style.display = 'block';
        setTimeout(function(){
            pop.style.display = 'none';
        },2000);
        
    }
    
</script>