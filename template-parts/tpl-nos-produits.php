<?php

/**
 * Template Name: nos produits
 */

get_header(); ?>
<h1 class="d-none">Cimelta Madagascar nos produits</h1>
<!--style="background: url('https://cimelta-madagascar.com/wp-content/uploads/2021/12/backRef.png');  background-position: center; background-repeat: no-repeat; background-size: cover; "-->
    <section class="pt-90 pb-50 ptb-xs-40" >
        <div class="container">
            
            <ul class="nav nav-tabs row d-flex justify-content-center" role="tablist">
            <?php if( have_rows('groupe_produits') ):
                while( have_rows('groupe_produits') ): the_row(); 
                    $groupe_product = get_sub_field('groupe_product'); 
                    ?>
                  <li class="nav-item col-lg-3 col-md-12">
                        <a class="text-center nav-link <?php if ($groupe_product['class'] == "active"): ?>active<?php else: ?><?php endif; ?>" data-toggle="pill" href="#<?php echo $groupe_product['id']; ?>"><?php echo $groupe_product['titre']; ?></a>
                  </li>
                  <?php
                endwhile;
            endif; ?>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <?php if( have_rows('groupe_produits') ):
                    while( have_rows('groupe_produits') ): the_row(); 
                    $groupe_product = get_sub_field('groupe_product');
                    ?>
                    <div id="<?php echo $groupe_product['id']; ?>" class="container tab-pane <?php echo $groupe_product['class']; ?>">
                        
                        <?php 
                            $temp = 0;
                            $temp_top = 0;
                            foreach($groupe_product['liste_produits'] as $product):
                                $produit = $product['product'];
//                                var_dump($produit);hy
                                ?>
                                <div class="row mb-5 pt-5 <?php if ($temp_top != 0) { ?>border-top-produits<?php  } ?>">
                                    
                                    <?php 
                                        if ($temp == 0) {
                                    ?>
                                    <div class="col-lg-5 col-md-12 d-flex align-items-center justify-content-center">
                                        <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($produit->ID); ?>" alt="cimelta produits groupes électrogène, inverseurs, onduleurs, coffres fort, transformateurs et cellule moyenne tension"/>
                                    </div>
                                    <div class="col-lg-7 col-md-12">
                                        <div class="d-flex align-items-start flex-column bd-highlight mb-3 w-100">
                                            <div class="pt-0 pb-2 pl-2 pr-2 bd-highlight">
                                                <h3><?php echo $produit->post_title; ?> <strong><?php echo get_field('reference', $produit->ID ); ?></strong></h3>
                                            </div>
                                            <div class="p-2 bd-highlight"><?php echo $produit->post_content; ?></div>
                                            <?php 
                                                if (get_field('expert', $produit->ID ) != '') {
                                            ?>
                                            <div class="mt-auto p-2 bd-highlight foot-list-produit">
                                                <a href="mailto:<?php echo get_field( 'expert', $produit->ID); ?>?subject=<?php echo $produit->post_title; ?> <?php echo get_field('reference', $produit->ID); ?>"><span>contactez l'expert</span></a>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php } else { ?>
                                    
                                    <div class="col-lg-7 col-md-12">
                                        <div class="d-flex align-items-start flex-column bd-highlight mb-3 w-100">
                                            <div class="pt-0 pb-2 pl-2 pr-2 bd-highlight">
                                                <h3><?php echo $produit->post_title; ?> <strong><?php echo get_field('reference', $produit->ID ); ?></strong></h3>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <?php echo $produit->post_content; ?>
                                            </div>
                                            <?php 
                                                if (get_field('expert', $produit->ID ) != '') {
                                            ?>
                                            <div class="mt-auto p-2 bd-highlight foot-list-produit">
                                                <a href="mailto:<?php echo get_field( 'expert', $produit->ID); ?>?subject=<?php echo $produit->post_title; ?> <?php echo get_field('reference', $produit->ID); ?>"><span>contactez l'expert</span></a>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-5 col-md-12 d-flex align-items-center justify-content-center">
                                        <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($produit->ID); ?>" alt="cimelta produits groupes électrogène, inverseurs, onduleurs, coffres fort, transformateurs et cellule moyenne tension"/>
                                    </div>
                                    
                                    <?php  } ?>
                                </div>
                            <?php
                            $temp++;
                            $temp_top++;
                            if ($temp == 2) {
                                $temp = 0;
                            }
                            endforeach; ?>
                        
                    </div>
                <?php
                endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </section> 
        
        
<?php get_footer(); ?>
