<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
          <!-- Favicons -->
  <link href="<?php echo e(asset('landing_assets/img/fav.PNG')); ?>" rel="icon">
  <link href="<?php echo e(asset('landing_assets/img/apple-touch-icon.PNG')); ?>" rel="apple-touch-icon">

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="<?php echo e(asset('admin_assets/plugins/bootstrap/dist/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('admin_assets/plugins/fontawesome-free/css/all.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('admin_assets/plugins/ionicons/dist/css/ionicons.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('admin_assets/plugins/icon-kit/dist/css/iconkit.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('admin_assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('admin_assets/dist/css/theme.min.css')); ?>">
        <script src="<?php echo e(asset('admin_assets/src/js/vendor/modernizr-2.8.3.min.js')); ?>"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<!--Get your own code at fontawesome.com-->

        <?php echo $__env->yieldContent('css'); ?>
    </head>

    <body>
        
        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image: url(<?php echo e(asset('admin_assets/img/auth/login.jpg')); ?>)">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        
                        <?php echo $__env->yieldContent('content'); ?>

                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="../src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="<?php echo e(asset('admin_assets/plugins/popper.js/dist/umd/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin_assets/plugins/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin_assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin_assets/plugins/screenfull/dist/screenfull.js')); ?>"></script>
        <script src="<?php echo e(asset('admin_assets/dist/js/theme.js')); ?>"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        <?php echo $__env->yieldContent('js'); ?>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\COMPANY\HUMAN-RESOURCE\resources\views/admin/layout/auth.blade.php ENDPATH**/ ?>