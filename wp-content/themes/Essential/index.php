<?php
/**
 Theme Name: Essential
Theme URI: http://wordpress.org/themes/Essential
 */
 global $post;
    $args = array( 'numberposts' => 10, 'category_name' => 'portfolio' );
    $posts = get_posts( $args );
    
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
<section class="layer-100">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="profile-section">
                    <div class="row">

                        <div class="col-lg-7 col-xs-12 col-md-6 col-sm-12">
                            <div class="visual">
                                <figure class="brand-bg">
                                    <img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/farzana.jpg" alt="farzana"/>
                                    <figcaption>
                                        <h1>12<span>years of experince</span></h1>

                                    </figcaption>	
                                </figure>
                            </div>
                        </div>

                        <div class="col-lg-5 col-xs-12 col-md-6 col-sm-12">
                            <div class="para">
                                <figcaption>
                                    <h1>Farzana Mamun</h1>
                                    <p>One of NYC’s luxery designers, Farzana went to Parsons School of Design and received a B.A. from City University of New York. At the age of 19, she moved from Dhaka, Bangladesh to New York City.</p>

                                    <p>She started in the design industry in 2005 as an assistant designer for Colombo Mobili showroom in the New York Design Center.</p>
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
            <?php foreach ($posts as $post_data){ ?>
            <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                <?php if (has_post_thumbnail( $post_data->ID ) ): ?>
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_data->ID ), 'single-post-thumbnail' ); ?>
                   
               
                  <?php endif; ?>
                <div class="card">

                    <figure>
                        <img src="<?php echo $image[0]; ?>" style="height: 600px;" alt="<?php echo $post_data->post_title ?>" />
                        <figcaption class="gradient">
                            <h2><?php echo $post_data->post_title; ?></h2>
                            <p><?php echo $post_data->post_content; ?></p>
                            <a href="<?php echo $post_data->guid; ?>" class="card-btn">See project</a>
                        </figcaption>	

                    </figure>

                </div>

            </div>
            <?php } ?>

<!--            <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                <div class="card">
                    <figure>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/2.jpg" alt="img02" />
                        <figcaption class="gradient">
                            <h2>Uppereast</h2>
                            <p>Study - walnut - hand made inlay and leather top desk, leather seat armchair set with the Empire style bookcase</p>
                            <a href="#" class="card-btn">See project</a>
                        </figcaption>	
                    </figure>
                </div>
            </div>

            <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                <div class="card">
                    <figure>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/3-3.jpg" alt="img02" />
                        <figcaption class="gradient">
                            <h2>E-Design</h2>
                            <p>Study - walnut - hand made inlay and leather top desk, leather seat armchair set with the Empire style bookcase</p>
                            <a href="#" class="card-btn">See project</a>
                        </figcaption>	
                    </figure>
                </div>
            </div>

            <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                <div class="card">
                    <figure>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/bathroom.jpg" alt="img02" />
                        <figcaption class="gradient">
                            <h2>Brooklyn,NY</h2>
                            <p>Study - walnut - hand made inlay and leather top desk, leather seat armchair set with the Empire style bookcase</p>
                            <a href="#" class="card-btn">See project</a>
                        </figcaption>	
                    </figure>
                </div>
            </div>

            <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                <div class="card">
                    <figure>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/4.jpg" alt="img02" />
                        <figcaption class="gradient">
                            <h2>Extra</h2>
                            <p>Study - walnut - hand made inlay and leather top desk, leather seat armchair set with the Empire style bookcase</p>
                            <a href="#" class="card-btn">See project</a>
                        </figcaption>	
                    </figure>
                </div>
            </div>-->


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
            <div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">
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
            </div>

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