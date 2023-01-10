
<div class="col-lg-12 mb-50">
    <div class="blog-item">
        <div class="blog-img">
            <a href="<?php the_permalink(  );?>">
                <?php the_post_thumbnail(  );?>
            </a>
            <?php the_category(  );?>
        </div>
        <div class="blog-content">
            <h3 class="blog-title"><a href="<?php the_permalink(  );?>">
            <?php the_title( );?>
            </a></h3>
            <div class="blog-meta">
                <ul class="btm-cate">
                    <li>
                        <div class="blog-date">
                            <i class="fa fa-calendar-check-o"></i> <?php the_time( 'F d , Y' );?>
                        </div>
                    </li>
                    <li>
                        <div class="author">
                            <i class="fa fa-user-o"></i> <?php the_author(  );?>
                        </div>
                    </li> 
                </ul>
            </div>
            <div class="blog-desc">   
                We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...           
            </div>
            <div class="blog-button inner-blog">
                <a class="blog-btn" href="<?php the_permalink(  );?>">Continue Reading</a>
            </div>
        </div>
    </div>
</div>
