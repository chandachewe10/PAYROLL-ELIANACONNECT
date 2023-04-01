<?php $__env->startSection('title'); ?> Uploading Achievements Bonuses <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->startSection('content'); ?>

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




<h4>Awards and Achievements</h4>

<form action="<?php echo e(route('admin.import_achievements')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
<div class="shadow-sm p-3 mb-5 bg-white rounded">

<div class="form-group">
    <label for="Upload Bonus (CSV)">Upload Achievements</label>
    <input type="file" class="form-control" id="Upload Bonus (CSV)" name="import_achievements">
  </div>

<br> 
<button type="submit" class="btn btn-primary"><i class="ik save ik-save"></i>Submit</button>
    <button type="button" class="btn btn-info"><i class="fa fa-download"></i><a style="color:white" href="<?php echo e(asset('sample_formats_files/award.csv')); ?>">Download Sample Format</a></button>
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
       
        <th>EMPLOYEE ID</th>
        <th>BONUS PERCENTAGE</th>
        <th>BONUS APPLICABLE ON</th>
        <th>TO BE ADDED ON</th>
        <th>LAST MODIFIED ON</th>
        
        
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achievement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     
      <tr>
        
        <td><span><b><?php echo e($achievement->employee_number); ?> </b></span></td>
        <td><code class="pc"><?php echo e($achievement->bonus_percentage); ?>%</code></td>
        <td><code class="pc"><?php echo e($achievement->applied_on); ?></code></td>
        <td><code class="pc"><?php echo e(date('d F-Y',strtotime($achievement->to_added_on))); ?> Salary</code></td>
        <td><code class="pc"><?php echo e(date('d F-Y',strtotime($achievement->updated_at))); ?></code></td>
            
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<!--End viewing statutories-->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/admin/Statutories/achievements.blade.php ENDPATH**/ ?>