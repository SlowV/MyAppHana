<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('page-title'); ?></title>
    <link rel="icon" type="image/png" href="<?php echo e(asset("img/favicon.ico")); ?>">
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet"/>

    
    <link href="<?php echo e(asset('css/animate.min.css')); ?>" rel="stylesheet"/>

    
    <link href=" <?php echo e(asset('css/light-bootstrap-dashboard.css?v=1.4.0')); ?>" rel="stylesheet"/>

    
    <link href=" <?php echo e(asset('css/demo.css')); ?>" rel="stylesheet"/>
    
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="<?php echo e(asset('css/pe-icon-7-stroke.css')); ?>" rel="stylesheet"/>

    
    <link rel="stylesheet" href="<?php echo e(asset('css/login-register.css')); ?>">
</head>
<body>
<div class="container-fluid">
    <div class="content">
        <?php $__env->startSection('content'); ?>
        <?php echo $__env->yieldSection(); ?>
    </div>
</div>


<script src="<?php echo e(asset("js/jquery.3.2.1.min.js")); ?>" type="text/javascript"></script>

<script src="<?php echo e(asset("js/bootstrap.min.js")); ?>" type="text/javascript"></script>


<script src="<?php echo e(asset("js/chartist.min.js")); ?>"></script>


<script src="<?php echo e(asset("js/bootstrap-notify.js")); ?>"></script>


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>


<script src="<?php echo e(asset("js/light-bootstrap-dashboard.js?v=1.4.0")); ?>"></script>


<script src="<?php echo e(asset("js/demo.js")); ?>"></script>


<script src="<?php echo e(asset("js/login-register.js")); ?>"></script>
</body>
</html>