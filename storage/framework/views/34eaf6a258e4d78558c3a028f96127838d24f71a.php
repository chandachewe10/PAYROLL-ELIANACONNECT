<?php $__env->startSection('title'); ?> Uploading Company Structure <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->startSection('content'); ?>
<h4>Company Structure</h4>

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

  



<form action="<?php echo e(route('admin.import_positions_csv')); ?>" method="POST" id="createStructure" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
<div class="shadow-sm p-3 mb-5 bg-white rounded">

<div class="form-group">
    <label for="Upload Allowances (CSV)">Upload Positions (CSV)</label>
    <input type="file" accept=".csv" class="form-control" id="Upload Allowances (CSV)" name="positions" required>
  </div>

  <br> 
<button type="submit" class="btn btn-primary"><i class="ik save ik-save"></i>Submit</button>


<button type="info" class="btn btn-info"><i class="fa fa-download"></i><a style="color:white" href="<?php echo e(asset('sample_formats_files/organogram_sample_test.csv')); ?>">Download Sample Format</a></button>
</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\COMPANY\HUMAN-RESOURCE\resources\views/admin/organogram/positions.blade.php ENDPATH**/ ?>