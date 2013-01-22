<?php get_header(); ?>
<div id="content">

    <section id="main" class="eightcol first clearfix" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
            <section class="entry-content clearfix" itemprop="articleBody">
                <header>
                    <h1><?php the_title(); ?></h1>
                </header>
                <p><?php the_content(); ?></p>
            </section>
            <!-- end article section -->
        </article>

        <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
            <section class="entry-content clearfix skills" itemprop="articleBody">
                <header>
                    <h1>Compétences</h1>
                </header>
                <h2><a href="#web">Web</a></h2>
                <ol>
                    <?php
                    $arg = array('post_type' => 'Skills', 'posts_per_page' => 25, 'order' => 'ASC');
                    $loop = new WP_Query($arg);
                    while ($loop->have_posts()) : $loop->the_post();?>
                        <?php $i = get_post_custom_values('Catégorie');
                        if ($i[0] == 'Web'): ?>
                            <li id="web">
                                <p><?php the_title(); ?></p>

                                <div class='<?php $k = get_post_custom_values('level'); echo 'level' . $k[0]; ?>'>
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                </ol>
                <h2><a href="#cms">CMS</a></h2>
                <ol>
                    <?php
                    $arg = array('post_type' => 'Skills', 'posts_per_page' => 25, 'order' => 'ASC');
                    $loop = new WP_Query($arg);
                    while ($loop->have_posts()) : $loop->the_post();?>
                        <?php $i = get_post_custom_values('Catégorie');
                        if ($i[0] == 'CMS'): ?>
                            <li id="cms">
                                <p><?php the_title(); ?></p>

                                <div class='<?php $k = get_post_custom_values('level'); echo 'level' . $k[0]; ?>'>
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                </ol>
                <h2><a href="#db">Base de données</a></h2>
                <ol>
                    <?php
                    $arg = array('post_type' => 'Skills', 'posts_per_page' => 25, 'order' => 'ASC');
                    $loop = new WP_Query($arg);
                    while ($loop->have_posts()) : $loop->the_post();?>
                        <?php $i = get_post_custom_values('Catégorie');
                        if ($i[0] == 'DB'): ?>
                            <li id="db">
                                <p><?php the_title(); ?></p>

                                <div class='<?php $k = get_post_custom_values('level'); echo 'level' . $k[0]; ?>'>
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                </ol>
                <h2><a href="#multimedia">Multimédia</a></h2>
                <ol>
                    <?php
                    $arg = array('post_type' => 'Skills', 'posts_per_page' => 25, 'order' => 'ASC');
                    $loop = new WP_Query($arg);
                    while ($loop->have_posts()) : $loop->the_post();?>
                        <?php $i = get_post_custom_values('Catégorie');
                        if ($i[0] == 'Multimédia'): ?>
                            <li id="multimedia">
                                <p><?php the_title(); ?></p>

                                <div class='<?php $k = get_post_custom_values('level'); echo 'level' . $k[0]; ?>'>
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                </ol>
                <h2><a href="#management">Management</a></h2>
                <ol>
                    <?php
                    $arg = array('post_type' => 'Skills', 'posts_per_page' => 25, 'order' => 'ASC');
                    $loop = new WP_Query($arg);
                    while ($loop->have_posts()) : $loop->the_post();?>
                        <?php $i = get_post_custom_values('Catégorie');
                        if ($i[0] == 'Management'): ?>
                            <li id="management">
                                <p><?php the_title(); ?></p>

                                <div class='<?php $k = get_post_custom_values('level'); echo 'level' . $k[0]; ?>'>
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                </ol>
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
                <!--<header>
                    <h3>Profile</h3>
                </header>-->
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
                    <h3>Education</h3>
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

</div> <!-- end #content -->
<?php get_footer(); ?>
