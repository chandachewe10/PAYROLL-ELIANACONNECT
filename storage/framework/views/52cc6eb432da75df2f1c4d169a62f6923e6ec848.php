<?php $__env->startSection('title'); ?> Uploading Statutories <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->startSection('content'); ?>
<h4>Tax Bands</h4>
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
    $('#state_data').DataTable({
        dom: 'Bfrtip',
        buttons: [
             'pdf','csv', 'excel', 'copy','print'
        ]
    });
});
</script>



<form action="<?php echo e(route('admin.import_tax')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
<div class="shadow-sm p-3 mb-5 bg-white rounded">

<div class="form-group">
    <label for="Upload Statutories (CSV)">Upload Tax (CSV)</label>
    <input type="file" class="form-control" id="Upload Deductions (CSV)" name="import_statutories_payee">
  </div>

<br> 
<button type="submit" class="btn btn-primary"><i class="ik save ik-save"></i>Submit</button>
  <button type="button" class="btn btn-info"><i class="fa fa-download"></i><a style="color:white" href="<?php echo e(asset('sample_formats_files/tax.csv')); ?>">Download Sample Format</a></button>
<a href="<?php echo e(route('admin.pension_view')); ?>" class="btn btn-light"> Pension <i class="ik arrow-left ik-arrow-right"></i></a>
</div>

</form>


<!--view Tax-->

<br><br>
<div class="shadow p-3 mb-5 bg-white rounded">

  <br><br>
  <table id="state_data" class="table mb-0 table-hover">
    <thead>
      <tr>
        <th>Tax Band 1</th>
        <th>Tax Band 2 </th>
        <th>Tax Band 3</th>
        <th>Tax Band 4 </th>
        
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $Tax; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tax): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><span class="pc"><b><?php echo e($tax->fb); ?> @ <?php echo e($tax->fbp); ?>% </b></span></td>
        <td><code class="pc"><?php echo e($tax->sb); ?> @ <?php echo e($tax->sbp); ?>%</code></td>
        <td><code class="pc"><?php echo e($tax->tb); ?> @ <?php echo e($tax->tbp); ?>%</code></td>
        <td><code class="pc"><?php echo e($tax->fob); ?> @ <?php echo e($tax->fobp); ?>%</code></td>      
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<!--End viewing Tax-->

<?php $__env->stopSection(); ?>






<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/admin/Statutories/Tax.blade.php ENDPATH**/ ?>