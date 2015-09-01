<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>

    <!-- Load CSS-->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>

  <?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--WP Title Tag-->
          <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu',
              'menu'            => false,
              'container'       => false,
              'container_class' => false,
              'container_id'    => false,
              'menu_class'      => false,
              'menu_id'         => false,
              'items_wrap' => '%3$s' ) ); ?>
            <!--<?php wp_list_pages(array('title_li' => '')); ?>-->
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>