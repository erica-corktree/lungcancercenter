<section class="section section--<?php echo e($section->acf_fc_layout); ?> py-12">
  <div class="container">
    <div class="editorcontent max-w-4xl mx-auto mb-12 text-center">
      <?php if($section->heading): ?>
        <h2 <?php if (is_null($section->subheading)) : ?><?php echo 'class="mb-12"'; ?><?php endif; ?>><?php echo e($section->heading); ?></h2>
      <?php endif; ?>

      <?php if($section->subheading): ?>
        <p><?php echo e($section->subheading); ?></p>
      <?php endif; ?>
    </div>

    <div class="-mx-4 flex flex-wrap justify-center">
      <?php $__currentLoopData = $section->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="mb-8 mb:mb-0 px-4 w-full sm:w-1/3 md:w-1/5 text-center">
          <?php if(!empty($item->icon)): ?>
            <picture class="block w-32 h-auto mx-auto">
              <?php $__currentLoopData = get_intermediate_image_sizes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(isset($item->icon->sizes->{$size})): ?>
                  <source
                    srcset="<?php echo e($item->icon->sizes->{$size}); ?>"
                    media="(max-width: <?php echo e($item->icon->sizes->{"{$size}-width"}); ?>px)"
                  >
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <img src="<?php echo e($item->icon->url); ?>" alt="<?php echo e($item->icon->alt); ?>" width="128px" height="128px">
            </picture>
          <?php endif; ?>

          <?php if($item->heading): ?>
            <h3 class="text-xl font-medium text-blue"><?php echo e($item->heading); ?></h3>
          <?php endif; ?>

          <?php if($item->description): ?>
            <p class="mt-6"><?php echo e($item->description); ?></p>
          <?php endif; ?>

          <?php if($item->link): ?>
            <p class="mt-6"><a class="button button--blue-dark" href="<?php echo e($item->link->url); ?>"><?php echo e($item->link->title); ?></a></p>
          <?php endif; ?>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/section-icon-grid.blade.php ENDPATH**/ ?>