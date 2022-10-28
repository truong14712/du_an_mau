<h3 class="text-[28px] py-[12px] text-green-700">Quên mật khẩu</h3>
<?php
if (strlen($MESSAGE)) {
    echo "<h5 class='py-[8px] my-[8px] text-[20px] text-red-500'>$MESSAGE</h5>";
}
?>
<form action="quen-mk.php" method="post" id="Form">
    <div class="form-group">
        <label class="text-[16px] mb-[6px]">Tên đăng nhập</label>
        <input name="ma_kh" class="form-control border-green-500">
    </div>
    <div class="form-group">
        <label class="text-[16px] mb-[6px]">Địa chỉ email</label>
        <input name="email" class="form-control border-green-500">
    </div>
    <div>
        <button name="btn_forgot" class="btn btn-default bg-green-300 p-[8px] text-[16px]">Tìm lại mật khẩu</button>
    </div>
</form>