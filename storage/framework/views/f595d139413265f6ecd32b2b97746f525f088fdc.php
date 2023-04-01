<?php $__env->startSection('title'); ?> <?php echo e($cashadvance->title); ?> - Edit Cash Advance <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style type="text/css">
    .overflow-visible{
        overflow: visible !important;
    }
    .modal-sm{
      width: auto;
      max-width: 356px !important;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="page-header">
  <div class="row align-items-end">
     <div class="col-lg-6">
        <div class="page-header-title">
           <i class="ik ik-at-sign bg-blue"></i>
           <div class="d-inline">
              <h5>Staff</h5>
              <span>Edit Staff, Please fill all field correctly.</span>
          </div>
      </div>
  </div>
  <div class="col-lg-6">
    <nav class="breadcrumb-container" aria-label="breadcrumb">
       <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="<?php echo e(route('admin.dashboard')); ?>"><i class="ik ik-home"></i></a>
         </li>
         <li class="breadcrumb-item">
             <a href="<?php echo e(route('admin.cashadvance.index')); ?>">Staff</a>
         </li>
         <li class="breadcrumb-item">
             <a href="#">Edit</a>
         </li>
         <li class="breadcrumb-item active" aria-current="page"><?php echo e($cashadvance->title); ?></li>
     </ol>
 </nav>
</div>
</div>
</div>

<div class="row">
    <div class="col-md-6 col-sm-12 col-xl-6 offset-md-3 offset-xl-3">

        <div class="widget overflow-visible">
            <div class="progress progress-sm progress-hi-3 hidden">
                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
            </div>
            <div class="widget-body">
                <div class="overlay hidden">
                    <i class="ik ik-refresh-ccw loading"></i>
                    <span class="overlay-text">Staff <?php echo e($cashadvance->title); ?> Updating...</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="state">
                        <h5 class="text-secondary"><i class="ik ik-at-sign"></i><?php echo $cashadvance->title; ?> Edit</h5>
                    </div>
                </div>

                <form action="<?php echo e($form_update); ?>" method="POST" enctype="multipart/form-data" id="editCashadvance">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="row">
                      <div class="col-md-8 col-lg-8 col-sm-12">
                       <div class="form-group">
                        <label for="title">Title</label><small class="text-danger">*</small>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Some Title or Resone of Cash Advance" autocomplete="off" value="<?php echo e($cashadvance->title); ?>">
                        <small class="text-danger err" id="title-err"></small>
                      </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12">
                      <div class="form-group">
                        <label for="date">Date</label><small class="text-danger">*</small>
                        <input type="text" class="form-control datetimepicker-input" name="date" id="date" data-toggle="datetimepicker" data-target="#date" autocomplete="off" data-value="<?php echo e($cashadvance->date); ?>">
                        <small class="text-danger err" id="date-err"></small>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                     <div class="form-group">
                      <label for="employee_id">Employee</label><small class="text-danger">*</small>
                      <select class="form-control" name="employee_id" id="employee_id">
                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($employee->id); ?>"
                          <?php if($employee->id == $cashadvance->employee_id): ?>
                          selected
                          <?php endif; ?>
                          ><?php echo e($employee->first_name." ".$employee->last_name." (#".$employee->employee_id.")"); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                      <small class="text-danger err" id="employee_id-err"></small>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 col-lg-12 col-sm-12">
                   <div class="form-group">
                    <label for="rate_amount">Loan Amount</label><small class="text-danger">*</small>
                    <input type="text" name="employee_loan_amount" class="form-control" id="rate_amount" placeholder="200.00" autocomplete="off" value="<?php echo e($cashadvance->rate_amount); ?>">
                    <small class="text-danger err" id="rate_amount-err">It's important for Payscal calculation.</small>
                  </div>
                </div>
            </div>

            <div class="row">
                  <div class="col-md-12 col-lg-12 col-sm-12">
                   <div class="form-group">
                    <label for="rate_amount">EMI </label><small class="text-danger">*</small>
                    <input type="text" name="employee_monthly" class="form-control" id="emi" placeholder="200.00" autocomplete="off" value="<?php echo e($cashadvance->emi); ?>">
                    <small class="text-danger err" id="rate_amount-err">Employees monthly repayments.</small>
                  </div>
                </div>
            </div>
            <div class="row">
                  <div class="col-md-12 col-lg-12 col-sm-12">
                   <div class="form-group">
                    <label for="rate_amount">Repayments Made</label><small class="text-danger">*</small>
                    <input type="text" name="employee_total_repayment" class="form-control" id="emi" placeholder="200.00" autocomplete="off" value="<?php echo e($cashadvance->total_repayments); ?>">
                    <small class="text-danger err" id="rate_amount-err">Employees made repayments.</small>
                  </div>
                </div>
            </div>

            <div class="row">
                  <div class="col-md-12 col-lg-12 col-sm-12">
                   <div class="form-group">
                    <label for="rate_amount">Duration</label><small class="text-danger">*</small>
                    <input type="text" name="employee_duration" class="form-control" id="emi" placeholder="3" autocomplete="off" value="<?php echo e($cashadvance->duration); ?>">
                    
                  </div>
                </div>
            </div>

            <div class="row">
              <div class="col-md-12 col-lg-12 col-sm-12">
                <button type="submit" class="btn btn-primary"><i class="ik save ik-save"></i>Approve</button>
                <a href="<?php echo e(route('admin.cashadvance.index')); ?>" class="btn btn-light"><i class="ik arrow-left ik-arrow-left"></i> Go Back</a>
              </div>
            </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script type="text/javascript">
$(document).ready(function($) {
  $("#employee_id").select2();
  
  let date = $("#date").data("value");
  $('#date').datetimepicker({
    defaultDate: date,
    format: 'LL',
  });

  $("#editCashadvance").submit(function(event){
    event.preventDefault();
    editForm("#editCashadvance");
  }); 
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/admin/cashadvance/edit.blade.php ENDPATH**/ ?>