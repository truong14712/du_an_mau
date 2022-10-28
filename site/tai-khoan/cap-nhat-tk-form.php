<h3 class="text-[28px] py-[12px] text-green-700">CẬP NHẬT TÀI KHOẢN</h3>
<?php
if (strlen($MESSAGE)) {
    echo "<h5 class='py-[8px] my-[8px] text-[20px] text-red-500'>$MESSAGE</h5>";
}

?>
<form action="cap-nhat-tk.php" method="post" enctype="multipart/form-data">
    <div>
        <div>
            <div class="form-group">
                <label class="text-[16px] mb-[6px]">Tên đăng nhập</label>
                <input name="ma_kh" value="<?= $ma_kh ?>" readonly class="form-control border-green-500">
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
                <input name="up_hinh" type="file">
            </div>
            <div class="form-group">
                <button name="btn_update" class="btn btn-default bg-green-300  px-[16px]  text-[16px] mb-[6px]">Cập nhật</button>
            </div>
            <!--Giá trị mặc định-->
            <input name="vai_tro" value="<?= $vai_tro ?>" type="hidden"> <input name="kich_hoat" value="<?= $kich_hoat ?>" type="hidden">
            <input name="mat_khau" value="<?= $mat_khau ?>" type="hidden">
            <input name="hinh" value="<?= $hinh ?>" type="hidden">
        </div>
    </div>
</form>