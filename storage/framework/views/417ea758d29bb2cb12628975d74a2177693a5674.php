<ul class="list-group">
  <li class="list-group-item bg-light">
    Hello, <?php echo e(auth()->user()->name); ?>

  </li>
  <li class="list-group-item-action list-group-item">
    <a href="<?php echo e(route('user.index')); ?>" >
      <i class="fas fa-user-circle text-primary"></i> My Account 
    </a>
  </li>
  <li class="list-group-item-action list-group-item">
    <a href="<?php echo e(route('cart.index')); ?>">
      <i class="fas fa-shopping-cart text-primary"></i> Cart
    </a>
  </li>
  <li class="list-group-item-action list-group-item">
    <a href="<?php echo e(route('myOrder.index')); ?>">
      <i class="fas fa-cart-plus text-primary"></i> Orders
    </a>
  </li>
  <li class="list-group-item-action list-group-item">
    <a href="<?php echo e(route('myCancellation.index')); ?>">
      <i class="fas fa-window-close text-primary"></i> Cancellations
    </a>
  </li>
  <li class="list-group-item-action list-group-item">
    <a href="<?php echo e(route('customerQuestion.index')); ?>">
      <i class="fas fa-align-left text-primary"></i> My queries
    </a>
  </li>
  <li class="list-group-item-action list-group-item">
    <a href="<?php echo e(route('account.logout')); ?>">
      <i class="fas fa-sign-out-alt text-primary"></i> Logout
    </a>
  </li>
</ul><?php /**PATH C:\Users\emad\Desktop\final-final-project\resources\views/inc/app/user-sidebar.blade.php ENDPATH**/ ?>