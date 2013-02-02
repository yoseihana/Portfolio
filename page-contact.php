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
                <!--<a href="http://eepurl.com/uOgGf">Vous désirez être tenu informé de mes nouveautés? Par ici les inscriptions!</a>-->
                <!-- \\ MAILCHIMP SUBSCRIBE LINK // -->
                <p>Pour être tenu informé de toutes mes nouvelles productions. J'emploie un singe facteur, faites le bien travailler.</p>
                <!-- Begin MailChimp Signup Form -->
                <link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
                <div id="mc_embed_signup">
                    <form action="http://buffart.us6.list-manage.com/subscribe/post?u=aec8a63a240142a5f4aa3bef1&amp;id=298a613e8a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <label for="mce-EMAIL">S'inscrire à ma newsletter</label>
                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="adresse email" required>
                        <div class="clear"><input type="submit" value="S'inscrire" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </form>
                </div>
                <!--End mc_embed_signup-->
            </div>
        </section>

    </aside>

</div> <!-- end #content -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.js" type="text/javascript"></script>
<?php get_footer(); ?>