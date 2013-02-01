<!doctype html>

<!--[if lt IE 7]>
<html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]>
<html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]>
<html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="Author"
          content="Buffart Annabelle"/>
    <meta name="Keywords"
          content="abDesign, Annabelle Buffart, Buffart, web, Liège, Martelange, Luxembourg, project management, portfolio"/>
    <meta name="Description"
          content="Portfolio d'Annabelle Buffart - abDesign"/>

    <meta http-equiv="Content-Language"
          content="fr"/>
    <meta name="DC.Language"
          content="fr"/>
    <meta name="DC.Creator"
          content="Buffart Annabelle"/>
    <meta name="DC.Date.modified"
          scheme="W3CDTF"
          content="25/01/2013"/>

    <title><?php wp_title(''); ?></title>

    <!-- Google Chrome Frame for IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- mobile meta (hooray!) -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


    <link rel="stylesheet" type="text/css" href="/wp-content/themes/wpTemplate/library/css/style.css" media="screen"/>
    <link rel="stylesheet" href="/wp-content/themes/wpTemplate/library/css/print.css" type="text/css" media="print"/>
    <!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/img/favico.ico">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href='http://fonts.googleapis.com/css?family=Kite+One' rel='stylesheet' type='text/css'>
    <!-- wordpress head functions -->
    <?php wp_head(); ?>
    <!-- end of wordpress head -->

    <!-- drop Google Analytics Here -->
    <!-- end analytics -->

</head>

<body <?php body_class(); ?>>
<div class="container">
    <header class="header" role="banner">
        <!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
        <h1 id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>

        <nav role="navigation">
            <h2 class="titleOutliner">Navigation du site</h2>
            <?php wp_nav_menu(array('menu' => 'Header Menu')); ?>
        </nav>

    </header>
    <!-- end header -->
