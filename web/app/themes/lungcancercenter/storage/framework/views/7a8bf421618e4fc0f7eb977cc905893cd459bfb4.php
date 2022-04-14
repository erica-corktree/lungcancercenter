<div class="container flex flex-wrap">
  <section class="order-last w-full md:w-3/4 md:border-l">
    <div class="editorcontent py-6 md:py-12 md:pt-16 md:pl-16">
      <?php the_content(); ?>
    </div>

    <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>


    <div class="page-footer py-6 md:py-12 md:pl-16">
      <?php echo $__env->make('partials.attribution', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </section>

  <?php echo $__env->make('partials.sidebar-post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php echo $__env->make('partials.cta-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/content-single.blade.php ENDPATH**/ ?>