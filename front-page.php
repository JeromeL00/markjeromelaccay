<?php
    /*
        Template Name: Home
    */
?>

<?php get_header(); ?>

<section id="home" class="banner text-center md:text-left py-[5rem] lg:py-[7rem] px-5">

        <div class="container">
            <div class="banner__wrapper md:flex justify-between items-center">
              <div class="banner__image md:hidden mt-12 w-[320px] mx-auto">
                <?php the_content(); ?>
              </div>      
                  
                <div class="banner__content lg:w-[50%] mr-auto">
                  <div class="greetings">
                    <h4 class="text-white mt-9 font-semibold text-base md:text-xl"><?php echo get_field('home_greetings') ?></h4>
                  </div>
                    
                    <h1 class="text-primary text-huge font-bold my-5"><?php echo get_field('home_title'); ?></h1>
                    <div class="title">
                      <p class="text-white font-semibold text-base md:text-xl"><?php echo get_field('home_subtitle'); ?> <span class="multiple-text text-primary text-lg md:text-xl font-semibold"></span></p>
                    </div>                   
                        <div class="botton my-7">
                            <a class="bg-secondary text-base font-medium rounded-md text-white py-2 px-6 hover:bg-primary transition-all" href="#">Download CV</a>       
                        </div> 
                </div>
                <div class="banner__img hidden md:block">
                  <?php the_content(); ?>
                </div>
            </div>
            <div class="icons justify-center mt-5">
              <?php echo get_field('icons'); ?>
            </div>
        </div>  
      </section>

      <section id="aboutme" class="about bg-gray py-[6rem]">
        
        <div class="container">  
          <div class="about__wrapper px-[1rem] py-[2rem]"> 
            <div class="about__content lg:flex gap-[2.9rem] items-center">

              <div class="about__img">
                <?php                    
                    $img = get_field('about_img');
                    if ( !empty($img) ): ?>


                    <img class="w-[370px] md:mx-auto" src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($img['alt'])?>">


                <?php endif; ?>
              </div>
              <div class="about__description text-center lg:w-[60%] ml-auto lg:text-left">
                <div class="about__title">
                  <h2 class="text-white font-semibold my-4 text-huge"><?php echo get_field('about_title'); ?></span></h2>
                </div>               
                <h3 class="text-white text-xl font-medium mb-5 "><?php echo get_field('about_subtitle'); ?></h3>
                <p class="text-white my-7 lg:text-justify"><?php echo get_field('about_body'); ?></p>
                <div class="lg:text-left">
                  <?php echo get_field('button'); ?>
                </div>

            </div>                           
            </div>           
          </div>
        </div>
      </section>

      <section id="portfolio" class="projects bg-dark py-[5rem]">
        <div class="container">
          <div class="portfolio__title">
            <h2 class="text-center text-white font-semibold text-huge"><?php echo get_field('project_banner_title'); ?></h2>
          </div>
            <div class="portfolio__subtitle text-center mt-[2rem] px-[1.5rem] lg:text-left">
              <h3 class="text-small font-semibold text-white "><?php echo get_field('project_banner_subtitle'); ?></h3>
              <p class="text-white"><?php echo get_field('subtitle_of_sub'); ?></p>
            </div>
          <div class="projects__wrapper px-[1.5rem] md:grid grid-cols-3 gap-4">
          <?php if(have_rows('project_repeater')) : while(the_repeater_field('project_repeater')) : ?>
            <div class="theCards">
              <div class="projects__cards my-5 relative">
                <div class="projects__cardImg">
                <?php
                    $img = get_sub_field('projects_img');
                        if ( !empty($img) ) :?>


                          <img class="scale-[1.9] transition duration-300 ease-out" src="<?php echo esc_url($img['url']) ?>" alt="<?php  echo esc_attr($img['alt']) ?>">


                    <?php endif; ?>
                  
                  <div class="projects__cardContent px-3">
                    <h4 class="text-white font-medium text-lg font-inder"><?php echo get_sub_field('project_title'); ?></h4>
                    <p class="my-3 text-white text-sm"><?php echo get_sub_field('project_body'); ?></p>
                    <a class="text-white bg-secondary py-1 px-[1.5rem] rounded-md hover:bg-gray transition duration-300 ease-in-out" href="<?php the_permalink(); ?>"><small class="mr-4">View Project</small><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                  </div>             
                </div>
                
              </div>

              <?php if(have_rows('icon_repeater')) : while(the_repeater_field('icon_repeater')) : ?>
              <div class="tools bg-gray p-8 text-center">
                <h4 class="text-white mb-3"><?php echo get_sub_field('tools'); ?></h4>
              <div class="flex gap-4 h-8 ml-[3.5rem] md:ml-[-0.5rem] lg:ml-[2rem]"> 
                <?php
                    $img = get_sub_field('img1');
                   
                        if ( !empty($img) ) :?>


                          <img src="<?php echo esc_url($img['url']) ?>" alt="<?php  echo esc_attr($img['alt']) ?>">


                    <?php endif; ?>
                
                    <?php
                    $img = get_sub_field('img2');
                   
                        if ( !empty($img) ) :?>


                          <img src="<?php echo esc_url($img['url']) ?>" alt="<?php  echo esc_attr($img['alt']) ?>">


                    <?php endif; ?>
                    
                    <?php
                    $img = get_sub_field('img3');
                   
                        if ( !empty($img) ) :?>


                          <img src="<?php echo esc_url($img['url']) ?>" alt="<?php  echo esc_attr($img['alt']) ?>">


                    <?php endif; ?>

                    <?php
                    $img = get_sub_field('img4');
                   
                        if ( !empty($img) ) :?>


                          <img src="<?php echo esc_url($img['url']) ?>" alt="<?php  echo esc_attr($img['alt']) ?>">


                    <?php endif; ?>
              </div>
              </div>
              <?php
                    endwhile;
                        else : 
                        echo "No Available Content";
                    endif;
                    wp_reset_postdata();
                    ?>
            </div>
            <?php
                    endwhile;
                        else : 
                        echo "No Available Content";
                    endif;
                    wp_reset_postdata();
                    ?>

          </div>
        </div>
      </section>

      <section id="portfolio" class="skills py-[5rem] bg-gray">
        <div class="container">
            
            <div class="skills__wrapper px-5">
                <div class="skills__title">
                  <h2 class="text-white font-semibold text-huge text-center"> <?php echo get_field('skill_title'); ?></h2>
                </div>                    
                    <div class="skills__cards pt-[5rem] text-justify text-white md:grid grid-cols-4 gap-[1rem]">

                    <?php if(have_rows('skills_repeater')) : while(the_repeater_field('skills_repeater')) : ?>

                        <div class="cards mb-4">

                        <?php
                              $img = get_sub_field('skill_icon');
                   
                              if ( !empty($img) ) :?>


                                  <img class="h-20 mx-auto mb-[0.5rem]" src="<?php echo esc_url($img['url']) ?>" alt="<?php  echo esc_attr($img['alt']) ?>">


                        <?php endif; ?>

                            <h3 class="text-black text-xl font-bold font-inder"><?php echo get_sub_field('skill_icon_title'); ?></h3>
                            <p><?php echo get_sub_field('skill_icon_desc'); ?></p>
                            <a class="bg-gray py-2 px-3 hover:bg-dark transition-all" href="#">Read More</a>
                        </div>

                        <?php
                            endwhile;
                            else : 
                            echo "No Available Content";
                            endif;
                            wp_reset_postdata();
                        ?>                  
                    </div>             
            </div>
        </div>
      </section>

      <section id="contact" class="contact">
           
        <div class="container">          
          <div class="contact__wrapper p-[1.5rem] text-center">
            <div class="contact__title">
              <h2 class="text-huge font-semibold text-white"><?php echo get_field('contact_title'); ?></h2>
            </div>
                       
            <div class="contact__flexgroup md:flex gap-4 items-center">
              <div class="contact__myinfo text-left py-8 text-white">
                <h3 class="text-small font-semibold text-white"><?php echo get_field('banner_sec_title'); ?></h3>
                <p class="text-white mb-20"><?php echo get_field('contact_sec_subtitle'); ?></p>

                <?php if(have_rows('contact_repeater')) : while(the_repeater_field('contact_repeater')) : ?>

                <div class="my-4">
                  <h4 class="text-2xl font-semibold"><?php echo get_sub_field('the_contact'); ?></h4>
                  <p>
                    <?php echo get_sub_field('the_contact_info'); ?>
                  </p>
                </div>

                <?php
                            endwhile;
                            else : 
                            echo "No Available Content";
                            endif;
                            wp_reset_postdata();
                        ?> 
                
              </div>
              <div class="contact__info bg-white py-4 my-8 rounded-xl lg:w-[50%] ml-auto">
                <div class="contact__info__form text-left px-8">
                  <p>
                    Please fill in the form below to contact us. We try our best to
                    respond to any questions in less than 24 hours.
                  </p>
                  <!-- <form action="">
                    <div class="form__group">
                      <input type="text" required />
                      <label for="">Fullname</label>
                    </div>
                    <div class="form__group">
                      <input type="Email" required />
                      <label for="">Email</label>
                    </div>
                    <div class="form__group">
                      <input type="tel" required />
                      <label for="">Phone</label>
                    </div>
                    <button>Submit</button>
                  </form> -->

                  <?php echo do_shortcode('[contact-form-7 id="195" title="Portfolio Contact Form"]'); ?>
                </div>
              </div>
            </div>
                                
          </div>

        </div>
      </section>

<?php get_footer(); ?>