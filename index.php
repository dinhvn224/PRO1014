<?php

include "controller/c_trang_chu.php";
$c_trang_chu = new C_trang_chu();
if (isset($_POST['search-btn'])) {
    $search = $_POST['search'];
    $c_trang_chu->search($search);
    return;
}
if (isset($_GET['ma_hang_hoa'])) {
    $ma_hang_hoa = $_GET['ma_hang_hoa'];
    $ma_loai = $_GET['ma_loai'];
    $c_trang_chu->chi_tiet_san_pham($ma_hang_hoa, $ma_loai);
    return;
}
if (isset($_GET['ma_loai'])) {
    $ma_loai = $_GET['ma_loai'];
    $c_trang_chu->hienthiloai($ma_loai);
    return;
}
if(isset($_GET['checkout'])){
    if($_GET['checkout']=="success"){
        echo '<script>alert("Đặt hàng thành công")</script>';
    }
}

$c_trang_chu->hienthimanhinh();
