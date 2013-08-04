	<?php get_header();?>

<section class="basket-whole posts">

    <article>

	<?php if (have_posts()) : ?>  
    <?php while (have_posts()) : the_post(); ?>

            <article class="basket-whole main">

                <h2 class="title"><?php the_title();?></h2>
    
                <p><?php the_content('Read more &raquo;'); ?></p>

            </article>

    <?php endwhile; ?>

    </section>
    
    <?php else : ?>  
    //Something that happens when a post isn’t found.
<?php endif; ?>

<?php get_footer();?>