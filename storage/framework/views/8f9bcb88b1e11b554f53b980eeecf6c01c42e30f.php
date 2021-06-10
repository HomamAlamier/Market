

<?php $__env->startSection('page-title','User Account'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid py-3" style="min-height: 80vh">
  <div class="row no-gutters">

    <div class="col-xl-2 col-md-2 col-sm-12 ml-auto">
      <?php echo $__env->make('inc.app.user-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="col-xl-8 col-md-8 col-sm-12 mr-auto">
      <div class="card shadow">
        <div class="card-header bg-light border-bottom">
          <p class="mb-0 ">My Orders</p>
        </div>

        <div class="card-body" style="min-height: 40vh">
             
          <div class="table-responsive">
            <table class="table table-hover table-striped">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Order number</th>
                  <th>Quantity</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if($orders->count()): ?>
                  <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><img src="<?php echo e(asset($order->product->productImage->first()->thumbnail)); ?>" width="50px" alt=""></td>
                    <td><a href="<?php echo e($order->product->path()); ?>"><?php echo e($order->product->title); ?></a></td>
                      <td><?php echo e($order->order_number); ?></td>
                      <td><?php echo e($order->quantity); ?></td>
                      <td><span class="badge badge-info"><?php echo e($order->status); ?></span></td>
                      <td>
                        <form action="<?php echo e(route('myOrder.destroy',['id'=>$order])); ?>" method="POST">
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('delete'); ?>
                          <button type="submit" class="btn btn-danger btn-sm">Cancel</a>
                        </form>
                      </td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <tr>
                  <td>You haven't placed any order </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <a href="<?php echo e(route('shop.catalog')); ?>" class="btn btn-orange btn-sm">Find products for your match</a>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
          <div class="d-flex justify-content-center">
            <?php echo e($orders->links()); ?>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\emad\Desktop\final-final-project\resources\views/my-order/index.blade.php ENDPATH**/ ?>