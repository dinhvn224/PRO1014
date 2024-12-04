<?php
session_start();
 if(isset($_SESSION['vai_tro'])){
    if($_SESSION['vai_tro']!==1){
        header('location: index.php');
    }
}else{
    header('location: index.php');
}
include "controller/c_thong_ke.php";
$c_thong_ke = new C_thong_ke();

if (isset($_POST['action'])) {
    $c_thong_ke->xem_thong_ke();
    return;
}else if (isset($_POST['month-year-btn'])) {
    $c_thong_ke->hienthimanhinh1($_POST['month']);
    return;
}else{
    $c_thong_ke->hienthimanhinh();
    return;
}

