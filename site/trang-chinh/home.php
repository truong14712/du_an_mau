<div class="row" style="padding: 0 15px !important; ">
    <div id="myCarousel" class="carousel slide " data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators bg-gray-700 rounded-[8px]" style="opacity: 0.3;">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner  h-[400px]">
            <div class="item active " style="margin-left: 33%;">
                <img src="<?php echo $CONTENT_URL ?>/images/product/1006.jpg" class="">
            </div>
            <div class="item " style="margin-left: 33%;">
                <img src="<?php echo $CONTENT_URL ?>/images/product/1015.jpg" class="">
            </div>
            <div class="item" style="margin-left: 33%;">
                <img src="<?php echo $CONTENT_URL ?>/images/product/1061.jpg" class="">
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control " href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control " href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<br>
<h2 class="py-[8px] text-[24px] text-green-700 rounded-md text-center">Sản phẩm đặc biệt</h2>
<div class="row">
    <?php
    foreach ($items as $item) {
        extract($item);
    ?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail text-center rounded-lg">
                <a href="../hang-hoa/chi-tiet.php?ma_hh=<?= $item['ma_hh'] ?>">
                    <img src="<?= $hinh ?>" alt="" style="width: 300px; height: 300px;">
                </a>
                <div class="text-center">
                    <h3 class="text-[14px] leading-[24px] my-2"><?= number_format($don_gia, 0) ?>đ</h3>
                    <p class="text-[14px] leading-[24px]  my-2"><?= $ten_hh ?></p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>