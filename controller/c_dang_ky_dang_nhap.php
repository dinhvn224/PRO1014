<?php
session_start();
include("model/m_khach_hang.php");
class C_dang_ky_dang_nhap
{
    function hienthidangnhap()
    {
        $view = 'view_site/dang_ky_dang_nhap/dang_nhap.php';
        include("view_site/layout/index.php");
    }

    function dang_ky()
    {
        $view = 'view_site/dang_ky_dang_nhap/dang_ky.php';
        include("view_site/layout/index.php");
    }
    function quen_mat_khau()
    {
        $view = 'view_site/dang_ky_dang_nhap/quen_mat_khau.php';
        include("view_site/layout/index.php");
    }

    function dat_lai_mat_khau()
    {
        $view = 'view_site/dang_ky_dang_nhap/dat_lai_mat_khau.php';
        include("view_site/layout/index.php");
    }
    function repass($matkhau)
    {
    $m_dang_ky = new M_khach_hang();
    $options = ['cost' => 12];
    $hashedPassword = password_hash($matkhau, PASSWORD_BCRYPT, $options);
    $check= $m_dang_ky->repass($hashedPassword,$_SESSION['forgot-email']);
    unset($_SESSION['forgot-email']);
    if($check){
        header('Location: index.php');
    }else{
        echo'<script>alert("Đặt lại chưa thành công")</script>';
    }
        $view = 'view_site/dang_ky_dang_nhap/dat_lai_mat_khau.php';
        include("view_site/layout/index.php");
    }
    function dang_ky_tk($dang_ky)
    {
        $m_dang_ky = new M_khach_hang();
        $options = ['cost' => 12];
        $hashedPassword = password_hash($dang_ky['mat_khau'], PASSWORD_BCRYPT, $options);
        $kh_dk =  $m_dang_ky->khach_hang_dang_ky( $dang_ky['email'], $dang_ky['ho_ten'],  $hashedPassword);
        $view = 'view_site/dang_ky_dang_nhap/dang_nhap.php';
        include("view_site/layout/index.php");
    }
    function dang_nhap_tk($email)
    {
        $m_dang_nhap = new M_khach_hang();
        $dang_nhap =  $m_dang_nhap->dang_nhap($email['email_dang_nhap']);
        $mat_khau = $email['mat_khau_dang_nhap'];
        

        if ($dang_nhap) {
            $stored_password = $dang_nhap[0]['mat_khau'];

            if (password_verify($mat_khau, $stored_password)) {

                $vai_tro = $dang_nhap[0]['vai_tro'];
                $id_khach_hang = $dang_nhap[0]['ma_khach_hang'];
                $ho_ten_khach_hang = $dang_nhap[0]['ho_ten'];
                $email_khach_hang = $dang_nhap[0]['email'];
                $vai_tro = $dang_nhap[0]['vai_tro'];

                $_SESSION['id'] = $id_khach_hang;
                $_SESSION['ho_ten'] = $ho_ten_khach_hang;
                $_SESSION['email'] = $email_khach_hang;
                $_SESSION['vai_tro'] = $vai_tro;


                if ($vai_tro == 1) {
                    header("Location:loai_hang.php");
                } else if($vai_tro == 2){
                    header("Location:admin.php");
                }else {
                    header("Location:index.php");
                }



                //header("Location: index.php");
            } else {
                echo 'Đăng nhập thất bại';
            }
        } else {
            echo "Tài khoản không tồn tại";
        }
    }
}
