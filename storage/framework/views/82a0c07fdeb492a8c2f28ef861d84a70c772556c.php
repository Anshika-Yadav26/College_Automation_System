<?php $__env->startSection('content'); ?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1 style="padding-left:360px;color:brown;"><i class="bi bi-speedometer"></i>Admin Dashboard</h1>
          <p></p>
        </div>
        
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 ">
          <div class="widget-small primary coloured-icon"><i class="icon bi bi-people fs-1"></i>
            <div class="info py-4 text-center">
              <h4><a href="<?php echo e(('/stdview')); ?>" style="text-decoration:none;color:black;">Students</a></h4>
              <p><b><?php echo e(($studentCount)); ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon bi bi-laptop fs-1"></i>
            <div class="info  py-4 text-center">
              <h4><a href="<?php echo e(('/teacherview')); ?>" style="text-decoration:none;color:black;">Teachers</a></h4>
              <p><b><?php echo e(($teacherCount)); ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon bi bi-people fs-1"></i>
            <div class="info  py-4 text-center">
              <h4><a href="<?php echo e(('/parentview')); ?>" style="text-decoration:none;color:black;">Parents</a></h4>
              <p><b><?php echo e(($parentCount)); ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon bi bi-laptop fs-1"></i>
            <div class="info  py-4 text-center">
              <h4><a href="<?php echo e(('/viewenquiry')); ?>" style="text-decoration:none;color:black;">Enquiries</a></h4>
              <p><b><?php echo e(($enquiryCount)); ?></b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Graph</h3>
            <div class="ratio ratio-16x9">
              <div id="salesChart"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">~
          <div class="tile">
            <h3 class="tile-title">Support Requests</h3>
            <div class="ratio ratio-16x9">
              <div id="supportRequestChart"></div>
            </div>
          </div>
        </div>
      </div>
    </main>
    

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anshi\OneDrive\Desktop\c\1619\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>