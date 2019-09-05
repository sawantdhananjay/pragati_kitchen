<?php
$page="about";
include('include/header.php'); ?>

  <div class="about-page">
  <div class="container-fluid">

    <div class="parallex-about">

    </div>
  </div>
    <div class="container" id="about">
      <div class="row">
        <div class="col-md-6">
          <h2>PRAGATI KITCHEN</h2>
          <h4> A expertise company in modular kitchen and appliences in Kolhapur</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.leap into electronic typesetting, remaining essentially unchanged. </p>
            <a href="<?php echo base_url(); ?>Contact" class="btn btn-primary btn-kitchen btn-lg" role="button" aria-pressed="true">Contact Us</a>
        </div>
          <div class="col-md-6">
            <img class="about-page-img" src="<?php echo base_url(); ?>assets/images/modular_bb01.jpg" alt="">
          </div>
      </div>
    </div>

    <div class="container-fluid" id="about-middle">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>WHY CHOOSE US</h2>
          </div>
          <div class="col-md-4 left">
            <h4>Customized Kitchen Solutions</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost</p>
            <div class="d-block d-sm-none">
              <img src="<?php echo base_url(); ?>assets/images/svg/custom01.svg" alt="">
            </div>
            <br><br>
            <h4>Easy installation</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost</p>
            <div class="d-block d-sm-none">
              <img src="<?php echo base_url(); ?>assets/images/svg/custom02.svg" alt="">
            </div>
          </div>
          <div class="col-md-2 d-none d-sm-block">
            <img src="<?php echo base_url(); ?>assets/images/svg/custom01.svg" alt="">
            <br>
            <img src="<?php echo base_url(); ?>assets/images/svg/custom02.svg" alt="">
          </div>
          <div class="col-md-2 d-none d-sm-block">
            <img src="<?php echo base_url(); ?>assets/images/svg/delivery.svg" alt="">
            <br>
            <img src="<?php echo base_url(); ?>assets/images/svg/quality.svg" alt="">
          </div>
          <div class="col-md-4 right">
            <h4>Timely Delivery</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost</p>
            <div class="d-block d-sm-none">
              <img src="<?php echo base_url(); ?>assets/images/svg/delivery.svg" alt="">
            </div>
            <br><br>
            <h4>Trusted Quality</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost</p>
            <div class="d-block d-sm-none">
              <img src="<?php echo base_url(); ?>assets/images/svg/quality.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
</div>



<?php include('include/footer.php'); ?>
