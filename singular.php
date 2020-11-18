 <!--llama la menu al header-->
 <?php get_header(); ?>

<?php if(have_posts()) : ?>
    <?php while(have_posts()): the_post(); ?>
        <?php the_ID(); ?>
        <?php the_post_thumbnail(); ?> <br/>
        <!--cuando haga click me lelve a otra pagina-->
        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><br/>
        <?php the_excerpt(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>