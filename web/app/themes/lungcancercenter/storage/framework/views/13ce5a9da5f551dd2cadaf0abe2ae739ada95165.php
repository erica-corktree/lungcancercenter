<?php $__env->startSection('content'); ?>
  <?php if(isset($blog->featured_post)): ?>
    <?php echo $__env->make('partials.blog-featured-post', ['id' => $blog->featured_post], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>

  <div class="container py-12">
    <?php if (empty($query)) : ?><?php global $wp_query; ?><?php $query = $wp_query; ?><?php endif; ?><?php if (! $query->have_posts()) : ?>
       <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'warning','message' => 'Sorry, no results were found.']); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
      <?php echo get_search_form(false); ?>

    <?php wp_reset_postdata(); endif; ?>

    <?php if (empty($query)) : ?><?php global $wp_query; ?><?php $query = $wp_query; ?><?php endif; ?><?php if ($query->have_posts()) : ?>
      <h2 class="mb-8 text-3xl font-medium text-blue-dark"><?php echo $blog->heading ?? __('Latest Articles', 'sage'); ?></h2>

      <div class="mb-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php if (empty($query)) : ?><?php global $wp_query; ?><?php $query = $wp_query; ?><?php endif; ?><?php if ($query->have_posts()) : ?><?php while ($query->have_posts()) : $query->the_post(); ?>
          <?php echo $__env->first(['partials.content-' . get_post_type(), 'partials.content'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endwhile; wp_reset_postdata(); endif; ?>
      </div>
    <?php wp_reset_postdata(); endif; ?>

    <?php echo $__env->make('partials.pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/home.blade.php ENDPATH**/ ?>