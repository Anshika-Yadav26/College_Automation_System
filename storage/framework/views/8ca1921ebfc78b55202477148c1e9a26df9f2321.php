
<?php $__env->startSection('content'); ?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1 style="padding-left:360px;"><i class="bi bi-table"></i> Enquiry Table</h1>
          <p>Displayed data is dynamic.</p>
        </div>
      
      </div>

<?php if(session('success')): ?>
    <div style="text-align:center;">
       <h4 class="alert alert-success"> <?php echo e(session('success')); ?></h4>
    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div>
       <h4 class="alert alert-danger"> <?php echo e(session('error')); ?></h4>
    </div>
<?php endif; ?>



<div class="row">

      <form action="" >
		<div class="col-sm-12" >
			<div class="col-sm-8" style="float:left;">
	<input class="form-control me-2 py-2" type="search" name="search" value="<?php echo e($search); ?>" placeholder="Search By Name" aria-label="Search">
</div>
<div class="col-sm-4  mb-4" style="float:left;">	
	<button class="btn btn-outline-success bg-success text-light ms-3" type="submit">Search</button>
	<a href="<?php echo e(route('viewenquiry')); ?>">
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
						<th>Serial No.</th>
						<th>First Name</th>
						<th>Last Name.</th>
						<th>Email</th>
						<th>Phone Number</th>
						<th>Enquiry Text</th>
<th></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $enquiry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enquiry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($enquiry->serialNo); ?></td>
				<td><?php echo e($enquiry->FirstName); ?></td>
				<td><?php echo e($enquiry->LastName); ?></td>
				<td><?php echo e($enquiry->Email); ?></td>
				<td><?php echo e($enquiry->PhoneNumber); ?></td>
				<td><?php echo e($enquiry->EnquiryText); ?></td>
				<td>
				<a href="<?php echo e(route('enquirydelete',['id'=>$enquiry->serialNo])); ?>">	
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
   
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anshi\OneDrive\Desktop\c\1619\resources\views/admin/viewenquiry.blade.php ENDPATH**/ ?>