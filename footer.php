 
<?php

$code =  get_option('_prefix_my_options' )


;?>
 
 
 <!-- Footer Start -->
 <footer id="rs-footer" class="rs-footer" style="background: url(<?php echo get_template_directory_uri();?>/assets/images/bg/footer-bg.png);               background-color: #F5F6F9;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                            <?php dynamic_sidebar( 'footer-first-area' );?>
                        </div>

                        <div class="col-lg-3 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                           <?php dynamic_sidebar( 'footer-second-area' );?>
                        </div>


                        <div class="col-lg-3 col-md-12 col-sm-12 md-mb-30">
                            
                            <?php dynamic_sidebar( 'footer-third-area' );?>
                           
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                           
                        <?php dynamic_sidebar( 'footer-fourth-area' );?>
                       
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">                    
                    <div class="row y-middle">
                        <div class="col-lg-6 text-right md-mb-10 order-last">
                         

                            <?php wp_nav_menu( array(
                                'theme_location'    =>  'footer-menu',
                                'menu_class'        =>  'copy-right-menu',
                            ) );?>



                        </div>
                        <div class="col-lg-6">
                            <div class="copyright">
                                <p><?php echo $code['copyright'];?><a href="<?php echo $code['author-url'];?>"><?php echo $code['author'];?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

       

        <?php wp_footer();?>
    </body>


</html>