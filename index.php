    <!--llama la menu al header-->
    <?php get_header(); ?>


    Nombre: <?php echo get_bloginfo('name');?>
    <br/>
    Descripcion: <?php echo get_bloginfo('description');?>
    <br/>
    URL : <?php echo get_bloginfo('url');?>
    <br/>
    <?php echo "Hola Mundo"; ?>

    <!--CONSULTAS ALA BASE DE DATOS-->
    <?php
      $args = array('post_type' => 'post');
      $query= new WP_Query($args);
    ?>
    <br/>
    <!--verifico si el query tienes post-->
    <?php if($query->have_posts()) : ?>
        <?php while($query->have_posts()): $query->the_post(); ?>
            <?php the_ID(); ?>
            <?php the_post_thumbnail(); ?> <br/>
            <!--cuando haga click me lelve a otra pagina-->
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><br/>
            <?php the_excerpt(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</body>
</html>
