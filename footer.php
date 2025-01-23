
    <!-- FOOTER -->
    <footer class="footer pt-30 pt-xs-60">
        <div class="container-fluid">
            <!--Footer Info -->
            <div class="row footer-info mb-30">
                <div class="col-xl-1 col-lg-0">
<!--                    <img src="<?php // echo get_field('map', 'option')['url']; ?>"/>-->
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-xs-12 mb-sm-30">
                    <h4 class="mb-30 text-lg-left text-md-center">contatez-nous</h4>
                    <div class="row">
                        <?php if( get_field('contact', 'option') ):
                                $contacts = get_field('contact', 'option');
                                $i = 0;
                            foreach($contacts as $contact): ?>
                            <div class="col-xl-4 col-lg-4 offset-lg-0 col-md-5 offset-md-1 col-sm-12">
                                <address class="adresse_footer">
                                    <i class="fa-icons d-none"></i> <span><?php echo $contact["localisation"]; ?></span>
                                </address>
                                <ul class="link-small">
                                    <li>
                                        <a href="#"><i class="ion-ios-location fa-icons"></i><?php echo $contact["adresse"]; ?></a>
                                    </li>
                                    <li>
                                        <a href="#" class="row"><i class="col ion-ios-telephone fa-icons"></i><span class="col">
                                            <?php 
                                                    if ($contact["icon_mail"]['url'] != ""): ?>
                                                <img src="<?php echo $contact["icon_mail"]['url']; ?>"/>
                                                <?php
                                                endif; 
                                                ?>
                                            <?php echo $contact["phone"]; ?></span></a>
                                    </li>
                                    <?php if ($contact["mail"] != ''): ?>
                                    <li>
                                        <a href="mailto:<?php echo $contact["mail"]; ?>"><i class="ion-ios-email fa-icons"></i><?php echo $contact["mail"]; ?></a>
                                    </li>
                                    <?php endif;?>

                                </ul>

                            </div>
                        <?php 
                            if ($i != 0): ?>
<!--                            <div class="col-md-1 hidden-md-down">
                                <div class="col-6 border_footer_element"></div>
                            </div>-->
                        <?php endif; 
                            $i++;
                            endforeach;
                        endif; 
                        ?>
                        <div class="col-xl-4 col-lg-4 offset-lg-0 col-md-5 offset-md-1 col-sm-12">
                            <address class="adresse_footer">
                                <i class="fa-icons d-none"></i> <span>NOS COMMERCIAUX</span>
                            </address>
                            <ul class="link-small">
                                <?php if( get_field('commerciaux', 'option') ):
                                    $commerciaux = get_field('commerciaux', 'option');
                                foreach($commerciaux as $mailCom): ?>

                                <li>
                                    <a href="mailto:<?php echo $mailCom['mail']; ?>"><i class="ion-ios-email fa-icons"></i><?php echo $mailCom['mail']; ?></a>
                                </li>

                                <?php
                                    endforeach;
                                endif; 
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-5 col-xs-12 mb-sm-30 pt-5">
                    <div class="icons-hover-black d-flex justify-content-center">

                         <?php if( get_field('presentation_digital', 'option') ):
                            ?>
                        <a href="<?php echo get_field('presentation_digital', 'option')['url']; ?>" data-toggle="tooltip" data-placement="top" title="Télécharger la présentation digitale"><img src="<?php echo get_field('icon_pdf', 'option')['url']; ?>" alt="cimelta présentation digitale"/></a>
                        <?php endif;?> 
                    </div>
                    <h5 class="mt-3 text-center">présentation digitale à télécharger</h5>
                    <div class="icons-hover-black d-flex justify-content-center">
                        <?php if( get_field('linkedin', 'option') ):
                            ?>
                        <a href="<?php echo get_field('linkedin', 'option'); ?>" target="blank"> <i class="fa fa-linkedin"></i> </a>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <!-- End Footer Info -->
        </div>
    </footer>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FM625HHZLX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FM625HHZLX');
</script>
        
    <script type="text/javascript" src="<?php bloginfo("template_url");  ?>/assets/js/jquery.min.js"></script>
    <script src="<?php bloginfo("template_url");  ?>/assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url");  ?>/assets/js/tether.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url");  ?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url");  ?>/assets/js/wow.min.js"></script>
    <!-- masonry,isotope Effect Js -->
    <script src="<?php bloginfo("template_url");  ?>/assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo("template_url");  ?>/assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo("template_url");  ?>/assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo("template_url");  ?>/assets/js/jquery.appear.js" type="text/javascript"></script>
    <!-- revolution Js -->
    <script type="text/javascript" src="<?php bloginfo("template_url");  ?>/assets/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url");  ?>/assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url");  ?>/assets/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url");  ?>/assets/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url");  ?>/assets/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url");  ?>/assets/extensions/revolution.extension.parallax.min.js"></script>
    <!-- Mail Function Js -->
    <script src="<?php bloginfo("template_url");  ?>/assets/js/validation.js" type="text/javascript"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="<?php bloginfo("template_url");  ?>/assets/js/jquery.appear.js" type="text/javascript"></script>
    <script src="<?php bloginfo("template_url");  ?>/assets/js/custom.js" type="text/javascript"></script>

    <script src="<?php bloginfo("template_url");  ?>/assets/js/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="<?php bloginfo("template_url");  ?>/assets/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php bloginfo("template_url");  ?>/assets/scrollreveal/scrollreveal.min.js"></script>
    
    <script src="<?php bloginfo("template_url");  ?>/assets/Minimal-3D-Perspective-Carousel-with-jQuery-CSS3-3D-Carousel/js/3dcarousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js" integrity="sha512-VJ/iYbiu1eJ6yLimfTi65t2R9TFcG5D9X8ZCfbbEFhTfPnKJh8byoKXEawi5ScJZBYL1eiirL1+MczZDx0Tz9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.min.js" integrity="sha512-0bHMhYsdpiur1bT84kDH4D7cpxFQ9O7uA5yxVAqWC87h552Xt0swX4M+ZlXMKE8oPVRIJ5lAwXWO2UWeDwJJOw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#nav-tab').tab('show');
             var slideUpImg = $('#slideUpImg');
             var slideDownImg = $('#slideDownImg');
             var slideText = $('#slideText');

             $('#carousel').carousel3d();
//             var expertise = $('.expertise');
//             var expertise_timer = false;
//             $('.expertise_h2').on("mouseover", function() {
//                 if (expertise_timer == false) {
//                     expertise_timer = true;
//                     expertise.textillate({ in: { effect: 'rollIn' }, loop: false, });
//                     expertise.textillate('start');
//                     expertise.on('end.tlt', function () {
//                         expertise_timer = false;
//                     });
//                 }
//
//
//             });

             var imageTous = $("#imageTous").attr("src");
             $("#imageTous").on("click", function() {
                 $("#imageTous").attr("src", imageTous);
             });

//                var iconLf2 = $('.icon-lf-2');
//                iconLf2.on("mouseover", function() {
//                    console.log($(this).attr("anim"));
//                    var anim_icon = $('.anim_' + $(this).attr("anim"))
//                    anim_icon.addClass(anim_icon.data('animate'));
//                    setTimeout(function(){
//                        anim_icon.removeClass(anim_icon.attr("anim") + " animated");
//                    }, 1500);
//                });
             setTimeout(function(){
                 slideUpImg.addClass(slideUpImg.data('animate'));
                 slideDownImg.addClass(slideDownImg.data('animate'));
                 slideText.addClass(slideText.data('animate'));

                 setTimeout(function(){
//                        $("#slideComplet").removeClass("d-none");
//                            slideUpImg.removeClass("slideInUp animated");
//                            slideDownImg.removeClass("slideInDown animated");
//                            slideText.removeClass("slideInRight animated");

//                        slideUpImg.addClass("d-none");
//                        slideDownImg.addClass("d-none");
//                        slideText.addClass("d-none");

                 }, 1000);
             }, 700);

//                var logo = $('#logoAnime');
//            
//                logo.hover(
//                    function() {
//                        slideUpImg.addClass(slideUpImg.data('animate'));
//                        slideDownImg.addClass(slideDownImg.data('animate'));
//                        slideText.addClass(slideText.data('animate'));
//                        setTimeout(function(){
//                            slideUpImg.removeClass("slideInUp animated");
//                            slideDownImg.removeClass("slideInDown animated");
//                            slideText.removeClass("slideInRight animated");
//                        }, 2000);
//                    }, function() {
//    //                  logo.removeClass("rotateIn animated");
//                    }
//                  );

             var owlCaroussOption = {
                 loop: true,
                 items: 1,
                 autoplay: true,
                 autoplayTimeout: 8000,
                 dots: false,
                 smartSpeed: 850,
                 navText: ["<img src='<?php bloginfo("template_url");  ?>/images/img/Domaines-expertise/flecheGauche.png' />","<img src='<?php bloginfo("template_url");  ?>/images/img/Domaines-expertise/fleche.png' />"],
                 nav: true,
                 lazyLoad: true,
                 onDrag: function(e) {
                     //animateTemp = e.item.index;
                     //itemTemp = $(".owl-item.active");
                 },
     //            onDragged: animateDraggSlide,
     //            //onTranslated: animateSlide,
     //            onTranslate: removeAnimation,
                 responsive: {
                     0: {
                         items: 1,
                         margin: 30
                     },
                     600: {
                         items: 1,
                         margin: 30,
                             }
                         }
             };
             
             var owlProjectPage = {
                 loop: false,
                 items: 1,
                 autoplay: true,
                 autoplayTimeout: 8000,
                 dots: false,
                 smartSpeed: 850,
                 lazyLoad: true,
                 responsive: {
                     0: {
                        items: 1,
                        margin: 30
                     },
                     600: {
                        items: 3,
                        margin: 30,
                        },
                    1000:{
                        items:4,
                        margin: 30,
                    }
                }
             };
            $(".carouselSky").owlCarousel(owlCaroussOption);
            $(".owlProjectPage").owlCarousel(owlProjectPage);
            $('[data-toggle="tooltip"]').tooltip();
         });

    </script>
    
    <!-- Global site tag (gtag.js) - Google Ads: 386079901 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-386079901"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-386079901');
</script>
<!-- Event snippet for Website traffic conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-386079901/NkkxCJisl_YCEJ25jLgB'});
</script>


</body>

<!--  08:21 GMT -->
</html>
