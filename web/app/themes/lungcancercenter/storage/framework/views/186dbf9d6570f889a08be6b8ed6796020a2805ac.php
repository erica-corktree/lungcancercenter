<?php if($id): ?>
  <?php $author = get_post_field('post_author', $id); ?>

  <div class="hero hero--blog-featured-post">
    <div class="container">
      <div class="hero__inner">
        <h1 class="hero__title"><?= get_the_title($id); ?></h1>

        <div class="hero__introduction">
          <p class="mb-4"><?php echo e(__('By', 'sage')); ?> <?php echo e(get_the_author_meta('display_name', $author)); ?> <span>&#124;</span> <time datetime="<?php if (is_a('c', 'WP_Post') || is_int('c')) : ?><?= get_the_date('', 'c'); ?><?php else : ?><?= get_the_date('c'); ?><?php endif; ?>"><?php if (is_a('F j, Y', 'WP_Post') || is_int('F j, Y')) : ?><?= get_the_date('', 'F j, Y'); ?><?php else : ?><?= get_the_date('F j, Y'); ?><?php endif; ?></time></p>
          <p class="mb-8 text-lg"><?php echo get_post_meta($id, '_yoast_wpseo_metadesc', true) ?? get_the_excerpt($id); ?></p>
          <p><a class="button button--green" href="<?php echo e(get_the_permalink($id)); ?>"><?php echo e(__('Read More', 'sage')); ?></a></p>
        </div>
      </div>
    </div>

    <?php if(get_field('post_hero_photo', $id)): ?>
      <?php $photo = @json_decode(json_encode(get_field('post_hero_photo', $id))); ?>
       <?php if (isset($component)) { $__componentOriginal74ecd88fe1aecd1738c23f3373eec219f200a693 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Photo::class, ['class' => 'photo--hero','photo' => $photo]); ?>
<?php $component->withName('photo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal74ecd88fe1aecd1738c23f3373eec219f200a693)): ?>
<?php $component = $__componentOriginal74ecd88fe1aecd1738c23f3373eec219f200a693; ?>
<?php unset($__componentOriginal74ecd88fe1aecd1738c23f3373eec219f200a693); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="none" height="0" width="0">
        <clipPath id="wave-hero" clipPathUnits="objectBoundingBox">
          <path d="M1,0 H0 c0,0,0.126,0.628,0.339,0.729 c0.121,0.076,0.202,-0.021,0.33,0.026 c0.134,0.055,0.193,0.196,0.331,0.245 V0" />
        </clipPath>
      </svg>
    <?php endif; ?>
  </div>
<?php endif; ?>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/blog-featured-post.blade.php ENDPATH**/ ?>