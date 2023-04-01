<?php $__env->startSection('title'); ?> Switch to another Company Branch <?php $__env->stopSection(); ?>

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
              <h5>Create</h5>
              <span>Select a Company Branch.</span>
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
             <a href="<?php echo e(route('admin.branches.create')); ?>">Choose Branch</a>
         </li>
         <li class="breadcrumb-item active" aria-current="page">Select</li>
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
                    <span class="overlay-text">Picking a branch...</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="position">
                        <h5 class="text-secondary">Choose Branch </h5>
                    </div>
                </div>

                <form action="<?php echo e($form_store); ?>" method="POST" id="pickBranch">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                          <label for="is_active">Pick a Branch</label>
                          <select class="form-control" name="branch_name">
                            <option value = 0><?php echo e(Auth::user()->username); ?></option>
                            <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($branch->branch_id); ?>"><?php echo e($branch->branch_name); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          </select>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="ik save ik-save"></i>Submit</button>
                    
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-light"><i class="ik arrow-left ik-arrow-left"></i> Home</a>
</form>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>











<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/admin/branches/switch.blade.php ENDPATH**/ ?>