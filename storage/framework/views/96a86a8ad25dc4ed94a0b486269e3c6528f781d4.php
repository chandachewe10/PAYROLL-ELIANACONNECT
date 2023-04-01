<?php $__env->startSection('title'); ?> Uploading Bonus <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->startSection('content'); ?>
<h4>Bonus</h4>

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



<form action="<?php echo e(route('admin.import_bonus')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
<div class="shadow-sm p-3 mb-5 bg-white rounded">

<div class="form-group">
    <label for="Upload Bonus (CSV)">Upload Bonuses</label>
    <input type="file" class="form-control" id="Upload Bonus (CSV)" name="import_bonus">
  </div>

<br> 
<button type="submit" class="btn btn-primary"><i class="ik save ik-save"></i>Submit</button>
  <button type="button" class="btn btn-info"><i class="fa fa-download"></i><a style="color:white" href="<?php echo e(asset('sample_formats_files/bonus.csv')); ?>">Download Sample Format</a></button>
<a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-light"><i class="ik arrow-left ik-arrow-left"></i> Home</a>

</div>

</form>





<!--view Pensions-->

<br><br>
<div class="shadow p-3 mb-5 bg-white rounded">

  <br><br>
  <table id="state_data_table" class="table mb-0 table-hover">
    <thead>
      <tr>
        <th>NAME</th>
        <th>BONUS PERCENTAGE</th>
        <th>BONUS APPLICABLE ON</th>
        <th>TO BE ADDED ON</th>
        <th>LAST MODIFIED ON</th>
        
        
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $bonuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bonus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     
      <tr>
        <td><span><b><?php echo e($bonus->bonus_name); ?> </b></span></td>
        <td><code class="pc"><?php echo e($bonus->bonus_percentage); ?>%</code></td>
        <td><code class="pc"><?php echo e($bonus->applied_on); ?></code></td>
        <td><code class="pc"><?php echo e(date('d F-Y',strtotime($bonus->to_added_on))); ?> Salary</code></td>
        <td><code class="pc"><?php echo e(date('d F-Y',strtotime($bonus->updated_at))); ?></code></td>
            
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<!--End viewing statutories-->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/admin/Statutories/bonus.blade.php ENDPATH**/ ?>