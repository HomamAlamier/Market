

<?php $__env->startSection('page-title', 'Search catalog'); ?>

<?php $__env->startSection('content'); ?>

<div class="container pt-5">
  <div class="row">
    <div class="col-md-8 order-md-2 col-lg-9">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="text-md-left text-center float-md-left mb-3 mt-3 mt-md-0 mb-md-0">
              <?php if(request()->get('q')): ?>
              <h4>Showing results for "<?php echo e(request()->get('q')); ?>"</h4>
              <?php endif; ?>
            </div>
            
           
          </div>
        </div>
        <div class="row">
          <?php if($products->count()): ?>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6 col-sm-4 col-md-3 p-2">
              <a href="<?php echo e($product->path()); ?>">
              <div class="card shadow-hover h-100" >
                <img src="<?php echo e($product->productImage->first()->original); ?>" class="card-img-top" alt="">
                <div class="card-body ">
                  <p class="text-dark"><?php echo e($product->title); ?></p>
                  <?php if($product->onSale): ?>
                    <small class="line-through text-dark"><?php echo e($product->price); ?></small>
                    <p class="text-orange py-0 my-0 h5">Rs.<?php echo e(number_format($product->sale_price)); ?></p>
                  <?php else: ?>
                    <p class="text-orange py-0 my-0 h5">Rs.<?php echo e(number_format($product->price)); ?></p>
                  <?php endif; ?>
                </div>
                  <button class="btn btn-orange btn-block">Add to cart</button>
              </div>
              </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php else: ?>
          <div class="row">
            <div class="col-sm-8 col-md-6 col-6 mx-auto">
              <div class="text-center">
                <h4>Search No Result.</h4>
                <p>We're sorry. We cannot find any matches for your search term.</p>
                <img src="<?php echo e(asset('images/demo/empty.svg')); ?>" class="w-100" alt="">
              </div>
            </div>
          </div>
          <?php endif; ?>
          
        </div>
        <div class="row sorting my-5">
          <div class="col-12">
            <div class="btn-group float-md-right ml-3">
              <?php echo e($products->links()); ?>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 order-md-1 col-lg-3 sidebar-filter">
      
      <h6 class="text-uppercase font-weight-bold mb-3">Categories</h6>
      <form action="<?php echo e(route('shop.catalog')); ?>">
      <?php echo csrf_field(); ?>
      <div class="my-2 pl-2">
        <?php $__currentLoopData = $productCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="custom-control custom-checkbox my-1">
          <input type="checkbox" class="custom-control-input" id="<?php echo e($category->subCategory_name); ?>" name="filter[subCategory]" value="<?php echo e($category->subCategory_name); ?>">
          <label class="custom-control-label" for="<?php echo e($category->subCategory_name); ?>"><?php echo e($category->subCategory_name); ?></label>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      
      <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
      <h6 class="text-uppercase mt-5 mb-3 font-weight-bold">Price</h6>
      <div class="d-flex align-items-center">
        Min: <input type="number" class="form-control w-100 ml-2" value="" name="filter[min_price]" >
      </div>
      <div class="d-flex align-items-center">
        Max: <input type="number" class="form-control w-100 ml-2" value="" name="filter[max_price]" >
      </div>
      <button type="submit" class="btn btn-sm btn-block btn-primary mt-5">Update Results</button>
      </form>
    </div>

  </div>
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\emad\Desktop\final-final-project\resources\views/shop/catalog.blade.php ENDPATH**/ ?>