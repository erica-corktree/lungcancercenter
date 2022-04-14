<?php if($pagi->hasPages()): ?>
  <nav class="flex items-center" role="navigation" aria-label="pagination">
    <?php if(!$pagi->onFirstPage()): ?>
      <a
        href="<?php echo e($pagi->previousPageUrl()); ?>"
        rel="prev"
        class="border rounded-sm mr-3 py-1 px-4 text-blue-dark hover:bg-blue hover:text-white"
      >&larr; <?php echo e(__('Previous', 'sage')); ?></a>
    <?php endif; ?>

    <ul class="flex">
      <?php $__currentLoopData = $pagi->elements(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(is_string($element)): ?>
          <li class="disabled" aria-disabled="true">
            <span class="mr-3 py-1">&hellip;</span>
          </li>
        <?php endif; ?>

        <?php if(is_array($element)): ?>
          <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
              <?php if($page == $pagi->currentPage()): ?>
                <span
                  class="border border-blue rounded-sm mr-3 py-1 px-4 bg-blue text-white"
                  aria-current="page"
                ><?php echo e($page); ?></span>
              <?php else: ?>
                <a
                  href="<?php echo e($url); ?>"
                  class="border rounded-sm mr-3 py-1 px-4 text-blue-dark hover:bg-blue hover:border-blue hover:text-white"
                ><?php echo e($page); ?></a>
              <?php endif; ?>
            </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <?php if($pagi->hasMorePages()): ?>
      <a
        href="<?php echo e($pagi->nextPageUrl()); ?>"
        rel="next"
        class="border rounded-sm mr-3 py-1 px-4 text-blue-dark hover:bg-blue hover:text-white"
      ><?php echo e(__('Next', 'sage')); ?> &rarr;</a>
    <?php endif; ?>
  </nav>
<?php endif; ?>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/pagination.blade.php ENDPATH**/ ?>