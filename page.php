<?php
/**
 * Template name: Page
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
			<div class="m-portfolio-item__description m-portfolio-item__description--text">
				<div class="serif"><?php the_content(); ?></div>
			</div>
		</div>
	</div>

	<div class="m-portfolio-hero">
		<?php the_post_thumbnail( 'large' ); ?>
		<div data-module="decoration"></div>
	</div>

	<!-- ACF Extra wysiwyg -->
	<?php $wysiwyg = get_field( 'wysiwyg' ); ?>
	<?php if ( $wysiwyg ) : ?>

	<div class="row row--flex-start">
		<div class="grid-33 u-flexbox-center">
			<div class="m-portfolio-item__description serif">
				<div class="serif"><?= $wysiwyg; ?></div>
			</div>
		</div>
	</div>
	<?php endif; ?>

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
						<img src="<?= $image; ?>" alt="<?= $alt ?>" />
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


		</div>

		<!-- ACF Extra content -->
		<?php $content_1 = get_field( 'extra_textblock_1' ); ?>
		<?php $content_2 = get_field( 'extra_textblock_2' ); ?>
		<?php if ( $content_1 || $content_2 ) : ?>
			<div class="row row--flex-start">

				<?php if ( $content_1 ) : ?>
					<div class="grid-33 u-flexbox-center">
						<div class="m-portfolio-item__description serif" style="margin-bottom: 0;">
							<div class="serif"><?= $content_1; ?></div>
						</div>
					</div>
				<?php endif; ?>

				<!-- ACF Extra content -->
				<?php if ( $content_2 ) : ?>
					<div class="grid-33 u-flexbox-center">
						<div class="m-portfolio-item__description serif" style="margin-bottom: 0;">
							<div class="serif"><?= $content_2; ?></div>
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

</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
