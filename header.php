<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */
?>
<!DOCTYPE html>
<html lang="en">
	
<!--  01:03 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo get_the_title(); ?></title>
        <?php wp_head(); ?>
        <?php if( get_field('logo_head', 'option') ): ?>
            <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_field('logo_head', 'option')["url"] ?>">
        <?php endif; ?>
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">

        <link href= "<?php bloginfo("template_url");  ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php bloginfo("template_url");  ?>/assets/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="<?php bloginfo("template_url");  ?>/assets/css/ionicons.css" rel="stylesheet" type="text/css">
        <link href="<?php bloginfo("template_url");  ?>/assets/css/flaticon.css" rel="stylesheet" type="text/css">
        <link href="<?php bloginfo("template_url");  ?>/assets/css/simple-line-icons.css" rel="stylesheet" type="text/css">
        <!--<link href="<?php // bloginfo("template_url");  ?>/assets/css/animate.css" type="text/css" rel="stylesheet">-->
        <link href="<?php bloginfo("template_url");  ?>/assets/css/jquery-ui.min.css" type="text/css" rel="stylesheet">
        <!--Main Slider-->
        <link href="<?php bloginfo("template_url");  ?>/assets/css/settings.css" type="text/css" rel="stylesheet" media="screen">
        <link href="<?php bloginfo("template_url");  ?>/assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">
        <link href="<?php bloginfo("template_url");  ?>/assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css">
        <link href="<?php bloginfo("template_url");  ?>/assets/css/style.css" type="text/css" rel="stylesheet">
        <link href="<?php bloginfo("template_url");  ?>/assets/css/style_custom.css" type="text/css" rel="stylesheet">
        <link href="<?php bloginfo("template_url");  ?>/assets/css/index.css" type="text/css" rel="stylesheet">
        <link href="<?php bloginfo("template_url");  ?>/assets/css/header.css" type="text/css" rel="stylesheet">
        <link href="<?php bloginfo("template_url");  ?>/assets/css/footer.css" type="text/css" rel="stylesheet">
        <link href="<?php bloginfo("template_url");  ?>/assets/css/theme-color/default.css" rel="stylesheet" type="text/css" id="theme-color" />
        <link rel="https://cdn.rawgit.com/mfd/f3d96ec7f0e8f034cc22ea73b3797b59/raw/856f1dbb8d807aabceb80b6d4f94b464df461b3e/gotham.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css" integrity="sha512-SJw7jzjMYJhsEnN/BuxTWXkezA2cRanuB8TdCNMXFJjxG9ZGSKOX5P3j03H6kdMxalKHZ7vlBMB4CagFP/de0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="<?php bloginfo("template_url");  ?>/assets/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <meta name="image" property="og:image" content="<?php echo get_field('icon_linkedin', 'option')["url"] ?>">
        <meta name="google-site-verification" content="PLUussDvQ5AyYtCbgZQtua_z4MuCtjZu0nvMkjkoRp8" />
        <meta name="google-site-verification" content="FLkRvsEQywWGHDDq5MjfChE6DVydFKYrLswN65Qdi64" />
    </head>
    <body>
        <!--loader-->
        <div id="preloader">
            <div class="sk-circle">
                <div class="sk-circle1 sk-child"></div>
                <div class="sk-circle2 sk-child"></div>
                <div class="sk-circle3 sk-child"></div>
                <div class="sk-circle4 sk-child"></div>
                <div class="sk-circle5 sk-child"></div>
                <div class="sk-circle6 sk-child"></div>
                <div class="sk-circle7 sk-child"></div>
                <div class="sk-circle8 sk-child"></div>
                <div class="sk-circle9 sk-child"></div>
                <div class="sk-circle10 sk-child"></div>
                <div class="sk-circle11 sk-child"></div>
                <div class="sk-circle12 sk-child"></div>
            </div>
        </div>
        <!--loader-->

        <!-- header Start -->
        <header id="header" class="header menu-bg">
            <div class="nav-wrap">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-3 d-flex align-items-center black_color">
                            <div id="logoAnime" class="logo" >
                                <?php if( get_field('logo_mobile', 'option') ): ?>
                                    <a href="#" class="hidden-md-up"><img src="<?php echo get_field('logo_mobile', 'option')["url"] ?>" alt="<?php echo get_field('logo_mobile', 'option')["alt"] ?>" /></a>
                                <?php endif; ?>
                                
                                <a href="#" class="hidden-sm-down" style="padding-left: 0px;  padding-right: 0px;">
                                    <?php if( get_field('logo_mobile', 'option') ): ?>
                                        <img id="slideComplet" src="<?php echo get_field('logo_complet', 'option')["url"] ?>" alt="<?php echo get_field('logo_complet', 'option')["alt"] ?>" class="d-none" />
                                    <?php endif; ?>
                                        
                                    <?php if( get_field('logo_up', 'option') ): ?>
                                        <img id="slideUpImg" data-animate="slideInUp animated" src="<?php echo get_field('logo_up', 'option')["url"] ?>" alt="<?php echo get_field('logo_up', 'option')["alt"] ?>" />
                                    <?php endif; ?>
                                        
                                    <?php if( get_field('logo_down', 'option') ): ?>
                                        <img id="slideDownImg" data-animate="slideInDown animated" src="<?php echo get_field('logo_down', 'option')["url"] ?>" alt="<?php echo get_field('logo_down', 'option')["alt"] ?>" />
                                       
                                    <?php endif; ?>
                                        
                                        
                                    <?php if( get_field('logo_left', 'option') ): ?>
                                        <img id="slideText" data-animate="slideInRight animated" src="<?php echo get_field('logo_left', 'option')["url"] ?>" alt="<?php echo get_field('logo_left', 'option')["alt"] ?>" />
                                    <?php endif; ?>
                                   
                                </a>
                            </div>
                            
                            <!-- Phone Menu button -->
                            <button id="menu" class="menu hidden-md-up"></button>
                            </div>
                        <div class="col-md-9 nav-bg d-flex align-items-center fond-gris">
                            <nav id="navMenu" class="navigation d-sm-flex justify-content-md-center">
                                <ul><?php 
                                    $menu_name = 'menu-principal'; //menu slug
                                    $menus = wp_get_nav_menu_items( $menu_name, array() );
                                    $taille = count($menus);
                                    
                                    $i = 1;
                                    ?>
                                    <?php foreach($menus as $menu):
                                        ?>
                                        <li>
                                            <a class="cimelta-menu <?php if ($menu->{'object_id'} == get_queried_object_id()): ?>active-nav<?php endif; ?>" href="<?php echo $menu->{'url'}; ?>"><?php echo $menu->{'title'}; ?></a><i class="ion-ios-plus-empty hidden-md-up"></i>
                                        </li>
                                        <?php if($i < $taille):
                                        ?>
                                        <li class="hidden-md-down">
                                            <a>|</a>
                                        </li>
                                        <?php endif; 
                                        $i++;
                                        ?>
                                        
                                        
                                    <?php endforeach; ?>

                                </ul>
                            </nav>
                        </div>  
                    </div>
                </div>
            </div>
        </header>
        <!--Header End-->
        
        <?php if(get_field('background_banner')): ?>
        <!-- Intro Section -->
        <section class="inner-intro bg-img light-color overlay-before parallax-background " style="background: url('<?php echo get_field('background_banner')["url"]; ?>') 0 58% no-repeat;-webkit-background-size: cover;">
            <div class="container">
                <div class="row title">

                </div>
            </div>
        </section>    
        <?php endif; ?>

