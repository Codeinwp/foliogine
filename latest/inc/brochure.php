<?php 	$download_url = cwp('download_url');	$download_text = cwp('download_text');	$download_title = cwp('download_title');	$download_url = cwp('download_url');		if(isset($download_url) && $download_url != ''):?>	
		<section class="download">
			<div class="container">
                <?php 					if(isset($download_text) && $download_text != ''):
						echo '<a class="text">'.$download_text.'</a>';					endif;
					if(isset($download_title) && $download_title != '' && isset($download_url) && $download_url != ''):						echo '<a href="'.$download_url.'" class="button" title="Download">'.$download_title.'</a>';					endif;					?>        
			</div><!-- .container -->
		</section><!-- .download -->
<?php endif; ?>