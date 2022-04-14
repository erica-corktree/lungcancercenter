<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.profile-header', ['profile' => $author], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="container py-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php if(! have_posts()): ?>

      <?php echo get_search_form(false); ?>

    <?php endif; ?>

    <?php while(have_posts()): ?> <?php (the_post()); ?>
      <?php echo $__env->first(['partials.content-' . get_post_type(), 'partials.content'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endwhile; ?>

    <?php echo get_the_posts_navigation(); ?>

  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/author.blade.php ENDPATH**/ ?>