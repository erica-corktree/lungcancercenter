<aside class="order-first hidden w-full sidebar sidebar--page md:block md:w-1/4" id="sidebar-page">
  <?php if(is_page() && isset($child_pages)): ?>
    <nav class="p-8 pt-16 bg-grey-lighter">
      <h3 class="mb-4 text-xl font-medium">
        <a class="text-blue" href="<?php echo e(get_the_permalink($top_level_parent->ID)); ?>">
          <?php echo e($top_level_parent->post_title); ?>

        </a>
      </h3>

      <ul class="page-nav">
        <?php $__currentLoopData = $child_pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php $menuId = uniqid('page-nav_'); ?>

          <?php if(get_the_ID() === $page['id']): ?>
            <li class="page-nav__item page-nav__item--active">
          <?php elseif(in_array(get_the_ID(), $page['childIds'])): ?>
            <li class="page-nav__item" aria-expanded="true">
          <?php else: ?>
            <li class="page-nav__item">
          <?php endif; ?>

            <a class="page-nav__link" href="<?php echo e($page['url']); ?>">
              <?php echo $page['title']; ?>

            </a>

            <?php if($page['children']): ?>
              <button
                class="page-nav__expand"
                aria-controls="<?php echo e($menuId); ?>"
                aria-haspopup="true"
                aria-expanded="<?php echo e((in_array(get_the_ID(), $page['childIds'])) ? 'true' : 'false'); ?>"
              >
                <?php echo e(get_svg('images.down', 'w-4 h-auto')); ?>
              </button>

              <?php if(in_array(get_the_ID(), $page['childIds'])): ?>
                <ul class="page-nav__sub-menu" id="<?php echo e($menuId); ?>" aria-hidden="false">
              <?php else: ?>
                <ul class="page-nav__sub-menu" id="<?php echo e($menuId); ?>" aria-hidden="true">
              <?php endif; ?>

                <?php $__currentLoopData = $page['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php $childMenuId = uniqid('childPagenav_'); ?>

                  <?php if(get_the_ID() === $child['id']): ?>
                    <li class="page-nav__item page-nav__item--active">
                  <?php elseif(in_array(get_the_ID(), $child['childIds'])): ?>
                    <li class="page-nav__item" aria-expanded="true">
                  <?php else: ?>
                    <li class="page-nav__item">
                  <?php endif; ?>

                  <a class="page-nav__link" href="<?php echo e($child['url']); ?>">
                    <?php echo $child['title']; ?>

                  </a>

                  <?php if(in_array(get_the_ID(), $child['childIds'])): ?>
                    <button class="page-nav__expand" aria-controls="<?php echo e($childMenuId); ?>" aria-haspopup="true" aria-expanded="false">
                      <?php echo e(get_svg('images.down', 'w-4 h-auto')); ?>
                    </button>
                  <?php elseif($child['children']): ?>
                    <button class="page-nav__expand" aria-controls="<?php echo e($childMenuId); ?>" aria-haspopup="true" aria-expanded="true">
                      <?php echo e(get_svg('images.up', 'w-4 h-auto')); ?>
                    </button>
                  <?php endif; ?>

                    <?php if($child['children']): ?>
                      <?php if(in_array(get_the_ID(), $child['childIds'])): ?>
                        <ul class="page-nav__sub-menu" id="<?php echo e($childMenuId); ?>" aria-hidden="false">
                      <?php else: ?>
                        <ul class="page-nav__sub-menu" id="<?php echo e($childMenuId); ?>" aria-hidden="true">
                      <?php endif; ?>
                        <?php $__currentLoopData = $child['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if(get_the_ID() === $sub_child['id']): ?>
                            <li class="page-nav__item page-nav__item--active">
                          <?php else: ?>
                            <li class="page-nav__item">
                          <?php endif; ?>

                            <a class="page-nav__expand" href="<?php echo e($sub_child['url']); ?>">
                              <?php echo $sub_child['title']; ?>

                            </a>
                          </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </ul>
                    <?php endif; ?>
                  </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            <?php endif; ?>
          </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </nav>
  <?php endif; ?>

  <?php (dynamic_sidebar('sidebar-page')); ?>
</aside>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/sidebar-page.blade.php ENDPATH**/ ?>