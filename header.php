<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
<header class="header">
    <div class="header__inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo">
            <?php bloginfo('name'); ?>
        </a>
        <nav class="header__nav">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class'     => 'header__menu',
                'container'      => false,
            ]);
            ?>
        </nav>
        <button class="header__hamburger" aria-label="メニュー">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>