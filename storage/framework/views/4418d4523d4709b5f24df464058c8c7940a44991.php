<?php echo $__env->make('employees/menu_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<div class="main-panel shadow p-3 mb-5 bg-white rounded">
          <div class="content-wrapper">

<!-- Employee Category-->
  
<div class="form-group">
<h3>Employee Sign Out</h3>
<?php if($errors->any()): ?>
    <div class="alert bg-danger text-light alert-dismissible fade show" role="alert">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span><?php echo $error; ?></span>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="ik ik-x"></i>
        </button>
    </div>
    <?php endif; ?>
    <hr>
    
<div class="shadow p-3 mb-5 bg-white rounded">
<form method="post" action="<?php echo e(route('employees.sign_out_submit')); ?>">
  <?php echo csrf_field(); ?>

  
  
<div class="form-group">
    <label for="employeeName">Employee Name</label>
    <input type="text" name="employee_name" value="<?php echo e(Auth::guard('Employees')->user()->first_name); ?> <?php echo e(Auth::guard('Employees')->user()->last_name); ?>" class="form-control" readonly>
  </div>

 
  <div class="form-group">
    <label for="loan_amount">Employee ID</label>
    <input type="text" name="employee_id" value="<?php echo e($employee_id); ?>"  class="form-control"  readonly>
  
  </div>

  
  <div class="form-group">
    <label for="exampleInputPassword1">Time Out</label>
    <input type="text"  name="time_out" value="<?php echo e(date('H:i:s', strtotime($time_out))); ?>" class="form-control"  id="installments" readonly>
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Date</label>
    <input type="text" class="form-control" name="date" value="<?php echo e($current_date); ?>"  id="total" readonly>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Distance to Office</label>
    <input type="text" class="form-control" name="distance" value="<?php echo e($distance); ?>"  id="total" readonly>
  <small> Great you can log out now, you are within the office premises</small>  
</div>

  <div>
           <iframe  src="https://maps.google.com/maps?q=<?php echo e($latitude); ?>,<?php echo e($longitude); ?>&z=15&output=embed" width="100%" height="250" frameborder="0" style="border:0"></iframe>  
  </div>

  
 <br>
  <button type="submit" class="btn btn-primary">Check Out</button>

</form>
</div>
</div>
<!--End KYC Forms-->



<?php echo $__env->make('employees/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/employees/attendance/sign_out.blade.php ENDPATH**/ ?>