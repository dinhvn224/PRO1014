<?php 
include "controller/c_hoi_thoai.php";
include "controller/c_tin_nhan.php";
include "controller/c_don_hang.php";
include "controller/c_binh_luan.php";

class C_admin{
    function hienthimanhinh(){

        $hoi_thoai = (new C_hoi_thoai())->hien_thi_hoi_thoai();
        $tin_nhan = (new C_tin_nhan())->hien_thi_tin_nhan();
        $binh_luan = (new C_binh_luan())->get_all_binh_luan();
        $don_hang = (new C_don_hang())->hien_thi_don_hang();
        include("admin_view/index.php");
    }

    function getAdress($tinh, $huyen, $xa){

    }
}
