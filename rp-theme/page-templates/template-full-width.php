<?php 
/*
    Template Name: Full Width
*/
get_header(); 
?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 pt-5">
            <h1>Portfolio</h1>
            <?php if(have_posts()) : while( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <div>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>