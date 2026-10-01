<?php
$currentPage = basename($_SERVER['PHP_SELF']);

?>
<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Sector</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li class="current">Sector</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
<!-- Course Categories Section -->
  <section class="sector-section">
  <div class="sector-wrapper">

    <!-- LEFT SCROLLABLE SECTOR LIST -->
    <div class="sector-left">
      <?php $i = 0; ?>
      <?php foreach ($allSector as $row): ?>
      <div class="sector-item <?= ($row['sector'] === $_GET['name']) ? 'active' : '' ?>" data-sector="<?= $row['sector']; ?>"><?= $row['sector']; ?></div>
      <?php $i++; ?>
      <?php endforeach; ?>
    </div>

    <!-- RIGHT CONTENT -->
    <div class="sector-right">
        <?php $j = 0; ?>
    <?php foreach ($allSector as $sectorRow): ?>
      <!-- PG COURSES -->
      <div class="sector-content <?= ($sectorRow['sector'] === $_GET['name']) ? 'active' : '' ?>" id="<?= $sectorRow['sector']; ?>">
        <div class="sector-grid">
        <?php foreach ($allJob as $jobRow): ?>
          <?php if ($jobRow['sector'] == $sectorRow['sector']): ?>
          <div class="sector-card">
            <!-- <span class="sector-badge">80+ Specializations</span> -->
            <div class="sector-icon"><img src="<?= base_url() ?>assets/img/courses_icon/<?= $jobRow['icon']; ?>" alt=""></div>
            <h4><?= $jobRow['job_name']; ?></h4>
            <!-- <div class="sector-cta">Compare 37 Now</div> -->
          </div>
          <?php endif; ?>
<?php endforeach; ?>

          

        </div>
      </div>
      <?php $j++; ?>
          <?php endforeach; ?>
    </div>
  </div>
</section>




    <!-- /Course Categories Section -->

</main>