<?php
include_once("database.php");

class M_gio_hang extends database
{
    function gio_hang_select_all($ma_khach_hang)
    {
        $sql = "SELECT gh.id_gio_hang, gh.ma_san_pham, hh.hinh ,hh.ten_hang_hoa, hh.don_gia, gh.so_luong_san_pham,(gh.so_luong_san_pham * hh.don_gia) as tong_gia,co.ten_color,co.ma_mau,ca.ten_capacity"
            . " FROM gio_hang as gh"
            . " INNER JOIN hang_hoa as hh ON gh.ma_san_pham = hh.ma_hang_hoa"
            . " INNER JOIN color as co  ON co.id_color = gh.color_id"
            . " INNER JOIN capacity as ca ON ca.id_capacity = gh.capacity_id"
            . " WHERE gh.ma_khach_hang = ?";

        return $this->pdo_query($sql, [$ma_khach_hang]);
    }

    function gio_hang_select($ma_khach_hang, $ma_gio_hang)
    {
        $sql = "SELECT * FROM gio_hang WHERE ma_khach_hang = ? AND id_gio_hang  = ?";
        return $this->pdo_query_one($sql, [$ma_khach_hang, $ma_gio_hang]);
    }

    // function get_sp_

    function them_sp_vao_gio_hang($sp, $ma_khach_hang)
    {
        $sql_check  = "SELECT * FROM gio_hang WHERE ma_khach_hang = ? AND ma_san_pham = ? AND color_id = ? AND capacity_id = ?";
        $flag = $this->pdo_query_one($sql_check, [$ma_khach_hang, $sp["ma_san_pham"], $sp["color_id"], $sp["capacity_id"]]);

        if ($flag) {
            $sql_update = "UPDATE gio_hang SET so_luong_san_pham = so_luong_san_pham + 1 WHERE ma_khach_hang = ? AND ma_san_pham = ? AND color_id = ? AND capacity_id = ?";
            $this->pdo_execute($sql_update, $ma_khach_hang, $sp["ma_san_pham"], $sp["color_id"], $sp["capacity_id"]);
        } else {
            $sql = "INSERT INTO gio_hang (ma_khach_hang, ma_san_pham, color_id, capacity_id, so_luong_san_pham) VALUE (?, ?, ?, ?, ?)";
            return $this->pdo_execute($sql, $ma_khach_hang, $sp["ma_san_pham"], $sp["color_id"], $sp["capacity_id"], $sp["so_luong"]);
        }
    }
    function them_sp_vao_gio_hang2($sp, $ma_khach_hang){
        $sql_check  = "SELECT * FROM gio_hang WHERE ma_khach_hang = ? AND ma_san_pham = ?";
        $flag = $this->pdo_query_one($sql_check, [$ma_khach_hang, $sp["ma_san_pham"]]);
        if ($flag) {
            $sql_update = "UPDATE gio_hang SET so_luong_san_pham = so_luong_san_pham + 1 WHERE ma_khach_hang = ? AND ma_san_pham = ?";
            $this->pdo_execute($sql_update, $ma_khach_hang, $sp["ma_san_pham"]);
        } else {
            $sql = "INSERT INTO gio_hang (ma_khach_hang, ma_san_pham, so_luong_san_pham) VALUE (?, ?, ?)";
            return $this->pdo_execute_run($sql, $ma_khach_hang, $sp["ma_san_pham"], $sp["so_luong"]);
        }
        return false;
    }

    function xoa_gio_hang($sp, $ma_khach_hang)
    {
        $sql = "DELETE FROM gio_hang WHERE ma_khach_hang = ? AND id_gio_hang  = ?";
        $this->pdo_execute($sql, $ma_khach_hang, $sp["ma_gio_hang"]);
    }

    function xoa_gio_hang1($id_gio_hang, $ma_khach_hang)
    {
        $sql = "DELETE FROM gio_hang WHERE ma_khach_hang = ? AND id_gio_hang  = ?";
        $this->pdo_execute($sql, $ma_khach_hang, $id_gio_hang);
    }
   

    function update_tang($sp, $ma_khach_hang)
    {
        $sql_check  = "SELECT * FROM gio_hang WHERE ma_khach_hang = ? AND id_gio_hang  = ?";
        $flag = $this->pdo_query_one($sql_check, [$ma_khach_hang, $sp["ma_gio_hang"]]);

        if ($flag > 0) {
        $sql_update = "UPDATE gio_hang SET so_luong_san_pham = so_luong_san_pham + 1 WHERE ma_khach_hang = ? AND id_gio_hang  = ? ";
        $this->pdo_execute($sql_update, $ma_khach_hang, $sp["ma_gio_hang"]);
        }
    }

    function update_giam($sp, $ma_khach_hang)
    {
        $sql_check  = "SELECT * FROM gio_hang WHERE ma_khach_hang = ? AND id_gio_hang  = ? AND so_luong_san_pham>1";
        $flag = $this->pdo_query_one($sql_check, [$ma_khach_hang, $sp["ma_gio_hang"]]);

        if ($flag > 0) {
            $sql_update = "UPDATE gio_hang SET so_luong_san_pham = so_luong_san_pham - 1 WHERE ma_khach_hang = ? AND id_gio_hang  = ?";
            $this->pdo_execute($sql_update, $ma_khach_hang, $sp["ma_gio_hang"]);
        }
    }
    function dem_so_luong_gio_hang($ma_khach_hang)
    {
        $sql = "SELECT COUNT(ma_san_pham) FROM gio_hang WHERE ma_khach_hang = ?";
        return $this->pdo_query_one($sql, $ma_khach_hang);
    }
    function gio_hang_by_id2($id_gio_hang)
    {
        $sql = "SELECT  gh.id_gio_hang, gh.ma_san_pham, hh.ten_hang_hoa, hh.don_gia, gh.so_luong_san_pham, (gh.so_luong_san_pham * hh.don_gia) as tong_gia,gh.color_id,gh.capacity_id
        FROM gio_hang as gh
        INNER JOIN hang_hoa as hh ON gh.ma_san_pham = hh.ma_hang_hoa
        WHERE gh.id_gio_hang = ?
        ";
        return $this->pdo_query($sql, [$id_gio_hang]);
    }
}