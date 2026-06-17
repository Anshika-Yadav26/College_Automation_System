


<?php $__env->startSection('content'); ?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1 style="padding-left:360px;"><i class="bi bi-table"></i>Complaint Table</h1>
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
		<div class="col-sm-12" >
			<div class="col-sm-8" style="float:left;">
	<input class="form-control me-2 py-2" type="search" name="search" value="<?php echo e($search); ?>" placeholder="Search By Name" aria-label="Search">
</div>
<div class="col-sm-4  mb-4" style="float:left;">	
	<button class="btn btn-outline-success bg-success text-light ms-3" type="submit">Search</button>
	<a href="<?php echo e(route('viewcomplaint')); ?>">
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
                  <thead>
                    <tr>
                    <th >Serial No</th>
                    <th >First Name</th>
                    <th >Last Name</th>
                    <th >Email</th>
                    <th >PhoneNumber</th>
                    <th >Subject</th>
                    <th >Enquirytext</th>
                    <th >Date</th>
<th></th>
                    </tr>
                  </thead>
                  <tbody>
       
                  <?php $__currentLoopData = $complain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr >

               <td><?php echo e($value->serialNo); ?></td>
 
               <td ><?php echo e($value->FirstName); ?></td>
                    <td ><?php echo e($value->LastName); ?></td>
                        <td ><?php echo e($value->Email); ?></td>
                        <td ><?php echo e($value->PhoneNumber); ?></td>
                        <td ><?php echo e($value ->Subject); ?></td>
                        <td ><?php echo e($value->EnquiryText); ?></td>
                        <td ><?php echo e($value->created_at); ?></td>  
                        <td>
				<a href="<?php echo e(route('complaintdelete',['id'=>$value->serialNo])); ?>">	
				<button class="btn btn-danger">Delete</button>
				</a>
</td>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anshi\OneDrive\Desktop\c\1619\resources\views/admin/viewcomplaint.blade.php ENDPATH**/ ?>