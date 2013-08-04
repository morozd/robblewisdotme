<?php /*Template Name: Projects */ ?>

    <?php get_header();?>

<section class="basket-whole posts">

    <article>

	<?php if (have_posts()) : ?>  
    <?php while (have_posts()) : the_post(); ?>

         		<h2><?php the_title();?></h2>

                <ul>
                      <li><a href="http://github.com/rmlewisuk">GitHub &raquo;</a>
                        <p>Most of my development projects are found here.</p></li>

                <!--Start of child pages-->

                <?php
                    // Set up the arguments for retrieving the pages
                    $args = array(
                        'post_type' => 'page',
                        'numberposts' => -1,
                        'post_status' => null,
                    // $post->ID gets the ID of the current page
                    'post_parent' => $post->ID,
                        'order' => ASC,
                        'orderby' => menu_order
                        );
                     $subpages = get_posts($args);
                     // Just another WordPress Loop
                     foreach($subpages as $post) :
                        setup_postdata($post);
                     ?>
                      <li><a href="<?php the_permalink(); ?>"id="post-<?php the_ID(); ?>"><?php the_title(); ?> &raquo;</a>
                        <?php the_excerpt(); ?></li>
                    
                  <?php endforeach; ?>

                  </ul>

                  <!--End of child pages-->

            </article>
    
    <?php endwhile; ?> 

    </section>
    
    <?php else : ?>  
    //Something that happens when a post isn’t found.
<?php endif; ?>

<?php get_footer();?>