<?php echo $__env->make('employees/menu_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<div class="main-panel shadow p-3 mb-5 bg-white rounded">
          <div class="content-wrapper">

<!-- Employee Category-->
  
<div class="form-group">
<h3>Employee Loans</h3>
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
<form method="post" action="<?php echo e(route('employees.kyc_cashadvance_details_submit')); ?>" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>

  <div class="form-group">
    <label for="employeeName">Title</label>
    <input type="text" name="title" placeholder="Some reason for a loan" class="form-control" >
  </div>

  
<div class="form-group">
    <label for="employeeName">Employee Name</label>
    <input type="text" name="employee_name" value="<?php echo e(Auth::guard('Employees')->user()->first_name); ?> <?php echo e(Auth::guard('Employees')->user()->last_name); ?>" class="form-control" readonly>
  </div>

 
  
  <div class="form-group">
    <label for="loan_amount">Loan Amount (ZMW)</label>
    <input type="number" name="employee_loan_amount" onkeyup="calculateEMI()" value="<?php echo e(old('employee_loan_amount')); ?>"  class="form-control"  id="amount" required>
  
  </div>

  
  <div class="form-group">
    <label for="exampleInputPassword1">Duration (Months)</label>
    <input type="number"  onkeyup="calculateEMI()" name="employee_duration" value="<?php echo e(old('employee_duration')); ?>" class="form-control"  id="installments" required>
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Total Repayments (ZMW)</label>
    <input type="text" class="form-control" name="employee_total_repayment" value="<?php echo e(old('employee_total_repayment')); ?>"  id="total" readonly>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Monthly Payments (ZMW)</label>
    <input type="text" name="employee_monthly" class="form-control" value="<?php echo e(old('employee_monthly')); ?>" name id="monthly" readonly>
  </div>

  <div class="form-group">
    <label for="employeeName">Date</label>
    <input type="date" name="date"  class="form-control" >
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
</div>
<!--End KYC Forms-->


<script>

  function calculateEMI() {


   

             var installments = document.getElementById('installments').value;
            if (!installments)
                installments = '0';


                var loan_amount =document.getElementById('amount').value;
            if (!loan_amount)
                loan_amount = '0';
                
                
                             


            var loan_amount = parseFloat(loan_amount);
            var loan_percent = 0;
            var installments = parseFloat(installments);
           
            

            
            



var total = (loan_amount)+((loan_amount)*(loan_percent/100)*installments);
 document.getElementById('total').value = parseFloat(total).toFixed(2);
 document.getElementById('monthly').value = parseFloat((total/installments)).toFixed(2);
 
           
        }
      </script>
<?php echo $__env->make('employees/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/employees/cashadvance/loans.blade.php ENDPATH**/ ?>