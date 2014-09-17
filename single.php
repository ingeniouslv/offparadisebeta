<?php
/**
 * The single template file.
 *
 * @package _s
 */

get_header(); ?>

	
        		<section class="story-header">
        		
				<?php 
				
					get_template_part( 'content', 'single' );
				?>
        		
        		</section>
        		
	    		<section class="site-translate">
        		
		<?php 
			/* get_template_part( 'content', get_post_format() ); */
			if ( is_single() ) :
				query_posts( $query_string . '&posts_per_page=1' );			
				while ( have_posts() ) : the_post(); 
		?>
        		
	        	<article id="post-<?php the_ID(); ?>" class="article">
	        		<div class="container">
	        			<div class="row-fluid">
	        			
	        				<div class="span10 offset1 entry">
			        			<header class="entry-title">
			        				<h1><?php the_title(); ?></h1>
			        				<h3 class="description"><?php the_excerpt(); ?></h3>
			        				<div class="entry-meta"><p class="text-center">Words by <?php the_author(); ?></p>
</div>
			        			</header>
			        			
			        			<section class="entry-content">
			        				<?php the_content(); ?>
			        			</section>
			        			
			        			<footer class="row-fluid author">
			        				<figure class="span2">
			        					<img src="<?php echo get_avatar_url( get_avatar( get_the_author_meta( 'ID' ), 512 ) ); ?>" />
			        				</figure>
			        				
			        				<div class="span8 text">
				        				<h4><?php the_author(); ?></h4>
				        				<p class="info"><?php echo get_the_author_meta('user_url'); ?> - #OffParadise - <?php echo get_the_author_meta('twitter'); ?></p>
				        				<p><?php echo get_the_author_meta('description'); ?></p>
			        				</div>
			        				
			        				<div class="span2">
				        				<h5 style="margin-top:0;">Follow</h5>
				        				<ul class="unstyled">
				        					<li><a href="http://twitter.com/<?php echo get_the_author_meta('twitter'); ?>"><i class="fa fa-twitter"></i> @<?php echo get_the_author_meta('twitter'); ?></a></li>
				        					<li><a href="http://instagram.com/<?php echo get_the_author_meta('instagram'); ?>"><i class="fa fa-instagram"></i> @<?php echo get_the_author_meta('instagram'); ?></a></li>
				        				</ul>
			        				</div>
			        				
			        			</footer>
			        			
		        			</div>
	        			</div>
	        			
	        		</div>
	        	</article>
	        	
	        	<?php endwhile; endif; ?>
	        	
	        	<footer id="footer" class="hidden-phone">
	        		<div class="container-fulid">
	        			<div class="row-fluid related">
	        				<div class="container">
		        				<h2 class="title">Previously OFF⋅PARADISE</h2>
		        				<div id="opRecent" class="row-fluid">
		        				
		        					
			        				
		        				</div>
	        				</div>
	        			</div>
	        			
	        			<div class="row-fluid copy">
	        				<div class="container">
		        				<h1 class="logo">&copy; 2014 OFF&bullet;PARADISE</h1>
	        				</div>
	        			</div>
	        		</div>
	        	</footer>
        		
	    		</section>
	    		
<?php get_footer(); ?>
