<?php
include("model/m_khach_hang.php");

class C_khach_hang
{
    function hienthimanhinh()
    {
        // gọi và db lấy dữ liệu
        $m_khach_hang = new M_khach_hang();
        $khach_hang = $m_khach_hang->khach_hang_selectall();

        // hiển thị ra màn hình
        $title = "Danh sách khách hàng";
        $view = "view/khach_hang/v_quan_ly_khach_hang.php";
        include("view/layout/index.php");
    }
    function edit($ma)
    {
        // model
        $m_khach_hang = new M_khach_hang();
        $khach_hang_by_id = $m_khach_hang->khach_hang_select_by_id($ma);

        // view 
        $title = "edit khách hàng";
        $view = "view/khach_hang/v_form_khach_hang.php";
        $action = "update";

        include("view/layout/index.php");
    }
    function update($khach_hang)
    {

        //xử lý bd
        $m_khach_hang = new M_khach_hang();

        $khach_hang_by_id = $m_khach_hang->khach_hang_update(
            $khach_hang["ma_khach_hang"],
            $khach_hang["ho_ten"],
            $khach_hang['email']
        );

        // Xử lý tệp tải lên (nếu có)
        // update xong trả ra tranh chinhs
        header('Location:index.php');
    }
    function del($ma_khach_hang)
    {
        $del_loai_hang = new M_khach_hang();
        echo $ma_khach_hang;
        $del_loai_hang_by_id = $del_loai_hang->khach_hang_delete($ma_khach_hang);
        header('Location:khach_hang.php');
    }
}
