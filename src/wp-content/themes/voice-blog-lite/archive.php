<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package voice_blog_lite
 */

get_header();
?>

	<div id="primary" class="content-area" >
		<main id="main" class="site-main">
		<?php
			if(absint(get_theme_mod('voice_blog_sidebar_enable','1')) == 1) : 
			$modes1 = 8;
			elseif (absint(get_theme_mod('voice_blog_sidebar_enable','1')) == 0) :
			$modes1 = 12;
			endif ;
			?>
		<?php if ( have_posts() ) : ?>

			<header class="page-header" >
			<section class="search-result" id ="scroll-here" >
				<div class="container">
					<div class="result-holder">
						<?php
						the_archive_title( '<h1 class="page-title search-result">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</div>
				</div>
			<section>
			</header><!-- .page-header -->
			<section class="middle-content inner-content">
			<div class="container-fluid">
				<div class="row">
				
					<div class="col-lg-<?php echo esc_attr($modes1) ?>">
					<?php if (absint(get_theme_mod('voice_blog_lite_blog_post_layout','1'))==1): ?>
							<div class="thumb-blog">
								<div class="row">
									<?php if ( have_posts() ) :
										/* Start the Loop */
										while ( have_posts() ) :
											the_post();
											?>
											<div class="col-md-12">
											<?php
												get_template_part( 'template-parts/content-1column' ); 
												
											?>
											</div>
										<?php endwhile;
										else :
										get_template_part( 'template-parts/content', 'none' );
										endif;
									?>
								</div>
								<div class=" text-center">
									<?php 
									
										the_posts_pagination( array(
											'pre_text' => __('Previous', 'voice-blog-lite'),
											'next_text' => __('Next', 'voice-blog-lite'),
										)); 
									
									?>
								</div>
							</div>
							<?php endif;?>
						<?php if (absint(get_theme_mod('voice_blog_lite_blog_post_layout','1')) == 2 ): ?>
						<div class="grid-blog">
						<section>
							<div class="row">
								<?php if ( have_posts() ) :
									/* Start the Loop */
									while ( have_posts() ) :
									the_post();
									?>
									<div class="col-md-6">
									<?php 
										get_template_part( 'template-parts/content' ); 
								
									?>
									</div>
								<?php endwhile;
								else :
								get_template_part( 'template-parts/content', 'none' );
								endif;
								?>
							</div>
							<div class=" text-center">
								<?php 
								
									the_posts_pagination( array(
										'pre_text' => __('Previous', 'voice-blog-lite'),
										'next_text' => __('Next', 'voice-blog-lite'),
									)); 
								
								?>
							</div>
						</section>
						</div>
						<?php endif;?>
						<?php if (absint(get_theme_mod('voice_blog_lite_blog_post_layout','1'))==3): ?>
						<div class="list-blog">
						<section>
							<div class="row">
								<?php if ( have_posts() ) :
									/* Start the Loop */
									while ( have_posts() ) :
									the_post();
									?>
									<div class="col-md-12">
									<?php 
										get_template_part( 'template-parts/content-list' ); 
								
									?>
									</div>
								<?php endwhile;
								else :
								get_template_part( 'template-parts/content', 'none' );
								endif;
								?>
							</div>
							<div class=" text-center">
								<?php 
								
									the_posts_pagination( array(
										'pre_text' => __('Previous', 'voice-blog-lite'),
										'next_text' => __('Next', 'voice-blog-lite'),
									)); 
								
								?>
							</div>
						</section>
						</div>
						<?php endif;?>
						
						</div>
						<?php if(absint(get_theme_mod('voice_blog_sidebar_enable','1')) == 1) : ?>
						<div class="col-lg-4">
								<?php get_sidebar()?>
						</div>
						<?php endif; ?>
					
				</div>
			</div>
		</section>
		<?php else : 
			get_template_part( 'template-parts/content', 'none' );
		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();