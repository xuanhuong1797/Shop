<?php $__env->startSection('title', 'Admin'); ?>
<?php $__env->startSection('style'); ?>
<style>
  .form-control{
    height: 31px;
  }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('selectPage','User'); ?>
<?php $__env->startSection('content'); ?>

  <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
    <div>
      <?php if(Session::has('messenger')): ?>
        <div class="alert alert-info"><?php echo e(Session::get('messenger')); ?></div>
      <?php endif; ?>
    </div>
    
    <div class="card mb-3">
        <div class="create-button">
            <a class="btn btn-success" href="<?php echo e(route('admin.users.createUser')); ?>">Create New User</a>
        </div>
        <div class="card-header">
            <i class="fa fa-table"></i> User Table</div>
        <div class="card-body">
        
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-dark" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($user->id); ?></td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td>
                                    
                                </td>
                                <td>
                                    <a class="btn btn-primary editBtn" href="<?php echo e(route('admin.users.editUser',[$user->id])); ?>">Edit</a>
                                    <a class="btn btn-danger deleteBtn" href="<?php echo e(route('admin.users.deleteUser',[$user->id])); ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </div>

  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PHP\PHP07\E-Shopper\resources\views/admin/users/show.blade.php ENDPATH**/ ?>