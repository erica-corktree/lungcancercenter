<div class="relative py-8 md:py-12 text-white bg-blue-dark">
  <div class="relative z-10 container">
    <?php echo $__env->make('partials.breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="flex pt-4 flex-wrap">
      <?php if($profile->photo): ?>
        <picture class="h-32 mb-4 md:mb-0 w-32 rounded-full">
          <img
            class="block h-full w-full border border-grey-dark rounded-full object-cover"
            src="<?php echo e($profile->photo->sizes->thumbnail ?? ''); ?>"
            alt="<?php echo e(__('Photo of', 'sage')); ?> <?php echo e($profile->name ?? ''); ?>"
          >
        </picture>
      <?php endif; ?>

      <div class="<?php if($profile->photo): ?> md:pl-6 <?php endif; ?> md:flex-1">
        <hgroup>
          <h1 class="mb-2 font-medium text-3xl md:text-5xl leading-none"><?php echo e($profile->name); ?></h1>
          <h2 class="mb-6 font-medium text-lg md:text-xl md:leading-none text-blue-lightest"><?php echo e($profile->title); ?></h2>
        </hgroup>

        <?php echo $profile->bio; ?>

      </div>
    </div>
  </div>
</div>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/profile-header.blade.php ENDPATH**/ ?>