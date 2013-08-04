<?php get_header();?>

<section class="basket-whole posts">

	<?php if (have_posts()) : ?>  
    <?php while (have_posts()) : the_post(); ?>

            <article class="basket-whole main">

                <h2 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                <p class="meta"><span class="icon">*</span> <?php echo get_the_date('l jS F'); ?> | <a href="<?php the_permalink();?>">Permalink</a></p>
    
                <p><?php the_content('Read more &raquo;'); ?></p>

            </article>

    <?php endwhile; ?> 

        <nav class="basket-whole posts">

                <p class="previous"><?php next_posts_link('&laquo; Previous posts'); ?></p><p class="next"><?php previous_posts_link('Subsequent posts &raquo;'); ?></p>

        </nav>

    </section>
    
    <?php else : ?>  
    //Something that happens when a post isn’t found.
<?php endif; ?>

<?php get_footer();?>