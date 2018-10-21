<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $__env->yieldContent('page-title'); ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo e(asset("img/favicon.ico")); ?>"/>
    <!--===============================================================================================-->
    <?php echo $__env->yieldContent('css'); ?>
    <!--===============================================================================================-->
</head>
<body class="animsition style4">
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId            : '2201991643414017',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v3.1'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Header -->
<header class="header1">
    <?php echo $__env->make('user.flower.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header>

<!--Content-->
<?php $__env->startSection('content'); ?>
<?php echo $__env->yieldSection(); ?>

<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <?php echo $__env->make('user.flower.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</footer>


<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </span>
</div>

<?php echo $__env->yieldContent('selection'); ?>

<?php echo $__env->yieldContent('javascript'); ?>

</body>
</html>
