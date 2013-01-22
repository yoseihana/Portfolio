<?php get_header(); ?>
			<div id="content">
				
				    <div id="main" class="eightcol first clearfix" role="main">
					    <?php if (is_category()) { ?>
						    <header>
						    <h1 class="archive-title h2">
							   <?php single_cat_title(); ?>
					    	</h1>
					    	</header>
					    <?php } elseif (is_tag()) { ?> 
						    <header>
						    <h1 class="archive-title h2">
							    <?php single_tag_title(); ?>
						    </h1>
					    	</header>
					    <?php } elseif (is_author()) { 
					    	global $post;
					    	$author_id = $post->post_author;
					    ?>	
					    	<header>
						    <h1 class="archive-title h2">
						    	Ecrit par <?php echo get_the_author_meta('display_name', $author_id); ?>
						    </h1>
						    </header>
					    <?php } elseif (is_day()) { ?>
					    <header>
						    <h1 class="archive-title h2">
	    						<?php the_time('l, F j, Y'); ?>
						    </h1>
						</header>
		    			<?php } elseif (is_month()) { ?>
			    		    <header>
			    		    <h1 class="archive-title h2">
				    	    	<?php the_time('F Y'); ?>
					        </h1>
							</header>
					    <?php } elseif (is_year()) { ?>
					        <header>
					        <h1 class="archive-title h2">
					    	    <?php the_time('Y'); ?>
					        </h1>
					        </header>
					    <?php } ?>

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <section>
							    <header class="article-header">
								
								   <!-- <h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>-->
								   <h1><?php the_title(); ?></h1>
								
								    <p class="byline vcard"><?php _e("Posted", "bonestheme"); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <span class="author"><?php the_author_posts_link(); ?></span> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
							
							    </header> <!-- end article header -->
						
							    <section class="entry-content clearfix">
							
								    <!--<?php the_post_thumbnail( 'bones-thumb-300' ); ?>-->
								    <?php the_post_thumbnail( 'medium' ); ?>
							
								    <?php the_content(); ?>
						
							    </section> <!-- end article section -->
							
							    <footer class="article-footer">
									<p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>
							    </footer> <!-- end article footer -->
							</section>
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>	
					
					        <?php if (function_exists('bones_page_navi')) { ?>
						        <?php bones_page_navi(); ?>
					        <?php } else { ?>
						        <nav class="wp-prev-next">
							        <ul class="clearfix">
								        <li class="prev-link"><?php next_posts_link('Suivant &laquo;') ?></li>
								        <li class="next-link"><?php previous_posts_link('&raquo; Précédent') ?></li>
							        </ul>
					    	    </nav>
					        <?php } ?>
					
					    <?php else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    						    <header class="article-header">
    							    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
    					    	</header>
    						    <section class="entry-content">
    							    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
        						</section>
    	    					<footer class="article-footer">
    		    				    <p><?php _e("This is the error message in the archive.php template.", "bonestheme"); ?></p>
    			    			</footer>
    				    	</article>
					
					    <?php endif; ?>
			
    				</div> <!-- end #main -->
    
	    			<div class="right">
	    			    <?php get_sidebar('primary'); ?>
	    			    <?php get_sidebar('secondary'); ?>
	    			</div>
                
			</div> <!-- end #content -->

<?php get_footer(); ?>