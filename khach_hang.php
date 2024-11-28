<!-- file router của quản lý khách hàng -->
<?php
session_start();
 if(isset($_SESSION['vai_tro'])){
    if($_SESSION['vai_tro']!==1){
        header('location: index.php');
    }
}else{
    header('location: index.php');
}
include "controller/c_khach_hang.php";
$c_khach_hang = new C_khach_hang();

if (isset($_GET['ma_khach_hang'])) {
    $ma_khach_hang = $_GET['ma_khach_hang'];
    $c_khach_hang->edit($ma_khach_hang);
    return;
}
// phương thức xoá
if(isset($_POST['action'])){
    if ($_POST['action'] == "delete") {
        $ma_khach_hang = $_POST['data'];
        $c_khach_hang->del($ma_khach_hang);
        return;
    }
    // update
    if ($_POST['action'] == "update") {
        $c_khach_hang->update($_POST);
        header('Location:khach_hang.php');
    }
}



$c_khach_hang->hienthimanhinh();
