<div class="container flex flex-wrap bg-white">
  <section class="order-last w-full md:w-3/4 <?php echo e(!App\is_tree('about-us') ? 'md:border-l' : ''); ?>">
    <div class="editorcontent py-6 md:py-12 md:pt-16 <?php echo e(!App\is_tree('about-us') ? 'md:pl-16' : ''); ?>">
      <?php the_content(); ?>
    </div>

    <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>


    <?php if (! (App\is_tree('about-us'))): ?>
      <div class="page-footer py-6 md:py-12 md:pl-16">
        <?php echo $__env->make('partials.related-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('partials.attribution', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="relative z-10 mt-8 flex items-center justify-between">
          <?php if($prev): ?>
            <a class="button button--grey-light flex py-3 px-5 items-center font-normal leading-none text-left" href="<?php echo e(get_the_permalink($prev->ID)); ?>">
              <?php echo e(get_svg('images.arrow-left', 'block w-5 h-auto')); ?>
              <span class="block pl-2">
                <span class="block text-sm opacity-75"><?php echo e(__('Previous Page', 'sage')); ?></span>
                <span class="block font-heading font-medium"><?php echo e($prev->post_title); ?></span>
              </span>
            </a>
          <?php endif; ?>

          <?php if($next): ?>
            <a class="button button--grey-light flex py-3 px-5 items-center font-normal leading-none text-right" href="<?php echo e(get_the_permalink($next->ID)); ?>">
              <span class="block pr-2">
                <span class="block text-sm opacity-75"><?php echo e(__('Next Page', 'sage')); ?></span>
                <span class="block font-heading font-medium"><?php echo e($next->post_title); ?></span>
              </span>
              <?php echo e(get_svg('images.arrow-right', 'block w-5 h-auto')); ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>
  </section>

  <?php if (! (App\is_tree('about-us'))): ?>
    <?php echo $__env->make('partials.sidebar-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>
</div>

<?php if (! (App\is_tree('about-us'))): ?>
  <?php echo $__env->make('partials.cta-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/content-page.blade.php ENDPATH**/ ?>