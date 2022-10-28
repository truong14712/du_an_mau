<div class="panel panel-default nn-panel-login">
    <div class="panel-heading my-[8px] text-[16px] text-center">TÀI KHOẢN</div>
    <div class="panel-body">
        <form action="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php" method="post" id="Form">
            <div class="form-group">
                <label for="" class="text-[16px] mb-[8px]">Tên đăng nhập</label>
                <input type="text" value="" class="form-control border-green-500" name="ma_kh" placeholder="Nhập tên đăng nhập" value="<?= $ma_kh ?>">
            </div>
            <div class="form-group">
                <label for="" class="text-[16px] mb-[8px]">Mật khẩu</label>
                <input type="password" value="" class="form-control border-green-500" name="mat_khau" placeholder="Nhập mật khẩu" alue="<?= $mat_khau ?>">
            </div>
            <div class="form-group mt-[16px]">
                <div class="form-control text-[16px] mb-[8px] border-green-500">
                    <label for="" class="checkbox-inline font-bold">
                        <input type="checkbox" checked value="" class="" name="ghi_nho">Ghi nhớ tài khoản
                    </label>
                </div>
            </div>
            <div class="form-group">
                <button name="btn_login" class="btn btn-outline-success bg-green-300  text-[16px]">Đăng nhập</button>
            </div>
            <div class="form-group mt-[16px]">
                <button class="btn btn-outline-success bg-green-300  text-[16px]">
                    <a href="<?= $SITE_URL ?>/tai-khoan/quen-mk.php">Quên mật khẩu</a>
                </button>
                <button class="btn btn-outline-success bg-green-300 mt-[10px]  text-[16px]">
                    <a href="<?= $SITE_URL ?>/tai-khoan/dang-ky.php">Đăng ký thành viên</a>
                </button>
            </div>
        </form>
    </div>
</div>