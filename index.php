<?php get_header(); ?>

<h1 class="u-visually-hidden">Svartselet</h1>

<!-- Video bg logo -->
<!-- <div class="header-logo">
	<div class="header-logo__logo relative">
		<video class="header-logo__video" playsinline autoplay muted>
		<source src="<?php bloginfo('template_directory'); ?>/vid/bygge.mov" type="video/mov">
		<source src="<?php bloginfo('template_directory'); ?>/vid/bygge.mp4" type="video/mp4">
		</video>
		<a href="/">
			<img src="<?php bloginfo('template_directory'); ?>/img/site-logo-black-hole.svg">
		</a>
	</div>
</div> -->

<div class="u-container">

	<div class="u-big-centering-flexbox">
		<div class="row row--flex-start">
			<div class="grid-100 u-flexbox-center">
				<div class="m-portfolio-item__description">
					<h2 class="uppercase" data-module="fullwidthtextelement"><span><?php bloginfo('name'); ?></span></h2>
				</div>
			</div>
			<div class="grid-33">
				<div class="m-portfolio-item__description">
					<p class="serif">You can have a look at <a href="/work">all of the work here</a> or <a href="/about">read about</a> the studio. <a class="smooth-scroll" href="#selected-items">Scroll down</a> for some selected items from the portfolio.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row" id="selected-items">

		<!-- Small hero -->
		<!-- <div class="grid-100 u-flexbox-center">
			<div class="m-portfolio-item__description m-portfolio-item--business-card">
				<h2 class="uppercase"><?php bloginfo('name'); ?></h2>
				<p class="serif"><?php bloginfo( 'description'); ?></p>
			</div>
		</div> -->

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php if ( get_field('startpage_item') ) : ?>
				
				<div class="grid-50 u-flexbox-center">
					<div class="m-portfolio-item">
						<a href="<?php the_permalink(); ?>">
						    <?php the_post_thumbnail( 'medium' ); ?>
						
						<h2 class="m-portfolio-item__title serif"><?php the_title(); ?></h2>
						</a>
					</div>
				</div>

			<?php endif; ?>

		<?php endwhile; endif; ?>
	
	</div>
</div>

<?php get_footer(); ?>
