<?php $__env->startSection('title'); ?> <?php echo e($position->title); ?> - Edit Position <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style type="text/css">
    .overflow-visible{
        overflow: visible !important;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="page-header">
  <div class="row align-items-end">
     <div class="col-lg-8">
        <div class="page-header-title">
           <i class="ik ik-briefcase bg-blue"></i>
           <div class="d-inline">
              <h5>Position</h5>
              <span>Edit Position, Please fill all field correctly.</span>
          </div>
      </div>
  </div>
  <div class="col-lg-4">
    <nav class="breadcrumb-container" aria-label="breadcrumb">
       <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="<?php echo e(route('admin.dashboard')); ?>"><i class="ik ik-home"></i></a>
         </li>
         <li class="breadcrumb-item">
             <a href="<?php echo e(route('admin.position.index')); ?>">Position</a>
         </li>
         <li class="breadcrumb-item">
             <a href="#">Edit</a>
         </li>
         <li class="breadcrumb-item active" aria-current="page"><?php echo e($position->name); ?></li>
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
                    <span class="overlay-text">Position <?php echo e($position->name); ?> Updating...</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="Position">
                        <h5 class="text-secondary">Edit <?php echo e($position->name); ?> Position</h5>
                    </div>
                </div>

                <form action="<?php echo e($form_update); ?>" method="POST" id="editPosition">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="title">Title</label><small class="text-danger">*</small>
                        <input type="text" name="title" class="form-control" id="title" placeholder="ex: Sales Executive" autocomplete="off" value="<?php echo e($position->title); ?>">
                        <small class="text-danger err" id="title-err"></small>
                    </div>
                    <div class="form-group">
                        <label for="title">Salary Scale</label><small class="text-danger">*</small>
                        <input type="text" name="salary_scale" class="form-control" id="title" placeholder="Salary Scale"  autocomplete="off" value="<?php echo e($position->salary_scale); ?>">
                        <small class="text-danger err" id="title-err"></small>
                    </div>

                    <div class="form-group">
                        <label for="title">Vacancies</label><small class="text-danger">*</small>
                        <input type="text" name="vacancies" class="form-control" id="title" placeholder="Vacancies"  autocomplete="off" value="<?php echo e($position->vacancies); ?>">
                        <small class="text-danger err" id="title-err"></small>
                    </div>

                    <div class="form-group">
                        <label for="title">Head Count</label><small class="text-danger">*</small>
                        <input type="text" name="head_count" class="form-control" id="title" placeholder="Head Count"  autocomplete="off" value="<?php echo e($position->head_count); ?>">
                        <small class="text-danger err" id="title-err"></small>
                    </div>

                    <div class="form-group">
                        <label for="title">Transport Allowance</label><small class="text-danger">*</small>
                        <input type="text" name="transport_allowance" class="form-control" id="title" placeholder="Transport Allowance"  autocomplete="off" value="<?php echo e($position->transport_allowance); ?>">
                        <small class="text-danger err" id="title-err"></small>
                    </div>

                    <div class="form-group">
                        <label for="title">Housing Allowance</label><small class="text-danger">*</small>
                        <input type="text" name="housing_allowance" class="form-control" id="title" placeholder="Housing Allowance"  autocomplete="off" value="<?php echo e($position->housing_allowance); ?>">
                        <small class="text-danger err" id="title-err"></small>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="description">Description</label>
                          <textarea class="form-control" id="description" name="description" placeholder="Some description about position..."><?php echo e(old('description',$position->description)); ?></textarea>
                          <small class="text-danger err" id="description-err"></small>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="ik save ik-save"></i>Update</button>

                    <a href="<?php echo e(route('admin.position.index')); ?>" class="btn btn-light"><i class="ik arrow-left ik-arrow-left"></i> Go Back</a>
                </form>
            </div>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
$(document).ready(function($) {
  $("#editPosition").submit(function(event){
    event.preventDefault();
    editForm("#editPosition");
  }); 
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/admin/position/edit.blade.php ENDPATH**/ ?>