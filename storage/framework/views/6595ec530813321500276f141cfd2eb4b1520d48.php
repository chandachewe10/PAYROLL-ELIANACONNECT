<?php $__env->startSection('title'); ?> Create a New Branch <?php $__env->stopSection(); ?>

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
              <span>Add a Company Branch.</span>
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
             <a href="<?php echo e(route('admin.branches.create')); ?>">Add a Branch</a>
         </li>
         <li class="breadcrumb-item active" aria-current="page">Create</li>
     </ol>
 </nav>
</div>
</div>
</div>
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
<div class="card-body table-responsive p-0">
  <table id="state_data_table" class="table mb-0 table-hover">
    <thead>
      <tr>
      <th width="35" class="text-center">No</th>
        <th width="35" class="text-center">Branch Name</th>
        <th width="10" class="text-center">Branch Location</th>
        <th width="5">Actions</th>
        
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td class="text-center">
          <?php echo e(($loop->index + 1)); ?>

        </td>
        <td>
          <div class="text-center">
            <span><b><?php echo e($branch->branch_name); ?></b></span>
            
          </div>
        </td>
        <td class="text-center">
          <span> <?php echo e($branch->branch_location); ?></b></span>
        </td>
       
        <td>
            <div class="btn-group btn-sm" role="group" aria-label="Basic example">
              <a href="<?php echo e(route('admin.branches.edit',['id'=>$branch->branch_id])); ?>" type="button" class="btn btn-sm btn-outline-primary">
                <i class="ik edit-2 ik-edit-2"></i>
              </a>
              <a onclick="return confirm('Are you sure?')" href="<?php echo e(route('admin.branches.destroy',['id'=>$branch->branch_id])); ?>" type="button" class="btn btn-sm btn-outline-danger ">
                <i class="ik trash-2 ik-trash-2"></i>
              </a>
            </div>
        </td>
       
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="6" class="text-right">
          
        </td>
      </tr>
    </tfoot>
  </table>
</div>









<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
$(document).ready(function($) {
  $("#createPosition").submit(function(event){
    event.preventDefault();
    createForm("#createPosition");
  });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/admin/branches/index.blade.php ENDPATH**/ ?>