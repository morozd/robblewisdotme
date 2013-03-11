<?php /*Template Name: Projects */ ?>

    <?php get_header();?>

<section class="basket-whole posts">

    <article>

	<?php if (have_posts()) : ?>  
    <?php while (have_posts()) : the_post(); ?>

         		<h2><?php the_title();?></h2>

                <p><?php the_content('Read more &raquo;'); ?></p>

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

                    <article class="project" id="<?php the_title();?>">

                    <h3><a href="<?php the_permalink(); ?>"id="post-<?php the_ID(); ?>"><?php the_title(); ?> &raquo;</a></h3>
                    <p><?php the_excerpt(); ?></p>
                   </article>
                    
                  <?php endforeach; ?>

                  <!--End of child pages-->

            </article>
    
    <?php endwhile; ?> 

    <article class="project">
    <h3><a href="https://github.com/rmlewisuk?tab=repositories">GitHub Repositories &raquo;</a></h3>

                <!-- Javascript to load and display repos from GitHub -->
                <script src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.min.js" type="text/javascript"></script>
                <script src="<?php bloginfo('template_directory'); ?>/scripts/gitfull.js" type="text/javascript"></script>
                <script type="text/javascript">
                    $(function() {
                      $("#gitrepos").loadRepositories("rmlewisuk");
                    });
                </script>
                <!-- End GitHub repo code -->

            <ul>
            <span id="gitrepos"></span>
            </ul>

          </article>

    </section>
    
    <?php else : ?>  
    //Something that happens when a post isn’t found.
<?php endif; ?>

<?php get_footer();?>