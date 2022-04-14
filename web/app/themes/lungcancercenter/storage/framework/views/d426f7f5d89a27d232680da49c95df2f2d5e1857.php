<footer class="relative z-10">
  <div class="attribution">
    <p class="attribution__title flex items-center py-4 font-medium">
      <button
        class="attribution__toggle flex w-6 h-6 items-center justify-center bg-grey-light rounded-full shadow-md"
        aria-controls="attribution-author"
        aria-expanded="false"
        aria-label="<?php echo e(__('Toggle author info', 'sage')); ?>"
      >
        <?php echo e(get_svg('images.plus', 'w-4')); ?>
      </button>

      <span class="ml-2"><?php echo e(__('Author:', 'sage')); ?> <?php echo e($author->name ?? ''); ?></span>
    </p>

    <div class="attribution__content py-4 hidden flex" id="attribution-author" aria-hidden="true">
      <?php if(isset($author->photo)): ?>
        <picture class="h-24 mb-4 md:mb-0 w-24 rounded-full">
          <img
            class="block h-full w-full border border-grey-dark rounded-full object-cover"
            src="<?php echo e($author->photo->sizes->thumbnail ?? ''); ?>"
            alt="<?php echo e(__('Photo of', 'sage')); ?> <?php echo e($author->name ?? ''); ?>"
          >
        </picture>
      <?php endif; ?>

      <div class="md:pl-4 flex-1">
        <p class="mb-2 text-lg font-medium leading-none">
          <a class="text-teal hover:text-teal-dark underline" href="<?php echo e($author->url ?? ''); ?>"><?php echo e($author->name ?? ''); ?></a>
        </p>

        <p class="mb-4 font-medium leading-none text-grey-dark"><?php echo e($author->title ?? ''); ?></p>
        <p><?php echo e($author->bio ?? ''); ?></p>
      </div>
    </div>

    <?php if($reviewer): ?>
      <p class="attribution__title flex items-center py-4 font-medium">
        <button
          class="attribution__toggle flex w-6 h-6 items-center justify-center bg-grey-light rounded-full shadow-md"
          aria-controls="attribution-reviewer"
          aria-expanded="false"
          aria-label="<?php echo e(__('Toggle author info', 'sage')); ?>"
        >
          <?php echo e(get_svg('images.plus', 'w-4')); ?>
        </button>

        <span class="ml-2"><?php echo e(__('Medical Reviewer:', 'sage')); ?> <?php echo e($reviewer->name); ?></span>
      </p>

      <div class="attribution__content py-4 hidden flex" id="attribution-reviewer" aria-hidden="true">
        <?php if(isset($reviewer->photo)): ?>
          <picture class="h-24 mb-4 md:mb-0 w-24 rounded-full">
            <img
              class="block h-full w-full border border-grey-dark rounded-full object-cover"
              src="<?php echo e($reviewer->photo->sizes->thumbnail); ?>"
              alt="<?php echo e(__('Photo of', 'sage')); ?> <?php echo e($reviewer->name); ?>"
            >
          </picture>
        <?php endif; ?>

        <div class="md:pl-4 flex-1">
          <p class="mb-2 text-lg font-medium leading-none">
            <a class="text-teal hover:text-teal-dark underline" href="<?php echo e($reviewer->url); ?>"><?php echo e($reviewer->name); ?></a>
          </p>

          <p class="mb-4 font-medium leading-none text-grey-dark"><?php echo e($reviewer->title); ?></p>
          <?php echo $reviewer->bio; ?>

        </div>
      </div>
    <?php endif; ?>

    <?php if(get_field('post_citations',)): ?>
      <p class="attribution__title flex items-center py-4 font-medium">
        <button
          class="attribution__toggle flex w-6 h-6 items-center justify-center bg-grey-light rounded-full shadow-md"
          aria-controls="attribution-citations"
          aria-expanded="false"
          aria-label="<?php echo e(__('Toggle citations', 'sage')); ?>"
        >
          <?php echo e(get_svg('images.plus', 'w-4')); ?>
        </button>

        <span class="ml-2">Sources</span>
      </p>

      <div class="attribution__content hidden py-4" id="attribution-citations" aria-hidden="true">
        <div class="editorcontent">
          <?php echo get_field('post_citations',); ?>

        </div>
      </div>
    <?php endif; ?>
    <?php if(get_field('page_citations',)): ?>
      <p class="attribution__title flex items-center py-4 font-medium">
        <button
          class="attribution__toggle flex w-6 h-6 items-center justify-center bg-grey-light rounded-full shadow-md"
          aria-controls="attribution-citations"
          aria-expanded="false"
          aria-label="<?php echo e(__('Toggle citations', 'sage')); ?>"
        >
          <?php echo e(get_svg('images.plus', 'w-4')); ?>
        </button>

        <span class="ml-2">Sources</span>
      </p>

      <div class="attribution__content hidden py-4" id="attribution-citations" aria-hidden="true">
        <div class="editorcontent">
          <?php echo get_field('page_citations',); ?>

        </div>
      </div>
    <?php endif; ?>
  </div>
</footer>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/attribution.blade.php ENDPATH**/ ?>