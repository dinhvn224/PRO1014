<?php

include_once "model/m_tin_nhan.php";
class C_tin_nhan{
   function hien_thi_tin_nhan(){
        return (new M_tin_nhan())->tin_nhan_selectall();
   }
}