<?php

include_once("database.php");

class M_hoi_thoai extends database
{
    function hoi_thoai_selectall(){
        $sql = "SELECT ho_ten from khach_hang WHERE ma_khach_hang in (SELECT ma_nguoi_dung from hoi_thoai) and vai_tro != 2 ;";
        return $this->pdo_query($sql);
    }


}