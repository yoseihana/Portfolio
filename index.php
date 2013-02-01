<?php get_header(); ?>

<div id="content">

    <section id="main" class="eightcol first clearfix" role="main">
        <header class="titleOutliner">
            <h1>Blog</h1>
        </header>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
            <div class="entry-content page">
                <header class="article-header">
                    <h1 class="h2"><?php the_title(); ?></h1>
                </header>
                <!-- end article header -->
                        <p class="byline vcard">Posté le
                            <time class="updated" datetime="<?php echo the_time('j-m-Y'); ?>"><?php the_time('j-m-Y'); ?></time>
                            par <span class="author"><?php the_author_posts_link(); ?></span> dans la catégorie <?php the_category(', '); ?>.
                        </p>
                    <figure class="image"><?php the_post_thumbnail('medium'); ?></figure>
                    <div><?php the_content(); ?></div>
                <!-- end article section -->

                <footer class="article-footer">

                    <p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>

                </footer>
                <!-- end article footer -->
            </div>

        </article> <!-- end article -->

        <?php endwhile; ?>

        <?php if (function_exists('bones_page_navi'))
        { ?>
            <?php bones_page_navi(); ?>
            <?php } else
        { ?>
            <nav class="wp-prev-next">
                <header class="titleOutliner">
                    <h1>Pagination</h1>
                </header>
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

    <aside class="right">
        <header class="titleOutliner">
            <h1>Archives et Catégories</h1>
        </header>
        <?php get_sidebar('primary'); ?>
        <?php get_sidebar('secondary'); ?>
    </aside>

</div> <!-- end #content -->

<?php get_footer(); ?>
