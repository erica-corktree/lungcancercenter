<p class="mb-4">
  <span><?php echo e(__('By', 'sage')); ?></span>
  <a class="underline text-yellow" href="<?php echo e($author->url); ?>" rel="author" class="fn"><?php echo e($author->name); ?></a>
  <span>&#124;</span>
  <time class="updated" datetime="<?php echo e(get_post_time('c', true)); ?>"><?php echo e(get_the_date()); ?></time>
</p>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/entry-meta.blade.php ENDPATH**/ ?>