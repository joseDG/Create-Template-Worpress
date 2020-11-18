<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name'); ?> - <?php echo get_bloginfo('description');?></title>
    <?php wp_head(); ?>

</head>
<body>

    <!--Agregar el Menú-->
    <nav>
        <?php wp_nav_menu( array('theme_location' =>'main-menu' )); ?>
    </nav>
    