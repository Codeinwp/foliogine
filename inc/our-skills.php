        <?php global  $optionsdb; ?>
        <section class="our-skills">
			<div class="container">
			
				<?php 
					if(isset($optionsdb['skill_title']) && ($optionsdb['skill_title'] != '')):
						echo '<h2>'.htmlentities($optionsdb['skill_title']).'</h2>';
					else:
						echo '<h2>OUR SKILLS(%)</h2>';
					endif;	
				?>
				
				<div class="skills-wrap">										<div class="box-skill">
					<?php if(isset($optionsdb['skill_text1']) && ($optionsdb['skill_text1'] != '') && isset($optionsdb['skill_val1']) && ($optionsdb['skill_val1'] != '') ): ?>
							<p id="donutchart1" data-percent="<?php echo $optionsdb['skill_val1']; ?>" class="donutchart-a"></p>
							<p>
								<?php echo htmlentities($optionsdb['skill_text1']); ?>		 
							</p> 
					<?php else: ?>
							<p id="donutchart1" data-percent="50" class="donutchart-a"></p>
					<?php endif; ?>										</div>					<div class="box-skill">					
					<?php if(isset($optionsdb['skill_text2']) && ($optionsdb['skill_text2'] != '') && isset($optionsdb['skill_val2']) && ($optionsdb['skill_val2'] != '') ): ?> 
							<p id="donutchart2" data-percent="<?php echo $optionsdb['skill_val2']; ?>" class="donutchart-a"></p>
							<p>
								<?php echo htmlentities($optionsdb['skill_text2']); ?>		 
							</p> 
					<?php else: ?>
							<p id="donutchart2" data-percent="50" class="donutchart-a"></p>	
					<?php endif; ?>										</div>					<div class="box-skill"> 					
					<?php if(isset($optionsdb['skill_text3']) && ($optionsdb['skill_text3'] != '') && isset($optionsdb['skill_val3']) && ($optionsdb['skill_val3'] != '') ): ?>
							<p id="donutchart3" data-percent="<?php echo $optionsdb['skill_val3']; ?>" class="donutchart-a"></p>
							<p>
								<?php echo htmlentities($optionsdb['skill_text3']); ?>		 
							</p> 
					<?php else: ?>
							<p id="donutchart3" data-percent="50" class="donutchart-a"></p>	
					<?php endif; ?>										</div>					<div class="box-skill">
			
					<?php if(isset($optionsdb['skill_text4']) && ($optionsdb['skill_text4'] != '') && isset($optionsdb['skill_val4']) && ($optionsdb['skill_val4'] != '') ): ?> 
							<p id="donutchart4" data-percent="<?php echo $optionsdb['skill_val4']; ?>" class="donutchart-a"></p>
							<p>
								<?php echo htmlentities($optionsdb['skill_text4']); ?>		 
							</p> 
					<?php else: ?>
							<p id="donutchart4" data-percent="50" class="donutchart-a"></p>	
					<?php endif; ?>					</div>					
				</div>
				
			</div><!-- .container -->
		</section><!-- .our-skills -->