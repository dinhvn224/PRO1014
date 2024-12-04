<?php
include_once("model/m_gio_hang.php");
class C_gio_hang
{
    function hien_thi_gio_hang($ma_khach_hang)
    {
        $m_gio_hang = new M_gio_hang();
        $gio_hang_get_list = $m_gio_hang->gio_hang_select_all($ma_khach_hang);

        $view = 'view_site/gio_hang/v_gio_hang.php';
        include("view_site/layout/index.php");
    }

    function tao_gio_hang($gh, $ma_khach_hang)
    {
        $m_gio_hang = new M_gio_hang();
        return $m_gio_hang->them_sp_vao_gio_hang($gh, $ma_khach_hang);
    }

    function sua_gio_hang_tang($gh, $ma_khach_hang)
    {
        $m_gio_hang = new M_gio_hang();
        $result=$m_gio_hang->update_tang($gh, $ma_khach_hang); // update dữ liệu vào db
        if($result === false){
            return false;
        }
        $gio_hang_get = $m_gio_hang->gio_hang_select($ma_khach_hang, $gh["ma_gio_hang"]); // lấy dữ liệu từ db ra
        return $gio_hang_get;
    }

    function sua_gio_hang_giam($gh, $ma_khach_hang)
    {
        $m_gio_hang = new M_gio_hang();
        $m_gio_hang->update_giam($gh, $ma_khach_hang); // update dữ liệu vào db
        $gio_hang_get = $m_gio_hang->gio_hang_select($ma_khach_hang, $gh['ma_gio_hang']);
        return $gio_hang_get;
    }
    function xoa_gio_hang1($gh,$ma_khach_hang)
    {
        $m_gio_hang = new M_gio_hang();
        $m_gio_hang->xoa_gio_hang($gh, $ma_khach_hang);
    }
    function xoa_gio_hang($id_gio_hang,$ma_khach_hang)
    {
        $m_gio_hang = new M_gio_hang();
        $m_gio_hang->xoa_gio_hang1($id_gio_hang, $ma_khach_hang);
    }
    function sl_gio_hang($ma_khach_hang)
    {
        $m_gio_hang = new M_gio_hang();
        $sl = $m_gio_hang->dem_so_luong_gio_hang($ma_khach_hang);
    }
    function gio_hang_by_id($id)
    {
        $m_gio_hang = new M_gio_hang();
        $gh_id = $m_gio_hang->gio_hang_by_id2($id);
        return $gh_id;
    }
}
