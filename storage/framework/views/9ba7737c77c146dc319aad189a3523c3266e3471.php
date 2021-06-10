

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <h1 class="h5 mb-0 text-gray-800">Product Image Management</h1>
  <p>Drop images to this dropzone. Multiple images supported.</p>
  <a href="<?php echo e(route('product.index')); ?>" class="btn btn-primary">Go back</a>

  <div class="card shadow my-4">
    <div class="card-header">
      <p class="h5"><span class="text-primary"><?php echo e($product->title); ?> ($<?php echo e($product->price); ?>)</span></p>
    </div>
    <div class="card-body">
      <image-upload product-id="<?php echo e($product->id); ?>"></image-upload>
    </div>
  </div>
 
  

 

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script>
  $(document).ready(function(){
    $('#deleteImageBtns').click(function(e){
      e.preventDefault();
      
      if(confirm('Are you sure to delete this image?')){
        $('#deleteImageForm').submit();
      }
    });
  })
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\emad\Desktop\final-final-project\resources\views/admin/product/show.blade.php ENDPATH**/ ?>