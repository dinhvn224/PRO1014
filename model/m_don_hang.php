<?php

include_once "database.php";

class M_don_hang extends database{

    function get_all_don_hang(){
        $query = "SELECT * FROM don_hang INNER JOIN phuong_xa ON don_hang.xa=phuong_xa.id_phuong_xa INNER JOIN quan_huyen ON don_hang.huyen=quan_huyen.id_quan_huyen INNER JOIN tinh ON don_hang.tinh=tinh.id_tinh";
        return $this->pdo_query( $query );
    }

    function get_all_don_by_name($name){
        $query = "SELECT * FROM `don_hang` where `ten_khach_hang` LIKE '%$name%'";
        return $this->pdo_query( $query );
    }

    function them_don_hang(
    $ten_hang_hoa, $gia_tien, $so_luong, $tong_gia,
    $ten_khach_hang, $email_khach_hang, $xa, $huyen,$tinh, $sdt, $trang_thai){
        $query = "INSERT INTO `don_hang`(`ten_hang_hoa`, `gia_tien`, `so_luong`, `tong_gia`, 
        `ten_khach_hang`, `email_khach_hang`, `xa`, `huyen`, `tinh`, `sdt`, `trang_thai`)
         VALUES (?,?,?,?,?,?,?,?,?,?,?);";
       
        return $this->pdo_execute( $query, $ten_hang_hoa, $gia_tien, $so_luong, $tong_gia,
        $ten_khach_hang, $email_khach_hang, $xa, $huyen,$tinh, $sdt, $trang_thai);
    }

    function cap_nhat_trang_thai_don_hang($trang_thai, $id_don_hang){
        $query = 'UPDATE `don_hang` SET `trang_thai`= '.$trang_thai.' WHERE `id_don_hang` = '.$id_don_hang;

        return $this->pdo_execute( $query );
    }

    function xoa_don_hang($id_don_hang){
        $query = "DELETE ct_don_hang FROM ct_don_hang WHERE id_don_hang = $id_don_hang";
        $this->pdo_execute( $query );
        $query = "DELETE don_hang FROM don_hang WHERE id_don_hang = $id_don_hang";
        return $this->pdo_execute( $query );
    }

    function chi_tiet_don_hang($id){
        $sql="SELECT * FROM ct_don_hang WHERE id_don_hang=$id";
        return $this->pdo_query( $sql );

    }
    function don_hang_user($id){
        $sql="SELECT * FROM don_hang INNER JOIN phuong_xa ON don_hang.xa=phuong_xa.id_phuong_xa INNER JOIN quan_huyen ON don_hang.huyen=quan_huyen.id_quan_huyen INNER JOIN tinh ON don_hang.tinh=tinh.id_tinh WHERE ten_khach_hang='$id'";
        return $this->pdo_query( $sql );
    }
}