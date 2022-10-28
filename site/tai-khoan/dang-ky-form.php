<h3 class="text-[28px] py-[12px] text-green-700">ĐĂNG KÝ THÀNH VIÊN</h3>
<?php
if (strlen($MESSAGE)) {
    echo "<h5 class='py-[8px] my-[8px] text-[20px] text-red-500'>$MESSAGE</h5>";
}
?>
<form action="dang-ky.php" method="post" enctype="multipart/form-data" id="Form">
    <div class="form-group">
        <label class="text-[16px] mb-[6px]">Tên đăng nhập</label>
        <input name="ma_kh" value="<?= $ma_kh ?>" class="form-control border-green-500">
    </div>
    <div class="form-group">
        <label class="text-[16px] mb-[6px]">Mật khẩu</label>
        <input name="mat_khau" type="password" value="<?= $mat_khau ?>" class="form-control border-green-500">
    </div>
    <div class="form-group">
        <label class="text-[16px] mb-[6px]">Xác nhận mật khẩu</label>
        <input name="mat_khau2" type="password" value="<?= $mat_khau2 ?>" class="form-control border-green-500">
    </div>
    <div class="form-group">
        <label class="text-[16px] mb-[6px]">Họ và tên</label>
        <input name="ho_ten" value="<?= $ho_ten ?>" class="form-control border-green-500">
    </div>
    <div class="form-group">
        <label class="text-[16px] mb-[6px]">Địa chỉ email</label>
        <input name="email" value="<?= $email ?>" class="form-control border-green-500">
    </div>
    <div class="form-group">
        <label class="text-[16px] mb-[6px]">Ảnh</label>
        <input name="up_hinh" type="file" class="">
    </div>
    <div class="mt-[20px]">
        <button name="btn_register" class="btn btn-default bg-green-300  px-[16px]  text-[16px] mb-[6px]">Đăng ký</button>
    </div>
    <!--Giá trị mặc định-->
    <input name="vai_tro" value="0" type="hidden">
    <input name="kich_hoat" value="0" type="hidden">
    <input name="hinh" value="<?= $hinh ?> type=" hidden>
</form>