


<?php $__env->startSection('content'); ?>

<?php if(Session::has('success')): ?>
    <div style="text-align:center;" class="mt-5">
       <h4 class="alert alert-success"> <?php echo e(Session::get('success')); ?></h4>
    </div>
<?php endif; ?>


<div class="contact_us_green">
  <div class="responsive-container-block big-container">
    <div class="responsive-container-block container">

    <div class="col-sm-7">
      <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-7 wk-ipadp-10 line" id="i69b-2">
        <form method="post" action="<?php echo e(route('enquiries')); ?>" class="form-box">
          <?php echo csrf_field(); ?>
          <div class="container-block form-wrapper">
            <div class="head-text-box">
              <p class="text-blk contactus-head">
                Contact us
              </p>
              <!-- <p class="text-blk contactus-subhead">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna al iqua. Ut enim
              </p> -->
            </div>
            <div class="responsive-container-block">
              <div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6" id="i10mt-6">
                <p class="text-blk input-title">
                  FIRST NAME
                </p>
                <input class="input" required id="ijowk-6" name="FirstName">
              </div>
              <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                <p class="text-blk input-title">
                  LAST NAME
                </p>
                <input class="input" required  id="indfi-4" name="LastName">
              </div>
              <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                <p class="text-blk input-title">
                  EMAIL
                </p>
                <input class="input" required  id="ipmgh-6" name="Email">
              </div>
              <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                <p class="text-blk input-title">
                  PHONE NUMBER
                </p>
                <input class="input" required id="imgis-5" name="PhoneNumber">
              </div>
              <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-6">
                <p class="text-blk input-title">
                  WHAT DO YOU HAVE IN MIND
                </p>
                <textarea class="textinput fw-bold" required  name="EnquiryText" id="i5vyy-6" placeholder="Please enter query..."></textarea>
              </div>
            </div>
            <div class="btn-wrapper">
              <button class="submit-btn">
                Submit
              </button>
            </div>
          </div>
        </form>

      </div>

      </div>


      <div class="col-sm-4">

       <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-5 wk-ipadp-10" id="ifgi" >
        <div class="container-box">
          <div class="text-content">
            <p class="text-blk contactus-head" style="color: rgb(5,117,121); padding-left:55px;">
              Contact us
            </p>
            <p class="text-blk contactus-subhead fw-bold">
              only message
        Absolutely! Here's a simple and friendly message you can use:

        Thank you for reaching out to us! We value your feedback and will get back to you as soon as possible. Please feel free to leave us a message below, and let us know how we can assist you.
            </p>
          </div>
          <div class="workik-contact-bigbox">
            <div class="workik-contact-box">
              
              <div class="mail text-box">
                <i class="fa-solid fa-envelope fs-2 fa-fade up" style="color: rgb(5,117,121); padding-left:13px;" ></i> 
                <p class="contact-text ms-3 fw-bold">
                 fgp@123gmail.com
                </p>
              </div>
              <div class="phone text-box">
                <i class="fa-solid fa-phone  fa-shake fs-3"  style="color: rgb(5,117,121); padding-left:13px;" ></i> 
                <p class="contact-text ms-3 fw-bold">
                  +1258 3258 5679
                </p>
              </div>
              <div class="mail text-box">
                <i class="fa-solid fa-location-dot fs-2 fa-fade down"  style="color: rgb(5,117,121); padding-left:13px;"  ></i> 

                <p class="contact-text ms-3 fw-bold">
                  102 street, y cross 485656
                </p>
              </div>
            </div>
            <div class="social-media-links">
              <a href="#">
                <i class="fa-brands  fa-youtube fs-3" style="color: red;"></i>
              </a>
              <a href="#">
                <i class="fa-brands fa-twitter fs-3" style="color: skyblue;"></i>
              </a>
              <a href="#">
                <i class="fa-brands fa-instagram fs-3 " style="color: rgb(242, 17, 137);"></i>
              </a>
              <a href="#">
                <i class="fa-brands fa-facebook fs-3" style="color: rgb(43, 25, 144);"></i>
              </a>
            </div>
          </div>
        </div>
       </div>
      </div>

    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anshi\OneDrive\Desktop\c\1619\resources\views//enquiry.blade.php ENDPATH**/ ?>