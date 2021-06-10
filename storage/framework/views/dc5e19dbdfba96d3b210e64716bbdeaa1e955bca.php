<?php if($errors->any()): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <?php echo e(implode('', $errors->all(':message'))); ?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?><?php /**PATH C:\Users\emad\Desktop\final-final-project\resources\views/components/input-error.blade.php ENDPATH**/ ?>