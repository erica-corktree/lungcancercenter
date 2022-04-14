<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php (the_post()); ?>
    <div class="page-header page-header--template-lp-form">
      <div class="container relative flex flex-wrap z-30 py-8 md:py-12">
        <div class="w-full md:w-1/2 md:pr-8 flex flex-col justify-between">
          <div class="page-header__content">
            <?php echo $__env->make('partials.breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <h1 class="mb-4 font-medium leading-tight text-3xl md:text-5xl"><?php echo $title; ?></h1>

            <?php if(isset($hero->introduction)): ?>
              <p class="text-lg"><?php echo e($hero->introduction); ?></p>
            <?php endif; ?>
          </div>

          
        </div>

        <div class="flex items-center w-full md:w-1/2">
          <div class="p-8 pr-24 overflow-hidden bg-grey-lighter border shadow-lg text-black">
            <?= do_shortcode("[hf_form slug=\"{$slug}\"]"); ?>
          </div>
        </div>
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

      <svg class="absolute h-0 w-0">
        <clipPath id="wave" clipPathUnits="objectBoundingBox">
          <path d="M1,0 H0 v0.582 c0,0,0.035,0.094,0.13,0.08 c0.07,-0.01,0.146,-0.132,0.244,-0.139 C0.583,0.509,0.761,1,1,0.941 V0" />
        </clipPath>
        <clipPath id="wave-2" clipPathUnits="objectBoundingBox">
          <path d="M1,0 H0 v0.57 c0,0,0.043,0.113,0.137,0.099 C0.222,0.66,0.291,0.546,0.388,0.54 C0.605,0.525,0.745,1,1,0.951 V0" />
        </clipPath>
      </svg>
    </div>

    <?php echo $__env->make('partials.sections', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.cta-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/template-lp-form.blade.php ENDPATH**/ ?>