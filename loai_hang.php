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
include "controller/c_loai_hang.php";
$c_loai_hang = new C_loai_hang();

// phuowng thuwcs update
if(isset($_POST['action'])){
if ($_POST['action'] == "update") {
    // $c_loai_hang->update($_POST);
    return;
}
if ($_POST['action'] == "create") {
    $c_loai_hang->create($_POST['ten_loai']);
    return;
}
if ($_POST['action'] == "delete") {
    $ma_loai = $_POST['data'];
    $c_loai_hang->del($ma_loai);
    return;
}
if ($_POST['action'] == "save") {
    $ma_loai = $_POST['data'];
    $c_loai_hang->update($_POST['ma_loai'],$_POST['ten_loai']);
    return;
}
}


// phuong thuc edit
if (isset($_GET['ma_loai'])) {
    $ma_loai=intval($_GET['ma_loai']);
    $c_loai_hang->edit($ma_loai);
    return;
}


// phhuowng thức tạo


// phuong thuc edit
if (isset($_GET['store'])) {
    $c_loai_hang->store();
    return;
}
// phương thức xoá



// echo "admin";
// phương thức lấy tất cả

$c_loai_hang->hienthimanhinh();
