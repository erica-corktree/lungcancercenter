<form class="flex items-stretch shadow" role="search" method="get"  action="<?php echo e(home_url('/')); ?>">
  <label class="order-1 md:order-2 block w-full">
    <span class="screen-reader-text"><?php echo e(_x('Search for:', 'label', 'sage')); ?></span>
    <input
      type="search"
      class="bg-white focus:outline-none focus:shadow-outline border rounded-none py-2 px-4 block w-full appearance-none leading-normal"
      placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'sage'); ?>"
      value="<?php echo e(get_search_query()); ?>"
      name="s"
    >
  </label>

  <button class="button button--green order-2 md:order-1" type="submit">
    <span class="screen-reader-text"><?php echo e(esc_attr_x('Search', 'submit button', 'sage')); ?></span>
    <?php echo e(get_svg('images.search', 'w-6 h-auto')); ?>
  </button>
</form>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/forms/search.blade.php ENDPATH**/ ?>