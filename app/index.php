<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"><!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>Trivia</title>
    <meta property="og:title" content="texto"/>
    <meta property="og:url" content="http://vuela.aeromexico.com/url/"/>
    <meta property="og:description" content="Aeroméxico"/>
    <meta property="og:image" content="http://vuela.aeromexico.com/url/images/facebook-share.jpg"/>
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <link rel="shortcut icon" type="image/x-icon" href="http://vuela.aeromexico.com/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Google Tag Manager -->
    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-PTTVTM" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PTTVTM');
    </script>


    <?php require_once('../E4menu/menutop.php'); ?> 

    <section class="intro">
      <div class="row">
        <p class="text-centered">
          <img alt="" class="ResponsiveImage ContentHeader-icon" src="images/icon.png" title="">
        </p>
        <h1 class="text-centered main-title">#ViajeroExperto</h1>
        <div class="intro-text col-sm-7 item-centered">
          <p>Descubre todas las posibilidades y saca el máximo provecho a tu viaje con los 
          productos que te ofrecemos para que hagas tu viaje más tuyo.</p>
        </div>
      </div>
    </section>
    <!-- dynamic -->
    <div class="container-center">
      <div class="row">
      <h4>hola</h4>
      </div>
    </div>
      <?php require_once('../E4menu/footer.php'); ?> 
  <!-- scripts -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!--<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>-->
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/app.js"></script>
</body>
</html>