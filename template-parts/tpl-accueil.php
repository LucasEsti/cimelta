<?php

/**
 * Template Name: Accueil
 */
get_header(); ?>
<h1 class="d-none">Cimelta madagascar page d'accueil</h1>
    <!--  Main Banner Start Hereee-->
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
    <!--  Main Banner End Here-->
        
    <!-- start Project Storie -->
    <section id="service_section" class=" ptb-xs-40 pt-4 padding-top-sm-1 pb-4 black_color">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-sm-12">
                    <div class="sec_hedding">
                        <?php // if( have_rows('project_storie') ):
                            ?>
                            <?php // while( have_rows('project_storie') ): the_row(); ?>
                                <?php
//                                    $images = get_sub_field('image_project');
//                                    if( $images ): ?>
<!--                                    <div class="logo">
                                        <a class="logo_a" href="#project_storie" ><img src="<?php //echo $images["url"]; ?>" alt="<?php //echo $images["alt"]; ?>" class="hvr-wobble-horizontal"/></a>
                                    </div>-->
                                <?php // endif; ?>
                            <?php
//                            endwhile; ?>
                        <?php // endif; ?>

                    </div>
                </div>
            </div>
        </div>             
    </section>
    <!-- end Project Storie -->

    <!-- start atout -->
    <section id="about_us" class="padding ptb-xs-40 fond-gris">
        <div class="container-fluid">
            <?php if( have_rows('atout_societe') ):
                ?>
                <?php while( have_rows('atout_societe') ): the_row(); ?>
                    <?php
                        $image_atout = get_sub_field('image_atout');
                        $groupe_atout_reps = get_sub_field('groupe_atout_rep');
                        ?>

                <div class="row d-flex align-items-center">
                    <div class="col-lg-1">

                    </div>
                    <div class="col-lg-6 col-md-12 about-left">

                        <div class="sec_hedding">
                            <h2 class="text-dark hvr-pulse-grow atout_societe"><?php echo get_sub_field('titre');  ?></h2>
                        </div>
                        <p class="text-dark" >
                                <?php echo get_sub_field('description');  ?>
                        </p>
                        <div class="">
                            <?php foreach($groupe_atout_reps as $groupe_atout_rep): ?>
                                <div class="row">
                                    <?php foreach($groupe_atout_rep["icono_atout"] as $icono_atout): ?>
                                        <div class="col-lg-4 col-md-4 d-flex align-items-center process mb-40 <?php echo $groupe_atout_rep["groupe_classe"];  ?>">
                                            <div class="<?php echo $groupe_atout_rep["icono_class"];  ?> float-left <?php echo $icono_atout["animate_class"];  ?>">
                                                <img class="<?php echo $groupe_atout_rep["image_classe"];  ?>" src="<?php echo $icono_atout["icon_atout"]["url"];  ?>" alt="" />
                                            </div>
                                            <div class="right-txt float-right">
                                                <?php foreach($icono_atout["text_icon_rep"] as $icono_atout_text_rep): ?>
                                                    <p class="text-dark">
                                                            <?php echo $icono_atout_text_rep["texte"];  ?>
                                                    </p>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endforeach; ?>

                            <div class="row"></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <img src="<?php echo $image_atout["url"];  ?>" alt="<?php echo $image_atout["alt"];  ?>" class="repo-full" alt="" />
                    </div>
                </div>
            <?php
                endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <!-- start atout -->
        
    <!-- Nos Domaines d'expertise mety -->
    <section id="domaines_expertise" class="padding ptb-xs-40 black_color">
        <div class="container-fluid">
            <?php if( have_rows('domaines_expertise') ):
                ?>
                <?php while( have_rows('domaines_expertise') ): the_row(); ?>
                    <?php
                        $groupe_domaine_expertises = get_sub_field('groupe_domaine_expertise');
                        ?>
                <div class="row text-center mb-30">
                    <div class="col-sm-12">
                        <div class="sec_hedding">

                            <h2 class="text-white expertise_h2 hvr-wobble-vertical"><?php echo get_sub_field("titre"); ?></h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="row">
                            <?php foreach($groupe_domaine_expertises as $groupe_domaine_expertise): ?>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-md-4 mb-xs-30 margin_bott">
                                    <div class="maine_box">
                                        <div class="items_picher">
                                            <img src="<?php echo $groupe_domaine_expertise["image_domaine_expertise"]["url"]; ?>" alt="<?php echo $groupe_domaine_expertise["image_domaine_expertise"]["alt"]; ?>" />
                                        </div>

                                        <div class="box_detail">
                                            <div class="use_detail">
                                                <div class="event_detail">
                                                    <img src="<?php echo $groupe_domaine_expertise["icone_domaine_expertise"]["url"]; ?>" alt="<?php echo $groupe_domaine_expertise["icone_domaine_expertise"]["alt"]; ?>" />
                                                </div>
                                            </div>
                                            <div class="datail_show">
                                                <a href="/nos-domaines-dexpertise/#<?php echo $groupe_domaine_expertise["titre_domaine_expertise"]; ?>"><h3><?php echo $groupe_domaine_expertise["titre_domaine_expertise"]; ?></h3></a>
                                                <p>
                                                    <?php echo $groupe_domaine_expertise["description_domaine_expertise"]; ?>
                                                </p>
                                                <!--<a href="#">plus</a>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php
                endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <!-- Nos Domaines d'expertis-->
        
    <!-- Project_Section -->
    <?php if( have_rows('project_section') ):
                ?>
                <?php while( have_rows('project_section') ): the_row(); ?>
                    <?php
                        $icon_projet = get_sub_field('icon_projet');
                        $groupe_projets = get_sub_field('groupe_projet');
                        ?>

    <section id="project_storie" class="padding ptb-xs-40" style="background: url('<?php echo get_sub_field('background')['url']; ?>');background-repeat: no-repeat; background-size: cover; ">
        <div class="container">
            <div class="row text-center mb-30">
                <div class="col-sm-12">
                    <div class="sec_hedding">
                        <h2 class="hvr-pulse-grow"><?php  echo get_sub_field('titre_section_projet'); ?></h2>
                    </div>
                </div>
            </div>

            <div class="row mb-30">
                <?php  foreach($groupe_projets as $groupe_projet): ?>
                    <div class="col-lg-4 col-md-4 mb-sm-30 mb-xs-30 <?php echo $groupe_projet["visibility"]; ?>">
                        <div class="nf-item">
                            <div class="item-box projects">
                                <a> <img src="<?php echo $groupe_projet["image_projet"]["url"]; ?>" alt="<?php echo $groupe_projet["image_projet"]["alt"];  ?>" class="item-container"> </a>
                                <div class="link-zoom">
                                    <a href="<?php echo $groupe_projet["image_projet"]["url"];  ?>" class="fancylight" data-fancybox-group="<?php echo $groupe_projet["fancy"]; ?>" title="<?php echo $groupe_projet["titre"];  ?>"> 
                                        <img src="<?php echo $icon_projet["url"];  ?>" alt="<?php echo $icon_projet["alt"];  ?>" /> 
                                        </a>
                                </div>
                                <div class="gallery-heading-accueil gallery-heading">
                                    <h4 class="text-center"><a href="https://cimelta-madagascar.com/project-stories/"><?php echo $groupe_projet["titre"];  ?></a></h4>
                                    <p class="text-center">
                                            <?php echo $groupe_projet["description"];  ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php  endforeach; ?>
            </div>

            <div class="row text-center mb-30">
                <div class="col-sm-12">
                    <div class="sec_hedding">
                        <h2 class="hvr-pulse-grow"><?php echo get_sub_field('titre_section_reference'); ?></h2>
                        <span class="b-line"></span>
                    </div>
                </div>
            </div>

            <!--Team Carousel -->
            <div class="row ">
<!--                <div id="team-carousel" class="owl-carousel team-carousel nf-carousel-theme" style="background: white;">
                        <?php // foreach(get_sub_field('gallery_reference') as $image): ?>
                            <div class="partner-logo">
                                <a href=""><img src="<?php // echo $image["url"]; ?>" alt="<?php // echo $image["alt"]; ?>"></a>
                            </div>
                        <?php // endforeach; ?>
                </div>-->
                <div id="perspective">
                    
                    <div id="carousel">
                        <?php foreach(get_sub_field('gallery_reference') as $image): ?>
                            <figure>
                                <img class="img-fluid" src="<?php echo $image["url"]; ?>" alt="<?php echo $image["alt"]; ?>">
                            </figure>
                                
                        <?php endforeach; ?>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    
    <?php
        endwhile; ?>
    <?php endif; ?>

    <!-- Project_Section_End-->
<?php get_footer(); ?>