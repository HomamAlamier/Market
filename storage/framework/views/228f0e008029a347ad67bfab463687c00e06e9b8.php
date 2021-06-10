<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name')?? 'Admin'); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">    
    <link href="<?php echo e(asset('css/admin.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/lib/dataTables.bootstrap4.min.css')); ?>">
    <style>
        .content-container{
            min-height:80vh;
        }
    </style>
    <?php echo $__env->yieldPushContent('css'); ?>
    
</head>
<body>
    <div id="app">
        <div id="wrapper">
            <?php echo $__env->make('inc.admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

             <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <?php echo $__env->make('inc.admin.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="content-container">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>

                    <?php echo $__env->make('inc.admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
      
        <?php echo $__env->make('inc.logout-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/lib/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/admin.js')); ?>"></script>
    
    <script src="<?php echo e(asset('js/lib/jquery.dataTables.min.js')); ?>"></script>

    <script src="<?php echo e(asset('js/lib/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/lib/Chart.min.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('js'); ?>
</body>
</html>
<?php /**PATH C:\Users\emad\Desktop\final-final-project\resources\views/layouts/admin.blade.php ENDPATH**/ ?>