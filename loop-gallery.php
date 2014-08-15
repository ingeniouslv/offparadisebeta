				<?php 
					$images = get_field('post_upload_gallery');
				?>
						<div class="post-slideshow slide-scale" data-plugin-name="slideshow" data-autoplay="true" data-fullscreen="true">
    					<?php if( $images ): ?>
	        				<div id="slideshow">
								<?php foreach( $images as $image ): ?>
		        				<div class="cover slide fade" data-slide-type="image">
		        					<img src="<?php echo $image['url']; ?>" alt="<?php echo strip_tags($image['alt']); ?>" />
		        				</div>
		        				<?php endforeach;?>	
		        			</div> <!-- /#slideshow -->
		        		<?php endif; ?>	
	        			</div>