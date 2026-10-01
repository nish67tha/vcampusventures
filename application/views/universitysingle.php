<main class="university-page">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">University</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li class="current">University</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
  <!-- HERO SECTION -->
  <section class="university-hero">
    <div class="uni-wrap">

      <div class="uni-layout">

        <!-- LEFT CONTENT -->
        <div class="uni-info">
          <h1 class="uni-title"><?= $university['university_name']; ?></h1>

          <p class="uni-subtext">
            <b>Accredited with grade A++ by NAAC</b>
          </p>
          <p class="uni-subtext">
            VCampusVentures is the Exclusive Admission Counsellor.
          </p>
        <p class="uni-subtext">
            <a href="https://sgtonline.in">SGT Online </a>
          </p>    
          <div class="uni-rating">
            ★★★★★ 
          </div>

          <div class="uni-badges">
            <img src="<?= base_url('/') ?>assets/img/ugc-deb-logo.jpg" alt="Accreditation">
            <img src="<?= base_url('/') ?>assets/img/aicte-logo.jpg" alt="Accreditation">
            <img src="<?= base_url('/') ?>assets/img/aiu-logo.jpg" alt="Accreditation">
          </div>

          <div class="uni-actions">
            <a href="https://vcampusventures.com/enroll" class="btn-primary">Apply to University</a>
            <!--<a href="#" class="btn-outline">Talk to University</a>-->
          </div>

          <!-- <div class="uni-links">
            <a href="#">Add to Compare</a>
            <a href="#">Download Brochure</a>
          </div> -->
        </div>

        <!-- RIGHT BANNER -->
        <!--<div class="uni-banner">-->
        <!--  <div class="uni-banner-img"><img src="<?= base_url('assets/img/university/' . $university['university_image']); ?>" alt="Amity"></div>-->
        <!--</div>-->
        
        <!-- RIGHT BANNER SLIDER -->
<div class="uni-banner-slider-wrap">

  <div class="swiper uniHeroSwiper">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <img src="<?= base_url('assets/img/university/067A1340 copy.jpg'); ?>" alt="">
      </div>

      <div class="swiper-slide">
        <img src="<?= base_url('assets/img/university/00011566 copy.jpg'); ?>" alt="">
      </div>

      <div class="swiper-slide">
        <img src="<?= base_url('assets/img/university/9X3A3076 f.jpg'); ?>" alt="">
      </div>

    </div>

    <!-- optional controls -->
    <div class="uni-hero-pagination"></div>
    <div class="uni-hero-next"></div>
    <div class="uni-hero-prev"></div>

  </div>

</div> 


      </div>
    </div>
  </section>

  <section class="vcx-hero-wrap">
  <div class="vcx-hero-inner">

    <!-- LEFT -->
    <div class="vcx-left">
      <span class="vcx-badge">A++ NAAC Accredited</span>

      <h1>SGT <br> University</h1>

      <p class="vcx-text">
        VCampusVentures is the Exclusive Admission Counsellor.
      </p>

      <a href="#" class="vcx-link">SGT Online</a>

      <div class="vcx-stars">★★★★★</div>

      <!-- Logos -->
      <div class="vcx-logos">
        <img src="assets/img/sgt-placement/ugc.png">
        <img src="assets/img/sgt-placement/aicte.png">
        <img src="assets/img/sgt-placement/aiu.png">
      </div>

      <a href="#" class="vcx-btn">Apply to University</a>
    </div>

    <!-- RIGHT SLIDER -->
    <div class="vcx-right">
      <div class="swiper vcx-slider">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <img src="https://images.unsplash.com/photo-1562774053-701939374585">
          </div>

          <div class="swiper-slide">
            <img src="https://images.unsplash.com/photo-1562774053-701939374585">
          </div>

          <div class="swiper-slide">
            <img src="https://images.unsplash.com/photo-1562774053-701939374585">
          </div>

        </div>

        <div class="swiper-pagination"></div>
      </div>
    </div>

  </div>
</section>
  <section class="vcx-img-section">
  <div class="vcx-img-container">
    
    <h2 class="vcx-img-heading">
      SGT Success Stories - Placement
    </h2>

    <div class="vcx-img-wrapper">
      <img src="<?=  base_url(); ?>assets/img/sgt-placement/Placement.jpg" alt="Hire Talent">
    </div>

  </div>
</section>
  <!--programs-->
  <section class="uni-courses-grid">
  <div class="container">

    <h2 class="section-title">Popular Online Programs</h2>

    <div class="course-grid">

      <div class="course-row">
        <span>BBA</span>
        <a href="<?= base_url('assets/brochures/sgt-bba.pdf') ?>" class="download-btn" target="_blank">
          Download Brochure
        </a>
      </div>

      <div class="course-row">
        <span>B.Com</span>
        <a href="<?= base_url('assets/brochures/sgt-bcom.pdf') ?>" class="download-btn" target="_blank">
          Download Brochure
        </a>
      </div>

      <div class="course-row">
        <span>BCA</span>
        <a href="<?= base_url('assets/brochures/sgt-bca.pdf') ?>" class="download-btn" target="_blank">Download Brochure</a>
      </div>

      <div class="course-row">
        <span>MCA</span>
        <a href="<?= base_url('assets/brochures/sgt-mca.pdf') ?>" class="download-btn" target="_blank">Download Brochure</a>
      </div>
      
      <div class="course-row">
        <span>MBA</span>
        <a href="<?= base_url('assets/brochures/sgt-mba.pdf') ?>" class="download-btn" target="_blank">Download Brochure</a>
      </div>
      
      <div class="course-row">
        <span>SGT Online</span>
        <a href="<?= base_url('assets/brochures/SGT-FLYER.pdf') ?>" class="download-btn" target="_blank">Download Brochure</a>
      </div>
      
      <div class="course-row">
        <span>Information Brochure</span>
        <a href="<?= base_url('assets/brochures/SGT-information-brochure-2026.pdf') ?>" class="download-btn" target="_blank">Download Brochure</a>
      </div>

    </div>
  </div>
</section>

<!--Fee section-->
<section class="fee-compare-section">
  <div class="container">

    <div class="fee-card-box">

      <div class="fee-card-header">
        Fee Structure for Online Programs
      </div>

      <table class="fee-table">
        <thead>
          <tr>
            <th>Course Name</th>
            <th>Semester Fees (INR)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Online BBA</th>
            <th>14,750</th>
          </tr>
          <tr>
            <th>Online B.Com</th>
            <th>11,500</th>
          </tr>
          <tr>
            <th>Online BCA</th>
            <th>15,500</th>
          </tr>
          <tr>
            <th>Online MCA</th>
            <th>24,500</td>
          </tr>
          <tr>
            <th>Online MBA</th>
            <th>24,500</th>
          </tr>
          
        </tbody>
      </table>

      <div class="fee-offer-note">
        🎉 Avail 20% Scholarship — Valid only for this Batch!
      </div>

    </div>

  </div>
</section>



<!--programs-->

  <!-- ABOUT SECTION -->
  <section class="uni-about">
    <div class="uni-wrap">

      <h2 class="about-title">
        About <?= $university['university_name']; ?>
      </h2>
      <?= $university['about_content']; ?>
      <!-- <p>
            Dr. D.Y. Patil Vidyapeeth is a deemed-to-be university in Pune, established in the year 2003.
            Starting as a medical institution, the university today offers courses across multiple
            disciplines with best-in-class educational services.
        </p>

       <p>
  Dr. D.Y. Patil University is a UGC-approved institution and has the Centre for Online Learning (DPU-COL), 
  dedicated to providing online courses at the undergraduate and postgraduate levels. With the online learning support of the university, 
  an all-round educational service is delivered to the students’ doorstep through virtual means.
</p>


        <p>
            D.Y. Patil offers online UG and PG programs in management, healthcare management,
            digital marketing, and more. Services include LMS support, live online lectures,
            virtual study materials, and interactive learning tools.
        </p>

        <p>
     Courses in the online mode also have a dedicated placement assistance body, so students can easily get practical and professional exposure integrated with the course as well as find job opportunities in a number of top MNCs and companies through the virtual placement services.
        </p>

        <p>
           The university provides affordable education to students with a number of fee concession facilities for special and needy categories. Driven by the motto of equitable and democratic access to higher education,  the university seeks to provide an in-depth learning experience to students through online mode.
        </p> -->

    </div>
  </section>

</main>
