<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XShop</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

        body {
            font-family: 'Roboto', sans-serif !important;
        }
    </style>
    <style>
        .container {
            margin: 0px auto;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        a:focus,
        a:hover {
            color: #fff;
            text-decoration: none;
        }

        .btn:first-child:hover,
        :not(.btn-check)+.btn:hover {
            color: #fff;
            background-color: #198754;
            border-color: #198754;
        }

        .hover:hover {
            color: #0a58ca;
            text-decoration: none;
        }

        .carousel-control {
            width: 12%;
        }
    </style>
</head>

<body>
    <div class="container" style="width: 1280px;">
        <header class="row">
            <h1 class="py-[8px] my-[12px] text-[30px] text-center text-green-700 bg-green-200 rounded-md">Siêu thị trực tuyến</h1>
        </header>
        <nav class="row">
            <?php require "trang-chinh/menu.php" ?>
        </nav>
        <div class="row">
            <article class="col-sm-9">
                <?php require $VIEW_NAME; ?>
            </article>
            <aside class="col-sm-3">
                <?php require "trang-chinh/dang-nhap.php" ?>
                <?php require "trang-chinh/danh-muc.php" ?>
                <?php require "trang-chinh/top10.php" ?>
            </aside>
        </div>
        <footer class="row text-green-700 bg-green-200 flex items-center justify-center text-[20px] h-[40px] my-[12px] "> Lê Minh Trường
        </footer>
    </div>
    <script src="<?php echo $CONTENT_URL ?>/js/checkform_site.js"></script>
    <script src="<?php echo $CONTENT_URL ?>/js/slideshow"></script>
</body>

</html>