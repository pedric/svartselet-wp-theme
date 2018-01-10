<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>
  	<?php $title = bloginfo('name') ; echo ' | '; echo the_title(); ?>
  </title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,700" rel="stylesheet">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon.png">

  <?php wp_head(); ?>
</head>
<body data-module="smoothscroll">

  <div class="m-loader" data-module="removeelementonload">
    <div class="m-loader__icon-wrapper">
      <div class="m-loader__icon">
        <div></div>
        <div></div>
      </div>
    </div>
  </div>

  <header>

  	<div data-module="togglemenu">
  		<div class="o-main-menu">
  			<nav class="o-main-menu__nav">
  				<?php wp_nav_menu(); ?>
  			</nav>
  		</div>
  		<div class="m-burger__wrapper">
  			<!-- <div class="site-logo">
  				<a href="/">
  					<img src="<?php bloginfo('template_directory'); ?>/img/site-logo-line.svg">
  				</a>
  			</div> -->
  			<div class="m-burger">
  				<div class="m-burger__bar"></div>
  				<div class="m-burger__bar"></div>
  				<div class="m-burger__bar"></div>
  			</div>
  		</div>
  	</div>
  </header>