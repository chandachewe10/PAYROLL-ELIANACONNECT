<?php echo $__env->make('employees/menu_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

<div class="main-panel shadow p-3 mb-5 bg-white rounded">
          <div class="content-wrapper">


<h4>Download Payslips</h4>
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
<form action="<?php echo e(route('employees.payslip_details_submit')); ?>" method="POST" id="createEmployee">
                    <?php echo csrf_field(); ?>
                  
                      <div class="col-md-4 col-lg-4 col-sm-12">
                        <div class="form-group">
                          <label for="gender">Year </label><small class="text-danger">*</small>
                          <select class="form-control" id="gender" name="year">
                            <option value="" selected value disabled>-- Select Year --</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            
                            
                          </select>
                          <small class="text-danger err" id="year-err"></small>
                        </div>
                      </div>


                      <div class="col-md-4 col-lg-4 col-sm-12">
                        <div class="form-group">
                          <label for="gender">Month </label><small class="text-danger">*</small>
                          <select class="form-control" id="gender" name="month">
                            <option value="" selected value disabled>-- Select Month --</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>

                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                          
                            
                            
                          </select>
                          <small class="text-danger err" id="month-err"></small>
                        </div>                        
                      </div>


                      <div class="col-md-4 col-lg-4 col-sm-12">
                        <div class="form-group">




                     
  <input class="form-check-input" type="checkbox" name="share_to_my_email" value="<?php echo e(Auth::guard('Employees')->user()->employee_email); ?>" id="share">
  <label class="form-check-label" for="shareToMyEmail">
    Share to My Email
  </label>
</div>

</div>
                  

                      <button type="submit" class="btn btn-primary">Download <i class="fa fa-download mdi-24px float-right"></i></button>  
                </form>
           <br><br>
</div>






<?php echo $__env->make('employees/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/employees/payslips/download.blade.php ENDPATH**/ ?>