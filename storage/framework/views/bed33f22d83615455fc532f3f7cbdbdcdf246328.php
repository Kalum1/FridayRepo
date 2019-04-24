<?php $__env->startSection('title', 'Deleteing...'); ?>



<section id="change" class="hero is-fullheight is-link">


  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title" id="titlechange">
       Please wait whilst we process your request.
      </h1>
      <br />
 
  <form action="deleteonce" method="POST" enctype="multipart/form-data" >
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('DELETE')); ?>


<input type="text" name="imagename" placeholder="Image Name"/><br />
<input type="submit" />
</form>
      <progress class="progress is-large is-success" max="100">60%</progress>


    </div>
  </div>



</section>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\laragon\www\Jarvis\resources\views/deleteone.blade.php */ ?>