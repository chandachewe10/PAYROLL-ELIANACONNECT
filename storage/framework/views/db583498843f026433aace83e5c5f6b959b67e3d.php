<?php $__env->startSection('title'); ?> Dashboard <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style type="text/css">

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="page-header">
  <div class="row align-items-end">
   <div class="col-lg-8">
    <div class="page-header-title">
    <?php echo QrCode::size(50)->generate(config('app.url')."/employee_attendance"); ?>

     <div class="d-inline">
      <h5>Dashboard</h5>
     
   
       <span>Dashboard for the HR</span>
      <br>
    </div>
   
  </div>
</div>
<div class="col-lg-4">
  <nav class="breadcrumb-container" aria-label="breadcrumb">
   <ol class="breadcrumb">
    <li class="breadcrumb-item">
     <a href="£"><i class="ik ik-home"></i></a>
   </li>
   <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
 </ol>
</nav>
</div>
</div>
</div>

<button class="btn btn-danger" id="demo"></button>
<br><br>


<h4>Setup Summary</h4>
<small style="font-style:italic">All your setup of your payroll system will appear here</small>
<p style="font-style:italic">Company ID: <strong><?php echo e(Auth::user()->security_number); ?></strong></p> 

<?php if($errors->any()): ?>
                        <div class="alert <?php echo e(session()->get('bgcolor')); ?> text-light alert-dismissible fade show" role="alert">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span><?php echo e($error); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="ik ik-x"></i>
                            </button>
                        </div>

                        <?php endif; ?>
                        <br>
<!--Show this for the Company Main Branch-->
<?php if(\App\Admin::find(Auth::user()->id)->branch_name == 0): ?>
<?php if(is_null(\App\Admin::find(Auth::user()->id)->latitude)): ?>
<button type="button" onclick ="return confirm('You are about to set your new company main branch  location, are you sure you want to make these changes?');" class="btn btn-info btn-lg btn-block"><a style="color:white" href="<?php echo e(route('admin.pin_company_location')); ?>"><i class="fa fa-map-marker"></i>PIN <?php echo e(Auth::user()->username); ?> LOCATION</a></button>
<?php else: ?>
<button type="button" onclick ="return confirm('You are about to update your new company main branch location, are you sure you want to make these changes?');" class="btn btn-info btn-lg btn-block"><a style="color:white" href="<?php echo e(route('admin.pin_company_location')); ?>"><i class="fa fa-map-marker"></i>PIN <?php echo e(Auth::user()->username); ?> LOCATION</a></button>
<?php endif; ?>
<?php endif; ?>
<!--End Showing for the Company Main Branch-->
<br> 
<br><br>


<?php 

$branch_location = \App\Branches::find(Auth::user()->branch_name);

?>

<!--If the Branch Exists-->
<?php if($branch_location): ?>

<!--Check the Branch Co-ordinates Since the Branch Exists-->
<?php if(is_null(\App\Branches::find(Auth::user()->branch_name)->latitude)): ?>
<button type="button" onclick ="return confirm('You are about to set your new company branch  location, are you sure you want to make these changes?');" class="btn btn-info btn-lg btn-block"><a style="color:white" href="<?php echo e(route('admin.pin_branch_location')); ?>"><i class="fa fa-map-marker"></i>PIN <?php echo e(strtoupper($branch_location->branch_name)); ?> LOCATION</a></button>
<?php else: ?>
<button type="button" onclick ="return confirm('You are about to update your new company branch location, are you sure you want to make these changes?');" class="btn btn-info btn-lg btn-block"><a style="color:white" href="<?php echo e(route('admin.pin_branch_location')); ?>"><i class="fa fa-map-marker"></i>PIN <?php echo e(strtoupper($branch_location->branch_name)); ?> LOCATION</a></button>
<?php endif; ?>
<?php endif; ?>
<br><br> 






<?php echo $__env->make('admin/dashboard/flowchart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--End Step progress bar here-->  
<br><br>
<!-- 

<img src="<?php echo e(asset('flowcharts/flowchart.JPG')); ?>" alt="Setup Structure" style="width: 100%;"/>


End Company Flow Chart Here-->
<br><br>
<hr>



<?php if(Auth::user()->organogram==0): ?>
<button type="button" class="btn btn-secondary btn-lg btn-block"><a style="color:white" href="javacsript:void()">System Analytics</a></button>
<?php else: ?>
<button type="button" class="btn btn-success btn-lg btn-block">System Analytics</button>
<?php endif; ?>
<br>





     <div class="row ">
    <div class="col-6 cursure-pointer">
    <?php echo $chartPie->container(); ?>

 
 <script src="<?php echo e($chartPie->cdn()); ?>"></script>

 <?php echo e($chartPie->script()); ?>

</div>





<div class="col-6 cursure-pointer">
<?php echo $chartAllowances->container(); ?>

 
 <script src="<?php echo e($chartPie->cdn()); ?>"></script>

 <?php echo e($chartAllowances->script()); ?>

</div>


</div>





<hr>

<!--Second row--> 
<h4>Payroll Summary for <?php echo e(date('Y')); ?></h4>
<small style="font-style:italic">All your payroll analytics will appear here</small>
<br><br>

<div class="row ">
    <div class="col-6 cursure-pointer">
    <?php echo $chartNet->container(); ?>

 
 <script src="<?php echo e($chartNet->cdn()); ?>"></script>

 <?php echo e($chartNet->script()); ?>

</div>





<div class="col-6 cursure-pointer">
<?php echo $chartStat->container(); ?>

 
 <script src="<?php echo e($chartStat->cdn()); ?>"></script>

 <?php echo e($chartStat->script()); ?>

</div>


</div>









    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\COMPANY\HUMAN-RESOURCE\resources\views/admin/dashboard/dashboard.blade.php ENDPATH**/ ?>