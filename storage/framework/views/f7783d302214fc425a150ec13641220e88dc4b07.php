<!--Live Position Data-->
<div class="card-header">
  <div class="col-md-6 d-block">
    <a href="<?php echo e(route('admin.import_position_file')); ?>" class="btn btn-sm btn-dark float-left"><i class="ik plus-square ik-plus-square"></i>Upload Further Positions</a>
  </div>
 </div>

<div class="shadow p-3 mb-5 bg-white rounded">
  <table id="state_data_table" class="table mb-0 table-hover">
    <thead>
      <tr>
        <th >Title</th>
        <th >Salary Scale</th>
        <th >Vacancies</th>
        <th >Head</th>
        <th >Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><span><b><?php echo e($position->title); ?></b></span></td>
        <td><code class="pc"><?php echo e($position->salary_scale); ?></code></td>
        <td><code class="pc"><?php echo e($position->vacancies); ?></code></td>
        
        <td>
          <p><?php echo e($position->head_count); ?></p>
        </td>
        <td>
            <div class="btn-group btn-sm" role="group" aria-label="Basic example">
              <a href="<?php echo e(route('admin.position.edit',['position'=>$position])); ?>" type="button" class="btn btn-sm btn-outline-primary">
                <i class="ik edit-2 ik-edit-2"></i>
              </a>
              <a data-href="<?php echo e(route('admin.position.destroy',['position'=>$position])); ?>" type="button" class="btn btn-sm btn-outline-danger delete">
                <i class="ik trash-2 ik-trash-2"></i>
              </a>
            </div>
        </td>
        
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>

<!--EndLive Position Data-->
<script type="text/javascript">
  $(document).ready(function() {
    $('#state_data_table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
             'pdf','csv', 'excel', 'copy','print'
        ]
    } );
} );
</script>




<?php /**PATH C:\xampp\htdocs\COMPANY\HUMAN-RESOURCE\resources\views/admin/position/content.blade.php ENDPATH**/ ?>