<?php

get_header(); ?>
<section class="inner-intro bg-img light-color overlay-before parallax-background " style="background: url('https://cimelta-madagascar.com/wp-content/uploads/2022/01/CIMELTA_produit_banniere-2-scaled.jpg') 0 58% no-repeat;-webkit-background-size: cover;">
            <div class="container">
                <div class="row title">

                </div>
            </div>
        </section>
    <!-- Contenu Page -->
    <div class="container mt-60">
        <div class="row">
            <div class="col-sm-12">
                <!--Détail-->
                <section id="detail-produit">
                    <div class="row">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="col-lg-5 col-md-12 d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($produit->ID); ?>" alt="cimelta produits"/>
                        </div>
                        
                        <div class="col-lg-7 col-md-12">
                            <div class="d-flex align-items-start flex-column bd-highlight mb-3 w-100">
                                <div class="pt-0 pb-2 pl-2 pr-2 bd-highlight">
                                    <h2><?php the_title(); ?> <strong><?php echo get_field('reference', $produit->ID ); ?></strong></h2>
                                </div>
                                <div class="p-2 bd-highlight">
                                    <?php if ( !empty( get_the_content() ) ){  ?>
                                            <div class="more">
                                                <?php the_content(); ?>
                                            </div>
                                            <a href="javascript:void(0)" class="read"></a>
                                        <?php } ?>
                                </div>
                                <?php 
                                    if (get_field('expert', $produit->ID ) != '') {
                                ?>
                                <div class="mt-auto p-2 bd-highlight foot-list-produit">
                                    <a href="mailto:<?php echo get_field( 'expert', $produit->ID); ?>?subject=<?php the_title(); ?>  <?php echo get_field('reference', $produit->ID); ?>"><span>contactez l'expert</span></a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php endwhile; endif; ?>
                        
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

<?php get_footer(); ?>
