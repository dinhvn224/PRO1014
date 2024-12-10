<?php

include_once("database.php");
class M_binh_luan extends database
{
    function binh_luan_selectall()
    {
        $sql = "SELECT hh.ma_hang_hoa, hh.ten_hang_hoa, COUNT(bc.ma_hang_hoa) AS so_lan_binh_luan
        FROM hang_hoa AS hh
        LEFT JOIN binh_luann AS bc ON hh.ma_hang_hoa = bc.ma_hang_hoa
        GROUP BY hh.ma_hang_hoa, hh.ten_hang_hoa;
        ";
        return $this->pdo_query($sql, []);
    }
    function binh_luan_selectall2(){
        $sql = "SELECT bl.*, kh.ho_ten FROM `binh_luann` as bl JOIN khach_hang as kh
        on bl.ma_khach_hang = kh.ma_khach_hang order by ma_binh_luan asc";
        return $this->pdo_query($sql);
        }
    function binh_luan_select_by_id($ma_hang_hoa)
    {
        $sql = "SELECT * FROM binh_luann WHERE ma_hang_hoa = ?";
        return $this->pdo_query($sql, [$ma_hang_hoa]);
    }

    function them_binh_luan($ma_hang_hoa, $noi_dung, $ma_khach_hang)
    {
        $sql = "INSERT INTO `binh_luann`( `noi_dung`, `ma_khach_hang`, `ma_hang_hoa`, `thuoc_binh_luan`) VALUES (?, ?, ?, 0)";
        $insertResult = $this->pdo_execute($sql, $noi_dung,$ma_khach_hang, $ma_hang_hoa);

        if ($insertResult) {
            // Nếu bình luận đã được thêm thành công, bạn có thể gọi hàm binh_luan_by_ma_hang để lấy kết quả
            $binh_luan = $this->binh_luan_by_ma_hang($ma_hang_hoa);
            return $binh_luan;
        }

        return false; // Trả về false nếu việc thêm bình luận thất bại
    }

    function binh_luan_by_ma_hang($bl_mh)
    {
        $sql = " SELECT bl.noi_dung, kh.ho_ten FROM binh_luann as bl
        JOIN khach_hang AS kh 
        ON bl.ma_khach_hang = kh.ma_khach_hang
        WHERE bl.ma_hang_hoa = ?";
        return $this->pdo_query($sql, [$bl_mh]);
    }

    function them_binh_luan2($ma_hang_hoa, $noi_dung, $ma_khach_hang)
    {
        $sql = "INSERT INTO `binh_luann`( `noi_dung`, `ma_khach_hang`, `ma_hang_hoa`, `thuoc_binh_luan`) VALUES (?, ?, ?, 0)";
        return $this->pdo_execute_run($sql, $noi_dung,$ma_khach_hang, $ma_hang_hoa);
    }
}
