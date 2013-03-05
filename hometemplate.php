<?php /*Template Name: Home Page*/?>

<?php get_header();?>

        <section class="basket-whole photo">

            <section class="basket-half list">

                <p> <span class="icon">j</span> DEVELOPER<br/>
                    <span class="icon">*</span> BLOGGER<br/>
                    <span class="icon">{</span> STUDENT</P>
            </section>

            <section class="basket-half credit">

                <p><small>Photo by <a href="http://www.starboardmediauk.co.uk/">Starboard Media</a></small></p>

            </section>

        </section>

	<?php if (have_posts()) : ?>  
    <?php while (have_posts()) : the_post(); ?>

            <article class="basket-whole intro">
    
                <p><?php the_content(); ?></p>

            </article>
    
    <?php endwhile; ?> 

        <section class="basket-half posts">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home-Left') ) : ?>
            <?php endif; ?> 
        </section>

        <section class="basket-quarter git">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home-Center') ) : ?>
            <?php endif; ?>

            <!-- Javascript to load and display repos from GitHub -->
                <script src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.min.js" type="text/javascript"></script>
                <script src="<?php bloginfo('template_directory'); ?>/scripts/git.js" type="text/javascript"></script>
                <script type="text/javascript">
                $(function() {
                  $("#gitrepos").loadRepositories("rmlewisuk");
                });
                </script>
            <!-- End GitHub repo code -->
            <h3><span class='icon'>j</span> Repositories</h3>

            <span id="gitrepos"></span>

        </section>

        <section class="basket-quarter social">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home-Right') ) : ?>
            <?php endif; ?>
            
        </section>
    
    <?php else : ?>  
    //Something that happens when a post isn’t found.
<?php endif; ?>

<?php get_footer();?>