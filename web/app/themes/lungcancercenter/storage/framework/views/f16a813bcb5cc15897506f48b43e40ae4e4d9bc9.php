<article class="relative flex px-6 py-6 flex-col text-black bg-grey-lighter overflow-hidden shadow-lg border">
  <?php if(isset($hero->photo)): ?>
     <?php if (isset($component)) { $__componentOriginal74ecd88fe1aecd1738c23f3373eec219f200a693 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Photo::class, ['class' => 'z-0 border mb-4','photo' => $hero->photo]); ?>
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

  <header class="mb-4">
    <h2 class="mb-2 text-2xl font-medium leading-snug text-blue"><?= get_the_title(); ?></h2>
    <p class="text-grey-dark"><?php echo e(__('By', 'sage')); ?> <?= get_the_author_meta('display_name'); ?> <span>&#124;</span> <time datetime="<?php if (is_a('c', 'WP_Post') || is_int('c')) : ?><?= get_the_date('', 'c'); ?><?php else : ?><?= get_the_date('c'); ?><?php endif; ?>"><?php if (is_a('F j, Y', 'WP_Post') || is_int('F j, Y')) : ?><?= get_the_date('', 'F j, Y'); ?><?php else : ?><?= get_the_date('F j, Y'); ?><?php endif; ?></time></p>
  </header>

  <div class="flex flex-auto flex-col">
    <div class="flex-auto entry-summary stretched-link">
      <?php if(isset($hero->introduction)): ?>
        <?php echo e($hero->introduction); ?>

      <?php else: ?>
        <?php the_excerpt(); ?>
      <?php endif; ?>
    </div>

    <p class="mt-6">
      <a class="button button--blue-dark stretched-link" href="<?= get_permalink(); ?>"><?php echo e(__('Read More', 'sage')); ?></a>
    </p>
  </div>
</article>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/content.blade.php ENDPATH**/ ?>