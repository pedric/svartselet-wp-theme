<?php 
/**
 * Template name: Arkiv
 *
 * @package svartselet
 */
get_header(); ?>

<h1 class="u-visually-hidden">Svartselet <?= the_title(); ?></h1>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

<div class="u-container">
	<div class="row row--flex-start">
		<div class="grid-100 u-flexbox-center">
			<div class="m-portfolio-item__description">
				<h2 class="uppercase" data-module="fullwidthtextelement"><span><?= the_title(); ?></span></h2>
			</div>
		</div>
		<div class="grid-33 u-flexbox-center">
			<div class="m-portfolio-item__description">
				<div class="serif"><?= the_content(); ?></div>
			</div>
		</div>
	</div>
</div>

<?php endwhile; endif; ?>

<div class="u-container">
	<div class="row">

		<?php $all_posts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish')); ?>
		 
		<?php if ( $all_posts->have_posts() ) : while ( $all_posts->have_posts() ) : $all_posts->the_post(); ?>
		 
		 	<?php if ( get_field('publish') ) : ?>
						
				<div class="grid-33 u-flexbox-center">
					<div class="m-portfolio-item m-portfolio-item--small">
						<a href="<?php the_permalink(); ?>">
						    <?php the_post_thumbnail( 'medium' ); ?>
						
						<h2 class="m-portfolio-item__title serif"><?php the_title(); ?></h2>
						</a>
					</div>
				</div>

			<?php endif; ?>
		 
		<?php endwhile; endif; ?>

		<?php wp_reset_postdata(); ?>

	</div>
</div>

<?php get_footer(); ?>