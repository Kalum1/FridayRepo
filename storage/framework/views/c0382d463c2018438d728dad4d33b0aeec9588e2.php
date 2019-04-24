<section class="hero is-link is-bold">
   <nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
      <div class="container">
         <div class="navbar-brand">
            <a href="<?php echo e(url('/')); ?>" class="navbar-item"><?php echo e(config('Friday', 'Friday')); ?></a>
            <span class="navbar-burger burger" data-target="navMenu">
            <span></span>
            <span></span>
            <span></span>
            </span>
         </div>
         <div class="navbar-menu" id="navMenu">
            <div class="navbar-start"></div>
            <div class="navbar-end">
               <?php if(Auth::guest()): ?>
               <a class="navbar-item" href="<?php echo e(route('register')); ?>">Register</a>
               <a class="navbar-item" href="<?php echo e(route('login')); ?>">Login</a>
               <?php else: ?>
          
  <a class="navbar-item" href="/home">
                  Dashboard</a>
<a class="navbar-item" href="<?php echo e(route('image.upload')); ?>">
    Image Uploader</a>
               <div class="navbar-item">


                

                  <a class="navbar-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  Logout, <?php echo e(Auth::user()->name); ?></a>
               </div>


               <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                  style="display: none;">
                  <?php echo e(csrf_field()); ?>

               </form>
               <form id="logs-form" action="<?php echo e(route('register')); ?>" method="GET"
                  style="display: none;">
               <?php echo e(csrf_field()); ?>

            </div>
    
         </div>
         <?php endif; ?>
      </div>
      </div>
      </div>
   </nav>
   <?php echo $__env->yieldContent('content'); ?>
</section>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
   $(function () {
       $('.navbar-burger').click(function () {
           $(".navbar-burger").toggleClass("is-active")
           $(".navbar-menu").toggleClass("is-active")
       })
   })
</script>
</body>
</html>
<?php /* C:\laragon\www\Jarvis\resources\views/layouts/app.blade.php */ ?>