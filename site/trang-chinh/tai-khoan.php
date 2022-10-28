<div class="panel panel-default nn-panel-login">
    <div class="panel-heading my-[8px] text-[16px] ">Tài khoản</div>
    <div class="panel-body">
        <form action="tai-khoan/dang-nhap.php" method="post">
            <div class="form-group">
                <label for="">Tên đăng nhập</label>
                <input type="text" value="" class="form-control" name="ma_kh" placeholder="Nhập tên đăng nhập">
            </div>
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="text" value="" class="form-control" name="mat_khau" placeholder="Nhập mật khẩu">
            </div>
            <div class="form-group">
                <div class="form-control">
                    <label for="" class="checkbox-inline">
                        <input type="checkbox" checked value="" class="" name="ghi_nho">Ghi nhớ tài khoản
                    </label>
                </div>
            </div>
            <div class="form-group">
                <button name="btn_login" class="btn btn-default">Đăng nhập</button>
            </div>
            <div class="form-group mt-[16px]">
                <button class="btn btn-default">
                    <a href="tai-khoan/quen-mk.php">Quên mật khẩu</a>
                </button>
                <button class="btn btn-default mt-[12px]">
                    <a href="tai-khoan/dang-ky.php">Đăng ký thành viên</a>
                </button>
            </div>
        </form>
    </div>
</div>