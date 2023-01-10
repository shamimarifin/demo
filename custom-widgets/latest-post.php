


<?php



class braintech_latest_post extends WP_Widget{


    public function __construct(){
        parent :: __construct(
            'braintech-latest-post',
            'Braintech Latest Post',
            array(
                'description'   =>  __('Custom widget by Braintech Latest Post'),
            )

        );
    }



    public function widget($args , $instance){

        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts' );
        $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : true;
        ?>
            <div class="recent-posts mb-50">
                   
                        <?php echo $args['before_title'];?> <?php echo $title;?><?php echo $args['after_title'];?>
                

                    
                    <?php 
                    
                    
                     $posts = new WP_Query(array(
                        'post_type' =>  'post',
                        'posts_per_page' =>  $instance['number'],
                     ));
                    
                    while($posts->have_posts()) : $posts->the_post();?>
                    
                    <div class="recent-post-widget">
                        <div class="post-img">
                            <a href="<?php the_permalink(  );?>"><?php the_post_thumbnail();?></a>
                        </div>
                        <div class="post-desc">
                            <a href="<?php the_permalink(  );?>"><?php the_title( );?></a>


                       

                            <span class="date">
                            <?php if($show_date) :?>
                                <i class="fa fa-calendar"></i>
                                <?php echo get_the_date( 'F d , Y' );?>
                                <?php endif;?>
                            </span>

                      
                        </div>
                    </div>
                   
                    <?php endwhile;?>
                </div>

        <?php 

    }


    public function form($instance){

        $title = isset($instance['title']) ? esc_attr( $instance['title'] ) : '';
        $number = isset($instance['number']) ? absint( $instance['number'] ) : 5;
        $show_date = isset($instance['show_date']) ? (bool) $instance['show_date'] : false;

        ?>

        <p>
            <label for="<?php echo $this->get_field_id('title');?>">  <?php _e( 'Title:');?> </label>
                <input type="" name="<?php echo $this->get_field_name('title');?>" value="<?php echo $title;?>" id=" <?php echo $this->get_field_id('title');?>" class="widefat">
         
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('number');?>"><?php _e( 'Number of posts to show:');?></label>

            <input type="number" name="<?php echo $this->get_field_name('number');?>" id="<?php echo $this->get_field_id('number');?>" size="3" step="1" min="1" class="tiny-text" value="<?php echo $number;?>">
        </p>

        <p>
            <input type="checkbox" class="checkbox" name="<?php echo $this->get_field_name('show_data');?>" id="<?php echo $this->get_field_id('show_date');?>">
            <label for="<?php echo $this->get_field_id('show_date');?>"><?php _e( 'Display post date?');?></label>
        </p>





        <?php
    }


}




add_action( 'widgets_init', 'latest_post_widgets');

function latest_post_widgets(){

    register_widget( 'braintech_latest_post' );

}