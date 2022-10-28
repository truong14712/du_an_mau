<?php
require "../../global.php";
require_once "../../dao/loai.php";
require_once "../../dao/pdo.php";
check_login();
extract($_REQUEST);
if (exist_param("btn_insert")) {
    $ten_loai = $_POST['ten_loai'];
    $temp = 0;
    $items = loai_select_all();
    foreach ($items as $item) {
        if ($ten_loai == $item["ten_loai"]) {
            $temp++;
            break;
        }
    }
    if ($temp == 1) {
        $MESSAGE = "Tên loại không được trùng nhau";
        $VIEW_NAME = "list.php";
    } else {

        if (!empty($ten_loai)) {
            loai_insert($ten_loai);
            $MESSAGE = "Thêm mới thành công";
        } else {
            $MESSAGE = "Thêm mới thất bại";
        }

        $items = loai_select_all();
        $VIEW_NAME = "list.php";
    }

    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {
    $ma_loai = $_POST['ma_loai'];
    $ten_loai = $_POST['ten_loai'];
    if (!empty($ten_loai) && !empty($ma_loai)) {
        loai_update($ma_loai, $ten_loai);
        $MESSAGE = "Cập nhật loại hàng thành công";
    } else {
        $MESSAGE = "Cập nhật loại hàng thất bại ";
    }
    $items = loai_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete")) {
    loai_delete($ma_loai);
    $items = loai_select_all();
    $VIEW_NAME = "list.php";
    $MESSAGE = "Xóa loại hàng thành công";
} else if (exist_param("btn_edit")) {
    $ma_loai = $_REQUEST['ma_loai'];
    $loai_info = loai_select_by_id($ma_loai);
    extract($loai_info);
    $items = loai_select_all();
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_list")) {
    $items = loai_select_all();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require "../layout.php";
