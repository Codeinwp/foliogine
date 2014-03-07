<div id="of_container">


 
	  

	<form id="subo_form" method="post" action="#" enctype="multipart/form-data">
	<?php settings_fields( sb("menu_slug").'_optionsdb'); ?>
	<script type="text/javascript">
		var options_saved = "<?php
			$options = get_option( sb("menu_slug").'_optionsdb' );  
			
			
			echo is_array($options) ? addslashes(json_encode($options)) : '[]'; 
		?>";
		var options_name = '<?php  echo sb("menu_slug").'_optionsdb'?>';
		 
	</script>
		<div id="header">
		
			<div class="logo">
				<h2>Code in WP Theme Options </h2>
			</div>
		  
			<div class="clear"></div>
		
    	</div>

		<div id="info_bar">
		 
						
		 <span class="spinner" ></span>
			<button  type="button" class="button-primary subo_save">
				Save All Changes			</button>
			
		</div><!--.info_bar--> 	
		
		<div id="main">
		
			<div id="subo_nav">
				<ul>
					<?php foreach ($tabs as $tab) { ?>
					
					
						<li><a  href="#tab-<?php echo $tab['id']; ?>"><?php echo $tab['name']; ?></a></li> 	
					
					<?php  } ?></ul>
			</div>

			<div id="content"> 	

					<?php foreach ($tabs as $tab) { ?>
						<div id="tab-<?php echo $tab['id']; ?>" class="tab-section">
							<h2><?php echo $tab['name']; ?></h2>
							
							<?php foreach($tab['elements'] as $element){ ?>
								<?php echo  $element['html']; ?>
							<?php } ?>
						
						</div> 
  
					
					<?php } ?></div>         
      
			<div class="clear"></div>
			
		</div>
		
		<div class="save_bar"> 
		 <span class="spinner" ></span>
			  <button   type="button" class="button-primary subo_save">Save All Changes</button>			
			<button id="subo_reset" type="button" class="button submit-button reset-button">Options Reset</button>
	 
			
		</div> 
 
	</form>
	
	<div style="clear:both;"></div>
</div>
