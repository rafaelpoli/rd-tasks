<div class="row">
        <div class="col-sm-12">
            <div class="row row-cols-3 row-cols-md-3">
                <?php if(have_posts()) : while( have_posts() ) : the_post(); ?>
                    <!-- bootstrap for grid cards of posts -->
                    <div class="col">
                        <div class="card  border border-primary my-3">
                            <?php if(has_post_thumbnail()): ?>
                                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url( array( 
                                    'width' => '400',
                                    'height' => '400'
                                ));?>" class="card-img-top" ></a>
                            <?php else: ?>
                                <div class="col-sm-12 bg-dark" style="height:410px">
                                </div>
                            <?php endif; ?>
                            <div class="card-body">
                                <a href="<?php the_permalink(); ?>" style="text-decoration:none"><h5 class="card-title"><?php the_title(); ?></h5></a>
                                <p class="card-text"><?php echo 'Lorem Ipsum';?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; 
                else: ?>
                    <h3>Post not Found!</h3>
                <?php endif; ?>
            </div>
        </div>
    </div>