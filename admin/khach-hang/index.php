<?php
require "../../global.php";
require_once "../../dao/khach-hang.php";
require_once "../../dao/pdo.php";
check_login();
extract($_REQUEST);
if (exist_param("btn_insert")) {
    // lấy từ dữ liệu trên from
    $ma_kh = $_POST['ma_kh'];
    $mat_khau = $_POST['mat_khau'];
    $ho_ten = $_POST['ho_ten'];
    $kich_hoat = $_POST['kich_hoat'];
    $hinh = $_FILES['hinh'];
    $email = $_POST['email'];
    $vai_tro = $_POST['vai_tro'];
    $target_dir = "../../content/./images/./users/";
    $allowUpload = true;
    $target_file = $target_dir . $_FILES["hinh"]["name"];
    if (!empty($ma_kh) && !empty($mat_khau) && !empty($ho_ten) && !empty($email)) {
        if ($allowUpload) {
            move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
        }
        // insert database 
        khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $target_file, $kich_hoat, $vai_tro);
        $MESSAGE = "Thêm mới khách hàng thành công";
    } else {
        $MESSAGE = "Thêm mới khách hàng thất bại";
    }
    $items = khach_hang_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {
    $ma_kh = $_POST['ma_kh'];
    $mat_khau = $_POST['mat_khau'];
    $ho_ten = $_POST['ho_ten'];
    $kich_hoat = $_POST['kich_hoat'];
    $hinh = $_FILES['up_hinh'];
    $email = $_POST['email'];
    $vai_tro = $_POST['vai_tro'];
    $anh_cu = $_POST["hinh"];
    $target_dir = "../../content/./images/./product/";
    if ($_FILES["up_hinh"]["size"] > 0) {
        $target_file = $target_dir . $_FILES["up_hinh"]["name"];
        move_uploaded_file($_FILES["up_hinh"]["tmp_name"], $target_file);
    } else {
        $target_file = $anh_cu;
    }
    khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $target_file, $kich_hoat, $vai_tro);
    $MESSAGE = "Cập nhật khách hàng thành công";
    $items = khach_hang_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete")) {
    $vai_tro = $_GET["vai_tro"];
    if ($vai_tro == 1) {
        $items = khach_hang_select_all();
        $VIEW_NAME = "list.php";
        $MESSAGE = "Không thể xóa người này";
    } else {
        khach_hang_delete($ma_kh);
        $items = khach_hang_select_all();
        $VIEW_NAME = "list.php";
        $MESSAGE = "Xóa khách hàng thành công";
    }
} else if (exist_param("btn_edit")) {
    $ma_kh = $_REQUEST['ma_kh'];
    $khach_hang_info = khach_hang_select_by_id($ma_kh);
    extract($khach_hang_info);
    $items = khach_hang_select_all();
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_list")) {
    $items = khach_hang_select_all();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require "../layout.php";
