<?php get_header(); ?>
			
			<div id="content">
			
				    <section id="main" class="eightcol first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <div <?php post_class('clearfix keyContent'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					
						    <div class="entry-content clearfix" itemprop="articleBody">
								    <header>
								    	<h1><?php the_title(); ?></h1>
								    </header>
								    <ol>
								    	<?php 
								    	$arg = array('post_type'=>'Works', 'posts_per_page'=>10);
								    	$loop = new WP_Query($arg);
								    	while ( $loop->have_posts() ) : $loop->the_post();?>
								    	  <li>
								    	  <header>
									    	  <h2><a href="<?php $k = get_post_custom_values('url'); echo $k[0]; ?>" title="<?php $k = get_post_custom_values('url'); echo $k[0]; ?>"><?php the_title(); ?></a></h2>
									    	</header> 
									    	   <div>
									    	  	<figure><a href="<?php $k = get_post_custom_values('url'); echo $k[0]; ?>" title="<?php $k = get_post_custom_values('url'); echo $k[0]; ?>"><?php the_post_thumbnail(); ?></a></figure>
									    	  	<p><?php $k = get_post_custom_values('Techniques'); echo $k[0]; ?></p>
									    	  	<!--<p><strong><?php //the_terms($post->ID, "techniques", "Classé dans: ", " ", " "); ?></strong></p>-->
									    	  </div>
								    	  </li>
									    <?php endwhile; ?>
								    </ol>
							</div> <!-- end div -->
					
					    </div> <!-- end div -->
					
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
    
			</div> <!-- end #content -->

<?php get_footer(); ?>