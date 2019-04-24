<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>


    <section class="hero is-fullheight is-link is-bold">
      <div class="hero-body">
        <div class="container">
          <div class="columns">
            <div class="column is-8-desktop is-offset-2-desktop">
              <h1 class="title is-2 is-spaced">
                <strong>Friday</strong>
              </h1>
              <h2 class="subtitle is-4">
                  Meet <strong>Friday</strong>, the image uploading website for you.
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('js'); ?>
    <script type="text/javascript" src="lib/main.js"></script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\laragon\www\Jarvis\resources\views/index.blade.php */ ?>