 <!--llama la menu al header-->
 <?php get_header(); ?>

<div>Pagina</div>
<?php if(have_posts()) : ?>
    <?php while(have_posts()): the_post(); ?>
        
        <?php the_post_thumbnail(); ?> <br/>
        <!--cuando haga click me lelve a otra pagina-->
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2> <br/>
        <?php the_excerpt(); ?>
        <?php the_content(); ?>
        
    <?php endwhile; ?>
<?php endif; ?>