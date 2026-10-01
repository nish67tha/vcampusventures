<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Contact</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    
    <!-- Contact Banner -->
    <section class="contact-banner">
      <img src="<?= base_url('assets/img/banners/Contact_Us_bg.jpg') ?>" alt="Contact Us Banner">
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-main-wrapper">
          <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.4735703154283!2d77.2007522!3d28.6455357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd4d01026205%3A0x5d04f04d5f9c9edf!2sVCAMPUS%20VENTURES%20PRIVATE%20LIMITED!5e0!3m2!1sen!2sin!4v1770458882522!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="contact-content">
            <div class="contact-cards-container" data-aos="fade-up" data-aos-delay="300">
              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="contact-text">
                  <h4>Location</h4>
                  <p>1E/14, Jhandewalan Extension, New Delhi-110055, India</p>
                </div>
              </div>

              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="contact-text">
                  <h4>Email</h4>
                  <p><a href="mailto:info@vcampusventures.com">info@vcampusventures.com</a></p>
                </div>
              </div>

              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="contact-text">
                  <h4>Call</h4>
                  <p><a href="tel:+918295529977">+91 8295529977</a></p>
                </div>
              </div>

              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-clock"></i>
                </div>
                <div class="contact-text">
                  <h4>Open Hours</h4>
                  <p>Monday-Friday: 9AM - 5PM</p>
                </div>
              </div>
            </div>

            <div class="contact-form-container" data-aos="fade-up" data-aos-delay="400">
              <h3>Get in Touch</h3>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipiscing.</p> -->

              <form action="<?= base_url('contact/submit') ?>" method="post" class="custom-contact-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name*" required="">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email*" required="">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject*" required="">
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message*" required=""></textarea>
                </div><br>
                <p style="font-size: 13px;
    font-weight: 500;">By submitting this form, you consent to being contacted by VCampusVentures via WhatsApp, emai, sms, calls, and other methods, even if your number is on the DND/NDNC list. You also agree to our <a href="<?= base_url('privacypolicy') ?>">Privacy Policy</a> and <a href="<?= base_url('termsconditions') ?>">Terms of Service.</a></p>
                <div class="my-3">
                  <?php if ($this->session->flashdata('error')): ?>
                    <div class="error-message d-block">
                      <?= $this->session->flashdata('error'); ?>
                    </div>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('success')): ?>
                    <div class="sent-message d-block">
                      <?= $this->session->flashdata('success'); ?>
                    </div>
                  <?php endif; ?>
                </div>
                <!-- <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div> -->

                <div class="form-submit">
                  <button type="submit">Send Message</button>
                  <div class="social-links">
                    <a href="https://x.com/VcampusGlobal"><i class="bi bi-twitter"></i></a>
                    <a href="https://facebook.com/VCampusGlobalEducation"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com/vcampus_global"><i class="bi bi-instagram"></i></a>
                    <a href="https://linkedin.com/company/vcampus-global-education"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>

  