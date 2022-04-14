<?php if($content): ?>
  <div class="relative p-8">
    <?php if($content->photo): ?>
       <?php if (isset($component)) { $__componentOriginal74ecd88fe1aecd1738c23f3373eec219f200a693 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Photo::class, ['class' => 'photo--widget','photo' => $content->photo]); ?>
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

    <p class="mb-1 text-xl font-medium leading-snug font-heading text-blue"><?php echo e($content->title); ?></p>

    <p class="mb-6 text-sm text-grey-dark">
      <span><?php echo e(__('By', 'sage')); ?> <?php echo e($content->author); ?><span>
      
    </p>

    <p class="mb-6 text-grey-darker"><?php echo e($content->excerpt); ?></p>
    <p><a class="button button--blue-dark stretched-link" href="<?php echo e($content->permalink); ?>"><?php echo e(__('Continue Reading', 'sage')); ?></a></p>
  </div>
<?php else: ?>
  <div class="p-4">
    <p class="text-grey-dark">Alert Warning: No content found</p>
  </div>
<?php endif; ?>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/widgets/content.blade.php ENDPATH**/ ?>