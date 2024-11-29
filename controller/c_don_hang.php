<?php
include_once "model/m_don_hang.php";

class C_don_hang{

    function them_don_hang($ten_hang_hoa, $gia_tien, $so_luong, $tong_gia,
    $ten_khach_hang, $email_khach_hang, $xa, $huyen,$tinh, $sdt, $trang_thai){
        $m_don_hang = new M_don_hang();
        $m_don_hang->them_don_hang($ten_hang_hoa, $gia_tien, $so_luong, $tong_gia,
        $ten_khach_hang, $email_khach_hang, $xa, $huyen,$tinh, $sdt, $trang_thai);
    }
    function hien_thi_don_hang(){
        $m_don_hang = new M_don_hang();
        return $m_don_hang->get_all_don_hang();
    }

    function cap_nhat_trang_thai($don_hang){
        $m_don_hang = new M_don_hang();
        return $m_don_hang->cap_nhat_trang_thai_don_hang($don_hang['trang_thai'], $don_hang['id_don_hang']);
    }
    function quanlydonhang(){
        $m_don_hang = new M_don_hang();
        $get_all_don_hang=$m_don_hang->get_all_don_hang();
        $title = 'Đơn hàng';

        $view = "admin_view/content/admin_don_hang.php";
        include("view/layout/index.php");
    }
    function chitietdonhang($id){
        $m_don_hang = new M_don_hang();
        $chi_tiet_don_hang=$m_don_hang->chi_tiet_don_hang($id);
        $title = 'Chi tiết đơn hàng';

        $view = "view/don_hang/v_chi_tiet_don_hang.php";
        include("view_site/layout/index.php");
    }
    function xoadonhang($id_don_hang){
        $m_don_hang = new M_don_hang();
        $xoa_don_hang=$m_don_hang->xoa_don_hang($id_don_hang);
        $get_all_don_hang=$m_don_hang->get_all_don_hang();
        $title = 'Đơn hàng';
        $view = "view/don_hang/v_quan_ly_don_hang.php";
        include("view_site/layout/index.php");
    }
    function quan_ly_don_hang_user($id){
        $m_don_hang = new M_don_hang();
        $don_hang_user=$m_don_hang->don_hang_user($id);
        $title = 'Đơn hàng user';
        $view = "view_site/don_hang/user_donhang.php";
        include("view_site/layout/index.php");

    }
}