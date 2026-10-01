<footer id="footer" class="footer accent-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?= base_url('assets/img/vcampus (1).png') ?>" alt="Company Logo" width="150">
      </a>
          <p>We at VCampus strive to build the borderless, ageless
and limitless learning opportunities.</p>
          <div class="social-links d-flex mt-4">
            <a href="https://x.com/VcampusGlobal"><i class="bi bi-twitter-x"></i></a>
            <a href="https://facebook.com/VCampusGlobalEducation"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/vcampus_global"><i class="bi bi-instagram"></i></a>
            <a href="https://linkedin.com/company/vcampus-global-education"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li><a href="<?= base_url('about') ?>">About us</a></li>
            <li><a href="<?= base_url('contact') ?>">Contact us</a></li>
            <li><a href="<?= base_url('termsconditions') ?>">Terms of service</a></li>
            <li><a href="<?= base_url('privacypolicy') ?>">Privacy policy</a></li>
            <li><a target="_blank" href="<?= base_url('assets/img/odl_regulations.pdf') ?>">ODL Regulations by UGC</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Domains</h4>
          <ul>
            <li><a href="<?= base_url('academics/graduate') ?>">Under Graduate</a></li>
              <li><a href="<?= base_url('academics/post-graduate') ?>">Post Graduate</a></li>
              <li><a href="<?= base_url('academics/skill_development') ?>">Skill Developement Courses</a></li>
              <li><a href="<?= base_url('academics/executive_education') ?>">Executive Education</a></li>
              <li><a href="<?= base_url('academics/doctorate') ?>">Doctorate/Ph.D</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p><strong>Address:</strong> 1E/14,</p>
          <p>Jhandewalan Extension,</p>
          <p>New Delhi-110055, India</p>
          <p class="mt-4"><strong>Phone:</strong> <span><a href="tel:+918295529977">+91 8295529977</a></span></p>
          <p><strong>Email:</strong> <span><a href="mailto:info@vcampusventures.com">info@vcampusventures.com</a></span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p><span>Copyright</span> © 2026.<span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        <a href="<?= base_url('/') ?>">VCampusVentures Pvt Ltd</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Modal -->
   <div class="modal fade" id="enquiryModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content enquiry-modal">

      <button type="button" class="btn-close enquiry-close" data-bs-dismiss="modal"></button>

      <div class="row g-0">

        <!-- LEFT PANEL -->
        <div class="col-md-5 enquiry-left order-2 order-md-1">
          <h5>Why register with us ?</h5>
          <ul>
            <li>We give you verified information on fees, approvals, admissions, placements, and university recognition</li>
            <li>We compare 200+ top online & distance universities so you always choose the best option</li>
            <li>Our counselors guide you personally on eligibility, course fit & career outcomes</li>
            <li>You get early access to scholarships & fee waivers</li>
            <li>We are 100% independent & we don't promote any single university</li>
          </ul>
        </div>

        <!-- RIGHT PANEL -->
        <div class="col-md-7 enquiry-right order-1 order-md-2">
          <h5>Get accurate details on fees, courses, deadlines & eligibility in one click.</h5>

          <form action="<?= base_url('contact/submit') ?>" method="post">

            <div class="mb-3 input-icon">
              <i class="bi bi-person"></i>
              <input type="text" name="name" class="form-control" placeholder="Full Name" required>
            </div>

            <div class="mb-3 input-icon">
              <i class="bi bi-telephone"></i>
              <input type="tel" name="mobile" class="form-control" placeholder="Phone Number" required>
            </div>

            <div class="mb-3 input-icon">
              <i class="bi bi-envelope"></i>
              <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>

            <div class="mb-3 input-icon">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100 enquiry-submit">
              Submit
            </button>

            <p class="enquiry-terms">
              By submitting this form, you consent to being contacted by VCampusVentures via WhatsApp, emai, sms, calls, and other methods, even if your number is on the DND/NDNC list. You also agree to our <a href="<?= base_url('privacypolicy') ?>">Privacy Policy</a> and <a href="<?= base_url('termsconditions') ?>">Terms of Service.</a>
            </p>

            <!--<p class="enquiry-scholarship">-->
            <!--  Get Assured Scholarship with VCampus Ventures upto 50%-->
            <!--</p>-->

          </form>
        </div>

      </div>

    </div>
  </div>
</div>

<!-- Second Modal -->
<div class="modal fade" id="universityModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content enquiry-modal">

      <button type="button" class="btn-close enquiry-close" data-bs-dismiss="modal"></button>

      <div class="row g-0">
          <a href="<?= base_url('enroll') ?>">
        <img src="<?= base_url('assets/img/sgt-icon/sgt-modal.jpeg') ?>"
             alt="SGT University Offer"
             class="uni-modal-img">
      </a>
        

      </div>

    </div>
  </div>
</div>

<!-- SUCCESS MODAL Show -->
<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center p-4">

      <i class="bi bi-check-circle-fill text-success mb-3" style="font-size:60px;"></i>

      <h3>Success</h3>
      <p><?= $this->session->flashdata('contact_success'); ?></p>

      <button type="button" class="btn btn-success mt-3" data-bs-dismiss="modal">
        OK
      </button>

    </div>
  </div>
</div>
  
<!-- Vendor JS Files -->
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
  

<?php if ($this->session->flashdata('contact_success')): ?>
  <script>
    window.addEventListener('load', function () {
      if (typeof bootstrap === "undefined") return;

      const successModalEl = document.getElementById('successModal');
      if (successModalEl) {
        const successModal = new bootstrap.Modal(successModalEl);
        successModal.show();

        // auto close after 4 seconds (optional)
        setTimeout(() => {
          successModal.hide();
        }, 4000);
      }
    });
  </script>
<?php endif; ?>
  <script>
  const CURRENT_PAGE = "<?= $this->router->fetch_method(); ?>";
    const PAGE_SLUG = "<?= isset($slug) ? $slug : '' ?>";
window.addEventListener("load", function () {
    
    if (CURRENT_PAGE !== "index") return; // 👈 ONLY HOME PAGE

  const modalEl = document.getElementById("enquiryModal");
  if (!modalEl || typeof bootstrap === "undefined") return;

  const enquiryModal = new bootstrap.Modal(modalEl);
  let inactivityTimer;
  let modalOpened = false;

  function showModal() {
    if (modalOpened) return;

    enquiryModal.show();
    modalOpened = true;
  }

  /* SHOW ON HOME PAGE LOAD */
  const isHome =
    window.location.pathname === "/" ||
    window.location.pathname === "/index.php";

  if (isHome) {
    setTimeout(showModal, 800);
  }

  /* INACTIVITY LOGIC */
  function resetInactivityTimer() {
    if (modalOpened) return;

    clearTimeout(inactivityTimer);
    inactivityTimer = setTimeout(showModal, 15000);
  }

  ["mousemove", "keydown", "scroll", "touchstart"].forEach(evt => {
    document.addEventListener(evt, resetInactivityTimer, { passive: true });
  });

  resetInactivityTimer();

  /* ðŸ”‘ RESET AFTER MODAL CLOSE */
  modalEl.addEventListener('hidden.bs.modal', function () {
    modalOpened = false;
    resetInactivityTimer();
  });

});

// window.addEventListener("load", function () {

//   if (PAGE_SLUG !== "sgt-university") return;

//   const modalEl = document.getElementById("universityModal");
//   if (!modalEl || typeof bootstrap === "undefined") return;

//   const uniModal = new bootstrap.Modal(modalEl);

//   setTimeout(() => {
//     uniModal.show();
//   }, 2000);

// });
</script>

<script>
window.addEventListener("load", function () {

  if (PAGE_SLUG !== "sgt-university") return;

  const modalEl = document.getElementById("universityModal");
  if (!modalEl || typeof bootstrap === "undefined") return;

  const uniModal = new bootstrap.Modal(modalEl);

  let inactivityTimer;
  let modalOpened = false;

  function showModal() {
    if (modalOpened) return;
    uniModal.show();
    modalOpened = true;
  }

  /* ✅ OPEN ON PAGE LOAD */
  setTimeout(showModal, 800);

  /* ✅ INACTIVITY LOGIC */
  function resetTimer() {
    if (modalOpened) return;

    clearTimeout(inactivityTimer);
    inactivityTimer = setTimeout(showModal, 15000);
  }

  ["mousemove","keydown","scroll","touchstart"].forEach(evt => {
    document.addEventListener(evt, resetTimer, { passive:true });
  });

  resetTimer();

  /* ✅ RESET AFTER CLOSE */
  modalEl.addEventListener('hidden.bs.modal', function () {
    modalOpened = false;
    resetTimer();
  });

});
</script>


  <script>
  document.querySelectorAll(".faq-question").forEach(button => {
    button.addEventListener("click", () => {
      const item = button.parentElement;

      document.querySelectorAll(".faq-item").forEach(faq => {
        if (faq !== item) faq.classList.remove("active");
      });

      item.classList.toggle("active");
    });
  });
</script>
<script>
  const sectorItems = document.querySelectorAll(".sector-item");
  const sectorContents = document.querySelectorAll(".sector-content");

  sectorItems.forEach(item => {
    item.addEventListener("click", () => {
      sectorItems.forEach(i => i.classList.remove("active"));
      sectorContents.forEach(c => c.classList.remove("active"));

      item.classList.add("active");
      document.getElementById(item.dataset.sector).classList.add("active");
    });
  });
</script>

<!-- slider banner -->
 <script>
new Swiper(".vcx-slider", {
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
</script>

<script>
new Swiper('.uniHeroSwiper', {
  loop: true,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false
  },

  pagination: {
    el: '.uni-hero-pagination',
    clickable: true
  },

  navigation: {
    nextEl: '.uni-hero-next',
    prevEl: '.uni-hero-prev'
  }
});
</script>

 <script>
  new Swiper('.bannerSwiper', {
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  });
</script>
<!-- write a review -->
 <script>
  document.addEventListener("DOMContentLoaded", () => {
  const stars = document.querySelectorAll("#starRating span");
  const ratingInput = document.getElementById("ratingInput");
  const ratingText = document.getElementById("ratingText");

  let selectedRating = 0;

  stars.forEach((star) => {
    star.addEventListener("click", () => {
      selectedRating = star.dataset.value;
      ratingInput.value = selectedRating;

      // Highlight stars
      stars.forEach((s) => {
        s.classList.toggle("active", s.dataset.value <= selectedRating);
      });

      // Simple text
      ratingText.textContent = `Rating: ${selectedRating}/5`;
    });
  });
});


 </script>
</body>

</body>

</html>