<?php get_header();?>

<section class="basket-whole posts">

    <!-- NEW -->
    <?php if (have_posts()) : ?>  
    <?php while (have_posts()) : the_post(); ?>

            <article class="basket-whole main">

                <h2 class="title"><?php the_title();?></h2>
                <p class="meta"><span class="icon">*</span> <?php echo get_the_date('l jS F'); ?>
    
                <p><?php the_content('Read more &raquo;'); ?></p>

            </article>

    <?php endwhile; ?>

    <!-- NEW -->

    <nav class="basket-whole">

                    <p class="previous"><?php previous_post_link(); ?></p>
                    <p class="next"><?php next_post_link(); ?></p>
            </nav>

    </section>
    
    <?php else : ?>  
    //Something that happens when a post isn’t found.
<?php endif; ?>

<?php get_footer();?>