<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TVN8D2D');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TVN8D2D"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
        
    <?php wp_body_open(); ?>
    <?php do_action('get_header'); ?>

    <div id="app" role="application">
      <?php echo \Roots\view(\Roots\app('sage.view'), \Roots\app('sage.data'))->render(); ?>
    </div>

    <?php do_action('get_footer'); ?>
    <?php wp_footer(); ?>

    <!-- Invoca Tag -->
    <script data-cfasync="false">(function (i,n,v,o,c,a) {i.InvocaTagId = o; var s = n.createElement('script'); s.type = 'text/javascript';s.async = true; s.src = ('https:' === n.location.protocol ? 'https://' : 'http://' ) + v;var fs = n.getElementsByTagName('script')[0]; fs.parentNode.insertBefore(s, fs);})(window, document, 'solutions.invocacdn.com/js/invoca-latest.min.js', '1217/1252591798');</script>
    <!-- END Invoca Tag -->
  </body>
</html>
