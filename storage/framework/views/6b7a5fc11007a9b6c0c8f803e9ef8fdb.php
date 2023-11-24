<!DOCTYPE html>
<html lang="en">

<head>
    
    <?php $__env->startSection('Home'); ?>
    <?php $__env->stopSection(); ?>
</head>

<body>
    <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Blog Article -->
<div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-2xl">


      <!-- Content -->
      <div class="space-y-5 md:space-y-8">
        <div class="space-y-3">
          <h2 class="text-2xl font-bold md:text-3xl"><?php echo e($post->title); ?></h2>

          <p class="text-lg text-gray-800"><?php echo e($post->desc); ?></p>
        </div>


        <figure>
          <img class="w-full object-cover rounded-xl" src="<?php echo e($post->photo); ?>" alt="Image Description">
          <figcaption class="mt-3 text-sm text-center text-gray-500">
            <?php echo e($post->title); ?>

          </figcaption>
        </figure>

        <p class="text-lg text-gray-800"><?php echo e($post->body); ?></p>

      </div>
      <!-- End Content -->
    </div>
  </div>
  <!-- End Blog Article -->



<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.footscript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>

<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravelsProjects\final-web-led\resources\views/pages/admins/project/viewproject.blade.php ENDPATH**/ ?>