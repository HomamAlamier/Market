

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="m-0  text-primary">Update Product</h5>
      <a href="<?php echo e(route('product.index')); ?>" class="btn btn-primary">Go back</a>
    </div>
  </div>

   <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input-error','data' => []]); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
        
  <form action="<?php echo e(route('product.update',$product)); ?>" method="POST">
    <?php echo csrf_field(); ?> <?php echo method_field('PATCH'); ?>
    <div class="card ">
      <div class="card-body">
        <div class="form-group">
          <label for="">Product title </label>
          <small class="text-primary d-block mb-3">Slug will be auto generated!</small>
          <input type="text" name="title" value="<?php echo e($product->title); ?>" placeholder="Product title" class="form-control" required> 
        </div>

        
        <category-selector :categories="<?php echo e($categories); ?>" :selected_id="<?php echo e($product->subCategory_id); ?>"></category-selector>

        <div class="form-group">
          <label for="">Product Price </label>
          <input type="text" name="price" value="<?php echo e($product->price); ?>" placeholder="Product price" class="form-control w-50" required> 
        </div>

        <div class="form-group">
          <label for="">Discount</label>
          <small class="text-primary d-block mb-3">Discount will be automatically shown. leave empty for no disount!</small>
          <input type="text" name="discount" value="<?php echo e($product->discount); ?>" placeholder="Discount" class="form-control w-50" > 
        </div>

        <div class="form-group">
          <label for="description" class="col-form-label">Description</label>
          <textarea class="form-control" id="description" name="description"><?php echo e($product->description); ?></textarea>
          <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="text-danger"><?php echo e($message); ?></span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
      </div>
    </div>

    <br>
    
    <div class="card">
      <div class="card-body">

        
        <attribute-selector :attributes='<?php echo e($product->attributes); ?>'></attribute-selector>

      </div>
    </div>

    <br>
  
    <div class="card">
      <div class="card-body">

        <div class="form-group mt-4">
          <label class="small" for="">Brand</label>
          <input type="text" placeholder="-" list="brandsScheme" class="form-control <?php $__errorArgs = ['brand'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="brand" value="<?php echo e($product->brand??''); ?>">
          <datalist id="brandsScheme">
            <option value="No Brand">
            <option value="Apple">
            <option value="Samsung">
            <option value="Hp">
            <option value="Dell">
            <option value="Lenovo">
          </datalist>
        </div>

        <div class="form-group mt-4">
          <label class="small" for="">Warranty</label>
          <input type="text" placeholder="-" list="warrantyScheme" class="form-control <?php $__errorArgs = ['warranty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="warranty" value="<?php echo e($product->warranty??''); ?>">
          <datalist id="warrantyScheme">
            <option value="No warranty">
            <option value="3 months">
            <option value="6 months">
            <option value="1 year">
            <option value="2 years">
            <option value="3 years">
            <option value="5 years">
          </datalist>
        </div>
        
        <div class="form-group mt-4">
          <label for="status" class="col-form-label">Status </label>
          <select name="status" class="form-control" value="<?php echo e($product->status); ?>">
              <option value="1">Active</option>
              <option value="0">Inactive</option>
          </select>
          <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="text-danger"><?php echo e($message); ?></span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="alert alert-primary">
          Product Images can be added in the product manage page.
        </div>

        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-primary my-3">Update</button>
        </div>

      </div>
    </div>
    
  </form>

  <div class="card-footer">
    <form action="<?php echo e(route('product.destroy',$product)); ?>" method="POST" class="float-right">
      <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
      <button type="button" class="dltBtn btn btn-danger my-3">Delete product</button>
    </form>

  </div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('backend/summernote/summernote-bs4.min.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('backend/summernote/summernote-bs4.min.js')); ?>"></script>

<script>
  $(document).ready(function(){
    $('#description').summernote({
        placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $('.dltBtn').click(function(e){
      var form=$(this).closest('form');
        var dataID=$(this).data('id');
        // alert(dataID);
        e.preventDefault();
        swal({
              title: "Are you sure?",
              text: "Once deleted, you will not be able to recover this data!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
              if (willDelete) {
                  form.submit();
              } else {
                  swal("Your data is safe!");
              }
          });
      })
  });  
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\emad\Desktop\final-final-project\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>