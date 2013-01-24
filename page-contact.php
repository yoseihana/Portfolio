<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>
			
			<div id="content">
			
				    <section id="main" class="eightcol first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
											
						    <section class="entry-content clearfix" itemprop="articleBody">
							    	<header>
							    		<h1><?php the_title(); ?></h1>
							    	</header>
							    	<form action="<?php bloginfo('template_directory'); ?>/form.php" method="post" id="contactForm">
							    		<?php the_content(); ?>
							    	</form>
							</section> <!-- end article section -->
						
					    </article> <!-- end article -->
					
					    <?php endwhile; else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    					    	<header class="article-header">
    					    		<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
    					    	</header>
    					    	<section class="entry-content">
    					    		<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
    					    	</section>
    					    	<footer class="article-footer">
    					    	    <p><?php _e("This is the error message in the page.php template.", "bonestheme"); ?></p>
    					    	</footer>
    					    </article>
					
					    <?php endif; ?>
			
    				</section> <!-- end #main -->
    				
    				<section class="right">
    					<section class="sidebar">
	    					<article class="infoSup">
		    					<header>
		    						<h3><?php _e('Keep in touch'); ?></h3>
		    					</header>
		    						<ul>
				    				<?php 
				    				$arg = array('post_type'=>'informations_contact', 'posts_per_page'=>10, 'order'=>'ASC');
				    				$loop = new WP_Query($arg, 'not-pagename=contact-me');
				    				while ( $loop->have_posts() ) : $loop->the_post();?>
					    				  <li>
						    				  <div><?php the_content(); ?></div>
					    				  </li>
				    				  
				    				<?php endwhile; ?>
				    				</ul>
		    				</article>
	    				</section>
    				</section>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>