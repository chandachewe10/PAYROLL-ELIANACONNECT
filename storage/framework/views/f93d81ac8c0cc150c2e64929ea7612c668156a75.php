<?php $__env->startSection('title'); ?> Uploading Third Party Service Providers <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->startSection('content'); ?>
<h4>Pay Third Party Service Providers</h4>
<br><br>
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

<form action="<?php echo e(route('admin.link_employees_csv')); ?>" method="POST" id="linkDeductions" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
<div class="shadow-sm p-3 mb-5 bg-white rounded">

<div class="form-group">
    <label for="Upload Linked Employees (CSV)">Upload TPSPs Claims (CSV)</label>
    <input type="file" accept=".csv" class="form-control" id="Upload Linked Employees (CSV)" name="import_employees">
  </div>

<br> 
<button type="submit" class="btn btn-primary"><i class="ik save ik-save"></i>Submit</button>
<button type="button" class="btn btn-info"><i class="fa fa-download"></i><a style="color:white" href="<?php echo e(asset('sample_formats_files/pay_third_party_sample_test.csv')); ?>">Download Sample Format</a></button>
<a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-light"><i class="ik arrow-left ik-arrow-left"></i> Go Home </a>
</div>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/admin/ThirdPartyDeductions/create.blade.php ENDPATH**/ ?>