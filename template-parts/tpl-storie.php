<?php

/**
 * Template Name: storie project
 */

get_header(); ?>

<?php if( have_rows('liste') ):
    while( have_rows('liste') ): the_row(); ?>
<div class="container mt-5 mb-5">
    
    <div class="col ">
        <h1 class=""><?php echo get_sub_field('titre'); ?></h1>
    </div>
    <div class="col">
        <?php echo get_sub_field('description'); ?>
    </div>
    
    <div class="col owlProjectPage owl-carousel owl-theme">
        <?php foreach(get_sub_field('phase') as $phase): ?>
            <?php 
                $i = 0 ;
                foreach($phase['gallery'] as $gal): 
                    
                ?><?php if ($i == 0){ ?>
                <div class="item">
                    <div class="item-box">
                            <a> <img alt="1" src="<?php echo $gal["url"]; ?>" class="item-container"> </a>
                        <div class="link-zoom">
                            <a href="<?php echo $gal["url"]; ?>" class="fancylight" data-fancybox-group="<?php echo $phase["group"]; ?>" > <img src="<?php echo get_field('icon_projet')['url']; ?>"> </a>
                        </div>
                        <div class="gallery-heading">
                            <h4><a href="<?php echo $gal["url"]; ?>"><?php echo $phase['titre']; ?></a></h4>
                            <p>
                                <?php echo $phase['description']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php 
                    
            $i++;
            endforeach; ?>
        <?php endforeach; ?>
        
    </div>
    <?php foreach(get_sub_field('phase') as $phase): ?>
            <?php 
                $i = 0 ;
                foreach($phase['gallery'] as $gal): 
                    
                ?><?php if ($i != 0){ ?>
                <div class="item d-none">
                    <div class="item-box">
                        <a> <img alt="1" src="<?php echo $gal["url"]; ?>" class="item-container"> </a>
                        <div class="link-zoom">
                            <a href="<?php echo $gal["url"]; ?>" class="fancylight" data-fancybox-group="<?php echo $phase["group"]; ?>" > <img src="<?php echo get_field('icon_projet')['url']; ?>"> </a>
                        </div>
                        <div class="gallery-heading">
                            <h4><a href="<?php echo $gal["url"]; ?>"><?php echo $phase['titre']; ?></a></h4>
                            <p>
                                <?php echo $phase['description']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php 
                    
            $i++;
            endforeach; ?>
        <?php endforeach; ?>
    
</div>
<?php
    endwhile;
endif; ?>
    
<?php get_footer(); ?>
