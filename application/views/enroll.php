<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Enrollment</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li class="current">Enroll</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Enroll Section -->
    <section id="enroll" class="enroll section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="enrollment-form-wrapper">

              <div class="enrollment-header text-center mb-5" data-aos="fade-up" data-aos-delay="200">
                <h2>Enroll in Your Dream Course</h2>
                <p>Take the next step in your educational journey. Complete the form below to secure your spot in our comprehensive online learning program.</p>
              </div>
              <?php if ($this->session->flashdata('success')): ?>
              <div class="alert alert-success" style="color:blue; font-weight:bolder;font-size:15px;">
                <!-- <a class="close" href="#" data-dismiss="alert">×</a> -->
                Enrollment submitted successfully!
              </div>
              <?php endif; ?>
              <?php if ($this->session->flashdata('error')): ?>
              <div class="alert alert-success" style="color:red; font-weight:bolder;font-size:15px;">
                <!-- <a class="close" href="#" data-dismiss="alert">×</a> -->
                Something Went Wrong
              </div>
              <?php endif; ?>
              <form class="enrollment-form" action="<?= base_url('enrollment/submit') ?>" method="post" data-aos="fade-up" data-aos-delay="300">

                <div class="row mb-4">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="firstName" class="form-label">First Name *</label>
                      <input type="text" id="firstName" name="firstName" class="form-control" required="" autocomplete="given-name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="lastName" class="form-label">Last Name *</label>
                      <input type="text" id="lastName" name="lastName" class="form-control" required="" autocomplete="family-name">
                    </div>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email" class="form-label">Email Address *</label>
                      <input type="email" id="email" name="email" class="form-control" required="" autocomplete="email">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="phone" class="form-label">Phone Number *</label>
                      <input type="tel" id="phone" name="phone" class="form-control" required="" autocomplete="tel">
                    </div>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="course" class="form-label">Select Course *</label>
                      <select id="course" name="course" class="form-select" required="">
                        <option value="">Choose a course...</option>
                        <option value="BBA">BBA</option>
                        <option value="MBA">MBA</option>
                        <option value="BCA">BCA</option>
                        <option value="PGDM">PGDM</option>
                        <option value="Executive MBA">Executive MBA</option>
                        <option value="BA">BA</option>
                        <option value="MA">MA</option>
                        <option value="B.Com">B.Com</option>
                        <option value="M.Com">M.Com</option>
                        <option value="B.Sc">B.Sc</option>
                        <option value="M.Sc">M.Sc</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="education" class="form-label">Education Level</label>
                      <select id="education" name="education" class="form-select">
                        <option value="">Select your education level...</option>
                        <option value="high-school">High School</option>
                        <option value="associate">Associate Degree</option>
                        <option value="bachelor">Bachelor's Degree</option>
                        <option value="master">Master's Degree</option>
                        <option value="doctorate">Doctorate</option>
                        <option value="other">Other</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="experience" class="form-label">Experience Level</label>
                      <select id="experience" name="experience" class="form-select">
                        <option value="">Select your experience...</option>
                        <option value="beginner">Beginner</option>
                        <option value="intermediate">Intermediate</option>
                        <option value="advanced">Advanced</option>
                        <option value="expert">Expert</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="motivation" class="form-label">What motivates you to take this course?</label>
                      <textarea id="motivation" name="motivation" class="form-control" rows="4" placeholder="Share your goals and what you hope to achieve..."></textarea>
                    </div>
                  </div>
                </div>

                <!-- <div class="row mb-4">
                  <div class="col-12">
                    <div class="form-group">
                      <label class="form-label">Preferred Learning Schedule</label>
                      <div class="schedule-options">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="schedule" id="weekdays" value="weekdays">
                          <label class="form-check-label" for="weekdays">
                            Weekdays (Monday - Friday)
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="schedule" id="weekends" value="weekends">
                          <label class="form-check-label" for="weekends">
                            Weekends (Saturday - Sunday)
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="schedule" id="flexible" value="flexible" checked="">
                          <label class="form-check-label" for="flexible">
                            Flexible (Self-paced)
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->

                <div class="row mb-4">
                  <div class="col-12">
                    <div class="form-group">
                      <div class="agreement-section">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="terms" name="terms" required="">
                          <label class="form-check-label" for="terms">
                            I agree to the <a href="<?= base_url('termsconditions') ?>">Terms of Service</a> and <a href="<?= base_url('privacypolicy') ?>">Privacy Policy</a> *
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter">
                          <label class="form-check-label" for="newsletter">
                            I would like to receive course updates and educational content via email
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12 text-center">
                    <button type="submit" class="btn btn-enroll">
                      <i class="bi bi-check-circle me-2"></i>
                      Enroll Now
                    </button>
                    <p class="enrollment-note mt-3">
                      By submitting this form, you consent to being contacted by VCampusVentures via WhatsApp, emai, sms, calls, and other methods, even if your number is on the DND/NDNC list. You also agree to our <a href="<?= base_url('privacypolicy') ?>">Privacy Policy</a> and <a href="<?= base_url('termsconditions') ?>">Terms of Service.</a>
                    </p>
                  </div>
                </div>

              </form>

            </div>
          </div><!-- End Form Column -->

          <div class="col-lg-4 d-none d-lg-block">
            <div class="enrollment-benefits" data-aos="fade-left" data-aos-delay="400">
              <h3>Why Choose Our Courses?</h3>
              <div class="benefit-item">
                <div class="benefit-icon">
                  <i class="bi bi-trophy"></i>
                </div>
                <div class="benefit-content">
                  <h4>Expert Instructors</h4>
                  <p>Learn from industry professionals with years of real-world experience</p>
                </div>
              </div><!-- End Benefit Item -->

              <div class="benefit-item">
                <div class="benefit-icon">
                  <i class="bi bi-clock"></i>
                </div>
                <div class="benefit-content">
                  <h4>Flexible Learning</h4>
                  <p>Study at your own pace with 24/7 access to course materials</p>
                </div>
              </div><!-- End Benefit Item -->

              <div class="benefit-item">
                <div class="benefit-icon">
                  <i class="bi bi-award"></i>
                </div>
                <div class="benefit-content">
                  <h4>Certification</h4>
                  <p>Earn industry-recognized certificates upon course completion</p>
                </div>
              </div><!-- End Benefit Item -->

              <div class="benefit-item">
                <div class="benefit-icon">
                  <i class="bi bi-people"></i>
                </div>
                <div class="benefit-content">
                  <h4>Community Support</h4>
                  <p>Connect with fellow students and get help when you need it</p>
                </div>
              </div><!-- End Benefit Item -->

              <div class="enrollment-stats mt-4">
                <div class="stat-item">
                  <span class="stat-number">15,000+</span>
                  <span class="stat-label">Students Enrolled</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">98%</span>
                  <span class="stat-label">Completion Rate</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">4.9/5</span>
                  <span class="stat-label">Average Rating</span>
                </div>
              </div><!-- End Stats -->

            </div>
          </div><!-- End Benefits Column -->

        </div>

      </div>

    </section><!-- /Enroll Section -->

  </main>