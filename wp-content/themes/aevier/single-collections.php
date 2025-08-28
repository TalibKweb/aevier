<?php get_header(); ?>


<?php
if (have_posts()):
    while (have_posts()) : the_post();
?>

        <h1 style="margin-top: 40px;"><?php the_title(); ?></h1>
        <div class="entry-content">
            <?php echo the_excerpt() ?>
            <?php the_content(); ?>
        </div>

    <?php
    endwhile;
else:
    ?>

    <h2>No Collections Found!</h2>

<?php
endif;
?>


<?php get_footer(); ?>