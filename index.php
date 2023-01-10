
<?php 

$code = get_option( '_prefix_my_options' );

get_header(  );?>


            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img4" style="background: url(<?php header_image();?>)">
                <div class="breadcrumbs-inner text-center">

                    <?php if($code['blog']) : ?>

                    <h1 class="page-title"><?php echo $code['blog'];?></h1>

                    <?php endif;?>

                    <?php if($code['breadcrumbs']) : ?>
                        <ul>
                        <li><?php the_breadcrumb(); ?></li>
                        </ul>
                    <?php endif;?>

                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Blog Section Start -->
            <div class="rs-inner-blog pt-120 pb-120 md-pt-90 md-pb-90">
                <div class="container">
                    <div class="row">
                        
                       <?php get_sidebar(  );?>

                        <div class="col-lg-8 pr-35 md-pr-15">
                            <div class="row">


                        <?php while(have_posts()) : the_post();?>

                            <?php get_template_part( 'formats/content', get_post_format(  ));?>


                        <?php endwhile;?>



                            



                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- Blog Section End --> 

        </div> 
        <!-- Main content End -->
     
       
        <?php get_footer(  );?>