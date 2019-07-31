<?php $__env->startSection('title', 'Admin'); ?>
<?php $__env->startSection('style'); ?>
<style>
  .form-control{
    height: 36px;
  }
  .card{
    border: #d2d6de 1px solid;
    border-radius: 4px;
    padding: 10px;
  }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('selectPage','User'); ?>
<?php $__env->startSection('content'); ?>

<section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

  <div class="row">
    <div class="col-md-2"></div>
    <div class="card-wrapper col-md-8" style="margin: auto;">
      <div class="card">
        <div class="card-header">
            <h4>Create new user</h4>
        </div>
        <form method="post" action="<?php echo e(route('admin.users.createUser')); ?>">
          <?php echo csrf_field(); ?>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" value="<?php echo e(old('name')); ?>"
            class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
            name="name" id="name" placeholder="Enter Name">
            <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="<?php echo e(old('email')); ?>"
            class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
            id="email" placeholder="Enter Email">
            <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
          </div>
          
          <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control <?php if ($errors->has('gender')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('gender'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
            name="gender" id="gender">
              <option value="0">Man</option>
              <option value="1">Woman</option>
            </select>
            <?php if ($errors->has('gender')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('gender'); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
          </div>
          
          <div class="form-group">
            <label for="password"><?php echo e(__('Password')); ?></label>
            <input id="password" type="password" class="form-control" name="password" required>
            <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
          </div>
          
          <div class="form-group">
            <label for="password-confirm"><?php echo e(__('Confirm Password')); ?></label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
    </div>
  </div>



</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PHP\PHP07\E-Shopper\resources\views/admin/users/create.blade.php ENDPATH**/ ?>