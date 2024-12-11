<?php
include("model/m_khach_hang.php");

class C_sua_tai_khoan
{

    function  hienthisuataikhoan()
    {
        $view = "view_site/sua_tai_khoan/v_sua_tai_khoan.php";
        include("view_site/layout/index.php");
    }

    function  suataikhoan($ma_khach_hang, $ho_ten, $email)
    {
        $m_khach_hang = new M_khach_hang();
        $check=$m_khach_hang->khach_hang_update($ma_khach_hang, $ho_ten, $email);
        if($check){
                unset($_SESSION['id']);
                unset($_SESSION['ho_ten']);
                unset($_SESSION['email']);
                unset($_SESSION['vai_tro']);
                $dang_nhap=$m_khach_hang->dang_nhap( $email);
                $vai_tro = $dang_nhap[0]['vai_tro'];
                $id_khach_hang = $dang_nhap[0]['ma_khach_hang'];
                $ho_ten_khach_hang = $dang_nhap[0]['ho_ten'];
                $email_khach_hang = $dang_nhap[0]['email'];
                $vai_tro = $dang_nhap[0]['vai_tro'];
                $_SESSION['id'] = $id_khach_hang;
                $_SESSION['ho_ten'] = $ho_ten_khach_hang;
                $_SESSION['email'] = $email_khach_hang;
                $_SESSION['vai_tro'] = $vai_tro;
        }
        header("Location: sua_tk.php");
    }
}