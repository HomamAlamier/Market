<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    
    <title><?php echo $__env->yieldContent('page-title'); ?></title>

    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('logo.png')); ?>" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">    
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldPushContent('css'); ?>
    <style>
        .categories-section{
            display: none;
        }
    </style>
</head>
<body>
    <div class="loader-svg" id="loaderSvg">
        <img src="<?php echo e(asset('images/loading/loading.svg')); ?>" alt="">
    </div>

    <div id="app">
        <?php echo $__env->make('inc.app.navigation-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('inc.app.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    
     
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/shop.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('js'); ?>
</body>
</html>
<?php /**PATH C:\Users\emad\Desktop\final-final-project\resources\views/layouts/app.blade.php ENDPATH**/ ?>