

<?php $__env->startSection('page-title','My Cart'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid py-3" style="min-height: 80vh">
  <div class="row no-gutters">

    <div class="col-xl-2 col-md-2 col-sm-12 ml-auto">
      <?php echo $__env->make('inc.app.user-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="col-xl-8 col-md-8 col-sm-12 mr-auto">
      
      <my-cart></my-cart>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\emad\Desktop\final-final-project\resources\views/user/my-cart.blade.php ENDPATH**/ ?>