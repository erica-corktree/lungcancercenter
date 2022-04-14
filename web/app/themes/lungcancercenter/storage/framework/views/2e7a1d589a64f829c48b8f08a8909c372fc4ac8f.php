<div class="page-header">
  <div class="container relative z-30 py-8 md:py-12">
    <?php echo $__env->make('partials.breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <h1 class="mb-4 text-3xl font-medium leading-tight md:text-5xl"><?php echo $title; ?></h1>

    <?php if(is_singular('post')): ?>
      <?php echo $__env->make('partials/entry-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if(isset($hero->introduction)): ?>
      <p class="text-lg"><?php echo e($hero->introduction); ?></p>
    <?php endif; ?>
  </div>

  <?php if(isset($hero->photo)): ?>
     <?php if (isset($component)) { $__componentOriginal74ecd88fe1aecd1738c23f3373eec219f200a693 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Photo::class, ['class' => 'photo--page-header','photo' => $hero->photo]); ?>
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

  <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="none" height="0" width="0">
    <clipPath id="wave" clipPathUnits="objectBoundingBox">
      <path d="M1,0 H0 v0.724 c0,0,0.056,0.125,0.151,0.108 c0.07,-0.012,0.231,-0.143,0.328,-0.15 c0.209,-0.016,0.383,0.446,0.521,0.285 V0" />
    </clipPath>
    <clipPath id="wave-2" clipPathUnits="objectBoundingBox">
      <path d="M0.106,0.832 c0.07,-0.013,0.231,-0.143,0.328,-0.151 c0.209,-0.016,0.327,0.445,0.566,0.285 V0 H0 v0.79 C0.026,0.817,0.061,0.84,0.106,0.832" />
    </clipPath>
  </svg>
</div>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/page-header.blade.php ENDPATH**/ ?>