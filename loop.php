						<div class="post-thumbnail slide-scale">
    					<?php if( has_post_thumbnail() ): ?>
							<?php 
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
								$thumb_url = $thumb['0'];
							?>
		        				<div class="cover-image" style="background-image:url('<?php echo $thumb_url; ?>');"></div>
		        		<?php endif; ?>	
	        			</div>