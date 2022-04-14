<?php if($navigation): ?>
  <nav class="navigation" role="navigation" itemscope="itemscope" itemtype="https://schema.org/SitenavigationElement">
    <div class="navigation__container container">
      <a
        class="navigation__close flex md:hidden ml-auto py-4 items-center justify-center order-0 text-white"
        href="#primary-nav"
        aria-controls="primary-nav"
      >
        <?php echo e(get_svg('images.x', 'inline-block w-5 h-auto')); ?>
      </a>

      <ul class="navigation__menu" id="primary-nav">
        <?php $__currentLoopData = $navigation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="navigation__menu-item <?php echo e($item->active ? 'navigation__menu-item--active' : ''); ?>">
            <a class="navigation__menu-link" href="<?php echo e($item->url); ?>">
              <span><?php echo e($item->label); ?></span>
            </a>

            <?php if($item->children): ?>
              <button class="navigation__toggle-button" aria-haspopup="true" aria-label="Show Submenu">
                <?php echo e(get_svg('images.chevron-down', 'inline-block w-4 h-auto')); ?>
              </button>

              <ul class="navigation__submenu" aria-label="<?php echo e(__('Submenu', 'sage')); ?>" aria-hidden="true">
                <?php $__currentLoopData = $item->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="navigation__submenu-item <?php echo e($child->active ? 'navigation__submenu-item--active' : ''); ?>">
                    <a class="navigation__submenu-link" href="<?php echo e($child->url); ?>">
                      <?php echo e($child->label); ?>

                    </a>
                  </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            <?php endif; ?>
          </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>

      <div class="order-1 md:order-2 w-full md:w-auto flex items-stretch">
        <?php echo get_search_form(false); ?>

      </div>
    </div>
  </nav>
<?php endif; ?>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/navigation.blade.php ENDPATH**/ ?>