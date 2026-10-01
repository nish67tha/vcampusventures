<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Contact</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li class="current">Counselor Form</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    

 <!-- Light Blue AI Hiring Section -->
<section class="vc-form-section">
  <div class="vc-form-container">

    <h2>Academic Counselor Application</h2>
    <p class="vc-sub">Please fill all details carefully</p>

    <form class="vc-form" method="post" action="<?= base_url('home/submit') ?>" enctype="multipart/form-data">

<!-- <h2>Franchise / Academic Counselor Application</h2> -->

<!-- PERSONAL DETAILS -->
<h3>Personal Details</h3>

<div class="vc-grid">
  <div>
    <label>Title</label>
    <select name="title">
      <option>Mr</option>
      <option>Mrs</option>
      <option>Miss</option>
      <option>Ms</option>
      <option>Dr</option>
    </select>
  </div>

  <div>
    <label>Full Name</label>
    <input type="text" name="full_name">
  </div>

  <div class="full">
    <label>Address</label>
    <textarea name="address"></textarea>
  </div>

  <div>
    <label>Mobile</label>
    <input type="text" name="mobile">
  </div>

  <div>
    <label>Email</label>
    <input type="email" name="email">
  </div>

  <div>
    <label>Date of Birth</label>
    <input type="date" name="dob">
  </div>

  <div>
    <label>Gender</label>
    <select name="gender">
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>

  <div>
    <label>Marital Status</label>
    <select name="marital_status">
      <option>Yes</option>
      <option>No</option>
    </select>
  </div>
</div>

<!-- INSTITUTE DETAILS -->
<h3>Institute Details</h3>

<div class="vc-grid">
  <div>
    <label>Institute Name</label>
    <input type="text" name="institute_name">
  </div>

  <div class="full">
    <label>Office Address</label>
    <textarea name="office_address"></textarea>
  </div>

  <div>
    <label>Institute Mobile</label>
    <input type="text" name="inst_mobile">
  </div>

  <div>
    <label>Institute Email</label>
    <input type="email" name="inst_email">
  </div>
</div>

<!-- PROFESSIONAL BACKGROUND -->
<!-- <h3>Professional Background</h3>

<div class="vc-checkbox">
  <label><input type="checkbox" name="background[]" value="Marketing/Sales"> Marketing / Sales</label>
  <label><input type="checkbox" name="background[]" value="IT"> IT / Software</label>
  <label><input type="checkbox" name="background[]" value="Education"> Education / Training</label>
  <label><input type="checkbox" name="background[]" value="Business"> Business Management</label>
  <label><input type="checkbox" name="background[]" value="Other"> Other</label>
</div> -->

<!-- PROPOSED CENTER -->
<!-- <h3>Proposed Centre Details</h3>

<div class="vc-grid">
  <div>
    <label>Setup Type</label>
    <select name="setup_type">
      <option>Proprietorship</option>
      <option>Partnership</option>
      <option>Private Ltd</option>
      <option>Trust</option>
    </select>
  </div>

  <div>
    <label>Existing?</label>
    <select name="existing">
      <option>Yes</option>
      <option>No</option>
    </select>
  </div>

  <div class="full">
    <label>Proposed Centre Name</label>
    <input type="text" name="centre_name">
  </div>

  <div class="full">
    <label>Centre Address</label>
    <textarea name="centre_address"></textarea>
  </div>

  <div>
    <label>City</label>
    <input type="text" name="city">
  </div>

  <div>
    <label>State</label>
    <input type="text" name="state">
  </div>

  <div>
    <label>PIN</label>
    <input type="text" name="pin">
  </div>
</div> -->

<h3>Which other Universities you are Associated with?</h3>
<div class="vc-grid">
  <div class="full">
    <!-- <label>Centre Address</label> -->
    <textarea name="associated_university"></textarea>
  </div>
</div>

<!-- DOCUMENT CHECKLIST -->
<h3>Documents Checklist</h3>

<div class="vc-checkbox">
  <label><input type="checkbox" name="documents[]" value="Registration Certificate"> Registration Certificate </label>
  <label><input type="checkbox" name="documents[]" value="Address Proof">Resolution of Society</label>
  <label><input type="checkbox" name="documents[]" value="GST"> GST Certificate</label>
  <label><input type="checkbox" name="documents[]" value="PAN"> PAN Card</label>
  <label><input type="checkbox" name="documents[]" value="Photos"> Photos of Centre</label>
  <label><input type="checkbox" name="documents[]" value="Photos"> Current Bank Details</label>
  <label><input type="checkbox" name="documents[]" value="Photos"> Address proof</label>
</div>

<!-- IMAGE UPLOAD -->
<h3>Upload Images</h3>

<div class="vc-grid">
  <div><input type="file" name="image1"></div>
  <div><input type="file" name="image2"></div>
  <div><input type="file" name="image3"></div>
  <div><input type="file" name="image4"></div>
  <div><input type="file" name="image5"></div>
  <div><input type="file" name="image6"></div>
  <div><input type="file" name="image7"></div>
  <div><input type="file" name="image8"></div>
  <div><input type="file" name="image9"></div>
  <div><input type="file" name="image10"></div>
</div>

<br>

<button type="submit" class="vc-btn">Submit Application</button>

</form>
  </div>
</section>



  </main>

  