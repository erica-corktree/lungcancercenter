<div class="cta cta--in-content">
  <div class="relative z-10 flex flex-wrap justify-end">
    <div
      <?php if($photo): ?>
        class="py-12 pr-4 w-full md:w-1/2 font-medium text-3xl leading-tight"
      <?php else: ?>
        class="py-12 pr-4 flex flex-col md:flex-row items-center font-medium text-3xl leading-tight"
      <?php endif; ?>
    >
      <?php echo $content; ?>

    </div>
  </div>

  <?php if($photo): ?>
     <?php if (isset($component)) { $__componentOriginal74ecd88fe1aecd1738c23f3373eec219f200a693 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Photo::class, ['class' => 'absolute inset-y-0 left-0 w-full md:w-1/2 opacity-50 md:opacity-100','photo' => $photo]); ?>
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
</div>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/shortcodes/in-content-cta.blade.php ENDPATH**/ ?>