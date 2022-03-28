<?php get_header(); ?>

<div class="container">
    <div class="row py-5 d-flex">
        <div class="col-sm-6 px-5">
            <h1 class="d-inline"><?php the_title(); ?></h1><br>
            <p class="my-5"><?php the_content(); ?></p><br>
            <a href="<?php echo home_url( '/' ); ?>"><button class="btn btn-primary py-2 px-4">RETURN</button></a>
        </div>
        <div class="col-sm-6">
            <?php the_post_thumbnail( 'medium', array(
                'class' => 'w-100'
            ) )?>
        </div>
    </div>
</div>

<?php get_footer(); ?>