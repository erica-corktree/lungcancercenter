<section class="section section--<?php echo e($section->acf_fc_layout); ?> py-12 bg-blue-dark text-white">
  <div class="editorcontent max-w-4xl mx-auto mb-12 text-center">
    <?php if($section->heading): ?>
      <h2 class="text-white"><?php echo e($section->heading); ?></h2>
    <?php endif; ?>

    <?php if($section->subheading): ?>
      <p><?php echo e($section->subheading); ?></p>
    <?php endif; ?>
  </div>

  <?php if($section->cards): ?>
    <div class="container">
      <div class="glide">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <?php $__currentLoopData = $section->cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="glide__slide">
                <div class="p-6 bg-grey-lighter text-black overflow-hidden shadow-lg border">
                  <h3 class="mb-4 text-2xl font-medium text-blue-dark"><?php echo e($card->heading); ?></h3>
                  <p class="mb-12 text-grey-darker"><?php echo e($card->content); ?></p>

                  <?php if($card->links): ?>
                    <?php $__currentLoopData = $card->links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <p class="mb-4 last:mb-0"><a class="button button--blue block" href="<?php echo e($link->link->url); ?>"><?php echo e($link->link->title); ?></a></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                </div>
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>

        <div class="glide__arrows flex md:block mt-8 md:mt-0 items-center justify-between" data-glide-el="controls">
          <button
            class="glide__arrow glide__arrow--left md:absolute top-1/2 left-0 md:-ml-16 w-12 h-12 bg-grey-lighter text-blue-dark rounded-full -translate-y-1/2"
            data-glide-dir="<"
            aria-label="<?php echo e(__('Prev', 'sage')); ?>"
          >
            <?php echo e(get_svg('images.chevron-left', 'inline-block w-8 h-auto')); ?>
          </button>
          <button
            class="glide__arrow glide__arrow--right md:absolute top-1/2 right-0 md:-mr-16 w-12 h-12 bg-grey-lighter text-blue-dark rounded-full -translate-y-1/2"
            data-glide-dir=">"
            aria-label="<?php echo e(__('Next', 'sage')); ?>"
          >
            <?php echo e(get_svg('images.chevron-right', 'inline-block w-8 h-auto')); ?>
          </button>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/section-card-slider.blade.php ENDPATH**/ ?>