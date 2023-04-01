<!--data here-->
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade active show" id="live" role="tabpanel" aria-labelledby="pills-timeline-tab">

   <!--
      <div class="col-md-6">
        <button type="submit" class="btn btn-primary mb-2 h-33 float-right move-to-delete-all" id="apply" disabled="true" data-href="<?php echo e($moveToTrashAllLink); ?>">Action</button>
      </div>
-->
    </div>

    

<div class="card-body table-responsive">
        <table id="employee_data_table" class="table table-striped">
          <thead>
            <tr>
              <th>Avatar</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Position</th>
              <th>QR-Code</th>
              <th>Details</th>
              <th>Payroll</th>
              <th>Application</th>
              <th>View</th>
              <th>Actions</th>
             
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
             <td>
               <img src="<?php echo e($employee->mediaUrl['thumb']); ?>" class='table-user-thumb'>
             </td>
             <td><?php echo e($employee->first_name); ?></td>
             <td><?php echo e($employee->last_name); ?></td>
             <td><?php echo e($employee->phone); ?></td>
             <td><?php echo e($employee->email); ?></td>
             <td><?php echo e($employee->position->title); ?></td>
             <td><?php echo QrCode::size(50)->generate(config('app.url')."/employee_attendance/$employee->id/$employee->security_number"); ?></td>
             <td>
               <div class=''>
                <b>Gender :</b> <span><?php echo e($employee->gender); ?></span></br>
                <b>Employee Id :</b> <span><?php echo e($employee->employee_id); ?></span></br>
                <b>Schedule :</b> <span><?php echo e($employee->schedule->time_in.'-'.$employee->schedule->time_out); ?></span></br>
                <b>Address :</b> <span><?php echo e($employee->address); ?></span></br>
              </div>
             </td>
             <td>
              <?php if($employee->is_active == 1): ?>
                <span class='success-dot' title='Published' title='Active Employee'></span>
              <?php else: ?>
                <i class='ik ik-alert-circle text-danger alert-status' title='In-Active Employee'></i>
              <?php endif; ?>
             </td>
             
             <td>
             <?php if($employee->status == 2 || $employee->status == 1): ?>
                <span class='success-dot' title='Published' title='Application Completed'></span>
              <?php else: ?>
                <i class='ik ik-alert-circle text-danger alert-status' title='Application Not Done'></i>
              <?php endif; ?>
             </td>
             
             
             <td>
               <a href="<?php echo e(route('admin.employee.show',encrypt($employee->id))); ?>">
                <i class='ik ik-eye text-primary'></i>
                </a>
                </td>






             <td>
               <div class='table-actions'>
              
                <a href="<?php echo e(route('admin.employee.edit',encrypt($employee->id))); ?>">
                  <i class='ik ik-edit-2 text-dark'></i>
                </a>
                <a data-href="<?php echo e(route('admin.employee.destroy',encrypt($employee->id))); ?>" class='delete cursure-pointer'><i class='ik ik-trash-2 text-danger'></i></a>
              </div>
             </td>
            
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
    </div>
    <!--End Live Banner Data-->

  </div>
</div>
<!--End data here-->

<script type="text/javascript">
  $(document).ready(function(){
    $("#employee_data_table").DataTable({
      'dom': 'Bfrtip',
      buttons: [
                   {
                       extend: 'pdf',
                       exportOptions: {
                           columns: [1,2,3,4,5] // Column index which needs to export
                       }
                   },
                   {
                       extend: 'csv',
                       exportOptions: {
                           columns: [1,2,3,4,5] // Column index which needs to export
                       }
                   },
                   {
                       extend: 'excel',
                       exportOptions: {
                           columns: [1,2,3,4,5] // Column index which needs to export
                       }
                   },
                   {
                       extend: 'print',
                       exportOptions: {
                           columns: [1,2,3,4,5] // Column index which needs to export
                       }
                   },
              ],
    });   
});
</script><?php /**PATH C:\xampp\htdocs\COMPANY\HUMAN-RESOURCE\resources\views/admin/employee/content.blade.php ENDPATH**/ ?>