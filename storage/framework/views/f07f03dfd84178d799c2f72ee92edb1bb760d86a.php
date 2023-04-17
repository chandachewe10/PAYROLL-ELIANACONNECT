

<?php $__env->startSection('title'); ?> Sign-IN | Sign-Out | E-System Employees  <?php $__env->stopSection(); ?>

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
    <h3>Sign In - Sign Out</h3>
    <p>Enter Email</p>

    <?php if($errors->any()): ?>
    <div class="alert bg-danger text-light alert-dismissible fade show" role="alert">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span><?php echo $error; ?></span>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="ik ik-x"></i>
        </button>
    </div>
    <?php endif; ?>

    <form action="<?php echo e(route('qrcode_attendance')); ?>" method="post">
        <?php echo method_field('POST'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required="">
            <i class="ik ik-user"></i>
        </div>
       

        </div>
        <div class="sign-btn text-center">
            <button class="btn btn-theme" type="submit">Submit</button>
        </div>
    </form>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
    
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\COMPANY\HUMAN-RESOURCE\resources\views/qrcode/index.blade.php ENDPATH**/ ?>