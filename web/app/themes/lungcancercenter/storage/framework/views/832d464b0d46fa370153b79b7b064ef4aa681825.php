<a href="#main-content" class="skip-link"><?php echo e(__('Skip to main content', 'sage')); ?></a>

<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main class="main overflow-hidden" id="main-content">
  <?php echo $__env->yieldContent('content'); ?>
</main>

<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/layouts/app.blade.php ENDPATH**/ ?>