<?php get_header();?>

<section class="basket-whole posts">

    <?php if (have_posts()) : ?>  
    <?php while (have_posts()) : the_post(); ?>

            <article class="basket-whole main">

                <h2 class="title"><?php the_title();?></h2>
                <p class="meta"><span class="icon">*</span> <?php echo get_the_date('l jS F'); ?>

                <?php // Featured blog post image

                    $f_image = post_custom('f_image');

                    if ($f_image) : ?>
                        <section class="basket-whole photo featured">
                            <img src="<?php echo $f_image; ?>">
                        </section>
                    <?php endif; ?>
    
                <p><?php the_content('Read more &raquo;'); ?></p>

                <p class="meta">This weblog has no comments. If you want to discuss this post or anything else contact me <a href="http://twitter.com/rmlewisuk">on Twitter (@rmlewisuk)</a> or <a href="/contact">email me</a>.</p>

            </article>

    <?php endwhile; ?>

    <nav class="basket-whole">

                    <p class="previous"><?php previous_post_link(); ?></p>
                    <p class="next"><?php next_post_link(); ?></p>
            </nav>

    </section>
    
    <?php else : ?>  
    //Something that happens when a post isn’t found.
<?php endif; ?>

<?php get_footer();?>