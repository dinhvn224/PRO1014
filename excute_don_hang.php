<?php
include "controller/c_don_hang.php";

if(isset($_POST["action"]) && $_POST['action'] === 'update'){
    (new C_don_hang())->cap_nhat_trang_thai($_POST);
}