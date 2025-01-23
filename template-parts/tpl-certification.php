<?php

/**
 * Template Name: certification
 */

get_header(); ?>
<h1 class="d-none">Certification Cimelta</h1>
        <?php if( have_rows('groupe_certification') ):
                    ?>
            <?php while( have_rows('groupe_certification') ): the_row(); ?>
                <?php
                     ?>
                <section class="pt-130 pb-90 ptb-xs-40" style="background: url('<?php echo get_sub_field('background')['url']; ?>');background-repeat: no-repeat; background-size: cover; ">
                    <div class="container">
                        <h2 class="text-center">Certification ISO 9001</h2>
                        <br>
                        <div class="row d-flex justify-content-center">
                            <div class="col-12">
                                <?php echo get_sub_field('texte'); ?>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <?php foreach(get_sub_field('certs') as $image): ?>
                                        <img src="<?php echo $image["url"]; ?>" class="col-lg-6 col-md-12 col-12 img-fluid" >
                                    <?php endforeach; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </section> 
        <?php
            endwhile; ?>
        <?php endif; ?>
<?php get_footer(); ?>
