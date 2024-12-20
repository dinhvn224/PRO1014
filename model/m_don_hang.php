<?php

include_once "database.php";

class M_don_hang extends database{

    function get_all_don_hang(){
        $query = "SELECT * FROM don_hang INNER JOIN phuong_xa ON don_hang.xa=phuong_xa.id_phuong_xa INNER JOIN quan_huyen ON don_hang.huyen=quan_huyen.id_quan_huyen INNER JOIN tinh ON don_hang.tinh=tinh.id_tinh Order By id_don_hang Desc";
        return $this->pdo_query( $query );
    }

    function get_all_don_by_name($name){
        $query = "SELECT * FROM `don_hang` where `ten_khach_hang` LIKE '%$name%' ";
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
        $query = "SELECT hang_hoa_id,SUM(so_luong) as 'tong' FROM ct_don_hang WHERE id_don_hang = $id_don_hang GROUP BY hang_hoa_id; ";
        $result = $this->pdo_query( $query );
        foreach ($result as $key => $value) {
            $total=$value['tong'];
            $hang_hoa_id=$value['hang_hoa_id'];
            $query = "UPDATE hang_hoa SET so_luong=so_luong+$total WHERE ma_hang_hoa=$hang_hoa_id";
            $this->pdo_execute( $query );
        }
        $query = "DELETE ct_don_hang FROM ct_don_hang WHERE id_don_hang = $id_don_hang";
        $this->pdo_execute( $query );
        $query = "DELETE don_hang FROM don_hang WHERE id_don_hang = $id_don_hang";
        return $this->pdo_execute( $query );
    }

    function chi_tiet_don_hang($id){
        $sql="SELECT hang_hoa.ten_hang_hoa,hang_hoa.don_gia,hang_hoa.hinh,color.ten_color,capacity.ten_capacity,ct_don_hang.so_luong  FROM ct_don_hang
        
        INNER JOIN hang_hoa ON hang_hoa.ma_hang_hoa =ct_don_hang.hang_hoa_id
        INNER JOIN color ON color.id_color  =ct_don_hang.color_id  
        INNER JOIN capacity ON capacity.id_capacity  =ct_don_hang.capacity_id   
         WHERE id_don_hang=$id";
        return $this->pdo_query( $sql );

    }
    function don_hang_user($id){
        $sql="SELECT * FROM don_hang INNER JOIN phuong_xa ON don_hang.xa=phuong_xa.id_phuong_xa INNER JOIN quan_huyen ON don_hang.huyen=quan_huyen.id_quan_huyen INNER JOIN tinh ON don_hang.tinh=tinh.id_tinh WHERE ten_khach_hang='$id' Order By id_don_hang Desc";
        return $this->pdo_query( $sql );
    }
}