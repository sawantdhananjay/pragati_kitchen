<?php include('include/header.php'); ?>

<!-- carousel start -->

<div class="container-fluid">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/banner/01.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/banner/02.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/banner/03.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- carousel ends -->

<div class="container">
  <div class="types">
  <div class="row">
      <div class="col-md-6">
        <h2>MODERN KITCHENS</h2>
        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.leap into electronic typesetting, remaining essentially unchanged. </p>
        <div data-aos="fade-right">
        <a href="#" class="btn btn-kitchen btn-primary btn-lg " role="button" aria-pressed="true">Primary link</a>
        </div>
      </div>
      <div class="col-md-6">
        <div data-aos="fade-left">
        <img src="<?php echo base_url(); ?>assets/images/types1.jpg" alt="">
        </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
        <div data-aos="fade-right">
        <img src="<?php echo base_url(); ?>assets/images/types2.jpg" alt="">
      </div>
      </div>
      <div class="col-md-6">
        <h2>MODERN KITCHENS</h2>
        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.leap into electronic typesetting, remaining essentially unchanged. </p>
          <div data-aos="fade-left">
          <a href="#" class="btn btn-primary btn-kitchen btn-lg " role="button" aria-pressed="true">Primary link</a>
        </div>
      </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <h2>MODERN KITCHENS</h2>
      <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.leap into electronic typesetting, remaining essentially unchanged. </p>
        <div data-aos="fade-right">
        <a href="#" class="btn btn-primary btn-kitchen btn-lg" role="button" aria-pressed="true">Primary link</a>
      </div>
    </div>
      <div class="col-md-6">
        <div data-aos="fade-left">
        <img src="<?php echo base_url(); ?>assets/images/types3.jpg" alt="">
      </div>
      </div>
  </div>
</div>
</div>

<div class="container-fluid" id="happy-clients">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="box">
          <div data-aos="fade-right" data-aos-duration="2000">
          <div class="img-box">
            <img src="<?php echo base_url() ?>assets/images/svg/01.svg" alt="">
          </div>
          <div class="service-content">
            <h3>10000 + Kitchens Delivered</h3>
            <!-- <p>Well Equipped Foundry. World class manufacturer of high quality cast products.</p> -->
          </div>
        </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="box">
          <div data-aos="fade-down" data-aos-duration="2000">
          <div class="img-box">
            <img src="<?php echo base_url() ?>assets/images/svg/01.svg" alt="">
          </div>
          </div>
          <div data-aos="fade-up" data-aos-duration="2000">
          <div class="service-content">
            <h3>20 years Of Design Excellence</h3>
            <!-- <p>Well Equipped Foundry. World class manufacturer of high quality cast products.</p> -->
          </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="box">
          <div data-aos="fade-down" data-aos-duration="2000">
          <div class="img-box">
            <img src="<?php echo base_url() ?>assets/images/svg/01.svg" alt="">
          </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="2000">
          <div class="service-content">
            <h3>20,000 + Sq.Ft. Area on display</h3>
            <!-- <p>Well Equipped Foundry. World class manufacturer of high quality cast products.</p> -->
          </div>
        </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="box">
          <div data-aos="fade-left"  data-aos-duration="2000">
          <div class="img-box">
            <img src="<?php echo base_url() ?>assets/images/svg/01.svg" alt="">
          </div>
          <div class="service-content">
            <h3>14000 + Happy Customers</h3>
            <!-- <p>Well Equipped Foundry. World class manufacturer of high quality cast products.</p> -->
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="home-gallery">
    <div class="row">
      <div class="col-md-12">
        <h2>GALLERY</h2>
      </div>
      <div class="owl-carousel owl-theme">
        <div class="item">  <img src="<?php echo base_url() ?>assets/images/gallery/gal01.jpg" alt=""></div>
        <div class="item">  <img src="<?php echo base_url() ?>assets/images/gallery/gal02.jpg" alt=""></div>
        <div class="item">  <img src="<?php echo base_url() ?>assets/images/gallery/gal03.jpg" alt=""></div>
        <div class="item">  <img src="<?php echo base_url() ?>assets/images/gallery/gal04.jpg" alt=""></div>
        <div class="item">  <img src="<?php echo base_url() ?>assets/images/gallery/gal05.jpg" alt=""></div>
        <div class="item">  <img src="<?php echo base_url() ?>assets/images/gallery/gal06.jpg" alt=""></div>
        <div class="item">  <img src="<?php echo base_url() ?>assets/images/gallery/gal04.jpg" alt=""></div>
        <div class="item">  <img src="<?php echo base_url() ?>assets/images/gallery/gal02.jpg" alt=""></div>

    </div>
    <div class="col-md-12 text-center">
      <a href="#" class="btn btn-primary btn-kitchen btn-lg" role="button" aria-pressed="true">See More Work</a>
    </div>
    </div>
  </div>
</div>

<div class="container-fluid" id="speciality">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h1>Why Pragati Kitchen</h1>
      </div>
      <div class="col-md-3">
            <img src="<?php echo base_url() ?>assets/images/svg/01.svg" alt="">
      </div>
      <div class="col-md-3">
            <img src="<?php echo base_url() ?>assets/images/svg/01.svg" alt="">
      </div>
      <div class="col-md-3">
            <img src="<?php echo base_url() ?>assets/images/svg/01.svg" alt="">
      </div>
      <div class="col-md-3">
            <img src="<?php echo base_url() ?>assets/images/svg/01.svg" alt="">
      </div>
      </div>

    <div class="row">
      <div class="col-md-3">
            <img src="<?php echo base_url() ?>assets/images/svg/01.svg" alt="">
      </div>
      <div class="col-md-3">
            <img src="<?php echo base_url() ?>assets/images/svg/01.svg" alt="">
      </div>
      <div class="col-md-3">
            <img src="<?php echo base_url() ?>assets/images/svg/01.svg" alt="">
      </div>
      <div class="col-md-3">
            <img src="<?php echo base_url() ?>assets/images/svg/01.svg" alt="">
      </div>
      </div>
    </div>
  </div>



<div class="container">
    <div class="process">
        <div class="row align-items-center h-100">
          <div class="col-md-12">
          <h1>Our Process</h1>
          </div>
          <div class="col-md-6 justify-content-center">
            <div data-aos="fade-right" data-aos-duration="3000">
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
              voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
          </div>
          </div>
          <div class="col-md-6">
            <div data-aos="fade-left" data-aos-duration="3000">
            <img src="<?php echo base_url() ?>assets/images/process_img.jpg" alt="">
          </div>

          </div>
        </div>
    </div>
</div>
<hr>
<div class="container">
  <div class="testomonial">
    <div class="row">
      <div class="col-md-12">
    <h1>WHAT CLIENTS SAY</h1>
      </div>
    </div>
    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators carousel-indicators--round">
    <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner text-center">
    <div class="carousel-item active">
      <div class="card" style="width: 40rem;">
    <img class="card-img-top" src="<?php echo base_url() ?>assets/images/testo1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

    </div>
  </div>
    </div>
    <div class="carousel-item">
      <div class="card" style="width: 40rem;">
    <img class="card-img-top" src="<?php echo base_url() ?>assets/images/testo2.jpeg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

    </div>
  </div>
    </div>
    <div class="carousel-item">
      <div class="card" style="width: 40rem;">
    <img class="card-img-top" src="<?php echo base_url() ?>assets/images/testo3.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

    </div>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
</div>


<div class="container-fluid">
  <div class="parallex">
      <h5>Some quick example text to build on the card title and make up the bulk of the card's content.</h5>
  </div>
</div>

<?php include('include/footer.php'); ?>
