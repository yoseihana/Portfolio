<?php get_header(); ?>
<div id="content">
<section id="main" class="eightcol first clearfix" role="main">
    <!-- Proposition de titre de section pour l'outliner de Mickael -->
    <header class="titleOutliner">
        <h1>A propos de Annabelle</h1>
    </header>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div <?php post_class('clearfix keyContent'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
        <section class="entry-content clearfix" itemprop="articleBody">
            <header>
                <h1><?php the_title(); ?></h1>
            </header>
            <?php the_content(); ?>
        </section>
        <!-- end article section -->
    </div>

    <div <?php post_class('clearfix keyContent'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
        <section class="entry-content clearfix skills" itemprop="articleBody">
            <header>
                <h1>Compétences</h1>
            </header>
            <h2><a href="#web" class="icon-down-hand">Web</a></h2>
            <ol class="web">
                <?php
                $arg = array('post_type' => 'Skills', 'posts_per_page' => 50, 'order' => 'ASC');
                $loop = new WP_Query($arg);
                while ($loop->have_posts()) : $loop->the_post();?>
                    <?php $i = get_post_custom_values('Catégorie');
                    if ($i[0] == 'Web'): ?>
                        <li>
                            <p><?php the_title(); ?></p>

                            <div class='<?php $k = get_post_custom_values('level'); echo 'level' . $k[0]; ?>'>
                                <?php the_content(); ?>
                            </div>
                        </li>
                        <?php endif; ?>
                    <?php endwhile; ?>
            </ol>
            <h2><a href="#cms" id="integration" class="icon-down-hand">CMS</a></h2>
            <ol class="cms">
                <?php
                $arg = array('post_type' => 'Skills', 'posts_per_page' => 50, 'order' => 'ASC');
                $loop = new WP_Query($arg);
                while ($loop->have_posts()) : $loop->the_post();?>
                    <?php $i = get_post_custom_values('Catégorie');
                    if ($i[0] == 'CMS'): ?>
                        <li>
                            <p><?php the_title(); ?></p>

                            <div class='<?php $k = get_post_custom_values('level'); echo 'level' . $k[0]; ?>'>
                                <?php the_content(); ?>
                            </div>
                        </li>
                        <?php endif; ?>
                    <?php endwhile; ?>
            </ol>
            <h2><a href="#multimedia" class="icon-down-hand">Multimédia</a></h2>
            <ol class="multimedia">
                <?php
                $arg = array('post_type' => 'Skills', 'posts_per_page' => 50, 'order' => 'ASC');
                $loop = new WP_Query($arg);
                while ($loop->have_posts()) : $loop->the_post();?>
                    <?php $i = get_post_custom_values('Catégorie');
                    if ($i[0] == 'Multimédia'): ?>
                        <li>
                            <p><?php the_title(); ?></p>

                            <div class='<?php $k = get_post_custom_values('level'); echo 'level' . $k[0]; ?>'>
                                <?php the_content(); ?>
                            </div>
                        </li>
                        <?php endif; ?>
                    <?php endwhile; ?>
            </ol>
            <h2><a href="#management" class="icon-down-hand">Management</a></h2>
            <ol class="management">
                <?php
                $arg = array('post_type' => 'Skills', 'posts_per_page' => 50, 'order' => 'ASC');
                $loop = new WP_Query($arg);
                while ($loop->have_posts()) : $loop->the_post();?>
                    <?php $i = get_post_custom_values('Catégorie');
                    if ($i[0] == 'Management'): ?>
                        <li>
                            <p><?php the_title(); ?></p>

                            <div class='<?php $k = get_post_custom_values('level'); echo 'level' . $k[0]; ?>'>
                                <?php the_content(); ?>
                            </div>
                        </li>
                        <?php endif; ?>
                    <?php endwhile; ?>
            </ol>
            <h2><a href="#langue" class="icon-down-hand">Langues</a></h2>
            <ol class="langues">
                <?php
                $arg = array('post_type' => 'Skills', 'posts_per_page' => 50, 'order' => 'ASC');
                $loop = new WP_Query($arg);
                while ($loop->have_posts()) : $loop->the_post();?>
                    <?php $i = get_post_custom_values('Catégorie');
                    if ($i[0] == 'Langue'): ?>
                        <li>
                            <p><?php the_title(); ?></p>

                            <div class='<?php $k = get_post_custom_values('level'); echo 'level' . $k[0]; ?>'>
                                <?php the_content(); ?>
                            </div>
                        </li>
                        <?php endif; ?>
                    <?php endwhile; ?>
            </ol>
            <h2><a href="#plus" class="icon-down-hand">Et encore plus de compétences!</a></h2>
            <ol class="plus">
                <?php
                $arg = array('post_type' => 'Skills', 'posts_per_page' => 50, 'order' => 'ASC');
                $loop = new WP_Query($arg);
                while ($loop->have_posts()) : $loop->the_post();?>
                    <?php $i = get_post_custom_values('Catégorie');
                    if ($i[0] == 'Plus'): ?>
                        <li>
                            <p><?php the_title(); ?></p>

                            <div class='<?php $k = get_post_custom_values('level'); echo 'level' . $k[0]; ?>'>
                                <?php the_content(); ?>
                            </div>
                        </li>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <li>(Les atouts idéals d'une stagiaire!)</li>
            </ol>

        </section>
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
        <h1>Mini CV</h1>
    </header>
    <section class="sidebar">
        <header class="titleOutliner test2">
            <h2>Annabelle Buffart</h2>
        </header>
        <div class="profile">
            <?php
            $arg = array('post_type' => 'profile');
            $loop = new WP_Query($arg);
            while ($loop->have_posts()) : $loop->the_post();?>
                <figure><?php the_post_thumbnail('thumbnail'); ?></figure>
                <?php endwhile; ?>
        </div>
    </section>

    <section class="sidebar">
        <div class="education">
            <header>
                <h3>Diplômes</h3>
            </header>
            <ol>
                <?php
                $arg = array('post_type' => 'education', 'posts_per_page' => 10, 'order' => 'ASC');
                $loop = new WP_Query($arg);
                while ($loop->have_posts()) : $loop->the_post();?>
                    <li>
                        <p class="titleSidebar"><?php the_title(); ?></p>

                        <div><?php the_content(); ?></div>
                    </li>
                    <?php endwhile; ?>
            </ol>
        </div>
    </section>

    <section class="sidebar">
        <div class="experience">
            <header>
                <h3>Expériences</h3>
            </header>
            <ol>
                <?php
                $arg = array('post_type' => 'experiences', 'posts_per_page' => 10, 'order' => 'ASC');
                $loop = new WP_Query($arg);
                while ($loop->have_posts()) : $loop->the_post();?>
                    <li>
                        <p class="titleSidebar"><?php the_title(); ?></p>

                        <div><?php the_content(); ?></div>
                    </li>
                    <?php endwhile; ?>
            </ol>
        </div>
    </section>
</aside>
<!-- end #right -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js" type="text/javascript"></script>
<script src="/wp-content/themes/wpTemplate/library/js/jquery.js" type="text/javascript"></script>
</div> <!-- end #content -->
<?php get_footer(); ?>
