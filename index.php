<?php
// Example by deerme.org
$data = file_get_contents("https://www.coingecko.com/es/tabla_de_precios/ripple/usd/");
 
if ( preg_match('|<td>\s+menos de 1 minuto ago\s+</td>\s+<td>(.*?)</td>|is' , $data , $cap ) )
{
    //echo "Ripple ".$cap[1];
}

$data2 = file_get_contents("https://www.coingecko.com/es/tabla_de_precios/ripple/mxn/");
 
if ( preg_match('|<td>\s+menos de 1 minuto ago\s+</td>\s+<td>(.*?)</td>|is' , $data2 , $cap2 ) )
{
    //echo "Ripple ".$cap[1];
}

$data3 = file_get_contents("https://www.coingecko.com/es/tabla_de_precios/ripple/btc/");
 
if ( preg_match('|<td>\s+menos de 1 minuto ago\s+</td>\s+<td>(.*?)</td>|is' , $data3 , $cap3 ) )
{
    //echo "Ripple ".$cap[1];
}
//echo "Hola";
?>

<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Ripple XRP</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="$$hosted_libs_prefix$$/$$version$$/material.teal-red.min.css">
    <link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/style.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
      <div class="demo-ribbon"></div>
      <main class="demo-main mdl-layout__content">
        <div class="demo-container mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
		  <center>
            <h3>Ripple XRP/USD</h3>
              <h1>
                 <?php echo $cap[1] ?>
              </h1>
			  <h3>Ripple XRP/MXN</h3>
              <h1>
                 <?php echo $cap2[1] ?>
              </h1>
			   <h2>Ripple XRP/BTC</h2>
              <h3>
                 <?php echo $cap3[1] ?>
              </h3>
			  <br>
			  </center>
              
          </div>
        </div>
      </main>
    </div>
    <a href="https://github.com/google/material-design-lite/blob/mdl-1.x/templates/article/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Calificar</a>
    <script src="js/material.min.js"></script>
  </body>
</html>