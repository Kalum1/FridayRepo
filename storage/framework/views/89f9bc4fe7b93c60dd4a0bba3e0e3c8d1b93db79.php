<?php $__env->startSection('title', 'Deleteing...'); ?>



<section id="change" class="hero is-fullheight is-link">


  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title" id="titlechange">
       Preparing to delete image for <code><?php echo e(Auth::user()->name); ?></code>
      </h1>
      <br />
     <!--  <progress class="progress is-large is-success" max="100">60%</progress> -->
     <a class="button is-danger" href="/deleteall">Delete All</a>
     <a class="button is-danger" href="<?php echo e(route('/image.delete'}); ?>">Delete One</a>
    </div>
  </div>
 



</section>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\laragon\www\Jarvis\resources\views//delete.blade.php */ ?>