<?php $__env->startSection('title'); ?> Email Verification | E-System Admin  <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style type="text/css">
    
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="authentication-form mx-auto">
    <div class="logo-centered">
        <img src="<?php echo e(asset('landing_assets/img/logo1.PNG')); ?>" alt="E-SYSTEMS" class="img-fluid" style="width:100px; height:100px; border-radius:100%">
    </div>
    <h3>Verify Email Address</h3>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Verify Your Email Address')); ?></div>

                <div class="card-body">
                    <?php if(session('resent')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(__('A fresh verification link has been sent to your email address.')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('Before proceeding, please check your email for a verification link.')); ?>

                    <?php echo e(__('If you did not receive the email')); ?>,
                    <form class="d-inline" method="POST" action="<?php echo e(route('verification.resend')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline"><?php echo e(__('click here to request another')); ?></button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
    
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/auth/verify.blade.php ENDPATH**/ ?>