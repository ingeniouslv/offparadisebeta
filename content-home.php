			<?php
				query_posts( $query_string . '&posts_per_page=1' );			
				while ( have_posts() ) : the_post();  
			?>
	        		<div class="project-header scale-to-window">
	        			<div class="post-title hidden-phone banner">
	        				<div class="social-icons"></div>
	        				
	        				<div class="title-meta">
	        					<h2 class="title-1">OFF⋅PARADISE</h2>
	        					<?php the_title( '<h3 class="title-2">', '</h3>' ); ?>
	        					<time class="date"><?php _s_posted_on(); ?></time>
	        					<figure class="author"></figure>
	        				</div>
	        			</div>
	        			<div class="post-slideshow slide-scale" data-plugin-name="slideshow" data-autoplay="true" data-fullscreen="true">
	        				<div id="slideshow">
		        				<div class="cover slide fade" data-slide-type="image">
		        					<img src="<?php bloginfo('template_directory'); ?>/inc/img/photo/R0020703.JPG" />
		        				</div>
		        				<div data-slide-type="image" class="slide fade">
		        					<img src="<?php bloginfo('template_directory'); ?>/inc/img/photo/R0020730.JPG" />
		        				</div>
		        				<div data-slide-type="image" class="slide fade">
		        					<img src="<?php bloginfo('template_directory'); ?>/inc/img/photo/R0020745.jpg" />
		        				</div>
		        				<div data-slide-type="image" class="slide fade">
		        					<img src="<?php bloginfo('template_directory'); ?>/inc/img/photo/R0020748.JPG" />
		        				</div>
		        			</div> <!-- /#slideshow -->
	        			</div>
	        		</div>
	        		
	        <?php endwhile; ?>

