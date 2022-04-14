<?php if($related): ?>
  <div class="relative z-10">
    <h2 class="mb-8 text-2xl font-medium leading-none text-teal"><?php echo e(__('Related Pages')); ?></h2>

    <div class="flex flex-wrap md:-mx-8">
      <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $photo = json_decode(json_encode(get_field('page_hero_photo', $item->ID), false)); ?>

        <div class="w-full mb-8 md:w-1/3 md:mb-0 md:px-8 last:mb-0">
          <?php if($photo): ?>
             <?php if (isset($component)) { $__componentOriginal74ecd88fe1aecd1738c23f3373eec219f200a693 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Photo::class, ['class' => 'block w-64 h-32 mb-4 border md:h-40 md:w-auto','photo' => $photo]); ?>
<?php $component->withName('photo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal74ecd88fe1aecd1738c23f3373eec219f200a693)): ?>
<?php $component = $__componentOriginal74ecd88fe1aecd1738c23f3373eec219f200a693; ?>
<?php unset($__componentOriginal74ecd88fe1aecd1738c23f3373eec219f200a693); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
          <?php endif; ?>

          <h4 class="mb-4 text-xl font-medium">
            <a class="text-blue-dark" href="<?php echo e(esc_url(get_permalink($item->ID))); ?>"><?php echo get_the_title($item->ID); ?></a>
          </h4>

          <p>
            <a class="button button--blue-dark" href="<?php echo e(esc_url(get_permalink($item->ID))); ?>"><?php echo e(__('Read More', 'sage')); ?></a>
          </p>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
<?php endif; ?>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/related-content.blade.php ENDPATH**/ ?>