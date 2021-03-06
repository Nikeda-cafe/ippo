<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo( "charset" ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<?php wp_body_open(); ?>
<header class="head container">
    <div class="alignwide">
        <a class="site-name" href="<?php echo esc_url(home_url()); ?>"><?php bloginfo( "name" ) ?></a>
        <p><?php bloginfo("description"); ?></p>
    </div>
    <?php wp_nav_menu( array(
        "location" => "primary",
        "container" => "nav",
        "container_class" => "alignfull",
        "menu_class" => "alignwide-menu menu"
    )); ?>
</header>
