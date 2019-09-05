<?php
$page="contact";
include('include/header.php'); ?>
<div class="contact-page">
  <div class="container-fluid">
    <div class="parallex-contact">
    </div>
  </div>

  <div class="container" id="contact">
    <div class="row">
      <div class="col-md-12">
        <h2>Get In Touch with Us</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6" id="contact-left">
        <h4>Office</h4>
        <p>Plot No. 11, Building No. 12, Y. P. Powar Nagar, Kolhapur - 416008. Maharashtra State (India).</p>
        <br>
        <h4>Contact No.</h4>
        <p>987 654 1310</p>
        <br>
        <h4>Email Id</h4>
        <p>abc@pragatikitchen.com</p>
      </div>
      <div class="col-md-6" id="contact-right">
        <form action="<?php echo base_url(); ?>Kitchen_controller/send_feedback" method="post" id="contact_form">
          <h3>Send Mail</h3>
          <div class="alert alert-success text-center" role="alert">
            <h5>Mail sent successfully. We Will contact you soon.</h5>
          </div>
          <div class="alert alert-danger text-center" role="alert">
          <h5>"oops an error occurred" Please try again later.</h5>
          </div>
          <div class="form-group">
            <input type="text" class="form-control"  id="name" name="name" required  placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="number" class="form-control mob " id="mobile" name="mobile" required placeholder="Mobile No.">
          </div>
          <div class="form-group">
            <input type="email" id="email" name="email" class="form-control " required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <textarea class="form-control" id="message" name="message" placeholder="Write Your Message..." rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary  btn-kitchen btn-lg btn-block">Submit</button>
          </form>
      </div>
    </div>
  </div>
</div>
<?php include('include/footer.php'); ?>
