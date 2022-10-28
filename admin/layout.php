<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XShop</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .container {
            margin: 0px auto;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
</head>

<body>
    <div class="container" style="width: 1280px;">
        <h1 class="py-2 my-3 text-3xl text-center text-green-700 bg-green-200 rounded-md">Admin</h1>
        <?php require 'menu.php' ?>
        <div class="row">
            <?php include $VIEW_NAME; ?>
        </div>
        <footer class=" text-green-700 bg-green-200 flex items-center justify-center text-xl h-[40px] my-3"> Lê Minh
        Trường
        </footer>
    </div>
    <script src="<?php echo $CONTENT_URL ?>/js/list.js"></script>
    <script src="<?php echo $CONTENT_URL ?>/js/checkform_adm.js"></script>
</body>

</html>