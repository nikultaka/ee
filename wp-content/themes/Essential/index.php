<?php
/**
 Theme Name: Essential
Theme URI: http://wordpress.org/themes/Essential
 */
 global $post;
    $args = array( 'numberposts' => 10, 'category_name' => 'portfolio' );
    $posts = get_posts( $args );
    $homnepost = array( 'numberposts' => 1, 'category_name' => 'home' );
    $home = get_posts( $homnepost );
    
//    echo '<pre>';
//    print_r($short_description);
//    die;
     
    get_header();

?>
<div class="header-top">
    <div class="full-banner over-hidden">

        <div class="bann-fix">
            <img class="img-responsive" alt="Trump-House" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ban-1.jpg">
        </div>
        <div class="bann-fix">
            <img class="img-responsive" alt="Trump-House" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/lookbook-1-set.jpg">
        </div>

        <div class="bann-fix">
            <img class="img-responsive" alt="Ny" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/lookbook-2-set.jpg">
        </div>
    </div>

</div>
<!-- banner -->

</header>
<?php
foreach ($home as $home_post){
$experince= get_field('experince',$home_post->ID);  
$short_description= get_field('short_discription',$home_post->ID);  
  
?>
<?php if (has_post_thumbnail( $home_post->ID ) ): ?>
                    <?php $image_home_post = wp_get_attachment_image_src( get_post_thumbnail_id( $home_post->ID ), 'single-post-thumbnail' ); ?>
                   
               
                  <?php endif; ?>
                
<section class="layer-100">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="profile-section">
                    <div class="row">

                        <div class="col-lg-7 col-xs-12 col-md-6 col-sm-12">
                            <div class="visual">
                                <figure class="brand-bg">
                                    <img class="img-responsive" src="<?php echo $image_home_post[0]; ?>" alt="<?php echo $home_post->post_title;?>"/>
                                    <figcaption>
                                        <h1><?php echo $experince;?><span>years of experince</span></h1>

                                    </figcaption>	
                                </figure>
                            </div>
                        </div>

                        <div class="col-lg-5 col-xs-12 col-md-6 col-sm-12">
                            <div class="para">
                                <figcaption>
                                    <h1><?php echo $home_post->post_title;?></h1>
                                    <p><?php echo $short_description;?></p>

                                   
                                    <a class="read-bt" target="_blank" href="#">Read More</a>
                                </figcaption>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

</section>
<?php } ?>
<section class="layer-100">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title">
                    <h1><span>Best Creatives</span>Portfolio</h1>
                </div>
            </div>
        </div>
    </div><!-- End heading -->

    <div class="card-section">
        <div class="row responsive-card">
            <?php foreach ($posts as $post_data){
                $short_description_portfolio= get_field('short_discription',$post_data->ID);  

                ?>
            <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                <?php if (has_post_thumbnail( $post_data->ID ) ): ?>
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_data->ID ), 'single-post-thumbnail' ); ?>
                   
               
                  <?php endif; ?>
                <div class="card">

                    <figure>
                        <img src="<?php echo $image[0]; ?>" style="height: 600px;" alt="<?php echo $post_data->post_title ?>" />
                        <figcaption class="gradient">
                            <h2><?php echo $post_data->post_title; ?></h2>
                            <p><?php echo $short_description_portfolio; ?></p>
                            <a href="<?php echo $post_data->guid; ?>" class="card-btn">See project</a>
                        </figcaption>	

                    </figure>

                </div>

            </div>
            <?php } ?>

        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <div>
                    <a class="ee-btn" target="_blank" href="#">Visit Portfolio</a>
                </div>
            </div>
        </div>
    </div><!-- End heading -->



</section>

<section class="layer-100">
    <div class="look-book-section lookbook-ui">
        <div class="lookbook-img">
                   <!--  <img src="img/lookbook-1.jpg"> -->
            <div class="container lookbook-container">
                <div class="lookbook-title-up">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="look-book-title">
                                <h1><span>Visit Our New</span>Products & LookBooK</h1>
                            </div>
                        </div>
                    </div>
                </div><!--end title-->

                <div class="loobook-footer">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="btn-group-vertical" >
                                <a href="#" class="btn look-book-bt active">Products</a>
                                <a href="#" class="btn look-book-bt">Lookbook</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <p>As of June 2017, some 5,000 asylum seekers, refugees, and migrants in Serbia remain in legal limbo. A project is strengthening the dialogue between the stranded and the local Serbians to invest in them and give them hope.</p>
                            <a href="#" class="card-btn" tabindex="0">view all products</a>
                        </div>
                    </div>
                </div>

            </div> 
        </div>
    </div>  
</section>

<section class="layer-100 over-hidden">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 c0l-xs-12">
                <div class="title">
                    <h1><span>Subscribe to</span>Newsletter</h1>
                </div>
            </div>
        </div>
    </div><!-- End heading -->


    <div class="news-section">
        <div class="row">
<!--            <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">
                <div class="pattern">
                    <div class="row">
                        <div class="col-lg-7 col-xs-12 col-md-12 col-sm-12 pull-right">
                            <div class="box">
                                <form class="frm-control" action="#">
                                    <input type="text" id="fname" name="firstname" placeholder="Your Name">
                                    <input type="text" id="email" name="email" placeholder="Your Email Address...">
                                    <button class="submit-btn">Submit</button> 
                                </form>
                                <p>We send you latest news couple a month (No Spam).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
<?php echo do_shortcode('[wcp_NewsLetter_Form]'); ?>

            <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">
                <div class="testi-wrap">
                    <div class="box">		
                        <div class="row">
                            <div class="col-lg-7 col-xs-12 col-md-12 col-sm-12">
                                <div class="single-items">

                                    <div class="client-quote">
                                        <figure class="client-img">
                                            <img alt="client" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/client1.jpg">
                                        </figure>
                                        <p>
                                            I have scored EE out of 5, 5 being the highest score, I give it a 5. I really enjoyed this product I have used it for about 5 shaves. The lubrication for my razor was great and I don't use high quality razors
                                        </p>
                                        <div class="client-name">
                                            <span>- Kevin Francis</span> 
                                            <span class="last-nm">Trump House</span>
                                        </div>										
                                    </div>


                                    <div class="client-quote">
                                        <figure class="client-img">
                                            <img alt="client" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/client1.jpg">
                                        </figure>
                                        <p>
                                            I have scored EE out of 5, 5 being the highest score, I give it a 5. I really enjoyed this product I have used it for about 5 shaves. The lubrication for my razor was great and I don't use high quality razors
                                        </p>
                                        <div class="client-name">
                                            <span>- Kevin Francis</span> 
                                            <span class="last-nm">Trump House</span>
                                        </div>										
                                    </div>


                                    <div class="client-quote">
                                        <figure class="client-img">
                                            <img alt="client" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/client1.jpg">
                                        </figure>
                                        <p>
                                            I have scored EE out of 5, 5 being the highest score, I give it a 5. I really enjoyed this product I have used it for about 5 shaves. The lubrication for my razor was great and I don't use high quality razors
                                        </p>
                                        <div class="client-name">
                                            <span>- Kevin Francis</span> 
                                            <span class="last-nm">Trump House</span>
                                        </div>										
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>