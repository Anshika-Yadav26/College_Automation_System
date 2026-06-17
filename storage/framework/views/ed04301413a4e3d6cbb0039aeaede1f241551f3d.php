
<?php $__env->startSection('content'); ?>

<main class="app-content">

<div class="container-fluid">

<div class="row my-3 ">
    <div class="col-sm-8 mx-auto  bg-light  py-4 shadow-lg">
      <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-7 
      wk-ipadp-10 line" id="i69b-2">
        <form method="post" action="<?php echo e(url ('complaint')); ?>" class="form-box">
          <?php echo csrf_field(); ?>
          <div class="row  ">
            <div class="col-sm-12"style="color:rgb(5,117,121);">
            <div class="container-block form-wrapper ">
            <div class="head-text-box">   
                <u><h1 class="text-blk contactus-head text-center">
                Complaint Box
                </h1></u>
              </div>    
            </div>
            </div>
          </div>
      
          <div class="row">
            <div class="col-sm-8 mx-auto ">
            <div class="responsive-container-block">
            <?php if(Session::has('success')): ?>
    <div style="text-align:center;" class="mt-5">
       <h4 class="alert alert-success"> <?php echo e(Session::get('success')); ?></h4>
    </div>
    <?php endif; ?>
              <div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6 mt-5" id="i10mt-6">
                <p class="text-blk input-title my-2 fw-semibold ">
                  FIRST NAME 
                </p>
                <input class="input w-100" required id="ijowk-6" name="FirstName"style="height:32px;">
                <p class="text-blk input-title my-2 fw-semibold">
                  LAST NAME 
                </p>
                <input class="input w-100" required id="ijowk-6" name="LastName"style="height:32px;"></p>
              </div>
              <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                <p class="text-blk input-title my-2 fw-semibold">
                 EMAIL 
                </p>
                <input class="input w-100" required  id="ipmgh-6" name="Email"style="height:32px;">
              </div>
              <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                <p class="text-blk input-title my-2 fw-semibold">
                  PHONE NUMBER
                </p>
                <input class="input w-100" required id="imgis-5" name="PhoneNumber"style="height:32px;">
              </div>
              <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                <p class="text-blk input-title my-2 fw-semibold">
                 SUBJECT OF COMPLAINT
                </p>
                <input class="input w-100" required  id="indfi-4" name="Subject"style="height:32px;">
              </div>
              <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-6">
                <p class="text-blk input-title my-2 fw-semibold">
                  COMPLAINT DESCRIPTION 
                </p>
                <textarea class="textinput fw-bold w-100 "style="height:130px;" required  name="EnquiryText" id="i5vyy-6" placeholder="Please enter your complaint ..."></textarea>
              </div>
            </div>
            <div class="btn-wrapper pb-4 pt-3">
              <button class="submit-btn w-100 my-3 "style=" font-size:20px;height:40px; border-color:rgb(5,117,121); background-color:rgb(5,117,121); color:white; border-radius:10px;">
                Submit
              </button>
            </div>
            </div>
          </div>
          </div>
        </form>
      </div>
    </div>
</div>

</main>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anshi\OneDrive\Desktop\c\1619\resources\views/student/complaintbox.blade.php ENDPATH**/ ?>