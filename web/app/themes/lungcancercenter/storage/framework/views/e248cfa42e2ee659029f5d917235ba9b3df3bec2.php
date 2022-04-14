<?php if($section->photo): ?>
  <section class="section section--<?php echo e($section->acf_fc_layout); ?> section--<?php echo e($section->acf_fc_layout); ?>-with-photo relative bg-blue text-white">
    <div class="container relative z-10 flex flex-wrap justify-end">
      <div class="w-full py-16 md:pl-12 md:w-1/2">
        <h2 class="mb-8 text-4xl font-medium"><?php echo e($section->heading); ?></h2>
        <p><a class="button button--green" href="<?php echo e($section->link->url); ?>"><?php echo e($section->link->title); ?></a></p>
      </div>
    </div>

    <picture class="absolute inset-y-0 left-0 w-full opacity-50 cta__picture md:w-1/2 md:opacity-100" style="clip-path: url('#wave-cta');">
      <?php $__currentLoopData = get_intermediate_image_sizes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(isset($section->photo->sizes->{$size})): ?>
          <source
            srcset="<?php echo e($section->photo->sizes->{$size}); ?>"
            media="(max-width: <?php echo e($section->photo->sizes->{"{$size}-width"}); ?>px)"
          >
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <img class="object-cover w-full h-full cta__img" src="<?php echo e($section->photo->url); ?>" alt="<?php echo e($section->photo->alt); ?>">
    </picture>

    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="none" height="0" width="0">
      <clipPath id="wave-cta" clipPathUnits="objectBoundingBox">
        <path d="M0.684,0 c0,0,0.405,0.306,0.297,1 H0 V0 H0.684" />
      </clipPath>
    </svg>
  </section>
<?php else: ?>
  <section class="relative bg-blue-dark text-white section section--<?php echo e($section->acf_fc_layout); ?>">
    <div class="container flex flex-wrap items-center py-12">
      <h2 class="w-full mb-8 text-4xl font-medium md:mb-0 md:pr-8 md:w-2/3"><?php echo e($section->heading); ?></h2>
      <p class="w-full md:w-1/3"><a class="button button--green" href="<?php echo e($section->link->url); ?>"><?php echo e($section->link->title); ?></a></p>
    </div>
  </section>
<?php endif; ?>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/section-cta.blade.php ENDPATH**/ ?>