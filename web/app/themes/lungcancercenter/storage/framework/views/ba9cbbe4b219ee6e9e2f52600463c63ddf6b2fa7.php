<section class="section section--<?php echo e($section->acf_fc_layout); ?> py-12 bg-white">
  <div class="container max-w-5xl mx-auto">
    <div class="editorcontent mb-12">
      <?php if($section->heading): ?>
        <h2><?php echo e($section->heading); ?></h2>
      <?php endif; ?>

      <?php if($section->subheading): ?>
        <p><?php echo e($section->subheading); ?></p>
      <?php endif; ?>
    </div>

    <?php $__currentLoopData = $section->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="mb-8 text-grey-darker">
        <div class="flex flex-col sm:flex-row items-center">
          <?php if(!empty($item->icon)): ?>
            <picture class="<?php if($item->alignment === 'right'): ?> md:order-last <?php endif; ?> flex flex-none items-center justify-center w-48 h-48 mx-auto">
              <?php $__currentLoopData = get_intermediate_image_sizes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(isset($item->icon->sizes->{$size})): ?>
                  <source
                    srcset="<?php echo e($item->icon->sizes->{$size}); ?>"
                    media="(max-width: <?php echo e($item->icon->sizes->{"{$size}-width"}); ?>px)"
                  >
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <img class="w-full h-auto" src="<?php echo e($item->icon->url); ?>" alt="<?php echo e($item->icon->alt); ?>">
            </picture>
          <?php endif; ?>

          <div class="<?php if($item->alignment === 'right'): ?> md:order-first sm:mr-8 <?php else: ?> sm:ml-8 <?php endif; ?> w-full sm:w-auto mt-4 sm:mt-0 flex-grow">
            <h3 class="mb-8 font-medium leading-none text-2xl text-teal"><?php echo e($item->heading); ?></h3>
            <p><?php echo $item->description; ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</section>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/section-icon-list.blade.php ENDPATH**/ ?>