<?php get_header(); ?>

<div class="container py-5">
    <div class="row pt-3">
        <div class="col-sm-6">
            <h1>Portfolio</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione necessitatibus<br>Lorem ipsum, dolor sit amet consectetur</p>
        </div>
        <div class="col-sm-6 h-101 d-flex justify-content-end align-items-end">
            <p class="mx-3">All</p>
            <p class="mx-3">30</p>
            <p class="mx-3">60</p>
        </div>
    </div>
    <?php get_template_part( 'partials/post', 'default' ); ?>
</div>

<?php get_footer(); ?>