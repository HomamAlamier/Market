

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Product Management</h6>
      <a href="<?php echo e(route('product.create')); ?>" class="btn btn-sm float-right btn-primary">Add a Product</a>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover table-bordered small" id="dataTable">
          <thead>
            <tr>
              <th>Id</th>
              <th>Title</th>
              <th>Price</th>
              <th>Discount</th>
              <th>Code</th>
              <th>Status</th>
              <th>Created at</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($product->id); ?></td>
              <td><?php echo e($product->title); ?></td>
              <td><?php echo e($product->price); ?></td>
              <td><?php echo e($product->discount); ?></td>
              <td><?php echo e($product->product_code); ?></td>
              <td> <span class="badge p-2 <?php echo e($product->status ?'badge-primary':'badge-secondary'); ?>"><?php echo e($product->status); ?></span> </td>
              <td><?php echo e($product->updated_at); ?></td>
              <td>
                <a href="<?php echo e(route('productImage.show',['id'=>$product->id])); ?>" class="btn btn-info btn-sm float-left mr-1" title="images"><i class="fas fa-camera"></i></a>
                <a href="<?php echo e(route('product.edit',$product->id)); ?>" class="btn btn-primary btn-sm float-left mr-1" title="edit"><i class="fas fa-edit"></i></a>
                <form method="POST" action="<?php echo e(route('product.destroy',[$product->id])); ?>">
                  <?php echo csrf_field(); ?> 
                  <?php echo method_field('delete'); ?>
                      <button class="btn btn-danger btn-sm dltBtn" data-id=<?php echo e($product->id); ?>  title="Delete"><i class="fas fa-trash-alt"></i></button>
                </form>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
        <span style="float:right"><?php echo e($products->links()); ?></span>

        <?php echo $__env->make('admin.admin-inc.datatable-delete-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
    </div>
  </div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<style>
  div.dataTables_wrapper div.dataTables_paginate{
      display: none;
  }
</style>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
<script>
  $(document).ready(function(){
    $('#dataTable').DataTable();
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //Sweet alert deleting modal
    $(".dltBtn").click(function(e) {
        var form = $(this).closest("form");
        var dataID = $(this).data("id");
        // alert(dataID);
        e.preventDefault();
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this data!",
            icon: "warning",
            buttons: true,
            dangerMode: true
        }).then(willDelete => {
            if (willDelete) {
                form.submit();
            } else {
                swal("Your data is safe!");
            }
        });
    });
  })
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\emad\Desktop\final-final-project\resources\views/admin/product/index.blade.php ENDPATH**/ ?>