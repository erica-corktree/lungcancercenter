<?php if($breadcrumbs): ?>
  <nav class="breadcrumbs" id="breadcrumbs" role="navigation">
    <ol class="flex" itemscope itemtype="https://schema.org/BreadcrumbList" aria-label="breadcrumb navigation">
      <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="mr-1 last:mr-0" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <?php if(!$loop->last): ?>
            <a href="<?php echo e($crumb->href); ?>" itemscope itemtype="https://schema.org/Thing" itemprop="item">
              <?php if($crumb->text ==='Home'): ?>
                <?php echo e(get_svg('images.home', 'inline-block h-auto w-4')); ?>
              <?php else: ?>
                <span itemprop="name"><?php echo e($crumb->text); ?></span>
              <?php endif; ?>
            </a>
          <?php else: ?>
            <span itemscope itemtype="https://schema.org/Thing" itemprop="item" aria-current="page">
              <span itemprop="name"><?php echo e($crumb->text); ?></span>
            </span>
          <?php endif; ?>

          <meta itemprop="position" content="<?php echo e($loop->iteration); ?>">
        </li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
  </nav>
<?php endif; ?>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/breadcrumbs.blade.php ENDPATH**/ ?>