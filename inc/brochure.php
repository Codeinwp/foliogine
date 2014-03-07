<?php global  $optionsdb; ?>
        <?php if(isset($optionsdb['download_url']) && $optionsdb['download_url'] != ''): ?>
		<section class="download">
			<div class="container">
                <?php if(isset($optionsdb['download_text']) && $optionsdb['download_text'] != '') ?>
				    <a class="text"><?php echo $optionsdb['download_text']; ?></a>
                <?php if(isset($optionsdb['download_title']) && $optionsdb['download_title'] != '' && isset($optionsdb['download_url']) && $optionsdb['download_url'] != '') ?>        
				    <a href="<?php echo $optionsdb['download_url']; ?>" class="button" title="Download"><?php echo $optionsdb['download_title']; ?></a>
			</div><!-- .container -->
		</section><!-- .download -->
        <?php endif; ?>