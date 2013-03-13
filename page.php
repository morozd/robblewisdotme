	<?php get_header();?>

<section class="basket-whole posts">

    <article>

	<?php if (have_posts()) : ?>  
    <?php while (have_posts()) : the_post(); ?>

         		<h2><?php the_title();?></h2>

                <p><a href="#" class="focus">Focus</a></p>

        <script>
    $(".focus").click(function () {
      $("header").slideToggle("slow");
      $("nav").slideToggle("slow");
      $(".meta").slideToggle("slow");
      $("footer").slideToggle("slow");
      if($(this).text() == 'Focus')
       {
           $(this).text('Unfocus');
       }
       else
       {
           $(this).text('Focus');
       }
    });
</script>

                <p><?php the_content('Read more &raquo;'); ?></p>

            </article>
    
    <?php endwhile; ?> 

    </section>
    
    <?php else : ?>  
    //Something that happens when a post isn’t found.
<?php endif; ?>

<?php get_footer();?>