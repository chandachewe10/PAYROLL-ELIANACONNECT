<?php echo $__env->make('employees/menu_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

<div class="main-panel shadow p-3 mb-5 bg-white rounded">
          <div class="content-wrapper">


<h4>Attendance History</h4>
<hr>


<table class="table table-striped" id="attendance_table">
  <thead>
    <tr>
    
      <th>Date</th>
      <th>Loggen In</th>
      <th>Logged Out</th>
      <th>Hours Worked</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $attendances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
    <tr>
       
        
      <td><?php echo e(\Carbon\Carbon::parse($attendance->date)->format('d,M Y')); ?></td>
      <td><?php echo e($attendance->time_in); ?></td>
      <td><?php echo e($attendance->time_out); ?></td>
      <td><?php echo e($attendance->hours_worked); ?></td>
      
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>


<script>  
    $(document).ready( function () {
    $('#attendance_table').DataTable();
} );
</script>

<?php echo $__env->make('employees/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/employees/attendance_history/attendance_history.blade.php ENDPATH**/ ?>