<?php $__env->startSection('title'); ?> Uploading Insurance <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->startSection('content'); ?>
<h4>Insurance</h4>

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
<script type="text/javascript">
  $(document).ready(function() {
    $('#state_data_table').DataTable({
        dom: 'Bfrtip',
        buttons: [
             'pdf','csv', 'excel', 'copy','print'
        ]
    });
});
</script>

<form action="<?php echo e(route('admin.import_insurance')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
<div class="shadow-sm p-3 mb-5 bg-white rounded">

<div class="form-group">
    <label for="Upload Statutories - Insurance (CSV)">Upload Statutories - Insurance</label>
    <input type="file" class="form-control" id="Upload Statutories - Insurance (CSV)" name="import_insurance">
  </div>

<br> 
<button type="submit" class="btn btn-primary"><i class="ik save ik-save"></i>Submit</button>
  <button type="button" class="btn btn-info"><i class="fa fa-download"></i><a style="color:white" href="<?php echo e(asset('sample_formats_files/insurance.csv')); ?>">Download Sample Format</a></button>
<a href="<?php echo e(route('admin.pension_view')); ?>" class="btn btn-light"><i class="ik arrow-left ik-arrow-left"></i> Pension</a>
</div>

</form>

<!--view Insurance-->

<br><br>
<div class="shadow p-3 mb-5 bg-white rounded">

  <br><br>
  <table id="state_data_table" class="table mb-0 table-hover">
    <thead>
      <tr>
        <th>INSURANCE NAME</th>
        <th>INSURANCE PERCENTAGE</th>
        <th>INSURANCE APPLICABLE ON</th>
        <th>LAST MODIFIED ON</th>
        
        
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $insurance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insurance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     
      <tr>
        <td><span><b><?php echo e($insurance->insurance_name); ?> </b></span></td>
        <td><code class="pc"><?php echo e($insurance->insurance); ?>%</code></td>
        <td><code class="pc"><?php echo e($insurance->applied_on); ?></code></td>
        <td><code class="pc"><?php echo e(date('d F-Y',strtotime($insurance->updated_at))); ?></code></td>
            
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<!--End viewing Insurance-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/admin/Statutories/insurance.blade.php ENDPATH**/ ?>