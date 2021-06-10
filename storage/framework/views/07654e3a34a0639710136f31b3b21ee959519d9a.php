<div class="might-like-section">
  <div class="container">
      <h3>You might also like...</h3>
      <div class="card h-100">
        <div class="card-body">
            <div class="row h-100"> 
                <?php $__currentLoopData = $mightAlsoLike; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6 col-md-2 col-6">
                    <a href="<?php echo e($product->path()); ?>">
                        <div class="card shadow-hover">
                            <img src="<?php echo e(asset($product->productImage->first()->original)); ?>" alt="product" class="card-img-top">
                            <div class="card-body">
                                <p><?php echo e($product->title); ?></p>
                                <?php if($product->onSale): ?>
                                <small class="line-through">Rs.<?php echo e(number_format($product->price)); ?></small>
                                <p class="text-orange font-weight-bold my-0 py-0">Rs.<?php echo e(number_format($product->sale_price)); ?></p>
                                <?php else: ?>
                                <p class="text-orange font-weight-bold my-0 py-0">Rs.<?php echo e(number_format($product->price)); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
      </div>
  
  </div>
</div>
<?php /**PATH C:\Users\emad\Desktop\final-final-project\resources\views/inc/app/might-like.blade.php ENDPATH**/ ?>