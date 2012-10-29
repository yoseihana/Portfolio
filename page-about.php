<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="eightcol first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					
						    <section class="entry-content clearfix" itemprop="articleBody">
								    <h1><?php the_title(); ?></h1>
								    <p><?php the_content(); ?></p>
							</section> <!-- end article section -->
						</article>
						 <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							<section class="entry-content clearfix" itemprop="articleBody">
							<h1>Compétences</h1>
							<ol id="skills">
								<?php 
								$arg = array('post_type'=>'Skills', 'posts_per_page'=>20);
								$loop = new WP_Query($arg);
								while ( $loop->have_posts() ) : $loop->the_post();?>
								  <li>
							    	  <p><?php the_title(); ?></p>
							    	   <div class='<?php $k = get_post_custom_values('level'); echo 'level'.$k[0]; ?>'>
							    	  	<?php the_content(); ?>
							    	  </div>
								  </li>
							    <?php endwhile; ?>
							</ol>
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
			
    				</div> <!-- end #main -->
    
					<div class="right">
						<div class="sidebar">
						    <div class="profile">
							    <?php 
							    $arg = array('post_type'=>'profile', 'posts_per_page'=>10, 'order'=>'DESC');
							    $loop = new WP_Query($arg);
							    while ( $loop->have_posts() ) : $loop->the_post();?>						      
							      <div><?php the_post_thumbnail('thumbnail'); ?></div>
							    <?php endwhile; ?>
						    </div>
						</div>
						<div class="sidebar">
						    <div class="education">
							    <h3><?php _e('Education') ?></h3>
							    <ol>
							    <?php 
							    $arg = array('post_type'=>'education', 'posts_per_page'=>10);
							    $loop = new WP_Query($arg);
							    while ( $loop->have_posts() ) : $loop->the_post();?>
							      <li>
								      <p><?php the_title(); ?></p>							      
								      <div><?php the_content(); ?></div>
							      </li>
							    <?php endwhile; ?> 
							    </ol>
						    </div>
						</div>
						<div class="sidebar">
						    <div class="experience">
							    <h3><?php _e('Experiences') ?></h3>
							    <ol>
							    <?php 
							    $arg = array('post_type'=>'experiences', 'posts_per_page'=>10);
							    $loop = new WP_Query($arg);
							    while ( $loop->have_posts() ) : $loop->the_post();?>
								   <li>
								      <p><?php the_title(); ?></p>							      
								      <div><?php the_content(); ?></div>
								   </li>
							    <?php endwhile; ?>
							    </ol>
						    </div>
						</div>
					</div>
					
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>