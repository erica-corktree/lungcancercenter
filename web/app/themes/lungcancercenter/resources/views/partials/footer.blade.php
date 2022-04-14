<footer class="footer">
  <div class="container flex flex-wrap">
    <div class="w-full md:w-1/3">
      @if (isset($siteName))
        <a class="brand brand--footer" href="{{ home_url('/') }}">
          <img class="newFooter_logo" src="/app/uploads/2021/03/LCC_Final-Logowhite.svg" alt="website logo" width="387px" height="93px">
        </a>
      @endif

      @if (isset($siteOptions->footer->copyright))
        <p class="mb-4 text-center md:text-left">
          @shortcode($siteOptions->footer->copyright)
        </p>
      @endif

      @if (isset($footer_secondary_navigation))
        <ul class="mb-8 md:mb-0 flex items-center justify-center md:justify-start">
          @foreach ($footer_secondary_navigation as $item)
            <li class="mr-4 last:mr-0">
              <a class="text-white underline" href="{{ $item->url }}">{{ $item->label }}</a>
            </li>
          @endforeach
        </ul>
      @endif
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
      @if (isset($footer_navigation))
        <ul class="mb-8 pb-8 flex flex-col md:flex-row items-stretch border-blue border-b">
          @foreach ($footer_navigation as $item)
            <li class="mb-4 md:mb-0 flex flex-grow item-stretch border-blue md:border-r md:first:border-l last:mb-0">
              <a class="px-2 w-full text-center text-white leading-none" href="{{ $item->url }}">{{ $item->label }}</a>
            </li>
          @endforeach
        </ul>
      @endif

      @if (isset($siteOptions->footer->disclaimer))
        <p class="text-sm text-left md:text-justify">
          @shortcode($siteOptions->footer->disclaimer)
        </p>
      @endif
    </div>
  </div>
</footer>
