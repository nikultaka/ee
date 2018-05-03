<?php
/*
  Template Name: common page
 */
get_header();
?>
<header>
	        <div class="inside-header clear-fix">
	            <img alt="aboutus" class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/lookbook-1-set.jpg">
	            <span class="layer-header"></span>
	            <div class="container">
	                <div class="head-titles">
	                    <h1><?php echo get_the_title();?></h1>
	                </div>
	            </div>
	        </div>
	</header>
	
	
	
	</header>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
                endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
 
    </main><!-- .site-main -->
 
    
 
</div><!-- .content-area -->
<?php get_footer(); ?>

