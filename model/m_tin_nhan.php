<?php

include_once("database.php");

class M_tin_nhan extends database{

    function tin_nhan_selectall(){
        $sql = "SELECT * FROM `tin_nhan`;";
        return $this->pdo_query($sql);
    }
}