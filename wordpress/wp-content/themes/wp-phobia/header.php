<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

  <div class="header">

    <a class="mm_btn"><span></span></a>

    <a href="<?php echo home_url(); ?>" class="logo"></a>

    <p class="header_text">“Нет ничего приятнее исчезающего страха” <span>Ричард Бах</span></p>
    <div class="header_search">
      <form action="<?php echo home_url(); ?>" id="searchform" method="get" name="searchform">
        <input type="text" class="search" id="s" name="s" placeholder="Поиск по сайту" value="">
        <a class="search_but" id="searchsubmit" onclick="document.forms['searchform'].submit();"></a>
      </form>
    </div>
  </div>

  <div class="top_menu_wrap">
    <a href="#" class="menu_close"></a>
    <?php wpeHeadNav(); ?>

    <div class="fears_type_mobile">
      <span class="ftm_head">Виды страхов</span>
      <?php wpeFootNav(); ?>
    </div>
  </div>

  <div class="content_1170 clearfix">
