<h3 class="text-[28px] py-[12px] text-green-700">Đăng nhập</h3>
<?php
if (strlen($MESSAGE)) {
    echo "<h5 class='py-[8px] my-[8px] text-[20px] text-red-500'>$MESSAGE</h5>";
}
?>
<form action="dang-nhap.php" method="post" id="Form">
    <div class="form-group">
        <label class="text-[16px] mb-[6px]">Tên đăng nhập</label>
        <input name="ma_kh" value="<?= $ma_kh ?>" class="form-control border-green-500">
    </div>
    <div class="form-group">
        <label class="text-[16px] mb-[6px]">Mật khẩu</label>
        <input name="mat_khau" type="password" value="<?= $mat_khau ?>" class="form-control border-green-500">
    </div>
    <div class="form-group my-[18px]">
        <div class="form-control text-[16px]  border-green-500">
            <label for="" class="checkbox-inline font-bold">
                <input type="checkbox" checked value="" class="" name="ghi_nho">Ghi nhớ tài khoản
            </label>
        </div>
    </div>
    <div class="form-group">
        <button name="btn_login" class="btn btn-default bg-green-300  p-[8px] ">Đăng nhập</button>
    </div>
</form>