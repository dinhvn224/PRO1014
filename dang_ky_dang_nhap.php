<?php
include "controller/c_dang_ky_dang_nhap.php";
$c_dang_ky_dang_nhap = new C_dang_ky_dang_nhap();

if(isset($_GET['action2'])){
    if ($_GET['action2'] == "dang_ky") {
        $c_dang_ky_dang_nhap->dang_ky($_POST);
        return;
    }
    }
    if(isset($_GET['forgot'])){
            $c_dang_ky_dang_nhap->quen_mat_khau($_POST);
            return;
        }
if(isset($_POST['action'])){
    if ($_POST['action'] == "dang_nhap") {
        $c_dang_ky_dang_nhap->dang_nhap_tk($_POST);
        // var_dump($_POST);
        return;
    }
    if ($_POST['action'] == "dang_ky") {
        $c_dang_ky_dang_nhap->dang_ky_tk($_POST);
        return;
    }
    
}
if(isset($_POST['forgot'])){
    $_SESSION['forgot-email']=$_POST['email'];
        $c_dang_ky_dang_nhap->dat_lai_mat_khau($_POST);
        return;
    }

    if(isset($_POST['repass-btn'])){
            if($_POST['pass']==$_POST['repass']){
                $c_dang_ky_dang_nhap->repass($_POST['pass']);
            }else{
                echo'<script>alert("Mật khẩu chưa trùng")</script>';
                $c_dang_ky_dang_nhap->dat_lai_mat_khau($_POST);
            }
            return;
        }
    





$c_dang_ky_dang_nhap->hienthidangnhap();
