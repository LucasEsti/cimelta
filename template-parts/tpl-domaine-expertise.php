<?php

/**
 * Template Name: domaine expertise
 */

get_header(); ?>
        <h1 class="d-none">Cimelta Madagascar nos domaines d'expertises</h1>
        <!-- start atout -->
        <?php if( have_rows('groupe_repetiteur') ):
                    ?>
            <?php while( have_rows('groupe_repetiteur') ): the_row(); ?>
                <?php
                     ?>
            <section id="<?php echo get_sub_field('id'); ?>" class="padding ptb-xs-40 <?php echo get_sub_field('style_groupe'); ?>">
                <div class="container-fluid">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-1">

                        </div>
                        <?php
                            $image_groupe = get_sub_field('image_groupe');
                            $image_groupe_url = $image_groupe["url"];
                            $image_groupe_alt = $image_groupe["alt"];
                            
                            $icon_titre = get_sub_field('icon_titre');
                            $icon_titre_url = $icon_titre["url"];
                            $icon_titre_alt = $icon_titre["alt"];
                            
                            $is_left = get_sub_field('is_left');
                            
                            $elements_groupe = get_sub_field('element_groupe');
                            if( $is_left == "true" ): ?>
                        
                            <div class="d-flex justify-content-center col-lg-4 col-md-12 <?php echo get_sub_field('image_classe'); ?>">
                                <img src="<?php echo $image_groupe_url; ?>" class="repo-full" alt="<?php echo $image_groupe_alt; ?>" />
                            </div>              
                            <div class="col-lg-5 col-md-12 about-left">
                                <div class="row mb-3">
                                    <div class="col-2">
                                        <div class="icon-lf-4 float-left">
                                            <img src="<?php echo $icon_titre_url; ?>" alt="<?php echo $icon_titre_alt; ?>" class="rotate_image"/>
                                        </div>
                                    </div>
                                    <div class="col-10 d-flex align-items-center">
                                        <div class="sec_hedding">
                                            <h2 class="text-dark font-weight-bold hvr-pulse-grow"><?php echo get_sub_field('titre'); ?> </h2>
                                        </div>
                                    </div>

                                </div>  
                                <div class="row mb-3 ml-1">
                                    <p class="<?php echo get_sub_field('couleur_text'); ?>">
                                        <?php echo get_sub_field('description_1'); ?>
                                    </p>
                                </div>
                                <div class="row d-flex align-items-start mb-3">
                                    <?php foreach($elements_groupe as $element_groupe): ?>
                                        <div class="d-flex align-items-center process pb-4 <?php echo $element_groupe["element_class"]; ?>">
                                            <div class="container">
                                                <div class="row d-flex justify-content-center mb-3">
                                                    <div class="icon-lf">
                                                        <img src="<?php echo $element_groupe["icon"]["url"]; ?>" alt="<?php echo $element_groupe["icon"]["alt"]; ?>" class="hvr-bounce-in"/>
                                                    </div>
                                                </div>
                                                <div class="row d-flex justify-content-center">
                                                    <div class="text-wrap text-center font-weight-bold <?php echo get_sub_field('couleur_text'); ?>" <?php if( $element_groupe["modal"] != ""): ?>data-toggle="modal" data-target="#id-<?php echo $element_groupe["modal"]; ?>"<?php endif; ?>>
                                                        
                                                        <?php foreach($element_groupe["text_rep"] as $text): 
                                                                echo $text["text"];
                                                            endforeach; ?>
                                                    </div>
                                                   <?php if( $element_groupe["modal"] != ""): ?>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="<?php echo $element_groupe["modal"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                                
                                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                                    <?php 
                                                                    $textCpl = "";
                                                                    foreach($element_groupe["text_rep"] as $text): 
                                                                            $textCpl = $textCpl . $text["text"];
                                                                        endforeach;?>
                                                                    <img src="<?php echo $element_groupe["icon"]["url"]; ?>" alt="<?php echo $element_groupe["icon"]["alt"]; ?>"/> 
                                                                    <?php echo strip_tags($textCpl); ?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                          </div>
                                                          <div class="modal-body">
                                                                <?php echo $element_groupe["description"]; ?>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="row ml-1">
                                    <p class="<?php echo get_sub_field('couleur_text'); ?>">
                                        <?php echo get_sub_field('description_2'); ?>
                                    </p>
                                </div>
                            </div>
                        
                            <?php else: ?>
                            <div class="col-lg-6 col-md-12 about-left">
                                <div class="row mb-3">
                                    <div class="col-2">
                                        <div class="icon-lf-4 float-left" >
                                            <img src="<?php echo $icon_titre_url; ?>" alt="<?php echo $icon_titre_alt; ?>" class="rotate_image"/>
                                        </div>
                                    </div>
                                    <div class="col-10 d-flex align-items-center">
                                        <div class="sec_hedding ">
                                            <h2 class="text-white font-weight-bold hvr-pulse-grow"><?php echo get_sub_field('titre'); ?></h2>
                                        </div>
                                    </div>
                                </div>  
                                <div class="row mb-3 ml-1">
                                    <p class="<?php echo get_sub_field('couleur_text'); ?>">
                                        <?php echo get_sub_field('description_1'); ?>
                                    </p>
                                </div>
                                <div class="row d-flex align-items-start mb-3">
                                    <?php foreach($elements_groupe as $element_groupe): ?>
                                        <div class="d-flex align-items-center process pb-4 <?php echo $element_groupe["element_class"]; ?>">
                                            <div class="container">
                                                <div class="row d-flex justify-content-center mb-3">
                                                    <div class="icon-lf">
                                                        <img src="<?php echo $element_groupe["icon"]["url"]; ?>" alt="<?php echo $element_groupe["icon"]["alt"]; ?>" class="hvr-bounce-in"/>
                                                    </div>
                                                </div>
                                                <div class="row d-flex justify-content-center">
                                                    <div class="text-wrap text-center font-weight-bold <?php echo get_sub_field('couleur_text'); ?>" <?php if( $element_groupe["modal"] != ""): ?>data-toggle="modal" data-target="#id-<?php echo $element_groupe["modal"]; ?>"<?php endif; ?>>
                                                        
                                                        <?php foreach($element_groupe["text_rep"] as $text): 
                                                                echo $text["text"];
                                                            endforeach; ?>
                                                    </div>
                                                   <?php if( $element_groupe["modal"] != ""): ?>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="<?php echo $element_groupe["modal"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                                
                                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                                    <?php 
                                                                    $textCpl = "";
                                                                    foreach($element_groupe["text_rep"] as $text): 
                                                                            $textCpl = $textCpl . $text["text"];
                                                                        endforeach;?>
                                                                    <img src="<?php echo $element_groupe["icon"]["url"]; ?>" alt="<?php echo $element_groupe["icon"]["alt"]; ?>"/> 
                                                                    <?php echo strip_tags($textCpl); ?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                          </div>
                                                          <div class="modal-body">
                                                                <?php echo $element_groupe["description"]; ?>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                                <div class="row ml-1">
                                    <p class="<?php echo get_sub_field('couleur_text'); ?>">
                                        <?php echo get_sub_field('description_2'); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 d-flex justify-content-center">
                                <img src="<?php echo $image_groupe_url; ?>" class="repo-full" alt="<?php echo $image_groupe_alt; ?>" />
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>    
                
            <?php
            endwhile; ?>
        <?php endif; ?>
        <!-- start atout -->
        
<?php get_footer(); ?>
