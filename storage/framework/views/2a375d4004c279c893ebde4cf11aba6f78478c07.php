
<?php $__env->startSection('content'); ?>
<div class="mt-5">
  <div class="bg-light server-error-page">
    <div class="container-fluid">

      <!-- 404 Error Text -->
      <div class="text-center">
        <div class="error mx-auto" data-text="404">404</div>
        <p class="lead text-gray-800 mb-5">Page Not Found</p>
        <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
        <a href="<?php echo e(route('home.index')); ?>">&larr; Back to Home</a>
      </div>
    
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<style>
.server-error-page{
  min-height:50vh;
}
</style>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\emad\Desktop\final-final-project\resources\views/errors/404.blade.php ENDPATH**/ ?>