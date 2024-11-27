<?php
session_start();
include("model/m_hang_hoa.php");
include("model/m_color.php");
include("model/m_capacity.php");
include("c_binh_luan.php");
include("c_loai_hang.php");
class C_trang_chu
{
    function hienthimanhinh()
    {
        // gọi dữ liệu 
        $m_trang_chu = new M_hang_hoa();
        $hang_hoa = $m_trang_chu->hang_hoa_selectall();
        $m_loai_hang = new M_loai_hang();
        $loai_hang = $m_loai_hang->loai_selectall();
        // select all 

        $title = "Trang chủ";
        $view = "view_site/trang_chu/trang_chu.php";
        include("view_site/layout/index.php");
    }

    function hienthimanhinh1()
    {
        // gọi dữ liệu 
        $m_trang_chu = new M_hang_hoa();
        $hang_hoa = $m_trang_chu->hang_hoa_selectall();
        $m_loai_hang = new M_loai_hang();
        $loai_hang = $m_loai_hang->loai_selectall();
        // select all 

        $title = "Trang chủ";
        $view = "view_site/trang_chu/trang_chu.php";
        include("view_site/layout/index.php");
    }
    function chi_tiet_san_pham($ma_hang_hoa, $ma_loai)
    {
        $m_trang_chu = new M_hang_hoa();
        $chi_tiet_hang_hoa = $m_trang_chu->hang_hoa_select_by_id($ma_hang_hoa);
        $loai_hang1 = $m_trang_chu->hang_hoa_select_by_loai($ma_loai);

        $m_loai_hang = new M_loai_hang();
        $loai_hang = $m_loai_hang->loai_selectall();
        
        $m_binh_luan = new M_binh_luan();
        $binh_luan_by_id = $m_binh_luan->binh_luan_by_ma_hang($ma_hang_hoa);
        

       
        $m_color = new M_color();
        $color_selectall = $m_color->color_selectall();

        $m_capacity = new M_capacity();
        $capacity_selectall = $m_capacity->capacity_selectall();

        $title = "Chi tiết";
        $view = "view_site/chi_tiet/chi_tiet.php";
        include("view_site/layout/index.php");
    }
    function hienthiloai($ma_loai)
    {
        $m_trang_chu = new M_hang_hoa();
        $hang_hoa_by_loai = $m_trang_chu->hang_hoa_select_by_loai($ma_loai);
        $m_loai_hang = new M_loai_hang();
        $loai_hang = $m_loai_hang->loai_selectall();
        $loai_select_by_id =$m_loai_hang->loai_select_by_id($ma_loai);

        $view = "view_site/loai_hang/select_loai_hang.php";
        include("view_site/layout/index.php");
    }
}
