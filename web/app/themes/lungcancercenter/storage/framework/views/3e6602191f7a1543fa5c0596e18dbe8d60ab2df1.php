<?php $__env->startSection('content'); ?>
  <div class="relative py-8 md:py-10 text-blue-dark bg-grey-light">
    <div class="container">
      <h1 class="font-medium text-2xl md:text-4xl">
        <?php echo sprintf(__('Search Results for "%s"', 'sage'), get_search_query()); ?>

      </h1>
    </div>
  </div>

  <div class="container py-8 md:py-12">
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
       <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => '','message' => 'About '.e($results_count).' results']); ?>
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

      <div>
        <?php if (empty($query)) : ?><?php global $wp_query; ?><?php $query = $wp_query; ?><?php endif; ?><?php if ($query->have_posts()) : ?><?php while ($query->have_posts()) : $query->the_post(); ?>
          <article class="mb-6 last:mb-8 pb-6 first:pt-6 border-b first:border-t">
            <header>
              <h2 class="font-medium text-lg"><a class="text-blue-dark" href="<?= get_permalink(); ?>"><?= get_the_title(); ?></a></h2>
              <p><a class="text-teal" href="<?= get_permalink(); ?>"><?= get_permalink(); ?></a></p>
              <?php echo $__env->renderWhen(get_post_type() === 'post', 'partials/entry-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
            </header>

            <div class="mt-2 text-grey-dark">
              <?php if(get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true)): ?>
                <?php echo e(get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true)); ?>

              <?php else: ?>
                <?php the_excerpt(); ?>
              <?php endif; ?>
            </div>
          </article>
        <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    <?php wp_reset_postdata(); endif; ?>
    <?php echo $__env->make('partials.pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/search.blade.php ENDPATH**/ ?>