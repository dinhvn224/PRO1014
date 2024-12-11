<?php
include_once("database.php");

class M_khach_hang extends database
{
    function khach_hang_selectall()
    {
        $sql = "SELECT * FROM khach_hang WHERE vai_tro != 1 AND an=0";
        return $this->pdo_query($sql, []);
    }

    // Xoá khách hàng
    function khach_hang_delete($ma_khach_hang)
    {
        $sql = "UPDATE khach_hang SET an = 1  WHERE ma_khach_hang = ?";
        $this->pdo_execute($sql, $ma_khach_hang);
    }

    // Lấy thông tin khách hàng theo mã
    function khach_hang_select_by_id($ma_khach_hang)
    {
        $sql = "SELECT * FROM khach_hang WHERE ma_khach_hang = ?";
        $res = $this->pdo_query_one($sql, [$ma_khach_hang]);
        return $res;
    }

    // Cập nhật thông tin khách hàng
    function khach_hang_update($ma_khach_hang, $ho_ten, $email)
    {

        $sql = "UPDATE khach_hang SET   ho_ten = ?, email = ? WHERE ma_khach_hang = ?";
        return $this->pdo_execute($sql,  $ho_ten, $email, $ma_khach_hang);
        
    }
    function khach_hang_dang_ky( $email, $ho_ten, $mat_khau)
    {
        $sql = "INSERT INTO khach_hang(email, ho_ten, mat_khau) VALUES ( ?, ?, ?)";
        $this->pdo_execute($sql, $email, $ho_ten, $mat_khau);
    }
    function dang_nhap($email)
    {
        $sql = "SELECT * FROM khach_hang WHERE email = ?";
        return $this->pdo_query($sql, [$email]);
    }

    function repass($matkhau,$email){
        $sql="UPDATE khach_hang SET mat_khau='$matkhau' WHERE email='$email'";
        return $this->pdo_execute($sql);
    }
}
