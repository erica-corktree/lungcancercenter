<?php if($sections): ?>
  <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(isset($section->acf_fc_layout)): ?>
      <?php $layout = str_replace('_', '-', $section->acf_fc_layout); ?>
      <?php if ($__env->exists("partials.section-{$layout}", ['section' => $section])) echo $__env->make("partials.section-{$layout}", ['section' => $section], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/sections.blade.php ENDPATH**/ ?>