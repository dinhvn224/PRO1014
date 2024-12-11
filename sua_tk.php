<?php
session_start();
include "controller/c_sua_tai_khoan.php";
$c_sua_tk = new C_sua_tai_khoan();
if(isset($_POST['action'])){
    $c_sua_tk->suataikhoan($_SESSION['id'],$_POST['ho_ten'],$_POST['email']);
}
$c_sua_tk->hienthisuataikhoan();