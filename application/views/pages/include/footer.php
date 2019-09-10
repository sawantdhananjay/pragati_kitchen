
  <footer>
    <!-- <div class="float-sm">
  <div class="fl-fl float-fb">
    <i class="fa fa-facebook"></i>
    <a href="" target="_blank"> Like us!</a>
  </div>
  <div class="fl-fl float-tw">
    <i class="fa fa-twitter"></i>
    <a href="" target="_blank">Follow us!</a>
  </div>
  <div class="fl-fl float-gp">
    <i class="fa fa-google-plus"></i>
    <a href="" target="_blank">Recommend us!</a>
  </div>
  <div class="fl-fl float-rs">
    <i class="fa fa-rss"></i>
    <a href="" target="_blank">Follow via RSS</a>
  </div>
  <div class="fl-fl float-ig">
    <i class="fa fa-instagram"></i>
    <a href="" target="_blank">Follow us!</a>
  </div>
  <div class="fl-fl float-pn">
    <i class="fa fa-pinterest"></i>
    <a href="" target="_blank">Follow us!</a>
  </div>
</div> -->
<!-- Floating Social Media bar Ends -->
    <div class="container-fluid" id="footer">
      <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h6 class="text-uppercase">Showroom : </h6>
          <p class="contact-footer mob-cen">
             1082/1, Shop No. B-7 'Omkar Plaza' Near ICICI Bank,
            Below Karnataka bank, Rajaram Road, Bagal Chowk, Kolhapur - 416001
          </p>
          <h6 class="text-uppercase ">Workshop : </h6>
          <p class="contact-footer mob-cen">
             1228/32, Y. P. Powar Nagar,
             Opp.Rajesh Granite Kolhapur - 416008.
          </p>
        </div>
        <div class="col-md-3 col-6">
          <h6 class="text-uppercase">Quick links : </h6>
              <p class="link-footer"><a href="<?php echo base_url(); ?>">Home</a></p>
              <p class="link-footer"><a href="<?php echo base_url(); ?>About-Us">About Us</a></p>
              <p class="link-footer"><a href="<?php echo base_url(); ?>Gallery">Gallery</a></p>
              <p class="link-footer"><a href="<?php echo base_url(); ?>Contact">Contact Us</a></p>
        </div>
        <div class="col-md-2 col-6">
          <h6 class="text-uppercase">Social links : </h6>
              <p class="link-footer"><a href="<?php echo base_url(); ?>">Facebook</a></p>
              <p class="link-footer"><a href="<?php echo base_url(); ?>">Whats Up</a></p>
              <p class="link-footer"><a href="<?php echo base_url(); ?>">Google +</a></p>
              <p class="link-footer"><a href="<?php echo base_url(); ?>">Twitter</a></p>
        </div>
        <div class="col-md-3 col-12">
          <h6 class="text-uppercase">Contact : </h6>
              <p><i class="fa fa-mobile mr-2" aria-hidden="true"></i> +91 9822592823</p>
              <p><i class="fa fa-mobile mr-2" aria-hidden="true"></i>+91 9922949770</p>
              <p><i class="fa fa-envelope-o mr-2" aria-hidden="true"></i>info@pragatikitchen.com</p>
        </div>
      </div>
    </div>
      </div>
      <div class="container-fluid" id="footer-copyright">
        <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="last-foot"> <p> © 2019 Copyright :
        <a href="#" > Pragati Kitchen Pvt. Ltd. <span class="footer-copyright">All rights reserved.</span> </a></p>
      </div>
          </div>
    </div>
  </div>

      </div>


    </footer>
    <a href="#" id="go-top" class="go-top" >
<i class="">
  <svg style="width:25px; padding-bottom:0px;"  viewBox="0 0 320 512"><path fill="currentColor" d="M168.5 164.2l148 146.8c4.7 4.7 4.7 12.3 0 17l-19.8 19.8c-4.7 4.7-12.3 4.7-17 0L160 229.3 40.3 347.8c-4.7 4.7-12.3 4.7-17 0L3.5 328c-4.7-4.7-4.7-12.3 0-17l148-146.8c4.7-4.7 12.3-4.7 17 0z" class=""></path></svg>
</i>
</a>
  <script type="text/javascript">
  $('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:4
      }
  }
})
  </script>

  <script>
  AOS.init();
</script>
<script type="text/javascript">
$(document).ready(function() {
    // grab the initial top offset of the navigation
      var stickyNavTop = $('.stick').offset().top;

      // our function that decides weather the navigation bar should have "fixed" css position or not.
      var stickyNav = function(){
        var scrollTop = $(window).scrollTop(); // our current vertical position from the top
        // var width = $(document).width();
        // var rem = width-1100;
        // var left = rem/2;
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative
        if (scrollTop > stickyNavTop) {
            $('.stick').addClass('sticky');
            // $('.stick').css("left", +left);
        } else {
            $('.stick').removeClass('sticky');
            // $('.stick').css("left", 0);
        }
    };

    stickyNav();
    // and run it again every time you scroll
    $(window).scroll(function() {
      stickyNav();
    });
  });
</script>

<script type="text/javascript">
$(document).scroll(function() {
go_top();
});
// Show go top on scroll
function go_top(){
if( $(document).scrollTop() > 200 ) {
  $('#go-top').fadeIn();
} else {
  $('#go-top').fadeOut();
}
}

// Go to top..
$('#go-top').on( "click", function() {
  $('html, body').animate({scrollTop: 0});
  return false;
});
</script>

<?php if($this->session->flashdata("contact_status")){
      $contact_status = $this->session->flashdata("contact_status");
    ?>
    <input type="hidden" id="contact_status" name="contact_status" value="<?php echo $contact_status; ?>">
    <script>
      $('document').ready(function(){
        function myFunction() {
          var contact_status = $('#contact_status').val();
          if(contact_status == 'email_success'){
            $(".alert-success").show().delay(3000).fadeOut();
          }
          else{
              $(".alert-danger").show().delay(3000).fadeOut();
          }
        }
        myFunction();
      });
    </script>
    <?php } ?>
  </body>
</html>
