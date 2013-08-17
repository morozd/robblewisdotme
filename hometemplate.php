<?php /*Template Name: Home Page*/?>

<?php get_header();?>

        <section class="basket-whole photo">

            <img src="<?php bloginfo('template_directory'); ?>/img/photobg.jpg">

        </section>

	<?php if (have_posts()) : ?>  
    <?php while (have_posts()) : the_post(); ?>

            <article class="basket-whole intro">
    
                <p><?php the_content(); ?></p>

            </article>
    
    <?php endwhile; ?> 

    <section class="basket-whole latest post">
        <!-- Get latest post excluding links -->
        <?php
            $args = array( 'numberposts' => '1' , 'category' => -726,);
            $recent_posts = wp_get_recent_posts( $args );
            // print_r($recent_posts);
            foreach( $recent_posts as $recent ){
                echo '<h3><span class="icon">*</span> Latest post &raquo; <a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </h3> ';
                echo '<blockquote>' . esc_attr($recent["post_excerpt"]) . '</blockquote>';
            }
        ?>
    </section>

    <section class="basket-whole latest repo">
        <!-- Get latest GitHub push -->
        <script type="text/javascript">
            var repo, i;

            $.ajax({
                url: "https://api.github.com/users/rmlewisuk/repos?sort=pushed",
                success: function(data){
                    $('#latest-push').append("<a href='http://github.com/rmlewisuk/" + data[0].name+ "'>" + data[0].name + "</a>");
                    $('#repo-description').append(data[0].description);
                }
            });
        </script>

        <h3 id="latest-push"><span class="icon">j</span> Recently pushed &raquo; </h3>
        <blockquote id="repo-description"></blockquote>
        
    </section>

    <section class="basket-whole latest tweet">
        <h3><span class="icon">_</span> Latest Tweet &raquo; <a href="http://twitter.com/rmlewisuk">@rmlewisuk</a></h3>
        <blockquote><?php get_tweet(); ?></blockquote>
    </section>
    
    <?php else : ?>  
    //Something that happens when a post isn’t found.
<?php endif; ?>

<?php get_footer();?>