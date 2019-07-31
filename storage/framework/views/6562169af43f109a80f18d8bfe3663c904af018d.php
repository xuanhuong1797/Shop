<?php $__env->startSection('title', 'Admin'); ?>
<?php $__env->startSection('style'); ?>
<style>
  .form-control{
    height: 31px;
  }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('selectPage','Category'); ?>
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
            <a class="btn btn-success" href="<?php echo e(route('admin.categories.create')); ?>">Create New Category</a>
        </div>
        <div class="card-header">
            <i class="fa fa-table"></i> Category Table</div>
        <div class="card-body">
        
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-dark" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($category->id); ?></td>
                                <td><?php echo e($category->name); ?></td>
                                <td>
                                    <a class="btn btn-primary editBtn" href="<?php echo e(route('admin.categories.edit',[$category->id])); ?>">Edit</a>
                                    <a class="btn btn-danger deleteBtn" href="<?php echo e(route('admin.categories.delete',[$category->id])); ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </div>

  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PHP\PHP07\E-Shopper\resources\views/admin/categories/show.blade.php ENDPATH**/ ?>