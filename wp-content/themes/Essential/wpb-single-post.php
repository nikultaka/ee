<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post
 */

get_header();
$post_id = get_the_ID();

?>
<?php if (has_post_thumbnail( $post_id ) ): ?>
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' ); ?>
                   
               
                  <?php endif; ?>
<header>
    <div class="inside-header clear-fix">
        <img alt="aboutus" class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/lookbook-1-set.jpg">
        <span class="layer-header"></span>
        <div class="container">
            <div class="head-titles">
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </div>
</header>



</header>

<section class="layer-100">
    <div class="container inside-wrap">
        <div class="row">
            <div class="col-lg-12">

                <div class="profile-section">
                    <div class="row">

                        <div class="col-lg-7 col-xs-12 col-md-6 col-sm-12">
                            <div class="visual">
                                <figure class="brand-bg">
                                    <img class="img-responsive" style="border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;" src="<?php echo $image[0]; ?>" alt="farzana"/>

                                </figure>
                            </div>
                        </div>

                        <div class="col-lg-5 col-xs-12 col-md-6 col-sm-12">
                            <div class="para">
                                <figcaption>
                                    <h2><?php echo get_the_title(); ?></h2>
                                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
                endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
                                </figcaption>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>