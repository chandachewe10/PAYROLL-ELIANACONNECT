<!--data here-->
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade active show" id="live" role="tabpanel" aria-labelledby="pills-timeline-tab">

    <!--Live Cash Advance Data-->
    <div class="card-header">
      <div class="col-md-6 d-block">
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-sm btn-dark float-left"><i class="ik plus-square ik-plus-square"></i>Home</a>
      </div>
     
    </div>

    <div class="card-body table-responsive">
        <table id="cashadvance_data_table" class="table table-striped">
          <thead>
            <tr>
              
              <th>Date</th>
              <th>Employee Details</th>
              <th>Leave Name</th>
              <th>Status</th>
               <th>Accrued Leaves</th>
              <th>Leaves Taken</th>
              <th>Remaining Leave</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Duration</th>
              <th>Commutation (ZMW)</th>
              <th>Commutation Status</th>
              <th>Approve</th>
              <th>Denie</th>
             
              
            </tr>
          </thead>
          <tbody>

            <?php $__currentLoopData = $leave_days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($leave->created_at); ?></td>
              <td>
                <div class="row">
                  <div class="col-md-3 text-center">
                    <img src="<?php echo e($leave->employee->media_url['thumb']); ?>" class="rounded-circle table-user-thumb">
                  </div>
                  <div class="col-md-8 col-lg-8 my-auto">
                    <b class="mb-0"><?php echo e($leave->employee->first_name." ".$leave->employee->last_name); ?> </b>
                    <p class="mb-2" title="<?php echo e($leave->employee->employee_id); ?>">
                      <small>
                        <i class="ik ik-at-sign"></i><?php echo e($leave->employee->employee_id); ?>

                      </small>
                    </p>
                  </div>
                  <div class="col-md-2 col-lg-2">
                    <small class="text-muted float-right"></small>
                  </div>
                </div>
              </td>
              <td><?php echo e($leave->leave_name); ?></td>
              <td><?php echo e($leave->status==2 ? "PENDING": "ACCEPTED"); ?></td>
              <td><?php echo e($leave->accrued_leaves); ?></td>
              <td><?php echo e($leave->exhausted_leaves); ?></td>
              <td><?php echo e($leave->remaining_leaves); ?></td>
              <td><?php echo e($leave->leave_start_date); ?></td>
              <td><?php echo e($leave->leave_end_date); ?></td>
              <td><?php echo e($leave->duration); ?></td>
              <td><?php echo e($leave->commutation_balance); ?></td>
              <td><?php echo e($leave->is_commutated == 0 ? "N/A" : "YES"); ?></td>
              <td>
                <div class='table-actions text-center'>
                  <a href="<?php echo e(route('admin.leave_days.edit',encrypt($leave->id))); ?>"><i class='ik ik-edit-2 text-dark'></i></a>
                 
                </div>
              </td>
              <td>
                <div class='table-actions text-center'>
                 
                  <a data-href="<?php echo e(route('admin.leave_days.destroy',encrypt($leave->id))); ?>" class='delete cursure-pointer'><i class='ik ik-trash-2 text-danger'></i></a>
                </div>
              </td>
             
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </tbody>
        </table>
    </div>
    <!--End Live Cash leave Data-->

  </div>
</div>
<!--End data here-->

<script type="text/javascript">
  $(document).ready(function(){
    $("#cashadvance_data_table").DataTable({
    
  'dom': 'Bfrtip',
      buttons: [
                   {
                       extend: 'pdf',
                       exportOptions: {
                           columns: [0,2,3,4,5,6,7,8,9,10,11] // Column index which needs to export
                       }
                   },
                   {
                       extend: 'csv',
                       exportOptions: {
                           columns: [0,2,3,4,5,6,7,8,9,10,11] // Column index which needs to export
                       }
                   },
                   {
                       extend: 'excel',
                       exportOptions: {
                           columns: [0,2,3,4,5,6,7,8,9,10,11] // Column index which needs to export
                       }
                   },
                   {
                       extend: 'print',
                       exportOptions: {
                           columns: [0,2,3,4,5,6,7,8,9,10,11] // Column index which needs to export
                       }
                   },
              ],  
    
    });
  });
</script><?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/admin/leave_days/content.blade.php ENDPATH**/ ?>