<?php $__env->startSection('title', 'Image Uploader'); ?>

<section id="change" class="hero is-fullheight is-link">


  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title" id="titlechange">
        Upload your image.
      </h1>
      <h2 class="subtitle">
        Logged in as <?php echo e(Auth::user()->name); ?>

      </h2>

      
      <div class="file is-info is-centered">
 <label class="file-label">
    <input class="file-input">
    <span class="file-cta">
      <span class="file-label">
       <a href="/home">Dashboard</a>
      </span>
    </span>
  </label>
</div>



<img id="output" style="width: 250px; height: 125px;" alt="Image Preview" class="is-hidden-tablet"/>

<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
    </div>
  </div>
        <form action="<?php echo e(route('image.upload.post')); ?>" method="POST" enctype="multipart/form-data">
 <?php echo csrf_field(); ?>
<div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
        <ul>
          <li><div class="file is-info  is-hidden-mobile">
  <label class="file-label">
    <input class="file-input">
    <span class="file-cta">
      <span class="file-label">
       <a href="/home">Dashboard</a>
      </span>
    </span>
  </label>
</div></li>   
          <li><div class="file is-info">
  <label class="file-label">
    <input class="file-input" type="file" name="image" onchange="loadFile(event)">
    <span class="file-cta">
      <span class="file-icon">
        <i class="fas fa-upload"></i>
      </span>
      <span class="file-label form-control">
        Choose a file…
      </span>
    </span>
  </label>
</div></li>

     
<li><div class="file is-info">
  <label class="file-label">
    <input class="file-input" type="submit">
    <span class="file-cta">
       <span class="file-icon">
        <i class="fas fa-share-square"></i>
      </span>
      <span class="file-label form-control">
       Submit your file!
      </span>
    </span>
  </label>
</div></li>
          

    
    <li><div class="file is-info is-hidden-mobile">
  <label class="file-label">
    <input class="file-input">
    <span class="file-cta">
      <span class="file-label">
       <a href="/">Home</a>
      </span>
    </span>
  </label>

</div></li>

        </ul>
      </div>
    </nav>
  </div>
</form>

   
  <!--   <div class="file is-boxed is-info">
  <label class="file-label">
    <input class="file-input" type="file" name="image">
    <span class="file-cta">
      <span class="file-icon">
        <i class="fas fa-upload"></i>
      </span>
      <span class="file-label form-control">
        Choose a file…..!!
      </span>
    </span>
  </label>
</div>


               
<br />
   
 <div class="col-md-6">

<div class="file is-boxed is-info">
  <label class="file-label">
    <input class="file-input" type="submit">
    <span class="file-cta">
      <span class="file-label form-control">
       Upload your file!
      </span>
    </span>
  </label>
</div> -->
        <?php if($message = Session::get('success')): ?>
<!-- <?php echo e($message); ?> -->
        <script>
          document.getElementById('change').classList.remove('is-link');
          document.getElementById('change').classList.add('is-success');
          document.getElementById('titlechange').innerHTML = "<?php echo e($message); ?>"
</script>
        <?php endif; ?>

  

        <?php if(count($errors) > 0): ?>

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.

                <ul>

                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <script>
          document.getElementById('change').classList.remove('is-link');
          document.getElementById('change').classList.add('is-danger');
          document.getElementById('titlechange').innerHTML = "<?php echo e($error); ?>"


</script>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>

            </div>

        <?php endif; ?>

  


  

      </div>



</div>
  </article>
      </div>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\laragon\www\Jarvis\resources\views/imageUpload.blade.php */ ?>