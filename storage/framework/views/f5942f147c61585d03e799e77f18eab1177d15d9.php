<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo e(asset("img/favicon.ico")); ?>">
    <title>Hana Store</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:200" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


    <!-- Styles -->
    <style>
        *{
            padding: 0;
            margin: 0;
        }

        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            height: 100vh;
            margin: 0;
            background: url('<?php echo e(asset('img/bg-content.jpg')); ?>') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            position: relative;
            overflow: hidden;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: right;
            position: fixed;
        }

        .title {
            font-size: 84px;
            z-index: auto;
            color: #000;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin:0 0 30px 550px;
        }

    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <?php if(Route::has('login')): ?>
        <div class="top-right links">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/admin/product')); ?>">Trang chủ</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" >Đăng nhập</a>
                <a href="<?php echo e(route('register')); ?>">Đăng ký</a>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="content">
        <div class="title m-b-md">
            <?php if(auth()->guard()->check()): ?>
                Welcome <?php echo e(Auth::user()->name); ?>

            <?php else: ?>
                Hana Store
            <?php endif; ?>
        </div>
    </div>

</div>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src="<?php echo e(asset('js/welcome.js')); ?>"></script>
</html>
