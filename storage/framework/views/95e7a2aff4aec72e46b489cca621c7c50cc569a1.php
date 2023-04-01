<?php $__env->startSection('title'); ?> Reset | E-System Admin  <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style type="text/css">
    
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="logo-centered" style="padding-left:10px ;">
        <h2> <img src="<?php echo e(asset('landing_assets/img/logo1.PNG')); ?>" alt="E-SYSTEMS" class="img-fluid" style="width:100px; height:100px; border-radius:100%"></h2>
        <h3>Reset Password</h3>
   

    </div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="row">
                            <label for="email" class="col-form-label text-md-end"><?php echo e(__('Email Address')); ?></label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
<br>
                        <div class="row mb-0">
                            <div class="col-md-12 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Send Password Reset Link')); ?>

                                </button>
                            </div>
                        </div>
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

<?php echo $__env->make('admin.layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>