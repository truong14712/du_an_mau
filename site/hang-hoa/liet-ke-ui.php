<body>
    <div class="row">
        <?php
        foreach ($items as $item) {
            extract($item);
        ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail text-center rounded-lg">
                    <a href="../hang-hoa/chi-tiet.php?ma_hh=<?= $item['ma_hh'] ?>">
                        <img src="<?= $hinh ?>" alt="" style="width:300px; height: 300px; ">
                    </a>
                    <div class="text-left">
                        <h3 class="text-[14px] leading-[24px] my-2 "><?= number_format($don_gia, 0) ?>đ</h3>
                        <p class="text-[14px] leading-[24px]  my-2"><?= $ten_hh ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>