<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <nav>
    <div class="nav-title">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="site-logo">
        <span>Association Languedocienne de Kyudo</span>
    </div>
    
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => 'ul',
        'menu_class' => 'nav-menu'
    ));
    ?>
    <div class="lang-btns">
    <a href="/fr" class="lang-btn">🇫🇷 Français</a>
    <a href="/en" class="lang-btn">🇬🇧 English</a>
</div>
</nav>

</header>
</body>


