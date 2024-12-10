<style>
        .small-square {
            width: 30px; /* Kích thước hình vuông */
            height: 30px;
        }
    </style>
<div id="sec-2" class="container-fluid mt-5">
    <div class="d-flex justify-content-between">
        <div clase="col-lg-8 col-md-8 col-sm-6">
            <table class="table">
                <thead>
                    <tr>

                        <th scope="col"><input id="checkboxall" type="checkbox" value="" /></th>
                        <th scope="col">Số thứ tự</th>
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá sản phẩm</th>
                        <th scope="col">Dung lượng</th>
                        <th scope="col">Màu</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Tổng giá</th>
                        <th scope="col"></th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($gio_hang_get_list as $index => $gio_hang) { ?>
                        <tr>
                            <td><input id="checkbox" type="checkbox" value="<?= $gio_hang['id_gio_hang'] ?>" /></td>
                            <th scope="row"><?php echo $index + 1 ?></th>
                            <td><img style="width: 60px;" src="public/asset/<?= $gio_hang['hinh'] ?>" /></td>
                            <td><?php echo $gio_hang['ten_hang_hoa'] ?></td>
                            <td ><?php echo $gio_hang['don_gia'] ?> Vnđ</td>
                            <td><?php echo $gio_hang['ten_capacity'] ?></td>
                            <td><?php echo $gio_hang['ten_color'] ?>
                            <div class="small-square" style="background-color:<?php echo $gio_hang['ma_mau'] ?>"></div>
                        </td>
                            <td>
                                <input type="button" value="+" class="tang btn btn-primary rounded rounded-circle" data-ma-gio-hang="<?php echo $gio_hang['id_gio_hang'] ?>">
                                <strong id="<?php echo "ma_gio_hang" . $gio_hang['id_gio_hang'] ?>">
                                    <?php echo $gio_hang['so_luong_san_pham'] ?></strong>

                                <input type="button" value="-" class="giam btn btn-primary rounded rounded-circle" data-ma-gio-hang="<?php echo $gio_hang['id_gio_hang'] ?>">
                            </td>
                            <td id="<?php echo "tong_tien" . $gio_hang['id_gio_hang'] ?>"><?php echo $gio_hang['tong_gia'] ?> Vnđ</td>
                            <td> <input type="button" value="Xoá" class="xoa btn btn-danger" data-ma-gio-hang="<?php echo $gio_hang['id_gio_hang'] ?>">
                                <input type="hidden" name="xoa" value="xoa">
                            </td>
                        </tr>
                    <?php } ?>

            </table>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">

            <div class="card">
                <div class="card-header">
                    <h5>Thông tin giao hàng</h5>
                </div>
                <div class="card-body">

                    <div class="card d-flex flex-row mt-3">
                        <div class="card-body">
                            <?php
                                if(isset($_SESSION['ho_ten'])){
                                    echo '
                                        <h5>Tên khách hàng : '.$_SESSION['ho_ten'].'</h5>
                                        <p>Email : '.$_SESSION['email'].'</p>
                                    ';
                                }else {
                                    echo '
                                        <h5>Tên khách hàng : </h5>
                                        <p>Email : </p>
                                    ';
                                }
                                ?>

                        </div>

                    </div>
                </div>
                
                <button class="dat_hang btn btn-success m-3">Đặt hàng</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('.tang').on('click', function() {
        var don_gia=<?php echo $gio_hang['don_gia'] ?>;
        var ma_san_pham=<?php echo $gio_hang['ma_san_pham'] ?>;
        var ma_gio_hang = $(this).data('ma-gio-hang');
        var dataToSend = {
            ma_gio_hang: ma_gio_hang,
            ma_san_pham: ma_san_pham,
            action: "add" // Sử dụng biến "action" thay vì "ation"
        };

        $.ajax({
            url: "gio_hang.php", // Đường dẫn tới tệp gio_hang.php
            method: "POST",
            data: dataToSend,
            success: function(data) {
                var data = JSON.parse(data); 
        if (data.status === "error") {
            alert("Sản phẩm này đã hết hàng.");
        } else if(data.status === "success"){
            console.log(data.res[3]);
                $(`#ma_gio_hang${data.res[0]}`).text(data.res[5]);
                $(`#tong_tien${data.res[0]}`).text(data.res[5]*don_gia);
                // Xử lý kết quả thành công từ máy chủ nếu cần
        }

               
            },
            error: function(xhr, status, error) {
                // Xử lý lỗi nếu có
                console.log("Lỗi khi gửi yêu cầu: " + error);
            }
        });
    });

    $('.giam').on('click', function() {
        var don_gia=<?php echo $gio_hang['don_gia'] ?>;
        var ma_gio_hang = $(this).data('ma-gio-hang');
        var action = "tru"; // Sửa tên biến thành "action"
        var dataToSend = {
            ma_gio_hang: ma_gio_hang,
            action: action // Sử dụng biến "action" thay vì "ation"
        };

        $.ajax({
            url: "gio_hang.php", // Đường dẫn tới tệp gio_hang.php
            method: "POST",
            data: dataToSend,
            success: function(data) {
                data = JSON.parse(data);
                console.log(data[3]);
                $(`#ma_gio_hang${data[0]}`).text(data[5]);
                $(`#tong_tien${data[0]}`).text(data[5]*don_gia);
                // Xử lý kết quả thành công từ máy chủ nếu cần
            },
            error: function(xhr, status, error) {
                // Xử lý lỗi nếu có
                console.log("Lỗi khi gửi yêu cầu: " + error);
            }
        });
    });

    $('.xoa').on('click', function() {
        var ma_gio_hang = $(this).data('ma-gio-hang');
        var action = "xoa"; // Sửa tên biến thành "action"
        var dataToSend = {
            ma_gio_hang: ma_gio_hang,
            action: action // Sử dụng biến "action" thay vì "ation"
        };

        $.ajax({
            url: "gio_hang.php", // Đường dẫn tới tệp gio_hang.php
            method: "POST",
            data: dataToSend,
            success: function(data) {
                // Xử lý kết quả thành công từ máy chủ nếu cần
            },
            error: function(xhr, status, error) {
                // Xử lý lỗi nếu có
                console.log("Lỗi khi gửi yêu cầu: " + error);
            }
        });
        location.reload();
    });

    let checkbox = document.querySelectorAll('#checkbox');
    let checkboxAll = document.querySelector('#checkboxall');
    let checkArr = document.querySelector('#checkArr');
    let dat_hang = document.querySelector(".dat_hang");
    let checkBuy = false;


    checkboxAll.addEventListener('click', function() {
        let flagAll = checkboxAll.checked;
        checkbox.forEach((e) => {
            e.checked = flagAll;
        });
    });

    dat_hang.addEventListener('click', function() {
        checkbox.forEach((e) => {
            if (e.checked) {
                checkBuy = true;
            }
        });
        if (checkBuy) {
            let text = "";
            checkbox.forEach((e) => {
                if (e.checked) {
                    text += `${e.value}.`;
                }
            });
            
            location.href = `./dat_hang.php?id_gio_hang=${text}`;
        }else{
            alert('Vui lòng chọn sản phẩm !');
        }

    });
        const numberElement = document.getElementById("number");
        const rawNumber = parseInt(numberElement.textContent);

        // Định dạng số
        const formattedNumber = rawNumber.toLocaleString('vi-VN'); // Định dạng cho tiếng Việt

        // Cập nhật nội dung
        numberElement.textContent = formattedNumber +" Vnđ";
</script>