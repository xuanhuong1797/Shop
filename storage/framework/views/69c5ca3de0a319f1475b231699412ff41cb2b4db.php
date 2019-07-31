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
<?php $__env->startSection('selectPage','Category'); ?>
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
            <h4>Create new category</h4>
        </div>
        <form method="post" action="<?php echo e(route('admin.categories.create')); ?>">
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
          
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
    </div>
  </div>



</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PHP\PHP07\E-Shopper\resources\views/admin/categories/create.blade.php ENDPATH**/ ?>