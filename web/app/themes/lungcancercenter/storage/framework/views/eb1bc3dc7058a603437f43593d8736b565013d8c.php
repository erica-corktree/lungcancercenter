<footer class="footer">
  <div class="container flex flex-wrap">
    <div class="w-full md:w-1/3">
      <?php if(isset($siteName)): ?>
        <a class="brand brand--footer" href="<?php echo e(home_url('/')); ?>">
          <img class="newFooter_logo" src="/app/uploads/2021/03/LCC_Final-Logowhite.svg" alt="website logo" width="387px" height="93px">
        </a>
      <?php endif; ?>

      <?php if(isset($siteOptions->footer->copyright)): ?>
        <p class="mb-4 text-center md:text-left">
          <?= do_shortcode($siteOptions->footer->copyright); ?>
        </p>
      <?php endif; ?>

      <?php if(isset($footer_secondary_navigation)): ?>
        <ul class="mb-8 md:mb-0 flex items-center justify-center md:justify-start">
          <?php $__currentLoopData = $footer_secondary_navigation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="mr-4 last:mr-0">
              <a class="text-white underline" href="<?php echo e($item->url); ?>"><?php echo e($item->label); ?></a>
            </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      <?php endif; ?>
      <div class="Footer__socal-icons flex items-center justify-center md:justify-start">
          <a
            class="Footer__social-links"
            href="https://www.facebook.com/CenterLungCancer"
            onclick="window.open(this.href); return false;"
          >
          <img
            class="Footer__social"
            src="/app/uploads/2021/04/facebook.png"
            width="25px"
            height="25px"
            alt="This a facebook icon."
          ></a>
          <a
            class="Footer__social-links"
            href="https://twitter.com/LungCancer_CNTR"
            onclick="window.open(this.href); return false;"
          >
          <img
            class="Footer__social"
            src="/app/uploads/2021/04/twitter.png"
            width="25px"
            height="25px"
            alt="This a twitter icon."
          ></a>
          <a
            class="Footer__social-links"
            href="https://www.linkedin.com/company/lung-cancer-center"
            onclick="window.open(this.href); return false;"
          >
          <img
            class="Footer__social"
            src="/app/uploads/2021/04/linkedin.png"
            width="25px"
            height="25px"
            alt="This a linkedin icon."
          ></a>
        </div>
    </div>


    <div class="w-full md:w-2/3">
    <div class="email_opt">
        <h4>Sign Up For Our Newsletter To Get Up-To-Date Lung Cancer-Related Information</h4>
          <form 
            class="js-cm-form" 
            id="subForm" 
            action="https://www.createsend.com/t/subscribeerror?description=" 
            method="post" 
            data-id="2BE4EF332AA2E32596E38B640E9056191D68B4B12A667A7FB20EEEE911DD37325FF2674D7ECF7F1BE3311CF3518B8DC825870852E236851C5A7734B6E23E33BE">
              <div>
                <div class="form_container">
                  <input 
                    autocomplete="Email" 
                    aria-label="Email" 
                    class="js-cm-email-input qa-input-email" 
                    id="fieldEmail" maxlength="200" 
                    name="cm-jrgttu-jrgttu" 
                    required="" 
                    type="email"
                    placeholder="Type your email here.">
                    
              <button 
                type="submit"
                class="email_opt_btn">&gt;
              </button>
                </div>
              
              </div>
              
              
          </form>
      </div><script type="text/javascript" src="https://js.createsend1.com/javascript/copypastesubscribeformlogic.js"></script>

      <div class="email_clear">

      </div>
      <?php if(isset($footer_navigation)): ?>
        <ul class="mb-8 pb-8 flex flex-col md:flex-row items-stretch border-blue border-b">
          <?php $__currentLoopData = $footer_navigation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="mb-4 md:mb-0 flex flex-grow item-stretch border-blue md:border-r md:first:border-l last:mb-0">
              <a class="px-2 w-full text-center text-white leading-none" href="<?php echo e($item->url); ?>"><?php echo e($item->label); ?></a>
            </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      <?php endif; ?>

      <?php if(isset($siteOptions->footer->disclaimer)): ?>
        <p class="text-sm text-left md:text-justify">
          <?= do_shortcode($siteOptions->footer->disclaimer); ?>
        </p>
      <?php endif; ?>
    </div>
  </div>
</footer>
<?php /**PATH /www/lungcancercenter_374/public/current/web/app/themes/lungcancercenter/resources/views/partials/footer.blade.php ENDPATH**/ ?>