<?php
/*
Template Name: Elements
*/
?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="title-page-area">
	<div class="container">
		<h1><?php the_title(); ?></h1>
    </div>
	<br class="clear" />
</section>



<section class="about">
	<div class="container">
        <?php the_content(); ?>
		<div class="top">
	    	<h2><?php _e('Table layout','cwp'); ?></h2>

			<!-- Table layout -->
			<table class="table-striped table-hover">
			  <thead>
				<tr>
				  <th class="text-center">#</th>
				  <th>Name</th>
				  <th>Surname</th>
				  <th>Description</th>
				  <th>Position</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td class="text-center">1</td>
				  <td>John</td>
				  <td>Dovenson</td>
				  <td>Wded ut perspiciatis unde omnis iste.</td>
				  <td>CEO</td>
				</tr>
				<tr>
				  <td class="text-center">2</td>
				  <td>Sandra</td>
				  <td>Nostmail</td>
				  <td>Eem aperiam,  quae ab illo inventore veritatis.</td>
				  <td>Assistant</td>
				</tr>
				<tr>
				  <td class="text-center">3</td>
				  <td>Lumen</td>
				  <td>Kuther-Saniour</td>
				  <td>Doser quae ab illo inventore veritatis.</td>
				  <td>Numerologyst</td>
				</tr>
				<tr>
				  <td class="text-center">4</td>
				  <td>Danny</td>
				  <td>Somunanther</td>
				  <td>Accusantium doloremque laudantium totam.</td>
				  <td>Doctor</td>
				</tr>    
				<tr>
				  <td class="text-center">5</td>
				  <td>Belinda</td>
				  <td>Winnes</td>
				  <td>Sque ipsa quae ab illo inventore veritatis.</td>
				  <td>Student</td>
				</tr>
				<tr>
				  <td class="text-center">6</td>
				  <td>Radio</td>
				  <td>Polistarint</td>
				  <td>Dicta sunt explicabo, nemo enim.</td>
				  <td>Programmer</td>
				</tr> 
			  </tbody>
			</table>
			<!-- [end] Table layout -->

			<br /><br />


		<h2>Pricing table</h2>

		<!-- Pricind table -->
			<ul class="pricing_table">
				<li class="price_block">
					<div class="price">
						<div class="package_name">Silver Package</div>
						<div class="price_figure"><span>$</span>75</div>
					</div>
					<ul class="features">
						<li>Domains Supported: <span>6</span></li>
						<li>AdWords Credits: <span>$75</span></li>
						<li>MySQL Databases: <span>2 Available</span></li>
						<li>FTP Accounts: <span>1,000</span></li> 
					</ul>
					<div class="footer">
						<a href="#" class="action_button">Order Now</a>
					</div>
				</li>
				
				<li class="price_block">
					<div class="price">
						<div class="package_name">Gold Package</div>
						<div class="price_figure"><span>$</span>95</div>
					</div>
					<ul class="features">
						<li>Domains Supported: <span>11</span></li>
						<li>AdWords Credits: <span>$95</span></li>
						<li>MySQL Databases: <span>2 Available</span></li>
						<li>FTP Accounts: <span>1,500</span></li> 
					</ul>
					<div class="footer">
						<a href="#" class="action_button">Order Now</a>
					</div>
				</li>
				
				<li class="price_block">
					<div class="price">
						<div class="package_name">Diamond Package</div>
						<div class="price_figure"><span>$</span>105</div>
					</div>
					<ul class="features">
						<li>Domains Supported: <span>20</span></li>
						<li>AdWords Credits: <span>$105</span></li>
						<li>MySQL Databases: <span>4 Available</span></li>
						<li>FTP Accounts: <span>2,000</span></li> 
					</ul>
					<div class="footer">
						<a href="#" class="action_button">Order Now</a>
					</div>
				</li>
				
				<li class="price_block">
					<div class="price">
						<div class="package_name">Diamond Package</div>
						<div class="price_figure"><span>$</span>150</div>
					</div>
					<ul class="features">
						<li>Domains Supported: <span>20</span></li>
						<li>AdWords Credits: <span>$150</span></li>
						<li>MySQL Databases: <span>4 Available</span></li>
						<li>FTP Accounts: <span>2,000</span></li> 
					</ul>
					<div class="footer">
						<a href="#" class="action_button">Order Now</a>
					</div>
				</li>          
			</ul>
		<!-- [end] Pricind table -->

		<br class="clear" />
		<br />


			<div class="half-page left">
			
				<h2>Special content</h2>
				
		<!-- Special content layout-->        
				<div class="special-content">
					<div class="img"></div>
					<div class="content">
		Pellentesque vitae viverra massae ac. Pellentesque congue massa at leo placerat non tempor elit laoreet. In hac habitasse platea dictumst.
					<p><a href="#" class="read-more" title="Read more">Read more</a></p>
					</div>
				</div>
		<!-- [end] Special content layout-->   

			</div>
		</div>    

	</div>  
</section>



<section class="download">
	<div class="container">
		<a class="text">Fully editable, clean, grid aligned and layered theme.</a>
		<a href="#" class="button" title="Download">Download brochure</a>
	</div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>