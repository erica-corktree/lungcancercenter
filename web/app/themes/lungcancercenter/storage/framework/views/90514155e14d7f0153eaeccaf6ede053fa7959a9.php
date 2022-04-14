<section class="section section--<?php echo e($section->acf_fc_layout); ?> pt-10">
  <div class="editorcontent container">
    <h2><?php echo e($section->heading); ?></h2>
  </div>

  <div class="bg-grey-lighter mt-8 py-12">
    <div class="container">
      <?= do_shortcode('[hf_form slug="cta"]'); ?>
    </div>
  </div>
</section>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/section-form.blade.php ENDPATH**/ ?>