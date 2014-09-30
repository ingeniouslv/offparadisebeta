			<?php		
			?>
	        		<?php if( get_post_format() != 'audio' ): ?>
	        		<div class="project-header scale-to-window <?php echo get_post_format(); ?>">
	        			<div class="post-title hidden-phone banner">
	        				<div class="social-icons"></div>
	        				
	        				<div class="title-meta">
	        					<h2 class="title-1">OFF⋅PARADISE</h2>
	        					<?php the_title( '<h3 class="title-2">', '</h3>' ); ?>
	        					<time class="date"><?php _s_posted_on(); ?></time>
	        					<figure class="author"></figure>
	        				</div>
	        			
	        			</div>
	        			
	        			<?php get_template_part( 'loop', get_post_format() ); ?>
	        			
	        		</div>
	        		<?php else: ?>
	        		<div class="audio-header scale-to-window">
	        			
	        			<?php get_template_part( 'loop', 'audio' ); ?>
	        			
	        		</div>
        			<?php endif; ?>

