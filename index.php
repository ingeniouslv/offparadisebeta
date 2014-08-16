<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	
        		<section class="story-header">
        		
				<?php 
				
					get_template_part( 'content', 'home' );
				?>
        		
        		</section>
        		
	    		<section class="site-translate">
        		
		<?php 
			/* get_template_part( 'content', get_post_format() ); */
			if ( is_home() ) :
				query_posts( $query_string . '&posts_per_page=1' );			
				while ( have_posts() ) : the_post(); 
		?>
        		
	        	<article id="post-<?php the_ID(); ?>" class="article">
	        		<div class="container">
	        			<div class="row-fluid">
	        			
	        				<div class="content-sidebar span3 hidden-phone">
	        					<section class="post-meta" data-offset-top="0">
		        					<div class="post-meta-info">
				        				
				        				<p class="byline author vcard">
				        					By <span class="fn"><?php the_author(); ?></span>
				        				</p>
		        					</div>
		        					<aside class="social-media-menu">
		        						<ul class="unstyled">
				        					<li class="first">Twitter</li>
				        					<li>Facebook</li>
				        					<li>Instagram</li>
		        						</ul>
		        					</aside>
	        					</section>
	        				</div>
	        			
	        				<div class="span9 entry">
			        			<header class="entry-title">
			        				<h1><?php the_title(); ?></h1>
			        				<h3 class="description"><?php the_excerpt(); ?></h3>
			        				<div class="entry-meta"><p>Words by <?php the_author(); ?><span style="margin-left: 242px">Photography: <?php the_author(); ?></span></p>
</div>
			        			</header>
			        			
			        			<section class="entry-content">
			        				<?php the_content(); ?>
			        			</section>
			        			
			        			<footer class="row-fluid author">
			        				<figure class="span5">
			        					<img src="<?php echo get_avatar_url( get_avatar( get_the_author_meta( 'ID' ), 512 ) ); ?>" />
			        				</figure>
			        				
			        				<div class="span7 text">
				        				<h4><?php the_author(); ?></h4>
				        				<p class="info"><?php echo get_the_author_meta('user_url'); ?> - #OffParadise - <?php echo get_the_author_meta('twitter'); ?></p>
				        				<p><?php echo get_the_author_meta('description'); ?></p>
				        				<h5>Follow <?php the_author(); ?></h5>
				        				<ul class="unstyled">
				        					<li>Twitter: @<?php echo get_the_author_meta('twitter'); ?></li>
				        					<li>Instagram: @<?php echo get_the_author_meta('twitter'); ?></li>
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
<!--
	        			<div class="row-fluid related">
	        				<div class="container">
		        				<h2 class="title">Previously OFF⋅PARADISE</h2>
		        				<div class="row-fluid">
		        				
		        					<div class="span2">
			        					<a href="#">
			        						<div class="overlay"></div>
			        						<img src="img/barnaby-roper-fashion-film.jpeg" width="100%">
			        					</a>
			        					<time class="issue-date" datetime="2012-21-12 12:12:12-0400" pubdate>Friday, December 21, 2012</time>
			        					<a href="#">
			        						<span class="title">Georgia May Jagger for Hudson</span>
			        					</a>
			        					<span class="description">The Model of the Moment Designs a Retro-Inspired Denim Collection</span>
			        				</div>
		        				
		        					<div class="span2">
			        					<a href="#">
			        						<div class="overlay"></div>
			        						<img src="img/victoire-de-castellanes-jewelry-show.jpeg" width="100%">
			        					</a>
			        					<time class="issue-date" datetime="2012-21-12 12:12:12-0400" pubdate>Friday, December 21, 2012</time>
			        					<a href="#">
			        						<span class="title">Georgia May Jagger for Hudson</span>
			        					</a>
			        					<span class="description">The Model of the Moment Designs a Retro-Inspired Denim Collection</span>
			        				</div>
		        				
		        					<div class="span2">
			        					<a href="#">
			        						<div class="overlay"></div>
			        						<img src="img/georgia-may-jagger-for-hudson.jpeg" width="100%">
			        					</a>
			        					<time class="issue-date" datetime="2012-21-12 12:12:12-0400" pubdate>Friday, December 21, 2012</time>
			        					<a href="#">
			        						<span class="title">Georgia May Jagger for Hudson</span>
			        					</a>
			        					<span class="description">The Model of the Moment Designs a Retro-Inspired Denim Collection</span>
			        				</div>
		        				
		        					<div class="span2">
			        					<a href="#">
			        						<div class="overlay"></div>
			        						<img src="img/victoire-de-castellanes-jewelry-show.jpeg" width="100%">
			        					</a>
			        					<time class="issue-date" datetime="2012-21-12 12:12:12-0400" pubdate>Friday, December 21, 2012</time>
			        					<a href="#">
			        						<span class="title">Georgia May Jagger for Hudson</span>
			        					</a>
			        					<span class="description">The Model of the Moment Designs a Retro-Inspired Denim Collection</span>
			        				</div>
		        				
		        					<div class="span2">
			        					<a href="#">
			        						<div class="overlay"></div>
			        						<img src="img/contributor.jpeg" width="100%">
			        					</a>
			        					<time class="issue-date" datetime="2012-21-12 12:12:12-0400" pubdate>Friday, December 21, 2012</time>
			        					<a href="#">
			        						<span class="title">Georgia May Jagger for Hudson</span>
			        					</a>
			        					<span class="description">The Model of the Moment Designs a Retro-Inspired Denim Collection</span>
			        				</div>
		        				
		        					<div class="span2">
			        					<a href="#">
			        						<div class="overlay"></div>
			        						<img src="img/barnaby-roper-fashion-film.jpeg" width="100%">
			        					</a>
			        					<time class="issue-date" datetime="2012-21-12 12:12:12-0400" pubdate>Friday, December 21, 2012</time>
			        					<a href="#">
			        						<span class="title">Georgia May Jagger for Hudson</span>
			        					</a>
			        					<span class="description">The Model of the Moment Designs a Retro-Inspired Denim Collection</span>
			        				</div>
			        				
		        				</div>
	        				</div>
	        			</div>
-->
	        			
	        			<div class="row-fluid copy">
	        				<div class="container">
		        				<h1 class="logo">&copy; 2014 OFF&bullet;PARADISE</h1>
	        				</div>
	        			</div>
	        		</div>
	        	</footer>
        		
	    		</section>
	    		
<?php get_footer(); ?>
