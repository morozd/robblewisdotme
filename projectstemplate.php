<?php /*Template Name: Projects */ ?>

    <?php get_header();?>

<section class="basket-whole posts">

    <article>

	<?php if (have_posts()) : ?>  
    <?php while (have_posts()) : the_post(); ?>

         		<h2><?php the_title();?></h2>

            <?php the_content(); ?>

                <dl>
                      <dt><a href="http://github.com/rmlewisuk?tab=repositories">GitHub</a></dt>
                        <dd>Most of my development projects can be found here.</dd>

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

                    foreach($subpages as $post) :
                       setup_postdata($post);
                    ?>

                    <dt><a href="<?php the_permalink(); ?>"id="post-<?php the_ID(); ?>"><?php the_title(); ?></a></dt>
                    <dd><?php the_excerpt(); ?></dd>
                    
                    <?php endforeach; ?>

                  </dl>

                  <!--End of child pages-->

            </article>
    
    <?php endwhile; ?> 

    </section>
    
    <?php else : ?>  
    //Something that happens when a post isn’t found.
<?php endif; ?>

<?php get_footer();?>