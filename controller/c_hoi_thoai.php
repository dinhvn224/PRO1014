<?php

include_once "model/m_hoi_thoai.php";
class C_hoi_thoai{
   function hien_thi_hoi_thoai(){
        return (new M_hoi_thoai())->hoi_thoai_selectall();
   }
}