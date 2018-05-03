<?php
/*
  Template Name: Portfolio page
 */
get_header();
global $post;
    $args = array( 'numberposts' => 10, 'category_name' => 'portfolio' );
    $posts = get_posts( $args );
     
?>
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
			<?php foreach ($posts as $keys=>$post_data){

                $short_description_portfolio= get_field('short_discription',$post_data->ID);  
                        
                ?><?php if (has_post_thumbnail( $post_data->ID ) ): ?>
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_data->ID ), 'single-post-thumbnail' ); ?>
                   
               
                  <?php endif; ?>
                     <?php  if ($keys % 2 == 0) { ?>
    <section class="layer-100 white-bg">
			<div class="container inside-wrap">
			
				<div class="row">	
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2><?php echo $post_data->post_title; ?></h2>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						 <p><?php echo $post_data->post_content; ?></p>
						<a class="def-btn" target="_blank" href="<?php echo $post_data->guid; ?>">Read More</a>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<figure>
							<img class="img-responsive" src="<?php echo $image[0]; ?>">
						</figure>
					</div>
				</div>
                               
			</div> 
		</section>
<?php } else {?>
    <section class="layer-100 grey-bg">
			<div class="container inside-wrap">
		
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<figure>
							<img class="img-responsive" src="<?php echo $image[0]; ?>">
						</figure>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						
						<h2><?php echo $post_data->post_title; ?></h2>
                                                <p><?php  echo $post_data->post_content; ?></p>
		
						<a class="def-btn" target="_blank" href="<?php echo $post_data->guid; ?>">Read More</a>
		
					</div>
				</div>
			</div>  
		</section>
<?php }
  }?>
<?php get_footer(); ?>

