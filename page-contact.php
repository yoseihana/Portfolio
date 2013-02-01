<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>

<div id="content">

    <section id="main" class="eightcol first clearfix" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class('clearfix keyContent'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

            <div class="entry-content clearfix" itemprop="articleBody">
                <header>
                    <h1><?php the_title(); ?></h1>
                </header>
                <form action="<?php bloginfo('template_directory'); ?>/form.php" method="post" id="contactForm" class="cmxform">
                    <fieldset>
                        <legend>
                            Des questions&nbsp;? Demande d'informations&nbsp;? N'hésitez pas à m'envoyer un message.
                        </legend>
                        <?php the_content(); ?>
                    </fieldset>
                </form>
            </div>
            <!-- end article section -->

        </div> <!-- end article -->

        <?php endwhile; else : ?>

        <div id="post-not-found" class="hentry clearfix">
            <header class="article-header">
                <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
            </header>
            <section class="entry-content">
                <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
            </section>
            <footer class="article-footer">
                <p><?php _e("This is the error message in the page.php template.", "bonestheme"); ?></p>
            </footer>
        </div>

        <?php endif; ?>

    </section>
    <!-- end #main -->

    <aside class="right">
        <header class="titleOutliner">
            <h2>Me contacter</h2>
        </header>
        <section class="sidebar">
            <div class="infoSup">
                <header>
                    <h3><?php _e('Keep in touch'); ?></h3>
                </header>
                <ul>
                    <?php
                    $arg = array('post_type' => 'informations_contact', 'posts_per_page' => 10, 'order' => 'ASC');
                    $loop = new WP_Query($arg, 'not-pagename=contact-me');
                    while ($loop->have_posts()) : $loop->the_post();?>
                        <li>
                            <?php the_content(); ?>
                        </li>

                        <?php endwhile; ?>
                </ul>
            </div>
        </section>
        <section class="sidebar">
            <div class="infoSup">
                <header>
                    <h3><?php _e('Newsletter'); ?></h3>
                </header>
                <!-- // MAILCHIMP SUBSCRIBE CODE \\ -->
                <a href="http://eepurl.com/uOgGf">Vous désirez être tenu informé de mes nouveautés? Par ici les inscriptions!</a>
                <!-- \\ MAILCHIMP SUBSCRIBE LINK // -->
            </div>
        </section>

    </aside>

</div> <!-- end #content -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.js" type="text/javascript"></script>
<?php get_footer(); ?>