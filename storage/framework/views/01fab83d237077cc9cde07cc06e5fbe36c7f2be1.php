

<?php $__env->startSection('content'); ?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1 style="padding-left:360px;"><i class="bi bi-table"></i> Student Attendance Table</h1>
          <p>Displayed data is dynamic.</p>
        </div>
      
      </div>
<span class="row" >
<?php if(session('success')): ?>
    <div style="text-align:center;" >
       <h4 class="alert alert-danger"> <?php echo e(session('success')); ?></h4>
    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="pt-1">
       <h4> <?php echo e(session('error')); ?></h4>
    </div>
<?php endif; ?>


<?php if(session('status')): ?>
    <div style="text-align:center; ">
       <h4 class="alert alert-primary"> <?php echo e(session('status')); ?></h4>
    </div>
<?php endif; ?>

</span>

<div class="row mb-3"></div>

<div class="row">

      <form action="" >
		<div class="col-sm-12" >
			<div class="col-sm-8" style="float:left;">
	<input class="form-control me-2 py-2" type="search" name="search" value="<?php echo e($search); ?>" placeholder="Search By Name" aria-label="Search">
</div>
<div class="col-sm-4  mb-4" style="float:left;">	
	<button class="btn btn-outline-success bg-success text-light ms-3" type="submit">Search</button>
	<a href="<?php echo e(('/attendance/view')); ?>">
	<button name="reset" type="button" class="btn btn-outline-success bg-secondary text-light ms-2">Reset</button>
</a>	
</div>	
</div>	
</form>

        <div class="col-md-12">
          
          <div class="tile">
            <div class="tile-body">            
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                
                <thead >
                    <th  >Name</th>
                    <th >Email</th>
                    <th >Subject</th>
                    <th >Branch</th>
                    <th >Sem</th>
                    <th >Date</th>
                </thead>
                <tbody >
                    <?php $__currentLoopData = $attends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attends): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                   
                    <tr >
                        <td ><?php echo e($attends->name); ?></td>
                        <td ><?php echo e($attends->email); ?></td>
                        <td ><?php echo e($attends ->subject); ?></td>
                        <td ><?php echo e($attends->branch); ?></td>
                        <td ><?php echo e($attends->sem); ?></td>
                        <td ><?php echo e($attends->created_at); ?></td>  
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
   






<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anshi\OneDrive\Desktop\c\1619\resources\views/admin/studAttendance.blade.php ENDPATH**/ ?>