<?php
require "../../global.php";
require_once "../../dao/hang-hoa.php";
require_once "../../dao/loai.php";
require_once "../../dao/pdo.php";
check_login();
extract($_REQUEST);
if (exist_param("btn_insert")) {
    $ten_hh = $_POST['ten_hh'];
    $don_gia = $_POST['don_gia'];
    $giam_gia = $_POST['giam_gia'];
    $hinh = $_FILES['hinh'];
    $ma_loai = $_POST['ma_loai'];
    $dac_biet = $_POST['dac_biet'];
    $so_luot_xem = $_POST['so_luot_xem'];
    $ngay_nhap = $_POST['ngay_nhap'];
    $mo_ta = $_POST['mo_ta'];
    $target_dir = "../../content/./images/./product/";
    $allowUpload = true;
    $target_file = $target_dir . $_FILES["hinh"]["name"];

    if ($allowUpload) {
        move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
    }
    hang_hoa_insert(
        $ten_hh,
        $don_gia,
        $giam_gia,
        $target_file,
        $ma_loai,
        $dac_biet,
        $so_luot_xem,
        $ngay_nhap,
        $mo_ta,
    );
    $MESSAGE = "Thêm hàng hóa mới thành công";
    // show database
    $items = hang_hoa_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {
    $ma_hh = $_POST['ma_hh'];
    $ten_hh = $_POST['ten_hh'];
    $don_gia = $_POST['don_gia'];
    $giam_gia = $_POST['giam_gia'];
    $anh_cu = $_POST["hinh"];
    $hinh = $_FILES['up_hinh'];
    $ma_loai = $_POST['ma_loai'];
    $dac_biet = $_POST['dac_biet'];
    $so_luot_xem = $_POST['so_luot_xem'];
    $ngay_nhap = $_POST['ngay_nhap'];
    $mo_ta = $_POST['mo_ta'];
    $target_dir = "../../content/./images/./product/";
    if ($_FILES["up_hinh"]["size"] > 0) {
        $target_file = $target_dir . $_FILES["up_hinh"]["name"];
        move_uploaded_file($_FILES["up_hinh"]["tmp_name"], $target_file);
    } else {
        $target_file = $anh_cu;
    }
    hang_hoa_update(
        $ma_hh,
        $ten_hh,
        $don_gia,
        $giam_gia,
        $target_file,
        $ma_loai,
        $dac_biet,
        $so_luot_xem,
        $ngay_nhap,
        $mo_ta
    );
    $MESSAGE = "Cập nhật hàng hóa  thành công";
    $items = hang_hoa_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete")) {
    hang_hoa_delete($ma_hh);
    $items = hang_hoa_select_all();
    $VIEW_NAME = "list.php";
    $MESSAGE = "Xóa hàng hóa thành công";
} else if (exist_param("btn_edit")) {
    $ma_hh = $_REQUEST['ma_hh'];
    $hang_hoa_info = hang_hoa_select_by_id($ma_hh);
    extract($hang_hoa_info);
    $items = hang_hoa_select_all();
    $loai_hang = loai_select_all();
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_list")) {
    $items = hang_hoa_select_all();
    $VIEW_NAME = "list.php";
} else {
    $loai_hang = loai_select_all();
    $VIEW_NAME = "add.php";
}


require "../layout.php";