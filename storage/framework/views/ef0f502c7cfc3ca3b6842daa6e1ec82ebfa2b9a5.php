<!--data here-->
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade active show" id="live" role="tabpanel" aria-labelledby="pills-timeline-tab">

    <!--Live Cash Advance Data-->
    <div class="card-header">
      <div class="col-md-6 d-block">
        <a href="<?php echo e($add_new); ?>" class="btn btn-sm btn-dark float-left"><i class="ik plus-square ik-plus-square"></i> Create New Cash Advance</a>
      </div>
      
    </div>

    <div class="card-body table-responsive">
        <table id="cashadvance_data_table" class="table table-striped">
          <thead>
            <tr>
              <th>Date</th>
              <th>Employee Details</th>
              <th>Title</th>
              <th>Status</th>
              <th>Amount</th>
              <th>Duration</th>
              <th>EMI</th>
              <th>Approve</th>
              <th>Denie</th>
              
            </tr>
          </thead>
          <tbody>

            <?php $__currentLoopData = $cashadvances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $advance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($advance->date); ?></td>
              <td>
                <div class="row">
                  <div class="col-md-3 text-center">
                    <img src="<?php echo e($advance->employee->media_url['thumb']); ?>" class="rounded-circle table-user-thumb">
                  </div>
                  <div class="col-md-8 col-lg-8 my-auto">
                    <b class="mb-0"><?php echo e($advance->employee->first_name." ".$advance->employee->last_name); ?> </b>
                    <p class="mb-2" title="<?php echo e($advance->employee->employee_id); ?>">
                      <small>
                        <i class="ik ik-at-sign"></i><?php echo e($advance->employee->employee_id); ?>

                      </small>
                    </p>
                  </div>
                  <div class="col-md-2 col-lg-2">
                    <small class="text-muted float-right"></small>
                  </div>
                </div>
              </td>
              <td><?php echo e($advance->title); ?></td>
              <td><?php echo e($advance->loan_status==2 ? "PENDING": "ACCEPTED"); ?></td>
              <td><?php echo e($advance->rate_amount); ?></td>
              <td><?php echo e($advance->duration); ?> Months</td>
              <td>ZMW <?php echo e($advance->emi); ?></td>
              <td>
                <div class='table-actions text-center'>
                  <a href="<?php echo e(route('admin.cashadvance.edit',encrypt($advance->employee_id))); ?>"><i class='ik ik-edit-2 text-dark'></i></a>
                 
                </div>
              </td>
              <td>
                <div class='table-actions text-center'>
                 
                  <a data-href="<?php echo e(route('admin.cashadvance.destroy',encrypt($advance->id))); ?>" class='delete cursure-pointer'><i class='ik ik-trash-2 text-danger'></i></a>
                </div>
              </td>
             
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </tbody>
        </table>
    </div>
    <!--End Live Cash Advance Data-->

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
                           columns: [0,2,3,4,5,6] // Column index which needs to export
                       }
                   },
                   {
                       extend: 'csv',
                       exportOptions: {
                           columns: [0,2,3,4,5,6] // Column index which needs to export
                       }
                   },
                   {
                       extend: 'excel',
                       exportOptions: {
                           columns: [0,2,3,4,5,6] // Column index which needs to export
                       }
                   },
                   {
                       extend: 'print',
                       exportOptions: {
                           columns: [0,2,3,4,5,6] // Column index which needs to export
                       }
                   },
              ], 
    
    
    });
  });
</script><?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/admin/cashadvance/content.blade.php ENDPATH**/ ?>