<header class="header">
  <div class="container h-20 md:h-24 flex items-center justify-between">
  
    <a class="brand" style="padding-right:25px;" href="<?php echo e(home_url('/')); ?>">
      <img class="logo-size" src="/app/uploads/2021/03/LCC_Final-Logo-01.svg" alt="website logo" width="350px" height="auto">
    </a>

    <a href="tel:8339971947" style="padding-right:5px;">
    <button class="button button--grey-light flex md:hidden p-1 items-center justify-center inline-block w-10 h-auto">  
      <img class="phone-number" src="/app/uploads/2021/03/phone-01.png" alt="phone number" width="43px" height="43px">
    </button>
    </a>

    <p class="hidden md:flex items-center">
      <?php if(isset($siteOptions->header->cta->text)): ?>
        <span class="pr-2 max-w-xs font-medium leading-tight text-right text-blue-dark" style="max-width: 160px;">
          <?php echo e($siteOptions->header->cta->text); ?>

        </span>
      <?php endif; ?>

      <?php if(isset($siteOptions->phone->dialin)): ?>
        <a class="font-heading font-medium text-3xl text-teal" href="tel:<?php echo e($siteOptions->phone->dialin); ?>">
          <?php echo e($siteOptions->phone->dialin); ?>

        </a>
      <?php endif; ?>
    </p>
    
    <button class="button button--grey-light button--mobile-menu flex md:hidden p-1 items-center justify-center">
      <?php echo e(get_svg('images.menu', 'inline-block w-8 h-auto')); ?>
    </button>
  </div>

  <?php if(has_nav_menu('primary_navigation')): ?>
    <?php echo $__env->make('partials.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>
</header>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/header.blade.php ENDPATH**/ ?>