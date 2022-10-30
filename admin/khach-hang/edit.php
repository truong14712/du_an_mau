<?php
require_once "../../dao/khach-hang.php";
require_once "../../dao/pdo.php";

if (is_array($items)) {
    extract($items);
}
?>
<h2 class="py-2  text-3xl text-green-700 rounded-md">Cập nhật khách hàng</h2>
<form action="index.php" method="post" enctype="multipart/form-data" id="Form">
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="">Mã khách hàng (Tên đăng nhập)</label>
            <input type="text" name="ma_kh" class="form-control border-green-500 " value="<?= $ma_kh ?>" readonly>
        </div>
        <div class="form-group col-sm-6">
            <label for="">Họ và tên</label>
            <input type="text" name="ho_ten" class="form-control border-green-500 " value="<?= $ho_ten ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="">Mật khẩu </label>
            <input type="password" name="mat_khau" class="form-control border-green-500" value="<?= $mat_khau ?>">
        </div>
        <div class="form-group col-sm-6">
            <label for="">Xác nhận mật khẩu</label>
            <input type="password" name="mat_khau2" class="form-control border-green-500" value="<?= $mat_khau ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="">Địa chỉ email </label>
            <input type="email" name="email" class="form-control border-green-500" value="<?= $email ?>">
        </div>
        <div class="form-group col-sm-6">
            <label for="">Hình ảnh</label>
            <input type="hidden" name="hinh" value="<?= $hinh ?>">
            <input type="file" name="up_hinh" class="form-control border-green-500">
            <img src="<?= $hinh ?>" alt="" class="w-[30%]">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="">Kích hoạt </label>
            <div class="form-control border-green-500">
                <input <?= !$kich_hoat ? 'checked' : '' ?> type="radio" class="radio-inline" name="kich_hoat" value="0"> Chưa kích hoạt
                <input <?= !$kich_hoat ? 'checked' : '' ?> type="radio" class="radio-inline" name="kich_hoat" value="1" checked>Kích hoạt
            </div>
        </div>
        <div class="form-group col-sm-6">
            <label for="">Vai trò </label>
            <div class="form-control border-green-500">
                <input <?= !$vai_tro ? 'checked' : '' ?> type="radio" class="radio-inline" name="vai_tro" value="0">Khách hàng
                <input <?= !$vai_tro ? 'checked' : '' ?> type="radio" class="radio-inline" name="vai_tro" value="1" checked> Nhân viên
            </div>
        </div>
        <div class="form-group col-sm-12 my-4">
            <button class="btn btn-outline-success bg-green-300 mx-3" name="btn_update">Cập nhật</button>
            <a href="index.php" class="btn btn-outline-success bg-green-300" name="btn_insert">
                Thêm mới
            </a>
            <button type="reset" class="btn btn-outline-success bg-green-300 mx-3">Nhập lại</button>
            <a href="index.php?btn_list" class="btn btn-outline-success bg-green-300">Danh sách</a>
        </div>
    </div>
</form>