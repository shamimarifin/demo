
<?php get_header(  );?>


            <!-- Blog Section Start -->
            <div class="rs-inner-blog pt-120 pb-120 md-pt-90 md-pb-90">
                <div class="container">
                    <div class="row">
                       
                    <?php get_sidebar(  );?>

                        
                        <div class="col-lg-8 pr-35 md-pr-15">
                            <div class="row">


                                <div class="col-lg-12">

                                <?php while(have_posts()) : the_post();?>

                                    <div class="blog-details">
                                        <div class="bs-img mb-35">
                                            <a href="<?php the_permalink(  );?>"><?php the_post_thumbnail( );?></a>
                                        </div>
                                        <div class="blog-full">
                                            <ul class="single-post-meta">
                                                <li>
                                                    <span class="p-date"><i class="fa fa-calendar-check-o"></i> 
                                                    <?php the_time( 'F d, Y' );?>
                                                    </span>
                                                </li> 
                                                <li>
                                                    <span class="p-date"> <i class="fa fa-user-o"></i> <?php the_author();?> </span>
                                                </li> 
                                                <li class="Post-cate">
                                                    <div class="tag-line">
                                                        <i class="fa fa-book"></i>
                                                        <a href="#"><?php the_tags( );?></a>
                                                    </div>
                                                </li>
                                                <li class="post-comment"> <i class="fa fa-comments-o"></i> 1</li>
                                            </ul>
                                           <?php the_content(  );?>
                                        <?php endwhile;?>
                                        
                                       

                                            <h3 class="comment-title">1 comment on “Servo Project Joins The Linux Foundation Desco”</h3>
                                            <div class="comment-body">
                                               <div class="rstheme-logo">
                                                   <img src="assets/images/rstheme.png" alt="">
                                               </div>
                                               <div class="comment-meta">
                                                   <span><a href="#">Admin</a></span>
                                                   <a href="#">December 3, 2020 at 8:30 am</a>
                                                   <p class="mb-15">
                                                       Aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est
                                                   </p>
                                                   <div class="btn-part">
                                                      <a class="readon reply" href="#">Reply</a> 
                                                   </div>
                                               </div>
                                            </div>


                                            <h3 class="comment-title">Leave a Reply</h3>
                                            <p>Your email address will not be published. Required fields are marked *</p>
                                            <div class="comment-note">
                                                <div id="form-messages"></div>
                                                <form id="contact-form" method="post" action="https://rstheme.com/products/html/braintech/mailer.php">
                                                    <fieldset>
                                                        <div class="row">
                                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name*" required="">
                                                            </div> 
                                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                                <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail*" required="">
                                                            </div>
                                                            <div class="col-lg-12 mb-30">
                                                                <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="btn-part">
                                                           <a class="readon learn-more post" href="#">Post Comment</a>
                                                        </div> 
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- Blog Section End --> 

        </div> 
        <!-- Main content End -->
       

        <?php get_footer(  );?>