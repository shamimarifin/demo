
<?php

$code =  get_option('_prefix_my_options' )


?>






<!DOCTYPE html>
<html <?php language_attributes(  );?>>  


<head>
<!-- meta tag -->
<meta charset="<?php bloginfo( 'charset' );?>">

<meta name="description" content="">
<!-- responsive tag -->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">




<?php wp_head();?>
</head>
<body class="defult-home">

<!--Preloader area start here-->
<div id="loader" class="loader">
    <div class="loader-container"></div>
</div>
<!--Preloader area End here--> 

<!-- Main content Start -->
<div class="main-content">
    
    <!--Full width header Start-->
    <div class="full-width-header">
        <!--Header Start-->
        <header id="rs-header" class="rs-header">
            <!-- Topbar Area Start -->
            <div class="topbar-area">
                <div class="container">
                    <div class="row rs-vertical-middle">
                        <div class="col-lg-2">
                            <div class="logo-part">
                                <a href="<?php echo home_url( );?>"><img src="<?php echo $code['logo-upload'];?>" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-10 text-right">
                            <ul class="rs-contact-info">

                            
                                <li class="contact-part">
                                    <i class="flaticon-location"></i>
                                    <span class="contact-info">
                                        <span>Address</span>
                                    <?php echo $code['address'];?>
                                    </span>
                                </li>

                        
                                <li class="contact-part">
                                    <i class="flaticon-email"></i>
                                    <span class="contact-info">
                                        <span>E-mail</span>
                                        <a href="mailto:<?php echo $code['email'];?>"> <?php echo $code['email'];?></a>
                                    </span>
                                </li>
                                <li class="contact-part no-border">
                                        <i class="flaticon-call"></i>
                                    <span class="contact-info">
                                        <span>Phone</span>
                                        <?php echo $code['phone'];?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar Area End -->

            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container">
                    <div class="logo-area">
                        <a href="<?php echo home_url(  );?>">
                            <img class="sticky-logo" src="<?php echo $code['sticky-upload'];?>" alt="logo">
                        </a>
                    </div>
                    <div class="rs-menu-area">
                        <div class="main-menu">
                            <div class="mobile-menu">
                                <a href="<?php echo home_url(  );?>" class="mobile-logo">
                                    <img src="<?php echo $code['mobile-upload'];?>" alt="logo">
                                </a>
                                <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                            
                            <?php wp_nav_menu( array(
                                'theme_location'    =>  'main-menu',
                                'menu_class'        =>  'nav-menu',
                                'container_class'   =>  'rs-menu',
                                'walker'            =>   new braintech()
                            ) );?>
                        </div> <!-- //.main-menu -->                                
                    </div>
                    <div class="expand-btn-inner search-icon hidden-sticky hidden-md">
                        <ul>
                            <li class="sidebarmenu-search">
                                <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="<?php echo home_url( );?>">
                                    <i class="flaticon-search"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="toolbar-sl-share">
                                     <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->
        </header>
        <!--Header End-->
    </div>
    <!--Full width header End-->
    