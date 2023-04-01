<?php $__env->startSection('title'); ?> Register | E-Systems Employees  <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style type="text/css">
    
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="authentication-form mx-auto">
    <center>
    <div>
        <img src="<?php echo e(asset('landing_assets/img/logo1.PNG')); ?>" alt="E-SYSTEMS" class="img-fluid" style="width:100px; height:100px; border-radius:100%">
    </div>
    </center>
    <hr>
    <h3>Sign Up to E-Systems - Agent</h3>
    
    <?php if($errors->any()): ?>
    <div class="alert bg-danger text-light alert-dismissible fade show" role="alert">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span><?php echo e($error); ?></span>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="ik ik-x"></i>
        </button>
    </div>
    <?php endif; ?>

   
    
    <form action="<?php echo e(route('agent.register')); ?>" method="post">
        <?php echo method_field('POST'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <input type="text" name="first_name" value="<?php echo e(old('first_name')); ?>" class="form-control" placeholder="First Name" required="">
            <i class="ik ik-user"></i>
        </div>
        <div class="form-group">
            <input type="text" name="last_name" value="<?php echo e(old('last_name')); ?>" class="form-control" placeholder="Last Name" required="">
            <i class="ik ik-user"></i>
        </div>
        <div class="form-group">
            <input type="number" name="employee_phone_number" value="<?php echo e(old('employee_phone_number')); ?>" class="form-control" placeholder="Agent Phone Number" required="">
            <i class="fas fa-phone"></i>
        </div>
        <div class="form-group">
            <input type="text" name="employee_email" value="<?php echo e(old('employee_email')); ?>" class="form-control" placeholder="Agent Email" required="">
            <i class="fa fa-envelope"></i>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="">
            <i class="ik ik-lock"></i>
        </div>
        <div class="form-group">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required="">
            <i class="ik ik-lock"></i>
        </div>
        <div class="row">
            <div class="col text-left">
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="item_checkbox" name="remember_token" value="option1">
                    
                </label>
            </div>
        </div>
        <div class="sign-btn text-center">
            <button class="btn btn-theme" type="submit">Sign Up</button>
        </div>
    </form>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
    
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/auth/Agents/register.blade.php ENDPATH**/ ?>