<?php if(auth()->guard()->guest()): ?>
<section class="top-banner bg-light my-0 py-2">
  <div class="container-fluid">
      <ul class="top-banner-list small">
        <li>
          <a href="call:4222022">Call us:+4222022</a>
        </li>
        <li>
          <a href="<?php echo e(route('register')); ?>">Sign up</a>
        </li>
        <li>
          <a href="<?php echo e(route('login')); ?>">Login</a>
        </li>
        <li class="active">
          <a href="<?php echo e(route('myOrder.index')); ?>">Track my order</a>
        </li>
      </ul>
  </div>
</section>
<?php endif; ?>

<header class="section-header sticky-top my-0 py-0">
  <section class="header-main border-bottom">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-3 col-sm-6 col-md-3 col-5"> 
                <a href="<?php echo e(route('shop.index')); ?>" class="brand-wrap" data-abc="true">
                      
                      <span class="logo">Mart</span> 
                </a> </div>
              <div class="col-lg-6 col-sm-8 col-md-6  col-xl-5  d-none d-md-block">
                  <form action="<?php echo e(route('shop.catalog')); ?>" class="search-wrap">
                    <?php echo csrf_field(); ?>
                      <div class="input-group w-100"> 
                      <input type="text" class="form-control search-form" name="filter[title]" placeholder="Search">
                          <div class="input-group-append"> 
                            <button type="submit" class="btn btn-primary search-button"> <i class="fa fa-search"></i> 
                            </button> 
                          </div>
                      </div>
                  </form>
              </div>
              <div class="col-lg-3 col-sm-6 col-md-3 col-xl-4 col-7">
                  <div class="d-flex justify-content-end">
                    <a class="nav-link nav-user-img text-white" href="<?php echo e(route('cart.index')); ?>"> <i class="fas fa-shopping-cart"></i></a>
                    <?php if(auth()->guard()->guest()): ?>
                    <a class="nav-link nav-user-img text-white" href="<?php echo e(route('login')); ?>"> LOGIN</a>
                    <?php endif; ?>
                    <?php if(auth()->guard()->check()): ?>
                    <a class="nav-link nav-user-img text-white" href="<?php echo e(route('home.index')); ?>"> Account</a>
                    <?php endif; ?>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <nav class="navbar navbar-expand-md navbar-main border-bottom shadow bg-light">
      <div class="container">
          <form action="<?php echo e(route('shop.catalog')); ?>" class="d-md-none my-2">
              <div class="input-group"> 
                  <input type="search" name="filter[title]" class="form-control" placeholder="Search" required="">
                  <div class="input-group-append"> 
                    <button type="submit" class="btn btn-secondary"> <i class="fa fa-search"></i> </button> 
                  </div>
              </div>
          </form> 
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#dropdown6" aria-expanded="false"> <span class="navbar-toggler-icon"></span> </button>

      </div>
  </nav>
</header>
<?php /**PATH C:\Users\emad\Desktop\final-final-project\resources\views/inc/app/navigation-bar.blade.php ENDPATH**/ ?>