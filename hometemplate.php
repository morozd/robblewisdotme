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

        <section class="basket-sixty posts home-widget">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home-Left') ) : ?>
            <?php endif; ?> 
        </section>

        <section class="basket-forty git home-widget">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home-Center') ) : ?>
            <?php endif; ?>

            <!-- Javascript to load and display repos from GitHub -->
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                <script type="text/javascript">
                var repo, i;

                $.ajax({
                  url: "https://api.github.com/users/rmlewisuk/repos?sort=pushed",
                  success: function(data){
                    for ( i=0; i < 5; i++) {
                        $('#gitrepos').append("<li><a href='http://github.com/rmlewisuk/" + data[i].name+ "'>" + data[i].name + "</a></li>");
                    }
                  }
                });
            <!-- End GitHub repo code -->
            </script>
            <h3><span class='icon'>j</span> Recently Pushed</h3>

            <span><ul id="gitrepos"></ul></span>

        </section>
    
    <?php else : ?>  
    //Something that happens when a post isn’t found.
<?php endif; ?>

<?php get_footer();?>