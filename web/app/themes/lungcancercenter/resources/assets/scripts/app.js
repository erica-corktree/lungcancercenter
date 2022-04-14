/**
 * External Dependencies
 */
import Glide, { Breakpoints, Controls, Keyboard, Swipe } from '@glidejs/glide/dist/glide.modular.esm';

/**
 * Ta-da!...
 */
document.addEventListener('DOMContentLoaded', () => {
  let atts   = document.querySelectorAll('.attribution__toggle');
  let slider = document.querySelector('.glide');

  // Mobile menu button
  document.querySelector('.header .button--mobile-menu').addEventListener('click', function () {
    document.querySelector('.navigation').classList.toggle('js-active');
  });
  // END - Mobile menu button

  // Close button on mobile menu
  document.querySelector('.navigation .navigation__close').addEventListener('click', () => {
    document.querySelector('.navigation').classList.remove('js-active');
  });
  // END - Close button on mobile menu

  // Mobile nav menu
  Array.from(document.querySelectorAll('.navigation__toggle-button')).forEach((el) => {
    el.addEventListener('click', function () {
      this.classList.toggle('js-active');
      this.parentNode.classList.toggle('js-active');
    });
  });
  // END - Mobile nav menu

  // Card slider
  if (slider) {
    new Glide('.glide', {
      type: 'carousel',
      perView: 3,
      focusAt: 'center',
      breakpoints: {
        800: { perView: 2 },
        480: { perView: 1 },
      },
    }).mount({ Breakpoints, Controls, Keyboard, Swipe });
  }
  // END - Card slider

  // Attribution accordion
  if (atts.length > 0) {
    Array.from(atts).forEach((btn) => {
      btn.addEventListener('click', () => {
        let panel = btn.parentNode.parentNode.querySelector(`#${btn.getAttribute('aria-controls')}`);

        btn.setAttribute('aria-expanded', panel.classList.contains('hidden'));
        panel.setAttribute('aria-hidden', panel.classList.contains('hidden'));
        panel.classList.toggle('hidden');
      });
    });
  }
  // END - Attribution accordion

  // Sidebar page nav
  Array.from(document.querySelectorAll('.page-nav__expand')).forEach((el) => {
    el.addEventListener('click', function (event) {
      let menuId = this.getAttribute('aria-controls');

      event.preventDefault();
      console.log(menuId);

      if (this.getAttribute('aria-expanded') === 'false') {
        this.setAttribute('aria-expanded', 'true');
        document.getElementById(menuId).setAttribute('aria-hidden', 'false');
      } else {
        this.setAttribute('aria-expanded', 'false');
        document.getElementById(menuId).setAttribute('aria-hidden', 'true');
      }
    });
  });
  // END - Sidebar page nav

  // Show bottom CTA on scroll
  jQuery(window).on('scroll', throttle(function () {
    let scroll        = jQuery(window).scrollTop();
    let scrollingDown = scroll > screenPosition;
    let headerHeight  = jQuery('.Masthead').height();

    if (jQuery('body').hasClass('FrontPage')) {
      if (scroll >= (jQuery('.Hero').height() - headerHeight)) {
        jQuery('.BottomCTA').addClass('js-is-visible');
      } else {
        jQuery('.BottomCTA').removeClass('js-is-visible');
      }
    } else {
      if (scroll >= jQuery('.PageHeader').height()) {
        jQuery('.BottomCTA').addClass('js-is-visible');
      } else {
        jQuery('.BottomCTA').removeClass('js-is-visible');
      }
    }

    if (!jQuery('body').hasClass('LandingPage')
        && window.matchMedia(window.LC.breakpointXsSm).matches
        && scroll >= headerHeight
        && scrollingDown) {
      jQuery('.Masthead').addClass('js-hide-header');
    } else if (jQuery('.Masthead').hasClass('js-hide-header')) {
      jQuery('.Masthead').removeClass('js-hide-header');
    }

    if ((jQuery('body').hasClass('SinglePage') && !jQuery('body').hasClass('LandingPage'))
        && window.matchMedia(window.LC.breakpointMd).matches
        && scroll >= jQuery('.PageHeader').height()
        && scrollingDown) {
      jQuery('.Masthead').addClass('js-hide-menu');
    } else if (jQuery('.Masthead').hasClass('js-hide-menu')) {
      jQuery('.Masthead').removeClass('js-hide-menu');
    }

    screenPosition = scroll;
  }, 250));
  // END - Show bottom CTA on scroll
});
