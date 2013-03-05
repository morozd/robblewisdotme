<?php /*Template Name: Projects*/?>

    <?php get_header();?>

<section class="basket-whole posts">

    <article>

	<?php if (have_posts()) : ?>  
    <?php while (have_posts()) : the_post(); ?>

         		<h2><?php the_title();?></h2>

                <h3>GitHub Repositories</h3>

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

            <h3>Miscellaneous</h3>
            <ul>
              <?php
              global $id;
              wp_list_pages("title_li=&child_of=$id&show_date=modified
              &date_format=$date_format"); ?>
            </ul>

                <p><?php the_content('Read more &raquo;'); ?></p>

            </article>
    
    <?php endwhile; ?> 

    </section>
    
    <?php else : ?>  
    //Something that happens when a post isn’t found.
<?php endif; ?>

<?php get_footer();?>