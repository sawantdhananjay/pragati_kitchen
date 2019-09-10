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
        <h4>SHOWROOM : </h4>
        <p>1082/1, Shop No. B-7 'Omkar Plaza' Near ICICI Bank, Below Karnataka bank, Rajaram Road, Bagal Chowk, Kolhapur - 416001</p>
        <br>
        <h4>WORKSHOP : </h4>
        <p>1228/32, Y. P. Powar Nagar, Opp.Rajesh Granite Kolhapur - 416008.</p>
        <br>
        <h4>Contact No : </h4>
        <p class="contact-mob-h d-none d-sm-block"><i class="fa fa-mobile mr-2" aria-hidden="true"></i>+91 9822592823 <span class="ml-5 m-b"><i class="fa fa-mobile mr-2" aria-hidden="true"></i>+91 9922949770</span> </p>
        <div class="con-mob d-block d-sm-none">
          <p><i class="fa fa-mobile mr-2" aria-hidden="true"></i>+91 9822592823</p>
          <p><i class="fa fa-mobile mr-2" aria-hidden="true"></i>+91 9922949770</p>
        </div>
        <br>
        <h4>Email Id : </h4>
        <p><i class="fa fa-envelope-o mr-2" aria-hidden="true"></i>info@pragatikitchen.com</p>
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
