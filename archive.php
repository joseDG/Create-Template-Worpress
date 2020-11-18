<?php get_header(); ?>

Seccion: <?php single_term_title(); ?>

<?php if(have_posts()) : ?>
    <?php while(have_posts()): the_post(); ?>
        
        <!--cuando haga click me lelve a otra pagina-->
        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><br/>
        <?php the_post_thumbnail(); ?> <br/>
        <?php the_excerpt(); ?>
        
        
    <?php endwhile; ?>
<?php endif; ?>