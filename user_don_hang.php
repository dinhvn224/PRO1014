<?php
session_start();
include "controller/c_don_hang.php";
$c_don_hang = new c_don_hang();
if(isset($_SESSION['ho_ten'])){
    if(isset($_POST['delete'])){
        $c_don_hang->xoadonhang($_POST['id']);
        return;
    }
    if(isset($_GET['ma_don'])){
        $c_don_hang->chitietdonhang($_GET['ma_don']);
        return;
    }
    if(isset($_GET['huy_ma_don'])){
        $c_don_hang->xoadonhang1($_GET['huy_ma_don']);
        return;
    }
    $c_don_hang->quan_ly_don_hang_user($_SESSION['ho_ten']);
}
