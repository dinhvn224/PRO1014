<!-- file router của bảng loại hàng -->
<?php
session_start();
 if(isset($_SESSION['vai_tro'])){
    if($_SESSION['vai_tro']!==1){
        header('location: index.php');
    }
}else{
    header('location: index.php');
}
include "controller/c_don_hang.php";
$c_loai_hang = new C_don_hang();


if(isset($_POST['delete'])){
    $c_loai_hang->xoadonhang($_POST['id']);
    return;
}
if(isset($_GET['ma_don'])){
    $c_loai_hang->chitietdonhang($_GET['ma_don']);
    return;
}


$c_loai_hang->quanlydonhang();
