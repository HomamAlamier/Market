

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <h5 class="font-weight-light text-center">Sign in to your account </h5>
   
    <div>
       <form action="<?php echo e(route('login')); ?>" method="POST">
        <?php echo csrf_field(); ?>
          <div class="row no-gutters">
             <div class="col-md-4 mx-auto col-sm-12">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                    <?php echo e(implode('', $errors->all(':message'))); ?>

                    </div>
                <?php endif; ?>
                 <div class="card shadow">
                     <div class="card-body">
                        <div class="form-group">
                            <label class="small" for="">Email Address*</label>
                            <input type="email" placeholder="E-mail address" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label class="small" for="">Password*</label>
                            <input type="password" name="password" value="<?php echo e(old('password')); ?>" placeholder="Password Minimum 8 characters"
                             class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required >
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
        
                        <button type="submit" class="btn btn-orange btn-block ">Login</button>
        
                        <div class=" my-2"><span>Don't have a account? <a href="<?php echo e(route('register')); ?>">Create</a> here.</span></div>
        
                        <p class="text-center">or</p>
        
                        <div class="my-4">
                            <a href="#loginUsingFacebook" class="btn  btn-block btn-facebook">Facebook</a>
                            <a href="#loginUsingGoogle" class="btn  btn-block btn-google">Google</a>
                        </div>
                     </div>
                 </div>
   
             </div>
          </div>
       </form>
    </div>
 </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('css'); ?>
<style>

</style>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\emad\Desktop\final-final-project\resources\views/auth/login.blade.php ENDPATH**/ ?>