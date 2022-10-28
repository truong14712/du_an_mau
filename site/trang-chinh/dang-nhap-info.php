<div class="panel panel-default nn-panel login">
    <div class="panel-heading text-center text-[16px]">Tài khoản</div>
    <div class="panel-body">
        <div class="text-center ">
            <img src='<?= $_SESSION['user']['hinh'] ?>' style="width: auto; " class="rounded-[4px]">
            <div class="text-[16px] my-[12px]"><?= $_SESSION['user']['ho_ten'] ?></div>
        </div>
        <ul class="px-[8px] ">
            <li class="my-[8px]"><a class="text-[15px] hover" href="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php?btn_logoff">Đăng xuất</a></li>
            <li class="my-[8px]"><a class="text-[15px] hover" href="<?= $SITE_URL ?>/tai-khoan/doi-mk.php">Đổi mật khẩu</a></li>
            <li class="my-[8px]"><a class="text-[15px] hover" href="<?= $SITE_URL ?>/tai-khoan/cap-nhat-tk.php">Cập nhật tài khoản</a></li>
            <?php
            if ($_SESSION['user']['vai_tro'] == true) {
                echo "<li class='my-[8px]'><a class='text-[15px] hover' href='$ADMIN_URL/trang-chinh'>Quản trị website</a></li>";
            }
            ?>
        </ul>

    </div>
</div>