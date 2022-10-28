<div class="panel panel-default">
    <div class="panel-heading">BÌNH LUẬN</div>
    <div class="panel-body">
        <ul class="">
            <ul class="flex justify-between text-[16px] justify-items-center">
                <li class="my-[8px]">Tên bình luận</li>
                <li><span class="mr-[80px]">Người bình luận</span><span>Thời gian</span></li>
            </ul>
            <?php
            require '../../dao/binh-luan.php';
            if (exist_param("noi_dung")) {
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $ma_kh = $_SESSION['user']['ma_kh'];
                $ngay_bl = date_format(date_create(), 'Y-m-d H:i:s');
                binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl);
            }
            $binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh);
            foreach ($binh_luan_list as $bl) {
                echo "<li class='my-[2px]'>$bl[noi_dung] <i class='pull-right '><b class='mr-[16px]'>$bl[ma_kh]</b> $bl[ngay_bl]</i></li>";
            }
            ?>
        </ul>

    </div>
    <div class="panel-footer">
        <?php
        if (!isset($_SESSION['user'])) {
            echo '<b class="text-danger">Đăng nhập để bình luận về sản phẩm này</b>';
        } else {
        ?>
            <form action="<?= $_SERVER["REQUEST_URI"] ?>" method="post">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-10">
                            <input name="noi_dung" class="form-control" />
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-default" style="width: 100%">Gửi</button>
                        </div>
                    </div>
                </div>
            </form>
        <?php } ?>
    </div>
</div>