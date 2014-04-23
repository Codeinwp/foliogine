<?php 
	get_header();
	
	$category_portofolio = cwp('category_portofolio');
	$client_portofolio = cwp('client_portofolio');
	$author_portofolio = cwp('author_portofolio');
	$tags_portofolio = cwp('tags_portofolio');
	$related_items_portofolio = cwp('related_items_portofolio');
	
	while ( have_posts() ) : the_post(); 
		cwp_setPostViews(get_the_ID());
?>
<section class="title-page-area featured-img">
	<div class="container">
       <h1 class="title"><?php the_title(); ?></h1>
		<div class="image-wrap">
        	<div class="arrow arrow-left"></div>
            <div class="arrow arrow-right"></div>
        	<div class="featured-img-top">
				<?php					
					if ( has_post_thumbnail($post->ID) ) {						
						echo get_the_post_thumbnail($post->ID,'portofolio-large'); 					
					}				
				?>
				<div class="text hidden-tablet hidden-phone"><?php the_title(); ?></div>
				<?php $idd = get_the_ID(); ?>
			</div>
        </div><!-- .image-wrap -->
    </div><!-- .container -->
</section><!-- .featured-img -->
<section class="item-details">
	<div class="container">
		<div class="content">
        	<div class="left">
				<div class="row-fluid">
					<div class="span12">
						<?php the_content(); ?>
						<?php $data = get_the_date('Y-m-d'); ?>
						<time datetime="<?php echo $data; ?>"><?php echo get_the_date('d/m/Y'); ?></time>
					</div><!-- .span12 -->
				</div><!-- .row-fluid -->
			</div><!-- .left -->
        	<div class="sidebar">
				<div class="nav-next">					
					<?php												
					previous_post_link('%link ','&lt; prev');							
					echo ":";							
					next_post_link('%link ','next &gt;');											
					?>
				</div>
				<div class="widget">
					<p class="title">
						<?php _e('Item details','cwp'); ?>
					</p>
					<?php 						
						if(isset($category_portofolio) || $category_portofolio == 'show'):				
								$items = get_the_terms($post->ID, 'categories');								
								if(!empty($items)) {									
									foreach ( $items as $item ) {										
										$cat = $item->name;										
										$slug = $item->slug;									
									}									
								}
                                if(isset($cat) && $cat != '') {
                                    echo '<p><span>'.__('Category:','cwp').'</span>';
								    echo $cat;							
                                    echo '</p>';
                                }    
				        endif; 											
						if(isset($client_portofolio) || $client_portofolio == 'show'):
								$client = get_post_meta($idd, 'client_option');
							
								if(isset($client[0]) && $client[0] != ''):
                                    echo '<p><span>'.__('Client:','cwp').'</span>';
									echo $client[0];
                                    echo '</p>';
								endif;	
				        endif; 											 															
						if(isset($author_portofolio) || $author_portofolio == 'show'): ?>	
							<p><span><?php _e('By:','cwp'); ?></span> 	  	
								<?php the_author(); ?>
							</p>					
					<?php endif;					
						if(isset($tags_portofolio) && $tags_portofolio == 'show' && has_tag()):
                                    $taguri = get_the_tags(); 
                                    if(isset($taguri) && !empty($taguri)) {
                                        echo '<p><span>'.__('Tags:','cwp').'</span>';    
                                        foreach($taguri as $tag) 
                                        echo $tag->name.' '; 
                                        echo '</p>';
                                    }    
                        endif; ?>
				
					<a href="#" class="eye-icon"><span></span><?php echo cwp_getPostViews(get_the_ID()); ?></a>	      		
				</div><!-- .widget -->
			</div><!-- .sidebar -->
		</div><!-- .content -->
	</div><!-- .container -->
</section><!-- .item-details -->
<?php 
	endwhile;
	wp_reset_query();	
	
	/*
	* Related items
	*/
	
	if(isset($related_items_portofolio) && $related_items_portofolio == 'show') :
?>
<section class="work related-items">
	<div class="container">		
		<div class="title-area">
			<h2><?php _e('Related Items','cwp'); ?></h2>
		</div>
		<div class="items-work clear">
		<?php 		
		
			$done = array();
		    $count = 0;
			$taguri = get_the_tags();		
			if ($taguri):			
				$tag_ids = array();			
				foreach($taguri as $individual_tag) :				
					$tag_ids[] = $individual_tag->term_id;			
				endforeach;	
				
				$args=array(				
					'tag__in' => $tag_ids,							
					'posts_per_page'=> 4,
					'post_type' => 'product',
					'post__not_in' => array($idd)
				);			
				$query = new WP_Query( $args );

				if ( $query->have_posts() ):
				
					
					while ( $query->have_posts() ):
					
						$count++;
						$query->the_post();
						$done[] = get_the_ID();
						$id = get_the_ID();
						$items = get_the_terms($id, 'categories');
						if(!empty($items)) {
							foreach ( $items as $item ) {
								$cat = $item->name;
								$slug = $item->slug;
								$cat_id = $item->term_id;
							}
						}
						?>
						<div class="item-box top pag1">
							<a href="#">
								<div class="row-info">
									<p class="category"><?php if(isset($cat) && $cat != ''): echo $cat; else: ''; endif; ?></p>
									<p class="title"><?php the_title(); ?></p>
									<time datetime="<?php $d = get_the_date('Y-m-d'); echo $d; ?>"><?php $data = get_the_date('d F'); echo $data; ?></time>				
								</div><!-- .row-info -->
								<b class="arrow-bottom"></b><b class="arrow-top"></b>
								<div class="row-img">
									<?php
										if ( has_post_thumbnail($id) ) {
											echo get_the_post_thumbnail($id,'portofolio-thumb'); 
										}
									?>
								</div>
								<div class="hover">
									<p class="category"><?php if(isset($cat) && $cat != ''): echo $cat; else: ''; endif; ?></p>
									<p class="title"><?php the_title(); ?></p>
									<p class="text">
										<?php echo substr(get_the_content(),0,100)."[...]"; ?>
									</p>
								</div><!-- .hover -->
							</a>
							<a href="www." class="link-icon icon-search" title="Search"></a>
							<a href="www." class="link-icon icon-link" title="Link"></a>
						</div><!-- .item-box -->
						<?php
					endwhile;
					?>
					
					<?php
				endif;
			endif;		
			wp_reset_query(); 
			if($count < 4):
				$needed = 4 - $count;
				$items = get_the_terms(get_the_ID(), 'categories');
				if(!empty($items)) {
					$cats = array();
					foreach ( $items as $item ) {
						$cats[] = $item->term_id;
					}
				}
				$args = array( 'post__not_in' => $done , 'post_type' => 'product', 'posts_per_page' => $needed,'tax_query' => array(
							array(
								'taxonomy' => 'categories',
								'field' => 'id',
								'terms' => $cats
							)
						));
				$query = new WP_Query( $args );

				if ( $query->have_posts() ):		
					while ( $query->have_posts() ):
						$query->the_post();
						$id = get_the_ID();
						$items = get_the_terms($id, 'categories');
						if(!empty($items)) {
							foreach ( $items as $item ) {
								$cat = $item->name;
								$slug = $item->slug;
								$cat_id = $item->term_id;
							}
						}
						?>
						<div class="item-box top pag1">
							<a href="#">
								<div class="row-info">
									<p class="category"><?php if(isset($cat) && $cat != ''): echo $cat; else: ''; endif; ?></p>
									<p class="title"><?php the_title(); ?></p>
									<time datetime="<?php $d = get_the_date('Y-m-d'); echo $d; ?>"><?php $data = get_the_date('d F'); echo $data; ?></time>				
								</div><!-- .row-info -->
								<b class="arrow-bottom"></b><b class="arrow-top"></b>
								<div class="row-img">
									<?php
										if ( has_post_thumbnail($id) ) {
											echo get_the_post_thumbnail($id,'portofolio-thumb'); 
										}
									?>
								</div>
								<div class="hover">
									<p class="category"><?php if(isset($cat) && $cat != ''): echo $cat; else: ''; endif; ?></p>
									<p class="title"><?php the_title(); ?></p>
									<p class="text">
										<?php echo substr(get_the_content(),0,100)."[...]"; ?>
									</p>
								</div><!-- .hover -->
							</a>
							
							<?php
								$hover_link1 = get_post_meta($id, 'hover_link1');
								$hover_link2 = get_post_meta($id, 'hover_link2');
								
								if(isset($hover_link1[0]) && $hover_link1[0] != ''):
									echo '<a href="'.$hover_link1[0].'" class="link-icon icon-search" title="Search"></a>';
								else:	
									echo '<a href="#" class="link-icon icon-search" title="Search"></a>';
								endif;
								
								if(isset($hover_link2[0]) && $hover_link2[0] != ''):
									echo '<a href="'.$hover_link2[0].'" class="link-icon icon-link" title="Search"></a>';
								else:	
									echo '<a href="#" class="link-icon icon-link" title="Link"></a>';
								endif;
							?>
						</div><!-- .item-box -->
						<?php
					endwhile;
				endif;
				wp_reset_query(); 
			endif;
			?>
			</div>

	</div><!-- .container -->
</section><!-- .related-items -->
<?php endif; 

    $id = get_the_ID(); //the current id page

	get_template_part('sections');

get_footer(); ?>