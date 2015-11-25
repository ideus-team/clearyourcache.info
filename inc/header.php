<?php
  include 'inc/vendor/Mobile_Detect.php';
  include 'inc/vendor/Browser.php';
  $detect = new Mobile_Detect();
  $browser = new Browser();
  $device = (!$detect->isMobile()) ? 'desktop' : ($detect->isTablet() ? 'tablet' : 'mobile');

  switch ($device) {
    case 'mobile':
      $viewport = '640';
      break;
    case 'tablet':
      $viewport = '1024';
      break;
    case 'desktop':
    default:
      $viewport = 'device-width';
      break;
  }
  $isHomepage = (basename($_SERVER['PHP_SELF']) == 'index.php');
  $title = ($isHomepage) ? $pageName : $siteName.' : '.$pageName;
?>
<!DOCTYPE html>
<!--[if IE 7]>         <html class="-device_<?=$device?> no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="-device_<?=$device?> no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="-device_<?=$device?> no-js ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="-device_<?=$device?> no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <title><?=$title?></title>
  <meta name="description" content="Как сбросить кеш?" />
  <meta name="viewport" content="width=<?=$viewport?>" />
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="stylesheet" href="css/main.css" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
  <script>window.Modernizr || document.write('<script src="js/vendor/modernizr-2.6.2.min.js"><\/script>')</script>
  <!--[if lte IE 8]><script src="js/legacy/ie8.js"></script><![endif]-->
  <meta property="og:type" content="company" />
  <meta property="og:site_name" content="ClearYourCache" />
  <meta property="og:url" content="http://clearyourcache.info/" />
  <meta property="og:title" content="Как сбросить кеш?" />
  <meta property="og:description" content="У МЕНЯ НИЧЕГО НЕ ОБНОВИЛОСЬ! Ага, тогда почистите кеш." />
  <meta property="og:image" content="http://clearyourcache.info/img/developer.png" />
</head>
<body class="-page_<?=$uri?><?=(!$isHomepage) ? ' -page_inner' : '';?> -page_lang_ru" id="clearyourcache.info">
  <!--[if lte IE 7]>
    <div class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</div>
  <![endif]-->
  <div class="l-wrapper">
    <header class="l-siteHeader" role="banner">
      <a class="b-forkMe" href="https://github.com/ideus-team/clearyourcache.info/" target="_blank"><img class="b-forkMe__img" src="img/git@2x.png" alt="Fork me on GitHub"></a>
      <div class="b-siteHeader">
         <ul class="b-header__langSwitcher js-langSwitcher">
          <li class="b-langSwitcher__item"><a href="#" class="b-langSwitcher__link -state_rus -state_current">RUS</a></li>
          <li class="b-langSwitcher__item"><a href="#" class="b-langSwitcher__link -state_eng">ENG</a></li>
        </ul>
      </div>
      
    </header>

    <div class="l-content">
