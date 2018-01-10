<?php get_header(); ?>

<h1 class="u-visually-hidden">Svartselet <?= the_title(); ?></h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="u-container">

	<div class="row row--flex-start">
		<div class="grid-100 u-flexbox-center">
			<div class="m-portfolio-item__description">
				<h2 class="uppercase" data-module="fullwidthtextelement"><span><?= the_title(); ?></span></h2>
			</div>
		</div>
		<div class="grid-33 u-flexbox-center">
			<div class="m-portfolio-item__description m-portfolio-item__description--text">
				<div class="serif"><?= the_content(); ?></div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="grid-100 u-flexbox-center">
			<div class="m-portfolio-hero" data-module="imagemodal">
				<?php the_post_thumbnail( 'large' ); ?>
				<div data-module="decoration"></div>
			</div>
		</div>
	</div>
</div>

<!-- ACF Extra wysiwyg -->
<?php $wysiwyg = get_field( 'wysiwyg' ); ?>
<?php if ( $wysiwyg ) : ?>

<div class="row">

	<div class="row">
		<div class="grid-66 u-flexbox-center">
			<div class="m-portfolio-item__description serif">
				<div class="serif"><?= $wysiwyg; ?></div>
			</div>
		</div>
	</div>

</div>
<?php endif; ?>

<div class="u-container">
	<div class="row">

		<!-- ACF Modifier -->
		<?php $modifier = get_field( 'modifier' ); ?>

		<!-- ACF Image -->
		<?php $image = get_field( 'image_1' )['url']; ?>
		<?php $alt = get_field( 'image_1' )['alt']; ?>
		<?php if ( $image ) : ?>
			<div class="grid-<?= $modifier; ?> u-flexbox-center">
				<div class="m-portfolio-item" data-module="imagemodal">
					<img src="<?= $image; ?>" alt="<?= $alt ?>" />
				</div>
			</div>
		<?php endif; ?>

		<!-- ACF Image -->
		<?php $image = get_field( 'image_2' )['url']; ?>
		<?php $alt = get_field( 'image_2' )['alt']; ?>
		<?php if ( $image ) : ?>
			<div class="grid-<?= $modifier; ?> u-flexbox-center">
				<div class="m-portfolio-item" data-module="imagemodal">
					<img src="<?= $image; ?>" alt="<?= $alt ?>" />
				</div>
			</div>
		<?php endif; ?>

		<!-- ACF Image -->
		<?php $image = get_field( 'image_3' )['url']; ?>
		<?php $alt = get_field( 'image_3' )['alt']; ?>
		<?php if ( $image ) : ?>
			<div class="grid-<?= $modifier; ?> u-flexbox-center">
				<div class="m-portfolio-item" data-module="imagemodal">
					<img src="<?= $image; ?>" alt="<?= $alt ?>" />
				</div>
			</div>
		<?php endif; ?>

		<!-- ACF Image -->
		<?php $image = get_field( 'image_4' )['url']; ?>
		<?php $alt = get_field( 'image_4' )['alt']; ?>
		<?php if ( $image ) : ?>
			<div class="grid-<?= $modifier; ?> u-flexbox-center">
				<div class="m-portfolio-item" data-module="imagemodal">
					<img src="<?= $image; ?>" alt="<?= $alt ?>" />
				</div>
			</div>
		<?php endif; ?>

		<!-- ACF Image -->
		<?php $image = get_field( 'image_5' )['url']; ?>
		<?php $alt = get_field( 'image_5' )['alt']; ?>
		<?php if ( $image ) : ?>
			<div class="grid-<?= $modifier; ?> u-flexbox-center">
				<div class="m-portfolio-item" data-module="imagemodal">
					<img src="<?= $image; ?>" alt="<?= $alt ?>" />
				</div>
			</div>
		<?php endif; ?>

		<!-- ACF Image -->
		<?php $image = get_field( 'image_6' )['url']; ?>
		<?php $alt = get_field( 'image_6' )['alt']; ?>
		<?php if ( $image ) : ?>
			<div class="grid-<?= $modifier; ?> u-flexbox-center">
				<div class="m-portfolio-item" data-module="imagemodal">
					<img src="<?= $image; ?>" alt="<?= $alt ?>" />
				</div>
			</div>
		<?php endif; ?>

		<!-- ACF Image -->
		<?php $image = get_field( 'image_7' )['url']; ?>
		<?php $alt = get_field( 'image_7' )['alt']; ?>
		<?php if ( $image ) : ?>
			<div class="grid-<?= $modifier; ?> u-flexbox-center">
				<div class="m-portfolio-item" data-module="imagemodal">
					<img src="<?= $image; ?>" alt="<?= $alt ?>"  />
				</div>
			</div>
		<?php endif; ?>

		<!-- ACF Image -->
		<?php $image = get_field( 'image_8' )['url']; ?>
		<?php $alt = get_field( 'image_8' )['alt']; ?>
		<?php if ( $image ) : ?>
			<div class="grid-<?= $modifier; ?> u-flexbox-center">
				<div class="m-portfolio-item" data-module="imagemodal">
					<img src="<?= $image; ?>" alt="<?= $alt ?>" />
				</div>
			</div>
		<?php endif; ?>


		<?php endwhile; endif; ?>
	</div>

	<!-- ACF Extra content -->
	<?php $content_1 = get_field( 'extra_textblock_1' ); ?>
	<?php $content_2 = get_field( 'extra_textblock_2' ); ?>
	<?php if ( $content_1 || $content_2 ) : ?>
		<div class="row">

			<?php if ( $content_1 ) : ?>
				<div class="row">
					<div class="grid-50 u-flexbox-center">
						<div class="m-portfolio-item__description serif" style="margin-bottom: 0;">
							<div class="serif"><?= $content_1; ?></div>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<!-- ACF Extra content -->
			<?php if ( $content_2 ) : ?>
				<div class="row">
					<div class="grid-50 u-flexbox-center">
						<div class="m-portfolio-item__description serif" style="margin-bottom: 0;">
							<div class="serif"><?= $content_2; ?></div>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>

</div>

<!-- ACF Video -->
<?php $video_1 = get_field( 'video_1' ); ?>
<?php $video_2 = get_field( 'video_2' ); ?>
<?php $video_3 = get_field( 'video_3' ); ?>
<?php if ( $video_1 || $video_2 || $video_1 ) : ?>
	<div class="a-video-wrapper">

		<?php if( $video_1 ) : ?>
			<div class="u-responsive-iframe"><?= $video_1; ?></div>
		<?php endif; ?>

		<?php if( $video_2 ) : ?>
			<div class="u-responsive-iframe"><?= $video_2; ?></div>
		<?php endif; ?>

		<?php if( $video_3 ) : ?>
			<div class="u-responsive-iframe"><?= $video_3; ?></div>
		<?php endif; ?>

	</div>
<?php endif; ?>

<!-- Related posts -->
<?php

$related = new WP_Query(
    array(
        'category__in'   => wp_get_post_categories( $post->ID ),
        'posts_per_page' => 3,
        'post__not_in'   => array( $post->ID ),
        'post_status'    => 'publish'
    )
);

if( $related->have_posts() ) { 
?>

<div class="u-container">
	<div class="row u-border">
		<div class="grid-50 u-flexbox-center">
			<div class="m-portfolio-item__description">
				<h2 class="uppercase">Related work</h2>
				<!-- <p class="serif">These items might also interest you.</p> -->
			</div>
		</div>
	</div>

	<div class="row">

		<?php
	    while( $related->have_posts() ) { 
	    	$related->the_post(); ?>

					<div class="grid-33 u-flexbox-center">
						<div class="m-portfolio-item">
							<a href="<?php the_permalink(); ?>">
							    <?php the_post_thumbnail( 'medium' ); ?>
							
							<h2 class="m-portfolio-item__title serif"><?php the_title(); ?></h2>
							</a>
						</div>
					</div>

        <?php
	    }
	    wp_reset_postdata();
		}

		?>
	</div>
</div>

<?php get_footer();
