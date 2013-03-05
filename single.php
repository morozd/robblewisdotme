<?php get_header();?>

<section class="basket-whole posts">

    <article>

    <?php if (have_posts()) : ?>  
    <?php while (have_posts()) : the_post(); ?>

                <h2><?php the_title();?></h2>

                <p class="meta"><span class="icon">*</span> This article was posted on <?php the_date('jS F');?> and filed under <?php
        $category = get_the_category(); 
        echo (" <a href='/category/".$category[0]->cat_name."'>".$category[0]->cat_name."</a>");
        ?></a>. The permalink is <a href="<?php the_permalink();?>"><?php the_permalink();?></a>.</p>

                <p><?php the_content('Read more &raquo;'); ?></p>

                <p class="meta">This weblog has no comments. If you want to discuss this post or anything else contact me <a href   ="http://twitter.com/rmlewisuk">on Twitter (@rmlewisuk)</a> or <a href="/contact">email me</a>.</p>

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