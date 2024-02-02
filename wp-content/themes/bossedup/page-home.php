<?php /* Template Name: Home */

get_header();
 ?>

<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-text">
                    <h1 data-aos="fade-right" data-aos-duration="1500"><?php get_field('banner_beside_form_text'); ?></h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-form" data-aos="zoom-in-up" data-aos-duration="1500">
                    <?php echo do_shortcode('[contact-form-7 id="6715d65" title="Home page contact form"]'); ?>
           
                </div>
            </div>
        </div>
    </div>
</section>


<!-- about -->
<section class="about-part" id="about">
    <div class="container">

        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500">
                <?php echo CFS()->get( 'about_us_text' ); 
                $aboutrepeat = CFS()->get('about_section_repeat');
                foreach($aboutrepeat as $eachaboutrepeat){
                ?>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2"><?php echo $eachaboutrepeat['our_feature_title'];  ?></p>
                        <p class="mb-2"><?php echo $eachaboutrepeat['feature_rank'];  ?>%</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $eachaboutrepeat['feature_rank'];  ?>" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            <?php } ?>
                
                <a href="#" class="get-button"><?php echo CFS()->get('get_funding_text'); ?></a>
            </div>
            <div class="col-lg-6 about-image" data-aos="fade-left" data-aos-duration="1500">
                <img src="<?php echo CFS()->get( 'about_us_image' );  ?>">
            </div>
        </div>

    </div>
</section>



<!-- service -->
<section class="finacing" id="business">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="finacing-text text-center">
                    
                        <?php echo CFS()->get('our_services_top_text'); ?>
                </div>
            </div>
        </div>
        <div class="row">
          <?php   $ourservices = CFS()->get( 'our_services_repeat' ); 
            foreach($ourservices as $eachservice){

            ?>

            <div class="col-md-4" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="<?php echo $eachservice['data_aos_duration'];  ?>">
                <div class="card">
                    <img src="<?php echo $eachservice['our_services_image'];  ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2><?php echo $eachservice['our_services_title'];  ?></h2>
                       
                    </div>
                </div>
            </div>
        <?php } ?>

       
        </div>
    </div>
</section>


<section class="business" id="brokers">
    <div class="container">
        <div class="row">
            <?php $allpluspoints =CFS()->get('our_plus_points_repeat');

               foreach($allpluspoints as $eachpluspoint){
             ?>

            <div class="col-md-3" data-aos="fade-up" data-aos-duration="<?php echo $eachpluspoint['plus_point_data_aos_duration'];  ?>">
                <div class="content">
                    <div class="content-image">
                    <img src=" <?php echo $eachpluspoint['plus_point_image'];  ?>">
                    </div>
                    <h2 class="custom-counter" data-toggle="counter-up"><?php echo $eachpluspoint['plus_point_count'];  ?></h2>
                    <p><?php echo $eachpluspoint['plus_point_title'];  ?></p>
                </div>
            </div>
        <?php } ?>
        
        
        </div>
    </div>
</section>



<section class="faq" id="resources">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="faq-content text-center">
                    <?php echo CFS()->get('faq_top_text'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="faq-image" data-aos="flip-right" data-aos-duration="1500">

                    <img src="<?php echo CFS()->get('faq_top_image'); ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="faq-box"  data-aos="fade-up"
     data-aos-anchor-placement="center-center" data-aos-duration="1000">
                    <!--  -->
                    <div class="accordion-container">

                        <?php $allfaq = CFS()->get('faq_repeat');
                          foreach($allfaq as $eachfaq){
                         ?>

                        <div class="accordion-item">
                            <button class="accordion-header">
                               <?php echo $eachfaq['question']; ?> <span class="icon">+</span>
                            </button>
                            <div class="accordion-content">
                                <?php echo $eachfaq['answer']; ?>
                            </div>
                        </div>
                    <?php } ?>
                    
                    </div>

                    <!--  -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="call">
<div class="container">
  <div class="row call-to">
      <div class="col-md-6">
        <div class="call-text">
        <h2><?php echo CFS()->get('attention_text'); ?></h2>
        </div>
            
      </div>
      <div class="col-md-6">
        <div class="call-button text-center">
      <a class="blue-cta-button" href="#"><?php echo CFS()->get('contact_text'); ?></a>
        </div>
    </div>
  </div>
</div>
</section>


 <?php get_footer(); ?>