<?php if($photo): ?>
  <picture class="photo <?php echo e($class ?? ''); ?>">
    <?php $__currentLoopData = get_intermediate_image_sizes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if(isset($photo->sizes->{$size})): ?>
        <source
          srcset="<?php echo e($photo->sizes->{$size}); ?>"
          media="(max-width: <?php echo e($photo->sizes->{"{$size}-width"}); ?>px)"
        >
      <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <img class="photo__img" src="<?php echo e($photo->url ?? ''); ?>" alt="<?php echo e($photo->alt ?? ''); ?>">
  </picture>
<?php endif; ?>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/components/photo.blade.php ENDPATH**/ ?>