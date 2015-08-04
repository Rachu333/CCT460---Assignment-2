<?php
/**
 * Template Name: Site Map Page 
 *
 * @package Fluffy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		
		
		<!-- The following code will make sure text written in the content box shows -->		
			
			<?php the_content (); ?> 
			
			
			
		<!-- The following code will display the list of posts under the "blogposts" category- my category id is 3 --> 
		<?php 
		$args=array('showposts'=>3, 'showposts'=>3 );   
		$my_query = new WP_Query( 'cat=3', $args ); ?>
		
	
	<?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?> 
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
		
		
		<h2 class="category"><?php the_category(); ?></h2>
		<h3 class="post-title"><?php the_title(); ?></h3> 
		
	<!-- Permalink code to ensure the image displayed will take the user to the specific blog post under the same category -->
	
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<?php the_post_thumbnail('category-thumbnail'); ?></a> 	
		</div> 
		
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"></a></h2> 
		</div> 
		
		
		</div><!-- .entry-content --> 
		</article><!-- #post-## -->
		<?php endwhile; endif; ?>

	
	



	<!-- The following code will display a list of posts in my sitemap page --> 
			<h2>Posts</h2> 
			<ul class="sitemap">
				<?php wp_get_archives (' type=postbypost'); ?>
			</ul>

	
	
	
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>