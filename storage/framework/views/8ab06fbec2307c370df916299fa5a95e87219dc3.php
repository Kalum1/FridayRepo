<?php $__env->startSection('title', 'Uploader'); ?>
<?php $__env->startSection('content'); ?>




<section class="hero is-fullheight is-link">

<div class="container">

   

    <div class="panel panel-primary">

 <div class="tile is-parent is-vertical">
        <article class="tile is-child notification is-info">
          <p class="title">Upload Your Image</p>
       
      

      <div class="panel-body">

       

  

        <?php if(count($errors) > 0): ?>

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.

                <ul>

                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <li><?php echo e($error); ?></li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>

            </div>

        <?php endif; ?>

  

        <form action="<?php echo e(route('image.upload.post')); ?>" method="POST" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>

            <div class="row">

             <div class="file is-link">
  <label class="file-label">
    <input class="file-input" type="file" name="image" class="form-control">
    <span class="file-cta">
      <span class="file-icon">
        <i class="fas fa-upload"></i>
      </span>
      <span class="file-label">
        Choose a file…
      </span>
    </span>
  </label>
</div>


<br />
   

                <div class="col-md-6">

                    <button type="submit" class="button is-link">Upload</button>

                </div>

   
 <?php if($message = Session::get('success')): ?>

        <div class="alert alert-success alert-block">

            <button type="button" class="close" onClick="window.location.reload()">×</button>

                <strong><?php echo e($message); ?></strong>

        </div>

        <img src="images/<?php echo e(Session::get('image')); ?>">

        <?php endif; ?>
            </div>

        </form>

  

      </div>

    </div>

</div>
 </article>
      </div>
</section>
<?php $__env->stopSection(); ?>


  


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\laragon\www\Jarvis\resources\views//auth/imageUpload.blade.php */ ?>