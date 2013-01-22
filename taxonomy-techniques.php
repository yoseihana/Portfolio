<?php get_header(); ?>
	<?php  if(have_posts()): ?>
		<?php while(have_posts()): the_post() ?>
			<article <?php post_class(); ?>>
				<header>
					<h2>
					<!-- Slug = champ txt au dessus pour créer la page -->
						<?php $term = get_term_by("slug", get_query_var
							("term"), get_query_var("taxonomy"));
							echo $term->name; ?>
						Tous les travaux dans:
					</h2>
					<h3>
						<?php _e('Posté par '); ?> <?php the_author(); ?> <?php _e('le'); ?> <?php echo get_the_date(); ?>
					</h3>
				</header>
				<p><strong><?php the_terms($post->ID, "techniques", "Classé dans: ", " ", " "); ?></strong></p><!--Préfixe, séparateur, suffixe-->
				<div><?php the_post_thumbnail('folio-work'); ?></div><!-- Intégration de l'image à la use -->
				<div class="content">
					<?php the_content(); ?>
				</div>
			</article>
			<hr />
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_sidebar('primary'); ?>
<?php get_sidebar('secondary'); ?>
<?php get_footer(); ?>