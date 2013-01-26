<?php get_header(); ?>

<div id="content">

    <section id="main" class="eightcol first clearfix" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
            <section>
                <header class="article-header">
                    <!-- <h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>-->
                    <h1 class="h2"><?php the_title(); ?></h1>
                </header>
                <!-- end article header -->

                <section class="entry-content clearfix">
                    <header class="posted">
                        <p class="byline vcard">Posté le
                            <time class="updated" datetime="<?php echo the_time('j-m-Y'); ?>"><?php the_time('j-m-Y'); ?></time>
                            par <span class="author"><?php the_author_posts_link(); ?></span> dans la catégorie <?php the_category(', '); ?>.
                        </p>
                    </header>
                    <figure class="image"><?php the_post_thumbnail('medium'); ?></figure>
                    <div><?php the_content(); ?></div>
                </section>
                <!-- end article section -->

                <footer class="article-footer">

                    <p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>

                </footer>
                <!-- end article footer -->
            </section>
            <!--  <?php // comments_template(); // uncomment if you want to use them ?> -->

        </article> <!-- end article -->

        <?php endwhile; ?>

        <?php if (function_exists('bones_page_navi'))
        { ?>
            <?php bones_page_navi(); ?>
            <?php } else
        { ?>
            <nav class="wp-prev-next">
                <ul class="clearfix">
                    <li class="prev-link"><?php next_posts_link('&laquo; Précédent') ?></li>
                    <li class="next-link"><?php previous_posts_link('Suivant &raquo;') ?></li>
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
                <p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
            </footer>
        </article>

        <?php endif; ?>

    </section>
    <!-- end #main -->

    <section class="right">
        <?php get_sidebar('primary'); ?>
        <?php get_sidebar('secondary'); ?>
    </section>

</div> <!-- end #content -->

<?php get_footer(); ?>
