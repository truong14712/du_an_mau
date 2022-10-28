<h3 class="text-[28px] py-[12px] text-green-700">ĐỔI MẬT KHẨU</h3>
<?php
if (strlen($MESSAGE)) {
    echo "<h5 class='py-[8px] my-[8px] text-[20px] text-red-500'>$MESSAGE</h5>";
}
?>
<form action="doi-mk.php" method="post" id="Form">
    <div class="form-group">
        <label class="text-[16px] mb-[6px]">Tên đăng nhập</label>
        <input name="ma_kh" class="form-control border-green-500">
    </div>
    <div class="form-group">
        <label class="text-[16px] mb-[6px]">Mật khẩu cũ</label>
        <input name="mat_khau" type="password" class="form-control border-green-500">
    </div>
    <div class="form-group"><label class="text-[16px] mb-[6px]">Mật khẩu mới</label>
        <input name="mat_khau2" type="password" class="form-control border-green-500">
    </div>
    <div class="form-group">
        <label class="text-[16px] mb-[6px]">Xác nhận mật khẩu mới</label>
        <input name="mat_khau3" type="password" class="form-control border-green-500">
    </div>
    <div class="form-group">
        <button name="btn_change" class="btn btn-default bg-green-300  px-[16px]  text-[16px] mb-[6px]">Đổi mật khẩu</button>
    </div>
</form>