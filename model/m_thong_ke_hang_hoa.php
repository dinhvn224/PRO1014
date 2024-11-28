<?php
include("database.php");
class M_thong_ke extends database
{
    function thong_ke()
    {
        $sql = "SELECT
        loai_hang.ten_loai,
        loai_hang.ma_loai,
        MIN(hang_hoa.don_gia) AS gia_min,
        MAX(hang_hoa.don_gia) AS gia_max,
        AVG(hang_hoa.don_gia) AS gia_trung_binh,
        COUNT(hang_hoa.ma_loai) AS so_luong
    FROM
        loai_hang
    LEFT JOIN
        hang_hoa
    ON
        loai_hang.ma_loai = hang_hoa.ma_loai
    GROUP BY
        loai_hang.ten_loai,
        loai_hang.ma_loai
    ORDER BY
        so_luong DESC;
    
    ";
        return $this->pdo_query($sql, []);
    }

    function getorder(){
        $sql="SELECT count(*) as num FROM don_hang ";
        return $this->pdo_query_one($sql);
    }
    function getorder_minmax(){
        $sql="SELECT SUM(gia_tien) as sum FROM ct_don_hang  group by id_don_hang ";
        return $this->pdo_query($sql);
    }
    
}
