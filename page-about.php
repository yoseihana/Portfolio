<?php get_header(); ?>
<div id="content">

    <section id="main" class="eightcol first clearfix" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
            <section class="entry-content clearfix" itemprop="articleBody">
                <header>
                    <h1><?php the_title(); ?></h1>
                </header>
                <?php the_content(); ?>
            </section>
            <!-- end article section -->
        </article>

        <article <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
            <section class="entry-content clearfix skills" itemprop="articleBody">
                <header>
                    <h1>Compétences</h1>
                </header>
                <h2><a href="#web" class="icon-down-hand">Web</a></h2>
                <ol>
                    <?php
                    $arg = array('post_type' => 'Skills', 'posts_per_page' => 50, 'order' => 'ASC');
                    $loop = new WP_Query($arg);
                    while ($loop->have_posts()) : $loop->the_post();?>
                        <?php $i = get_post_custom_values('Catégorie');
                        if ($i[0] == 'Web'): ?>
                            <li class="web">
                                <p><?php the_title(); ?></p>

                                <div class='<?php $k = get_post_custom_values('level'); echo 'level' . $k[0]; ?>'>
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                </ol>
                <h2><a href="#cms" id="integration" class="icon-down-hand">CMS</a></h2>
                <ol>
                    <?php
                    $arg = array('post_type' => 'Skills', 'posts_per_page' => 50, 'order' => 'ASC');
                    $loop = new WP_Query($arg);
                    while ($loop->have_posts()) : $loop->the_post();?>
                        <?php $i = get_post_custom_values('Catégorie');
                        if ($i[0] == 'CMS'): ?>
                            <li class="cms">
                                <p><?php the_title(); ?></p>

                                <div class='<?php $k = get_post_custom_values('level'); echo 'level' . $k[0]; ?>'>
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                </ol>
                <h2><a href="#db" class="icon-down-hand">Base de données</a></h2>
                <ol>
                    <?php
                    $arg = array('post_type' => 'Skills', 'posts_per_page' => 50, 'order' => 'ASC');
                    $loop = new WP_Query($arg);
                    while ($loop->have_posts()) : $loop->the_post();?>
                        <?php $i = get_post_custom_values('Catégorie');
                        if ($i[0] == 'DB'): ?>
                            <li class="db">
                                <p><?php the_title(); ?></p>

                                <div class='<?php $k = get_post_custom_values('level'); echo 'level' . $k[0]; ?>'>
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                </ol>
                <h2><a href="#multimedia" class="icon-down-hand">Multimédia</a></h2>
                <ol>
                    <?php
                    $arg = array('post_type' => 'Skills', 'posts_per_page' => 50, 'order' => 'ASC');
                    $loop = new WP_Query($arg);
                    while ($loop->have_posts()) : $loop->the_post();?>
                        <?php $i = get_post_custom_values('Catégorie');
                        if ($i[0] == 'Multimédia'): ?>
                            <li class="multimedia">
                                <p><?php the_title(); ?></p>

                                <div class='<?php $k = get_post_custom_values('level'); echo 'level' . $k[0]; ?>'>
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                </ol>
                <h2><a href="#management" class="icon-down-hand">Management</a></h2>
                <ol>
                    <?php
                    $arg = array('post_type' => 'Skills', 'posts_per_page' => 50, 'order' => 'ASC');
                    $loop = new WP_Query($arg);
                    while ($loop->have_posts()) : $loop->the_post();?>
                        <?php $i = get_post_custom_values('Catégorie');
                        if ($i[0] == 'Management'): ?>
                            <li class="management">
                                <p><?php the_title(); ?></p>

                                <div class='<?php $k = get_post_custom_values('level'); echo 'level' . $k[0]; ?>'>
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                </ol>
                <h2><a href="#langue" class="icon-down-hand">Langues</a></h2>
                <ol>
                    <?php
                    $arg = array('post_type' => 'Skills', 'posts_per_page' => 50, 'order' => 'ASC');
                    $loop = new WP_Query($arg);
                    while ($loop->have_posts()) : $loop->the_post();?>
                        <?php $i = get_post_custom_values('Catégorie');
                        if ($i[0] == 'Langue'): ?>
                            <li class="langues">
                                <p><?php the_title(); ?></p>

                                <div class='<?php $k = get_post_custom_values('level'); echo 'level' . $k[0]; ?>'>
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                </ol>
                <h2><a href="#plus" class="icon-down-hand">Et encore plus de compétences!</a></h2>

                <ol>
                    <?php
                    $arg = array('post_type' => 'Skills', 'posts_per_page' => 50, 'order' => 'ASC');
                    $loop = new WP_Query($arg);
                    while ($loop->have_posts()) : $loop->the_post();?>
                        <?php $i = get_post_custom_values('Catégorie');
                        if ($i[0] == 'Plus'): ?>
                            <li class="plus">
                                <p><?php the_title(); ?></p>

                                <div class='<?php $k = get_post_custom_values('level'); echo 'level' . $k[0]; ?>'>
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                </ol>
                <p>(Les atouts idéales d'une stagiaire!)</p>
            </section>
            <!-- end article section -->
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

    </section>
    <!-- end #main -->

    <aside class="right">
        <section class="sidebar">
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
            <article class="education">
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
            </article>
        </section>

        <section class="sidebar">
            <article class="experience">
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
            </article>
        </section>
    </aside>
    <!-- end #right -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js" type="text/javascript" ></script>
    <script src="/wp-content/themes/wpTemplate/library/js/jquery.js" type="text/javascript"></script>
</div> <!-- end #content -->
<?php get_footer(); ?>
