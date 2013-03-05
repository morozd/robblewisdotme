<?php get_header();?>

<section class="basket-whole posts">

	<?php if (have_posts()) : ?>  
    <?php while (have_posts()) : the_post(); ?>

            <article class="basket-quarter meta list">

                <p><span class="icon">*</span> This article was posted on <?php echo get_the_date('jS F'); ?> and filed under <?php
        $category = get_the_category(); 
        echo (" <a href='/category/".$category[0]->cat_name."'>".$category[0]->cat_name."</a>");
        ?></a>.</p>

                <p>Here is <a href="<?php the_permalink();?>">the permalink</a>.</p>

            </article>

            <article class="basket-threeq">

                <h2 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    
                <p><?php the_content('Read more &raquo;'); ?></p>

            </article>

            <div class="basket-whole"></div>
    
    <?php endwhile; ?> 

    <nav class="basket-quarter">

            </nav>

            <nav class="basket-threeq">

                    <p class="previous"><?php next_posts_link('&laquo; Previous posts'); ?></p><p class="next"><?php previous_posts_link('Subsequent posts &raquo;'); ?></p>

            </nav>

    </section>
    
    <?php else : ?>  
    //Something that happens when a post isn’t found.
<?php endif; ?>

<?php get_footer();?>