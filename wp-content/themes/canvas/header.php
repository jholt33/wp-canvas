<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title><?php wp_title(''); echo ' | ';  bloginfo( 'name' ); ?></title>

<?php wp_head() ?>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

<!-- Header
============================================= -->
<header id="header" class="full-header">

  <div id="header-wrap">

    <div class="container clearfix">

      <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

      <!-- Logo
      ============================================= -->
      <div id="logo">
        <a href="<?php bloginfo('url');?>" class="standard-logo" data-dark-logo="<?php bloginfo('template_directory');?>/images/logo-dark.png"><img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="Canvas Logo"></a>
        <a href="<?php bloginfo('url');?>" class="retina-logo" data-dark-logo="<?php bloginfo('template_directory');?>/images/logo-dark@2x.png"><img src="<?php bloginfo('template_directory');?>/images/logo@2x.png" alt="Canvas Logo"></a>
      </div><!-- #logo end -->

      <!-- Primary Navigation
      ============================================= -->
      <nav id="primary-menu">

        <ul>
          <li class="current"><a href="<?php bloginfo('url');?>"><div>Home</div></a>

          </li>
          <li><a href="#"><div>My Work</div></a>

          </li>
          <li><a href="#"><div>About</div></a>

          </li>
          <li><a href="#"><div>Contact</div></a>

          </li>

        </ul>

        <!-- Top Search
        ============================================= -->
        <div id="top-search">
          <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
          <form action="search.html" method="get">
            <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
          </form>
        </div><!-- #top-search end -->

      </nav><!-- #primary-menu end -->

    </div>

  </div>

</header><!-- #header end -->
