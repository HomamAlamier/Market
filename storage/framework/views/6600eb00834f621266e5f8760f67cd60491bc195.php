

<?php $__env->startSection('page-title', 'Buy products online with great discount'); ?>

<?php $__env->startSection('content'); ?>
  
  
  
  
  

  
  <section class="categories-section container my-4 h-100">
    <h3>Categories</h3>
      <div class="row h-100">
        
        <div class="col-4 col-sm-4 col-md-2 p-2">
          <a href="<?php echo e('catalog?filter[subCategory]=Mobile'); ?>">
            <div class="card shadow-hover">
              <div class="card-body">
                <img src="<?php echo e(asset('images/demo/electronics.jpg')); ?>" class="img-fluid" alt="">
                <p class="card-title text-center">Electronics</p>
              </div>
            </div>
          </a>
        </div>
        
        <div class="col-4 col-sm-4 col-md-2 p-2">
          <a href="<?php echo e('catalog?filter[subCategory]=Furniture'); ?>">
            <div class="card shadow-hover">
              <div class="card-body">
                <img src="<?php echo e(asset('images/demo/home.jpg')); ?>" class="img-fluid" alt="">
                <p class="card-title text-center">Home Lifestyle</p>
              </div>
            </div>
          </a>
        </div>
        
        <div class="col-4 col-sm-4 col-md-2 p-2">
          <a href="<?php echo e('catalog?filter[subCategory]=Diapers'); ?>">
            <div class="card shadow-hover">
              <div class="card-body">
                <img src="<?php echo e(asset('images/demo/baby.jpg')); ?>" class="img-fluid" alt="">
                <p class="card-title text-center">Baby</p>
              </div>
            </div>
          </a>
        </div>
        
        <div class="col-4 col-sm-4 col-md-2 p-2">
          <a href="<?php echo e('catalog?filter[subCategory]=Mens'); ?>">
            <div class="card shadow-hover">
              <div class="card-body">
                <img src="<?php echo e(asset('images/demo/sport.jpg')); ?>" class="img-fluid" alt="">
                <p class="card-title text-center">Sport & outdoor</p>
              </div>
            </div>
          </a>
        </div>
        
        <div class="col-4 col-sm-4 col-md-2 p-2">
          <a href="<?php echo e('catalog?filter[subCategory]=Kitchen'); ?>">
            <div class="card shadow-hover">
              <div class="card-body">
                <img src="<?php echo e(asset('images/demo/kitchen.jpg')); ?>" class="img-fluid" alt="">
                <p class="card-title text-center">Kitchen</p>
              </div>
            </div>
          </a>
        </div>
        
        <div class="col-4 col-sm-4 col-md-2 p-2">
          <a href="<?php echo e('catalog?filter[subCategory]=Pet'); ?>">
            <div class="card shadow-hover">
              <div class="card-body">
                <img src="<?php echo e(asset('images/demo/pet.jpg')); ?>" class="img-fluid" alt="">
                <p class="card-title text-center">Pets</p>
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  
  <section class="just-for-you-section container h-100 my-4">
    <h3>Just For You</h3>
    <div class="row h-100">
      <?php $__currentLoopData = $newProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-6 col-sm-4 col-md-2 p-2">
        <a href="<?php echo e($product->path()); ?>">
        <div class="card shadow-hover h-100" >
          <img src="<?php echo e(asset($product->productImage->first()->original)); ?>" class="card-img-top" alt="">
          <div class="card-body ">
            <p class="product-title"><?php echo e(substr($product->title,0,35)); ?>..</p>
            <p class="product-price">Rs.<?php echo e(number_format($product->price)); ?></p>
          </div>
        </div>
        </a>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
    </div>
  
    <div class="d-flex justify-content-center mt-5">
      <div class="text-center">
        <h2>Didn't Find Your Match</h2>
        <a href="<?php echo e(route('shop.catalog')); ?>" class="btn btn-orange">Search for It</a>
      </div>
    </div>
  </section>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\emad\Desktop\final-final-project\resources\views/shop/index.blade.php ENDPATH**/ ?>