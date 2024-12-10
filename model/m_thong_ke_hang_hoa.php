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
        $sql="SELECT SUM(tong_ct) as sum FROM ct_don_hang  group by id_don_hang ";
        return $this->pdo_query($sql);
    }

    function thong_ke1($month, $year)
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
    WHERE
        MONTH(hang_hoa.dateOrder) = ? AND YEAR(hang_hoa.dateOrder) = ?
    GROUP BY
        loai_hang.ten_loai,
        loai_hang.ma_loai
    ORDER BY
        so_luong DESC";

    return $this->pdo_query($sql, [$month, $year]);
}

function getorder1($month, $year)
{
    $sql = "SELECT COUNT(*) AS num 
            FROM don_hang 
            WHERE MONTH(dateOrder) = ? AND YEAR(dateOrder) = ?";

    return $this->pdo_query_one($sql, [$month, $year]);
}

function getorder_minmax1($month, $year)
{
    $sql = "SELECT SUM(tong_ct) AS sum 
            FROM ct_don_hang 
            INNER JOIN don_hang ON don_hang.id_don_hang = ct_don_hang.id_don_hang 
            WHERE MONTH(don_hang.dateOrder) = ? AND YEAR(don_hang.dateOrder) = ?
            GROUP BY ct_don_hang.id_don_hang";

    return $this->pdo_query($sql, [$month, $year]);
}



    
}
