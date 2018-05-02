<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<section class="layer-100">

    <div class="container footer">
        <div class="row">
            <div class="col-lg-12">

                <div class="row">

                    <div class="col-lg-4 col-xs-12 col-md-12 col-sm-12">
                        <div class="address-box">
                            <?php
                                if(is_active_sidebar('footer-sidebar-1')){
                                dynamic_sidebar('footer-sidebar-1');
                                }
                            ?>
                            
                        </div>
                    </div>

                    <div class="col-lg-4 col-xs-12 col-md-6 col-sm-6">
                        <div class="quick-box">
                                <?php
                                    if(is_active_sidebar('footer-sidebar-2')){
                                    dynamic_sidebar('footer-sidebar-2');
                                    }
                                ?>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xs-12 col-md-6 col-sm-6">
                        <div class="latest-news-box">
                            
                            <?php
                                if(is_active_sidebar('footer-sidebar-3')){
                                dynamic_sidebar('footer-sidebar-3');
                                }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- End heading -->

        <div class="row foot">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pad-0">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <p class="ee-copy copy">© Essential Elegance Inc. 2017.</p>				
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <p class="conti-copy continuum"> Design & Developed by <a class="orange" target="_blank" href="#">Continuum</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>


<!-- start JS -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/ee-min.js"></script>


<!-- end JS -->
</body>
</html>
