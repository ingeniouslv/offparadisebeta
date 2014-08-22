				<?php 
					if ( get_field( 'add_video_url' ) ):	
					
						$video_embed = wp_oembed_get( get_field( 'add_video_url' ) );
						
					endif; 
				?>
						<div class="slide-scale video-wrapper">
    					<?php if( $video_embed ): ?>
	        				<?php echo $video_embed ?>
		        		<?php endif; ?>	
	        			</div>