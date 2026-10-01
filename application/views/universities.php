<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Universities</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li class="current">Universities</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
<section id="course-categories" class="course-categories section">

     <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 justify-content-center text-center">
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

          <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
            <a href="<?= base_url('university/dy-patil-university') ?>" class="category-card category-tech">
              <div class="university-logo">
                <img src="<?= base_url('assets/img/menu/') ?>dpu-online-logo.webp" alt="DY Patil University">
              </div>
              <h5>DY Patil University</h5>
            </a>
          </div>

          <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
            <a href="<?= base_url('university/ndim-university') ?>" class="category-card category-tech">
              <div class="university-logo">
                <img src="<?= base_url('assets/img/university/') ?>LOGO-NDIM.webp" alt="NDIM University">
              </div>
              <h5>NDIM University</h5>
            </a>
          </div>

          <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
            <a href="<?= base_url('university/online-uttaranchal') ?>" class="category-card category-tech">
              <div class="university-logo">
                <img src="<?= base_url('assets/img/') ?>24_onlineUU (1).webp" alt="online-uttaranchal University">
              </div>
              <h5>Online Uttaranchal University</h5>
            </a>
          </div>

          <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
            <a href="<?= base_url('university/LPU-university-Online') ?>" class="category-card category-tech">
              <div class="university-logo">
                <img src="<?= base_url('assets/img/menu/') ?>lpu.jpg" alt="LPU University">
              </div>
              <h5>LPU University</h5>
            </a>
          </div>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100" style="margin-top: 20px;">

          <div class="row g-4 justify-content-center text-center">

            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
              <a href="#" class="category-card category-tech">
                <div class="university-logo">
                  <img src="<?= base_url('assets/img/menu/') ?>Birchwood_logo.webp" alt="Birchwood University">
                </div>
                <h5>Birchwood University</h5>
                <h5>USA</h5>
              </a>
            </div>

            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
              <a href="#" class="category-card category-tech">
                <div class="university-logo">
                  <img src="<?= base_url('assets/img/menu/') ?>cvi_logo.webp" alt="CVI University">
                </div>
                <h5>CVI University</h5>
                <h5>USA</h5>
              </a>
            </div>

            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
              <a href="#" class="category-card category-tech">
                <div class="university-logo">
                  <img src="<?= base_url('assets/img/menu/') ?>EAI_Logo.jfif" alt="Euro American Institute">
                </div>
                <h5>Euro American Institute</h5>
                <h5>Malta</h5>
              </a>
            </div>

            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
              <a href="#" class="category-card category-tech">
                <div class="university-logo">
                  <img src="<?= base_url('assets/img/menu/') ?>eimt_logo.jfif" alt="EIMT">
                </div>
                <h5>EIMT</h5>
                <h5>Switzerland</h5>
              </a>
            </div>

            <div class="col-6 col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
              <a href="#" class="category-card category-tech">
                <div class="university-logo">
                  <img src="<?= base_url('assets/img/menu/') ?>lsmt-Logo.webp" alt="LSMT">
                </div>
                <h5>LSMT</h5>
                <h5>UK</h5>
              </a>
            </div>

          </div>
        </div>

      </div>
</section><!-- /Course Categories Section -->

</main>