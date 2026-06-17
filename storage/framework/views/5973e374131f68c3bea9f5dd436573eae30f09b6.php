 
<?php $__env->startSection('content'); ?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1 style="padding-left:360px;"><i class="bi bi-table"></i> Teacher Attendance Table</h1>
          <p>Displayed data is dynamic.</p>
        </div>
      
      </div>
<span class="row" style="background:skyblue;">
<?php if(session('success')): ?>
    <div style="text-align:center;" class="pt-1">
       <h4 class="text-danger"> <?php echo e(session('success')); ?></h4>
    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="pt-1">
       <h4> <?php echo e(session('error')); ?></h4>
    </div>
<?php endif; ?>


<?php if(session('status')): ?>
    <div style="color: blue;text-align:center; " class="pt-1">
       <h4 class="text-primary"> <?php echo e(session('status')); ?></h4>
    </div>
<?php endif; ?>

</span>

<div class="row mb-3"></div>

<div class="row">

      <form action="" >
</form>

        <div class="col-md-12">
          
          <div class="tile">
            <div class="tile-body">            
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                    <th  >Name</th>
                    <th >Email</th>
                    <th >Gender</th>
                    <th >Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $attendance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td ><?php echo e($attendance->name); ?></td>
                        <td ><?php echo e($attendance->email); ?></td>
                        <td ><?php echo e($attendance->gender); ?></td>
              
                        <td ><?php echo e($attendance->created_at); ?></td> 
                     </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anshi\OneDrive\Desktop\c\1619\resources\views/admin/teacherattendanceview.blade.php ENDPATH**/ ?>