<?php

/**
 * Template Name: nos reference
 */

get_header(); ?>
<h1 class="d-none">Cimelta Madagascar nos réferences</h1>
    <!-- Work Section -->
    <section id="work" class=" ptb-xs-40" style="background: url('<?php echo get_field('background')["url"]; ?>'); background-repeat: no-repeat; background-size: cover;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-1 black_color"></div>
                <div class="col-md-8 padding black_color">
                    <div class="row text-center">
                        <div class="col-lg-6 offset-lg-3 mb-30">
                            <div class="heading-box">
                                <ul class="container-filter categories-filter ">
                                    <li>
                                        <a class="categories active hvr-bounce-in" data-filter="*"><img id="imageTous" src="<?php echo get_field('image_tout')["url"]; ?>" alt="<?php echo get_field('image_tout')["alt"]; ?>"/></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- work Filter -->
                    <div class="row d-flex justify-content-center">
                        <ul class="container-filter categories-filter ">
                            <?php if( have_rows('element_filter') ):
                                    $i = 0;
                                    $len = count(get_field('element_filter'));
                                    while( have_rows('element_filter') ): the_row(); ?>
                                    <li>
                                        <a class="categories" data-filter=".<?php echo get_sub_field('data_filter'); ?>"><img src="<?php echo get_sub_field('image')["url"]; ?>" alt="<?php echo get_sub_field('image')["alt"]; ?>" class="mb-1 hvr-rotate image_gallery"/><p class="text-white font-weight-bold"><?php echo get_sub_field('titre'); ?></p></a>
                                        <div class="border_gallery_bottom"></div>
                                    </li>
                                    <?php 
                                    if( $i < $len - 1 ): ?>
                                    <li style="height: 40px;" class="mb-0 hidden-sm-down">
                                        <div class="border_gallery_right"></div>
                                    </li>
                                    <?php endif; ?>
                            <?php
                                $i++;
                                endwhile; 
                            endif; ?>
                        </ul>
                    </div>
                    <!-- End work Filter -->
                    <div class="row container-grid nf-col-3">
                        <?php if( have_rows('element_categorie') ):
                                while( have_rows('element_categorie') ): the_row(); ?>
                                <div class="nf-item spacing <?php echo get_sub_field('data_filter'); ?>">
                                    <div class="item-box">
                                        <a> <img alt="<?php echo get_sub_field('image')["alt"]; ?>" src="<?php echo get_sub_field('image')["url"]; ?>" class="item-container"> </a>
                                        <div class="link-zoom">
                                                <a href="<?php echo get_sub_field('image')["url"]; ?>" class="fancylight" data-fancybox-group="<?php echo get_sub_field('data_filter'); ?>" > <img src="<?php echo get_field('image_plus')["url"];  ?>" alt="<?php echo get_field('image_plus')["alt"];  ?>" /> </a>
                                        </div>
                                        <div class="gallery-heading-accueil gallery-heading">
                                            <h4><a href="#"><?php echo get_sub_field('titre'); ?></a></h4>
                                            <p>
                                                    <?php echo get_sub_field('description'); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                        <?php endwhile; 
                        endif; ?>
                    </div>
                </div>
                <div class="col-md-1 black_color"></div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <!-- End Work Section -->
    
<?php get_footer(); ?>
