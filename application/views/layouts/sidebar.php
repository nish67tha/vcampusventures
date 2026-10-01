
<?php
$currentPage = $this->router->fetch_method();
?>
<section class="program-hero">
  <img src="<?= base_url('assets/img/banners/inside_banner.webp') ?>" alt="Graduate Programme" class="hero-img">

  <div class="hero-overlay"></div>

  <div class="hero-content">
    <h1><?php echo $title?> </h1>
    <a href="<?= base_url('enroll') ?>" class="hero-btn ">Apply Now</a>
  </div>
</section>

<section class="programme-section">
  <div class="programme-container">

    <!-- LEFT SIDEBAR -->
    <aside class="programme-sidebar">
      <h4>Programs Type</h4>
      <ul>
        <a href="<?= base_url('academics/graduate') ?>"><li class="<?= $currentPage == 'graduate' ? 'active' : '' ?>"> Graduate</li></a>
        <a href="<?= base_url('academics/post-graduate') ?>"><li class="<?= $currentPage == 'post-graduate' ? 'active' : '' ?>">Post Graduate</li></a>
        <a href="<?= base_url('academics/skill_development') ?>"><li class="<?= $currentPage == 'skill_development' ? 'active' : '' ?>">Skill Development Courses</li></a>
        <a href="<?= base_url('academics/executive_education') ?>"><li class="<?= $currentPage == 'executive_education' ? 'active' : '' ?>">Executive Education</li></a>
        <a href="<?= base_url('academics/doctorate') ?>"><li class="<?= $currentPage == 'doctorate' ? 'active' : '' ?>">Doctorate/Ph.D</li></a>
      </ul>
    </aside>
