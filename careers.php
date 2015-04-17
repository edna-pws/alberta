 <?php include('includes/header.php'); ?>

  <div class="banner banner-careers">
    <div class="container">
      <div class="banner-caption">
        <h1 class="banner-title">Looking for IT Professionals</h1>
        <p class="banner-intro">Discover Your Future With Us!</p>
      </div>
    </div>
  </div>

  <div class="section section-careers">
    <div class="container">
      <form class="form-careers">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="firstname">First Name<span>*</span></label>
                  <input type="text" class="form-control" id="firstname" placeholder="First Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lastname">Last Name<span>*</span></label>
                  <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="city">City<span>*</span></label>
              <input type="text" class="form-control" id="city" placeholder="City">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="province">Province<span>*</span></label>
                  <input type="text" class="form-control" id="province" placeholder="Province">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="postal-code">Postal Code<span>*</span></label>
                  <input type="text" class="form-control" id="postal-code" placeholder="Postal Code">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email Address<span>*</span></label>
              <input type="email" class="form-control" id="email" placeholder="Email Address">
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="text" class="form-control" id="phone" placeholder="Phone Number">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="expertise">Area of Expertise<span>*</span></label>
              <input type="text" class="form-control" id="expertise" placeholder="Area of Expertise">
            </div>
            <div class="form-group">
              <label for="job-title">Job Posting Title<span>*</span></label>
              <input type="text" class="form-control" id="job-title" placeholder="Job Posting Title">
            </div>
            <div class="form-group">
              <label for="job-posting">Where did you see this job posting?</label>
              <input type="text" class="form-control" id="job-posting" placeholder="Write here...">
            </div>
            <div class="form-group">
              <label for="captcha">Captcha</label>
              <div class="row">
                <div class="col-md-4">
                  <img class="captcha" src="images/captcha.jpg" alt="captcha">
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="captcha" placeholder="Enter the words above">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="resume">Attach Resume: (.doc, .docx, .pdf)</label>
              <input type="file" id="resume">
            </div>
          </div>  
        </div>

        <button type="submit" class="btn btn-primary text-uppercase center-block">Submit Resume</button>
      </form>
    </div><!-- /.container -->
  </div><!-- /.section-contact -->
  
<?php include('includes/footer.php'); ?>