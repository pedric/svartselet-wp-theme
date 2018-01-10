<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header(); ?>

<h1 class="u-visually-hidden">Svartselet <?= the_title(); ?></h1>

<div class="u-container">

	<div class="row">
		<div class="grid-50 u-flexbox-center">
			<div class="m-portfolio-item__description">
				<h2 class="uppercase">404</h2>
				<div class="serif">Nothing was found on this url.. <a href="/">This way home.</a></div>
			</div>
		</div>
	</div>

	<div class="m-portfolio-hero" data-module="setheroheight">
		<?php the_post_thumbnail( 'medium' ); ?>
	</div>

</div>

<?php
get_footer();
