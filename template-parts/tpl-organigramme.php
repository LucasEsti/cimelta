<?php

/**
 * Template Name: organigramme
 */

get_header(); ?>
    <h1 class="d-none">Cimelta Madagascar organigramme de la société</h1>
    <div class="main-banner">
        <div class=" cv-carousel intro intro-carousel " data-spy="scroll" data-target="#myScrollspy" data-offset="1">
            <div id="idCarouss" class="item carouselSky owl-carousel owl-theme">
                <?php if( have_rows('sectionbanner') ):
                    ?>
                    <?php while( have_rows('sectionbanner') ): the_row(); ?>
                        <?php
                            $images = get_sub_field('slide');
                            if( $images ): ?>
                            <?php foreach($images as $image): ?>
                                <img src="<?php echo $image["url"]; ?>" alt="<?php echo $image["alt"]; ?>" class="img-responsive" data-animate="flipInY animated" onContextMenu="return false;">
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php
                    endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
        
    <section class="pt-90 pb-50 ptb-xs-40">
        <div class="container">
            <h2>Organigrammes de la société</h2>
            <br>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
            <?php if( have_rows('groupe_organigrammes') ):
                while( have_rows('groupe_organigrammes') ): the_row(); ?>
                    <?php
                         ?>
                  <li class="nav-item">
                    <a class="nav-link <?php if (get_sub_field('class') == "active"): ?>active<?php endif; ?>" data-toggle="pill" href="#<?php echo get_sub_field('id_localisation'); ?>"><?php echo get_sub_field('localisation'); ?></a>
                  </li>
                  <?php
                endwhile; ?>
            <?php endif; ?>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <?php if( have_rows('groupe_organigrammes') ):
                    while( have_rows('groupe_organigrammes') ): the_row(); ?>
                        <div id="<?php echo get_sub_field('id_localisation'); ?>" class="container tab-pane <?php echo get_sub_field('class'); ?>">
                            <img src="<?php echo get_sub_field('image')["url"]; ?>" alt="organigramme cimelta société"/>
                        </div>
                <?php
                endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </section> 
        
<?php get_footer(); ?>
