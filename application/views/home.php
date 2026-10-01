  <main class="main">

    <div class="banner-slider">
  <div class="swiper bannerSwiper">

    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <img src="assets/img/banners/banner-1.PNG" alt="Banner 1">
      </div>

      <div class="swiper-slide">
        <img src="assets/img/banners/banner5.jpg" alt="Banner 2">
      </div>

      <div class="swiper-slide">
        <img src="assets/img/banners/banner4.jpg" alt="Banner 3">
      </div>
      
      <div class="swiper-slide">
        <img src="assets/img/banners/banner-3.png" alt="Banner 3">
      </div>
      
      <div class="swiper-slide">
        <img src="assets/img/banners/banner-2.png" alt="Banner 3">
      </div>

    </div>

    <!-- Navigation (optional) -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    <!-- Pagination (optional) -->
    <div class="swiper-pagination"></div>

  </div>
</div>

    <!-- Featured Courses Section -->
    <section id="featured-courses" class="featured-courses section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Explore Worldwide Recognized Certifications</h2>
        <p>In Partnership With</p>
        <div class="logo-row">
          <img src="<?= base_url('assets/img/menu/nsdc.png') ?>" alt="Logo 1">
          <img src="<?= base_url('assets/img/menu/skill_india.png') ?>" alt="Logo 2">
        </div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
   <?php
      foreach($sectorhome as $sectorhomes)
      {
     ?>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="course-card">
              <div class="course-image">
                <img src="<?= base_url() ?>assets/img/verticals/<?php echo $sectorhomes['sector_image']?>" alt="Course" class="img-fluid">
               </div>
              <div class="course-content">
                <h3><center><a href="<?= base_url('sector') ?>"><?= $sectorhomes['sector'] ?></a></center></h3>
                <a href="<?= base_url('sector') ?>?name=<?= $sectorhomes['sector']?>" class="btn-course">Explore</a>
              </div>
            </div>
          </div><!-- End Course Item -->
<?php
      } 
      ?>
        </div>

      </div>
    </section><!-- /Featured Courses Section -->
<li class="<?= $currentPage == 'graduate' ? 'active' : '' ?>">


    <!-- Training Section -->
<!--    <section id="course-categories" class="course-categories section">-->

<!--      <div class="container section-title" data-aos="fade-up">-->
<!--        <h2>Explore Courses</h2>-->
<!--        <p></p>-->
<!--      </div>-->

<!--      <div class="container" data-aos="fade-up" data-aos-delay="100">-->

<!--        <div class="row g-4">-->

<!--          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="100">-->
<!--            <a href="#" class="category-card category-health">-->
<!--              <div class="category-icon">-->
<!--                <i class="bi bi-chat-dots"></i>-->
<!--              </div>-->
<!--              <h5>English & Soft Skills Academy</h5>-->
<!--              <span class="course-count">English is considered the local-->
<!--language of the world. VCampus-->
<!--offers English language courses and-->
<!--relatedactivitiesthatenablestudents-->
<!--to meet the goals of personal and-->
<!--professional internationalstandards.</span>-->
<!--            </a>-->
<!--          </div>-->

<!--        </div>-->

<!--      </div>-->

<!--    </section>-->
      
    <section class="courses-section">
  <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Featured Online Degree Programs</h2>
        <p></p>
      </div><!-- End Section Title -->

  <div class="courses-grid">
    <?php foreach ($allOnlinePrograms as $allOnlineProgramsRow): ?>
    <div class="course-card">
      <img src="<?= base_url() ?>assets/img/programs_icon/<?= $allOnlineProgramsRow['icon']; ?>" alt="">
      <h3><?= $allOnlineProgramsRow['name']; ?></h3>
      <p><?= $allOnlineProgramsRow['duration']; ?></p>
    </div>
    <?php endforeach; ?>
    <!-- add more cards as needed -->
  </div>
  <center><button style="margin-top: 30px; backgound:#136ad5;"  class="btn btn-primary">View all Programs</button></center>
</section>

<!-- WHY partner with us? -->
 <section class="partner-why">
        <div class="container">

          <div class="text-center mb-5">
            <h2 class="partner-title">
              Why <span>Partner</span> with Us?
            </h2>
            <p class="partner-sub">
              We’ve created one of India’s most partner-focused EdTech models — designed to remove common industry challenges and help you grow faster.
            </p>
          </div>

          <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-lg-3 col-md-6">
              <div class="partner-card">
                <div class="partner-icon">
                  <img src="<?= base_url('assets/img/partner/bag.png') ?>" alt="">
                </div>
                <h5>No Investment Required</h5>
                <p>Start earning right away with zero upfront or setup costs.</p>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-3 col-md-6">
              <div class="partner-card">
                <div class="partner-icon">
                  <img src="<?= base_url('assets/img/partner/save-money.png') ?>" alt="">
                </div>
                <h5>Timely Monthly Payments</h5>
                <p>Receive your payouts every month without delays or follow-ups with universities.</p>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-3 col-md-6">
              <div class="partner-card">
                <div class="partner-icon">
                  <img src="<?= base_url('assets/img/partner/profit.png') ?>" alt="">
                </div>
                <h5>Unlimited Income Potential</h5>
                <p>The more admissions you drive, the more you earn — with no earning cap.</p>
              </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-3 col-md-6">
              <div class="partner-card">
                <div class="partner-icon">
                  <img src="<?= base_url('assets/img/partner/support.png') ?>" alt="">
                </div>
                <h5>End-to-End Support</h5>
                <p>Get access to training, marketing resources, and dedicated relationship managers.</p>
              </div>
            </div>

          </div>

        </div>
      </section>
      <!-- why partner with us? -->
<!-- University Section -->
    <section id="course-categories" class="course-categories section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Universities</h2>
        <h3>Explore Over 100+ online universities</h3>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">
          <?php foreach ($allUniversity as $row): ?>
          <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
            <a href="<?= base_url('university') ?>/<?= $row['slug']; ?>" class="category-card category-tech">
              <div class="university-logo">
                <img src="<?= base_url('assets/img/menu/') ?><?= $row['university_logo']; ?>" alt="<?= $row['university_name']; ?>">
              </div>
              <h5><?= $row['university_name']; ?></h5>
            </a>
          </div>

          <?php endforeach; ?>
        </div>

      </div>

    </section>
    <!--University section end-->
                                                                                                                    
    <!--sgt section-->
<section class="usp-section">
  <div class="container">

    <h3 class="usp-title">SGT ONLINE WHAT MAKES US DIFFERENT (USPS)</h3>
    <!--<p style="text-align:center;">WHAT MAKES US DIFFERENT (USPs)</p>-->
    <div class="usp-grid">

      <div class="usp-card">
        <img src="<?= base_url('assets/img/sgt-icon/sgt-icon1.png') ?>" class="usp-icon-img">
        <p>NAAC A+ Accredited University</p>
      </div>

      <div class="usp-card">
        <img src="<?= base_url('assets/img/sgt-icon/sgt-icon2.png') ?>" class="usp-icon-img">
        <p>Industry-Aligned Curriculum</p>
      </div>

      <div class="usp-card">
        <img src="<?= base_url('assets/img/sgt-icon/sgt-icon3.png') ?>" class="usp-icon-img">
        <p>NEP 2020 Compliant</p>
      </div>

      <div class="usp-card">
        <img src="<?= base_url('assets/img/sgt-icon/sgt-icon4.png') ?>" class="usp-icon-img">
        <p>100% Placement Assistance</p>
      </div>

      <div class="usp-card">
        <img src="<?= base_url('assets/img/sgt-icon/sgt-icon5.png') ?>" class="usp-icon-img">
        <p>Future-Ready Specialisations</p>
      </div>

      <div class="usp-card">
        <img src="<?= base_url('assets/img/sgt-icon/sgt-icon6.png') ?>" class="usp-icon-img">
        <p>AI-Enabled Learning</p>
      </div>

    </div>

    <div class="usp-btn-wrap">
      <a href="<?= base_url('university/sgt-university') ?>" class="usp-btn">Learn More</a>
    </div>

  </div>
</section>
<!--sgt section end-->

<!-- <section class="insta-section">
  <div class="container">
    <h2 class="section-title">Latest Updates</h2>

    <div class="insta-grid">

      <div class="insta-card">
        <img src="assets/img/post/post1.jpeg" alt="">
      </div>

      <div class="insta-card">
        <img src="assets/img/post/post2.jpeg" alt="">
      </div>

      <div class="insta-card">
        <img src="assets/img/post/post3.jpeg" alt="">
      </div>

      <div class="insta-card">
        <img src="assets/img/post/post4.jpeg" alt="">
      </div>

      <div class="insta-card">
        <img src="assets/img/post/post6.jpeg" alt="">
      </div>

      <div class="insta-card">
        <img src="assets/img/post/post5.jpeg" alt="">
      </div>

    </div>
  </div>
</section> -->



    <!-- BLOG CODE START -->

<section class="vcampus-blog py-5">
  <div class="container">

    <div class="section-title text-center mb-5">
      <h2>Latest Insights & Career Guides</h2>
      <p>Expert advice to help you choose the right online degree</p>
    </div>

    <div class="row g-4">

      <!-- Blog 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="blog-card">
          <div class="blog-image">
            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644" alt="">
            <span class="category">Online MBA</span>
          </div>
          <div class="blog-content">
            <span class="date">Feb 2026</span>
            <h5>The Complete Guide to Online Degrees in India</h5>
            <p>Everything you need to know about UGC approval, fees, career scope, and admissions before enrolling in an online degree.</p>
            <a href="<?= base_url('the_Complete_Guide_to_Online_Degrees_in_India') ?>" class="read-more">Read More →</a>
          </div>
        </div>
      </div>

      <!-- Blog 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="blog-card">
          <div class="blog-image">
            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b" alt="">
            <span class="category">Comparison</span>
          </div>
          <div class="blog-content">
            <span class="date">Feb 2026</span>
            <h5>Online MBA vs Distance MBA: Key Differences</h5>
            <p>Understand the major differences between Online MBA and Distance MBA to choose the right path for your career goals.</p>
            <a href="<?= base_url('Online_MBA_vs_Distance_MBA_Key_Differences') ?>" class="read-more">Read More →</a>
          </div>
        </div>
      </div>

      <!-- Blog 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="blog-card">
          <div class="blog-image">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40" alt="">
            <span class="category">Career Growth</span>
          </div>
          <div class="blog-content">
            <span class="date">Feb 2026</span>
            <h5>How Working Professionals Can Upgrade Their Career</h5>
            <p>Discover how you can balance job and studies while pursuing an online degree to boost your salary and promotion chances.</p>
            <a href="<?= base_url('How_Working_Professionals_Can_Upgrade_Their_Career')?>" class="read-more">Read More →</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

    <!-- BLOG CODE END -->

    

    <!-- Alumni Speak -->
    <section id="testimonials" class="testimonials section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Alumni Speak</h2>
        <p></p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-12">
            <!-- <div class="critic-reviews" data-aos="fade-up" data-aos-delay="300">
              <div class="row">
                <div class="col-md-4">
                  <div class="critic-review">
                    <div class="review-quote">"</div>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                    <p>Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
                    <div class="critic-info">
                      <div class="critic-name">The New York Times</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="critic-review">
                    <div class="review-quote">"</div>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                    </div>
                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis lorem ut libero malesuada feugiat.</p>
                    <div class="critic-info">
                      <div class="critic-name">Washington Post</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="critic-review">
                    <div class="review-quote">"</div>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                    <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                    <div class="critic-info">
                      <div class="critic-name">The Guardian</div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="testimonials-container">
              <div class="swiper testimonials-slider init-swiper" data-aos="fade-up" data-aos-delay="300">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": false,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    },
                    "breakpoints": {
                      "768": {
                        "slidesPerView": 2
                      },
                      "992": {
                        "slidesPerView": 3
                      }
                    }
                  }
                </script>

                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        "VCampusVentures made my MBA journey simple and stress-free. I was confused about choosing the right university for my online MBA. There were so many options and misleading information everywhere. The VCampusVentures team patiently guided me, explained every detail, and helped me select a UGC-approved university that matched my budget and career goals. Today, I’m confidently pursuing my degree while working full-time. Choosing VCampusVentures was the best decision I made for my education."
                      </p>
                      <div class="testimonial-profile">
                        <img src="assets/img/person/person3.webp" alt="Reviewer" class="img-fluid rounded-circle">
                        <div>
                          <h3>Prashant Gupta</h3>
                          <h4>Book Enthusiast</h4>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        "As a working professional, I didn’t have time to visit colleges or understand complicated admission processes. VCampusVentures made everything simple — from counselling to documentation and enrollment. They answered all my questions clearly and supported me even after admission. Because of their guidance, I could continue my studies without stress and focus on building my career."
                      </p>
                      <div class="testimonial-profile">
                        <img src="assets/img/person/person5.jpg" alt="Reviewer" class="img-fluid rounded-circle">
                        <div>
                          <h3>Sneha Jain</h3>
                          <h4>Sci-Fi Blogger</h4>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                      </div>
                      <p>
                        "I wanted to upgrade my qualifications but was unsure whether an online degree would truly help my career. The VCampus counselors explained how online education works, compared universities for me, and ensured I chose the right program. Their transparency and constant support gave me confidence. Today, I feel proud that I invested in my future through the right platform."
                      </p>
                      <div class="testimonial-profile">
                        <img src="assets/img/person/person4.webp" alt="Reviewer" class="img-fluid rounded-circle">
                        <div>
                          <h3>Shubham Shrivastav</h3>
                          <h4>Book Club President</h4>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur.
                      </p>
                      <div class="testimonial-profile">
                        <img src="assets/img/person/person-m-4.webp" alt="Reviewer" class="img-fluid rounded-circle">
                        <div>
                          <h3>Robert Wilson</h3>
                          <h4>Literary Reviewer</h4>
                        </div>
                      </div>
                    </div>
                  </div> -->

                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>

            <div class="vc-testimonials-explore text-center">
              <button type="button" class="vc-testimonials-explore-btn btn btn-primary" aria-controls="vc-testimonials-drawer" aria-expanded="false">
                Explore More Testimonials
              </button>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- /Testimonials Section -->

    <div class="vc-testimonials-overlay" data-vc-testimonials-close></div>
    <aside id="vc-testimonials-drawer" class="vc-testimonials-drawer" aria-labelledby="vc-testimonials-drawer-title" aria-hidden="true">
      <div class="vc-testimonials-drawer-header">
        <h2 id="vc-testimonials-drawer-title">More Testimonials</h2>
        <button type="button" class="vc-testimonials-drawer-close" data-vc-testimonials-close aria-label="Close testimonials">&times;</button>
      </div>
      <div class="vc-testimonials-drawer-body">
        <div class="testimonial-item">
          <div class="stars">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
          <div class="testimonial-profile">
            <img src="assets/img/person/person3.webp" alt="Reviewer" class="img-fluid rounded-circle">
            <div>
              <h3>Testimonial Name 4</h3>
              <h4>Student</h4>
            </div>
          </div>
        </div>

        <div class="testimonial-item">
          <div class="stars">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
          <div class="testimonial-profile">
            <img src="assets/img/person/person5.jpg" alt="Reviewer" class="img-fluid rounded-circle">
            <div>
              <h3>Testimonial Name 5</h3>
              <h4>Student</h4>
            </div>
          </div>
        </div>

        <div class="testimonial-item">
          <div class="stars">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
          <div class="testimonial-profile">
            <img src="assets/img/person/person4.webp" alt="Reviewer" class="img-fluid rounded-circle">
            <div>
              <h3>Testimonial Name 6</h3>
              <h4>Student</h4>
            </div>
          </div>
        </div>
      </div>
    </aside>

    <!-- youtube section -->
<!--     <section class="youtube-section py-5">-->
<!--  <div class="container">-->

  
<!--    <div class="container section-title" data-aos="fade-up">-->
<!--        <h2>Watch & Learn</h2>-->
<!--        <p>Insights, student stories & expert guidance</p>-->
<!--      </div>-->

<!--    <div class="row g-4">-->

<!--      <div class="col-lg-4 col-md-6">-->
<!--        <div class="video-card">-->
<!--          <div class="video-wrapper">-->
<!--            <iframe -->
<!--              src="https://www.youtube-nocookie.com/embed/hA3cLC0OBng?rel=0&modestbranding=1"-->
<!--              loading="lazy"-->
<!--              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"-->
<!--              allowfullscreen>-->
<!--            </iframe>-->
<!--          </div>-->
<!--          <h5 class="mt-3">How Online Degrees Work in India</h5>-->
<!--          <p>Everything you need to know before enrolling</p>-->
<!--        </div>-->
<!--      </div>-->

<!--      <div class="col-lg-4 col-md-6">-->
<!--        <div class="video-card">-->
<!--          <div class="video-wrapper">-->
<!--            <iframe -->
<!--              src="https://www.youtube-nocookie.com/embed/o8MXEP2s_kU?rel=0&modestbranding=1" -->
<!--              allowfullscreen>-->
<!--            </iframe>-->
<!--          </div>-->
<!--          <h5 class="mt-3">Student Success Story</h5>-->
<!--          <p>Real outcomes from real learners</p>-->
<!--        </div>-->
<!--      </div>-->

<!--      <div class="col-lg-4 col-md-6">-->
<!--        <div class="video-card">-->
<!--          <div class="video-wrapper">-->
<!--            <iframe -->
<!--              src="https://www.youtube-nocookie.com/embed/UHP_AOG5gTY?rel=0&modestbranding=1" -->
<!--              allowfullscreen>-->
<!--            </iframe>-->
<!--          </div>-->
<!--          <h5 class="mt-3">Top Universities Compared</h5>-->
<!--          <p>Choose the right university for your career</p>-->
<!--        </div>-->
<!--      </div>-->

<!--    </div>-->
<!--  </div>-->
<!--</section>-->
<!-- ends youtube section -->

<section class="review-wrapper">
  <div class="review-image">
  <img
    src="assets/img/online-reviews.webp"
    alt="Writing a review online"
  />
</div>


  <div class="review-form-container">
    <h2>Write a Review</h2>
    <p class="subtitle">Share your experience with us</p>

    <form id="reviewForm" class="review-form" method="POST" action="contact/submit_review">
      <div class="stars" id="starRating">
        <span data-value="1">★</span>
        <span data-value="2">★</span>
        <span data-value="3">★</span>
        <span data-value="4">★</span>
        <span data-value="5">★</span>
      </div>
      <small id="ratingText">Select a rating</small>

      <input type="hidden" name="rating" id="ratingInput">

      <input type="text" name="name" placeholder="Your name" required />
      <input type="text" name="title" placeholder="Review title (optional)" />
      <textarea name="review" placeholder="Write your review..." required></textarea>

      <button type="submit">Submit Review</button>
      <p class="success-message" id="successMessage">Thank you for your review! 💙</p>
    </form>
  </div>
</section>



<!-- faq section -->
 <section class="faq-section">
  <h2>Let's clear up some doubts</h2>

  <div class="faq-container">

    <div class="faq-item">
      <button class="faq-question">
        <span class="number">1</span>
        What are your charges?
        <span class="icon">▼</span>
      </button>
      <div class="faq-answer">
        <p>
          If you are using the VCampusVentures platform as a student, all of our services will be 100% free for you! Yes, we do not charge learners for any kind of assistance or career-guiding services & post-admission benefits.
        </p>
        <p>
          CV will always be free for students/ learners.
        </p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">
        <span class="number">2</span>
        How is VCampusVentures different from others?
        <span class="icon">▼</span>
      </button>
      <div class="faq-answer">
        <p>We at VCampus are a one-stop solution for all who wish to pursue their higher education via online universities/ edtech. Since our foundation in 2019, we have believed selecting the right university/ edtech is the first step to achieving your career goals. This is why we :</p>
        <ul>
          <li>Only list UGC-DEB-approved online universities/ edtech on our portal so that you get all the required information about the right university/ edtech to make an informed decision.</li>
          <li>We remove all jargon from approval details, and course details, and explain everything in plain English.</li>
          <li>Our experts like to keep it simple. They readily give advice and do not force a certain University/ Edtech on you.</li>
        </ul>
        <p>We have a 92.76% student retention rate, which is by far one of the best in India. We are also the highest-rated Online Education Platform on Facebook and Google.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">
        <span class="number">3</span>
        Why take admission through VCampusVentures?
        <span class="icon">▼</span>
      </button>
      <div class="faq-answer">
        <p>VCampusVentures is not only making you aware of your options in online learning, but it actually helps you choose one by providing you with all the necessary information. Be it about your specific course domain or the university, VCampusVentures expert counselors are there to solve your queries.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">
        <span class="number">4</span>
        Independent Platform? What?
        <span class="icon">▼</span>
      </button>
      <div class="faq-answer">
        <p>We are the only platform in India that does not sell or team up with universities/edtech for any kind of marketing or sales.</p>
        <p>This helps us remain totally uninfluenced since our establishment in 2019. The entire team is happy to remain 100% on your side.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">
        <span class="number">5</span>
        What is VCampusVentures?
        <span class="icon">▼</span>
      </button>
      <div class="faq-answer">
        <p>Navigating University/Edtech Selection can be like finding your way through a tricky maze.</p>
        <p>We realized this and built VCampusVentures in 2019: India’s only unbiased online education platform.</p>
        <p>We are like your trusty map, guiding you through the world of online education. We have  got everything you need, from helpful guides, smart tools to smart experts.</p>
        <p>You will never be lost in the University/Edtech Selection maze again.</p>
      </div>
    </div>

  </div>
</section>
<!-- faq section -->

    <!-- Cta Section -->
    <section id="cta" class="cta section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">

          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="cta-content">
              <h2>Transform Your Future with Expert-Led Online Courses</h2>
              <p>Join thousands of successful learners who have advanced their careers through our comprehensive online education platform.</p>

              <div class="features-list">
                <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>20+ Expert instructors with industry experience</span>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="350">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>Certificate of completion for every course</span>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>24/7 access to course materials and resources</span>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="450">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>Interactive assignments and real-world projects</span>
                </div>
              </div>

              <div class="cta-actions" data-aos="fade-up" data-aos-delay="500">
                <a href="<?= base_url('enroll') ?>" class="btn btn-primary">Browse Courses</a>
                <a href="<?= base_url('enroll') ?>" class="btn btn-outline">Enroll Now</a>
              </div>

              <div class="stats-row" data-aos="fade-up" data-aos-delay="400">
                <div class="stat-item">
                  <h3><span data-purecounter-start="0" data-purecounter-end="15000" data-purecounter-duration="2" class="purecounter"></span>+</h3>
                  <p>Students Enrolled</p>
                </div>
                <div class="stat-item">
                  <h3><span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="2" class="purecounter"></span>+</h3>
                  <p>Courses Available</p>
                </div>
                <div class="stat-item">
                  <h3><span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="2" class="purecounter"></span>%</h3>
                  <p>Success Rate</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="cta-image">
              <img src="assets/img/education/courses-4.webp" alt="Online Learning Platform" class="img-fluid">
              <div class="floating-element student-card" data-aos="zoom-in" data-aos-delay="600">
                <div class="card-content">
                  <i class="bi bi-person-check-fill"></i>
                  <div class="text">
                    <span class="number">2,450</span>
                    <span class="label">New Students This Month</span>
                  </div>
                </div>
              </div>
              <div class="floating-element course-card" data-aos="zoom-in" data-aos-delay="700">
                <div class="card-content">
                  <i class="bi bi-play-circle-fill"></i>
                  <div class="text">
                    <span class="number">50+</span>
                    <span class="label">Hours of Content</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Cta Section -->
<!-- ================= FACULTY NETWORK ================= -->

<section id="faculty-network" class="faculty-network">

  <div class="container">

    <div class="faculty-top">

      <div class="faculty-small-title">
        INSTRUCTORS
      </div>

      <h2>
        Master your craft with
        <span>renowned faculty</span>
      </h2>

      <div class="faculty-subtitle">
        Instructors
      </div>

    </div>


    <div class="faculty-carousel">

      <button class="faculty-arrow faculty-prev" type="button">
        &#8249;
      </button>


      <div class="faculty-track">


        <!-- FACULTY 1 -->
        <div class="faculty-slide">

          <div class="faculty-card-new">

            <div class="faculty-card-image">
              <img
                src="<?= base_url('assets/img/faculty/01-Dr-Ravi-P-Singh.png') ?>"
                alt="Dr. Ravi P. Singh">
            </div>

            <div class="faculty-card-body">

              <h3>Dr. Ravi P. Singh</h3>

              <div class="faculty-role">
                Vice Chancellor
              </div>

              <div class="faculty-working">
                WORKING AT
              </div>

              <div class="faculty-company">
                Adani University, Shantigram, Ahmedabad
              </div>

              <p>
                Academic leader with extensive experience in higher
                education and institutional development.
              </p>

            

            </div>

          </div>

        </div>


        <!-- FACULTY 2 -->
        <div class="faculty-slide">

          <div class="faculty-card-new">

            <div class="faculty-card-image">
              <img
                src="<?= base_url('assets/img/faculty/02-Dr-Vikas-Gupta.png') ?>"
                alt="Dr. Vikas Gupta">
            </div>

            <div class="faculty-card-body">

              <h3>Dr. Vikas Gupta</h3>

              <div class="faculty-role">
                Registrar
              </div>

              <div class="faculty-working">
                WORKING AT
              </div>

              <div class="faculty-company">
                Delhi University
              </div>

              <p>
                Experienced academic administrator contributing to
                institutional management and higher education.
              </p>

              

            </div>

          </div>

        </div>


        <!-- FACULTY 3 -->
        <div class="faculty-slide">

          <div class="faculty-card-new">

            <div class="faculty-card-image">
              <img
                src="<?= base_url('assets/img/faculty/03-Adv-Vikas-Chopra.png') ?>"
                alt="Adv. Vikas Chopra">
            </div>

            <div class="faculty-card-body">

              <h3>Adv. Vikas Chopra</h3>

              <div class="faculty-role">
                Legal Advisor
              </div>

              <div class="faculty-working">
                WORKING AT
              </div>

              <div class="faculty-company">
                Delhi High Court
              </div>

              <p>
                Legal professional providing expertise in legal advisory,
                compliance and institutional matters.
              </p>

             

            </div>

          </div>

        </div>


        <!-- FACULTY 4 -->
        <div class="faculty-slide">

          <div class="faculty-card-new">

            <div class="faculty-card-image">
              <img
                src="<?= base_url('assets/img/faculty/04-Dr-Arun-Garg.png') ?>"
                alt="Dr. Arun Garg">
            </div>

            <div class="faculty-card-body">

              <h3>Dr. Arun Garg</h3>

              <div class="faculty-role">
                Director
              </div>

              <div class="faculty-working">
                WORKING AT
              </div>

              <div class="faculty-company">
                PGDM College of Pharmacy, Bahadurgarh
              </div>

              <p>
                Academic professional with experience in educational
                leadership and institutional development.
              </p>

             

            </div>

          </div>

        </div>


        <!-- FACULTY 5 -->
        <div class="faculty-slide">

          <div class="faculty-card-new">

            <div class="faculty-card-image">
              <img
                src="<?= base_url('assets/img/faculty/05-Dr-Bharat-Bhushan.png') ?>"
                alt="Dr. Bharat Bhushan">
            </div>

            <div class="faculty-card-body">

              <h3>Dr. Bharat Bhushan</h3>

              <div class="faculty-role">
                Director
              </div>

              <div class="faculty-working">
                WORKING AT
              </div>

              <div class="faculty-company">
                IGNOU
              </div>

              <p>
                Senior academic professional associated with higher
                education and academic leadership.
              </p>

              

            </div>

          </div>

        </div>


        <!-- FACULTY 6 -->
        <div class="faculty-slide">

          <div class="faculty-card-new">

            <div class="faculty-card-image">
              <img
                src="<?= base_url('assets/img/faculty/06-Dr-Raj-Kumar.png') ?>"
                alt="Dr. Raj Kumar">
            </div>

            <div class="faculty-card-body">

              <h3>Dr. Raj Kumar</h3>

              <div class="faculty-role">
                Professor
              </div>

              <div class="faculty-working">
                WORKING AT
              </div>

              <div class="faculty-company">
                Delhi University
              </div>

              <p>
                Experienced professor contributing to teaching and
                academic development.
              </p>

             

            </div>

          </div>

        </div>


        <!-- FACULTY 7 -->
        <div class="faculty-slide">

          <div class="faculty-card-new">

            <div class="faculty-card-image">
              <img
                src="<?= base_url('assets/img/faculty/07-Dr-Deepak-Sharma.png') ?>"
                alt="Dr. Deepak Sharma">
            </div>

            <div class="faculty-card-body">

              <h3>Dr. Deepak Sharma</h3>

              <div class="faculty-role">
                Assistant Professor
              </div>

              <div class="faculty-working">
                WORKING AT
              </div>

              <div class="faculty-company">
                Aryabhatta College, Delhi
              </div>

              <p>
                Academic professional involved in teaching and
                student development.
              </p>

              

            </div>

          </div>

        </div>


        <!-- FACULTY 8 -->
        <div class="faculty-slide">

          <div class="faculty-card-new">

            <div class="faculty-card-image">
              <img
                src="<?= base_url('assets/img/faculty/08-Dr-Lakshman-Madurasinghe.png') ?>"
                alt="Dr. Lakshman Madurasinghe">
            </div>

            <div class="faculty-card-body">

              <h3>Dr. Lakshman Madurasinghe</h3>

              <div class="faculty-role">
                Senior Professor
              </div>

              <div class="faculty-working">
                WORKING AT
              </div>

              <div class="faculty-company">
                Azteca University
              </div>

              <p>
                Senior academic professional with experience in
                higher education and academic leadership.
              </p>



            </div>

          </div>

        </div>


      </div>


      <button class="faculty-arrow faculty-next" type="button">
        &#8250;
      </button>

    </div>

  </div>

</section>

<!-- ================= END FACULTY NETWORK ================= -->
 <!-- ================= VIDEO PLAYER MODAL ================= -->

<div id="videoPlayerModal" class="custom-video-modal">

    <div class="custom-video-overlay"></div>

    <div class="custom-video-box">

        <button type="button"
                class="custom-video-close"
                id="closeVideoPlayer">
            &times;
        </button>

        <video
            id="customVideo"
            class="custom-video-element"
            preload="metadata"
            playsinline>
        </video>

        <div class="custom-video-controls">

            <input
                type="range"
                id="videoProgress"
                class="video-progress"
                min="0"
                max="100"
                value="0"
                step="0.1"
            >

            <div class="video-control-row">

                <button
                    type="button"
                    id="videoPlayPause"
                    class="video-control-btn">
                    ▶
                </button>

                <button
                    type="button"
                    id="videoBack10"
                    class="video-control-btn">
                    ↶ 10
                </button>

                <button
                    type="button"
                    id="videoForward10"
                    class="video-control-btn">
                    10 ↷
                </button>

                <span
                    id="videoTime"
                    class="video-time">
                    00:00 / 00:00
                </span>

                <div class="video-control-spacer"></div>

                <select id="videoSpeed" class="video-select">
                    <option value="0.5">0.5x</option>
                    <option value="0.75">0.75x</option>
                    <option value="1" selected>Normal</option>
                    <option value="1.25">1.25x</option>
                    <option value="1.5">1.5x</option>
                    <option value="2">2x</option>
                </select>

                <select id="videoQuality" class="video-select">
                    <option value="auto">Auto</option>
                    <option value="720">720p</option>
                    <option value="1080">1080p</option>
                </select>

                <button
                    type="button"
                    id="videoMute"
                    class="video-control-btn">
                    🔊
                </button>

            </div>

        </div>

    </div>

</div>

<!-- ================= END VIDEO PLAYER ================= -->
  </main>

  <script>
document.addEventListener("DOMContentLoaded", function () {

  const track = document.querySelector(".faculty-track");
  const next = document.querySelector(".faculty-next");
  const prev = document.querySelector(".faculty-prev");

  if (!track || !next || !prev) return;

  next.addEventListener("click", function () {
    track.scrollBy({
      left: track.clientWidth,
      behavior: "smooth"
    });
  });

  prev.addEventListener("click", function () {
    track.scrollBy({
      left: -track.clientWidth,
      behavior: "smooth"
    });
  });

});
</script>

<script>

document.addEventListener("DOMContentLoaded", function () {

    const modal = document.getElementById("videoPlayerModal");
    const video = document.getElementById("customVideo");

    const closeBtn = document.getElementById("closeVideoPlayer");

    const playPauseBtn = document.getElementById("videoPlayPause");

    const backBtn = document.getElementById("videoBack10");
    const forwardBtn = document.getElementById("videoForward10");

    const muteBtn = document.getElementById("videoMute");

    const progress = document.getElementById("videoProgress");

    const timeDisplay = document.getElementById("videoTime");

    const speedSelect = document.getElementById("videoSpeed");

    const qualitySelect = document.getElementById("videoQuality");


    /* =====================================================
       OPEN VIDEO
       ===================================================== */

    function openVideo(videoSource) {

        if (!videoSource) {
            return;
        }

        video.src = videoSource;

        modal.classList.add("active");

        document.body.style.overflow = "hidden";

        video.currentTime = 0;

        video.play()
            .then(function () {

                playPauseBtn.innerHTML = "❚❚";

            })
            .catch(function () {

                playPauseBtn.innerHTML = "▶";

            });
    }


    /* =====================================================
       CLOSE VIDEO
       ===================================================== */

    function closeVideo() {

        video.pause();

        video.removeAttribute("src");

        video.load();

        modal.classList.remove("active");

        document.body.style.overflow = "";
    }


    closeBtn.addEventListener("click", closeVideo);


    /* CLICK OUTSIDE VIDEO */

    document.querySelector(".custom-video-overlay")
        .addEventListener("click", closeVideo);


    /* ESC */

    document.addEventListener("keydown", function (e) {

        if (e.key === "Escape") {

            if (modal.classList.contains("active")) {
                closeVideo();
            }

        }

    });


    /* =====================================================
       PLAY / PAUSE
       ===================================================== */

    playPauseBtn.addEventListener("click", function () {

        if (video.paused) {

            video.play();

            playPauseBtn.innerHTML = "❚❚";

        } else {

            video.pause();

            playPauseBtn.innerHTML = "▶";
        }

    });


    /* =====================================================
       10 SECOND BACK
       ===================================================== */

    backBtn.addEventListener("click", function () {

        video.currentTime =
            Math.max(0, video.currentTime - 10);

    });


    /* =====================================================
       10 SECOND FORWARD
       ===================================================== */

    forwardBtn.addEventListener("click", function () {

        video.currentTime =
            Math.min(
                video.duration || 0,
                video.currentTime + 10
            );

    });


    /* =====================================================
       MUTE
       ===================================================== */

    muteBtn.addEventListener("click", function () {

        video.muted = !video.muted;

        muteBtn.innerHTML =
            video.muted ? "🔇" : "🔊";

    });


    /* =====================================================
       SPEED
       ===================================================== */

    speedSelect.addEventListener("change", function () {

        video.playbackRate =
            parseFloat(this.value);

    });


    /* =====================================================
       PROGRESS
       ===================================================== */

    video.addEventListener("timeupdate", function () {

        if (!video.duration) return;

        const percentage =
            (video.currentTime / video.duration) * 100;

        progress.value = percentage;

        timeDisplay.textContent =
            formatTime(video.currentTime)
            + " / "
            + formatTime(video.duration);

    });


    progress.addEventListener("input", function () {

        if (!video.duration) return;

        video.currentTime =
            (this.value / 100) * video.duration;

    });


    /* =====================================================
       PLAY STATE
       ===================================================== */

    video.addEventListener("play", function () {

        playPauseBtn.innerHTML = "❚❚";

    });


    video.addEventListener("pause", function () {

        playPauseBtn.innerHTML = "▶";

    });


    /* =====================================================
       TIME FORMAT
       ===================================================== */

    function formatTime(seconds) {

        if (!isFinite(seconds)) {
            return "00:00";
        }

        const minutes =
            Math.floor(seconds / 60);

        const secs =
            Math.floor(seconds % 60);

        return String(minutes).padStart(2, "0")
            + ":"
            + String(secs).padStart(2, "0");
    }


    /* =====================================================
       FIND VIDEO CARDS
       ===================================================== */

    document.querySelectorAll(
        ".video-card, .learning-video-card, [data-video]"
    ).forEach(function (card) {

        card.addEventListener("click", function () {

            const source =
                this.dataset.video;

            if (source) {
                openVideo(source);
            }

        });

    });


});

</script>