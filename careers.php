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
              <select class="form-control" id="expertise">
                <option>- Click Here -</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
            <div class="form-group">
              <label for="job-title">Job Posting Title<span>*</span></label>
              <select class="form-control" id="job-title">
                <option>- Click Here -</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
            <div class="form-group">
              <label for="job-posting">Where did you see this job posting?</label>
              <input type="text" class="form-control" id="job-posting" placeholder="Write here...">
            </div>
          </div>  
        </div>

        <button type="submit" class="btn btn-primary text-uppercase center-block">Submit Resume</button>
      </form>
    </div><!-- /.container -->
  </div><!-- /.section-contact -->
  
<?php include('includes/footer.php'); ?>