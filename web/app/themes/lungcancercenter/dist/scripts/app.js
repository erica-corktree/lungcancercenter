(window.webpackJsonp=window.webpackJsonp||[]).push([[1],{0:function(e,t,a){a("xYjq"),a("cpPS"),e.exports=a("q8Qp")},cpPS:function(e,t){},q8Qp:function(e,t){},xYjq:function(e,t,a){"use strict";a.r(t);var i=a("ouDc");document.addEventListener("DOMContentLoaded",(function(){var e=document.querySelectorAll(".attribution__toggle"),t=document.querySelector(".glide");document.querySelector(".header .button--mobile-menu").addEventListener("click",(function(){document.querySelector(".navigation").classList.toggle("js-active")})),document.querySelector(".navigation .navigation__close").addEventListener("click",(function(){document.querySelector(".navigation").classList.remove("js-active")})),Array.from(document.querySelectorAll(".navigation__toggle-button")).forEach((function(e){e.addEventListener("click",(function(){this.classList.toggle("js-active"),this.parentNode.classList.toggle("js-active")}))})),t&&new i.e(".glide",{type:"carousel",perView:3,focusAt:"center",breakpoints:{800:{perView:2},480:{perView:1}}}).mount({Breakpoints:i.a,Controls:i.b,Keyboard:i.c,Swipe:i.d}),e.length>0&&Array.from(e).forEach((function(e){e.addEventListener("click",(function(){var t=e.parentNode.parentNode.querySelector("#".concat(e.getAttribute("aria-controls")));e.setAttribute("aria-expanded",t.classList.contains("hidden")),t.setAttribute("aria-hidden",t.classList.contains("hidden")),t.classList.toggle("hidden")}))})),Array.from(document.querySelectorAll(".page-nav__expand")).forEach((function(e){e.addEventListener("click",(function(e){var t=this.getAttribute("aria-controls");e.preventDefault(),console.log(t),"false"===this.getAttribute("aria-expanded")?(this.setAttribute("aria-expanded","true"),document.getElementById(t).setAttribute("aria-hidden","false")):(this.setAttribute("aria-expanded","false"),document.getElementById(t).setAttribute("aria-hidden","true"))}))})),jQuery(window).on("scroll",throttle((function(){var e=jQuery(window).scrollTop(),t=e>screenPosition,a=jQuery(".Masthead").height();jQuery("body").hasClass("FrontPage")?e>=jQuery(".Hero").height()-a?jQuery(".BottomCTA").addClass("js-is-visible"):jQuery(".BottomCTA").removeClass("js-is-visible"):e>=jQuery(".PageHeader").height()?jQuery(".BottomCTA").addClass("js-is-visible"):jQuery(".BottomCTA").removeClass("js-is-visible"),!jQuery("body").hasClass("LandingPage")&&window.matchMedia(window.LC.breakpointXsSm).matches&&e>=a&&t?jQuery(".Masthead").addClass("js-hide-header"):jQuery(".Masthead").hasClass("js-hide-header")&&jQuery(".Masthead").removeClass("js-hide-header"),jQuery("body").hasClass("SinglePage")&&!jQuery("body").hasClass("LandingPage")&&window.matchMedia(window.LC.breakpointMd).matches&&e>=jQuery(".PageHeader").height()&&t?jQuery(".Masthead").addClass("js-hide-menu"):jQuery(".Masthead").hasClass("js-hide-menu")&&jQuery(".Masthead").removeClass("js-hide-menu"),screenPosition=e}),250))}))}},[[0,0,4]]]);