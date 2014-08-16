				<?php 
					if ( get_field( 'add_audio_url' ) ):	
					
						$audio_embed = wp_oembed_get( get_field( 'add_audio_url' ) );
						
					endif; 
				?>
						<div class="slide-scale video-wrapper audio-wrapper">
    					<?php if( $audio_embed ): ?>
	        				<?php echo $audio_embed ?>
		        		<?php endif; ?>	
	        			</div>