<?php $__env->startSection('title', 'Admin'); ?>
<?php $__env->startSection('style'); ?>
<style>
  .form-control{
    height: 31px;
  }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('selectPage','Product'); ?>
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
            <a class="btn btn-success" href="<?php echo e(route('admin.products.create')); ?>">Create New Product</a>
        </div>
        <div class="card-header">
            <i class="fa fa-table"></i> Product Table</div>
        <div class="card-body">
        
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-dark" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($product->id); ?></td>
                                <td>
                                    <img src="/<?php echo e($product->imageproducts->first()->image_url); ?>" alt="" style="width: 200px;height: 200px;display: block;margin: auto">
                                </td>
                                <td><?php echo e($product->name); ?></td>
                                <td><?php echo e($product->price); ?></td>
                                <td><?php echo e($product->description); ?></td>
                                <td><?php echo e($product->quantity); ?></td>
                                <td>
                                    <a class="btn btn-primary editBtn" href="<?php echo e(route('admin.products.edit',[$product->id])); ?>">Edit</a>
                                    <a class="btn btn-danger deleteBtn" href="<?php echo e(route('admin.products.delete',[$product->id])); ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </div>

  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PHP\PHP07\E-Shopper\resources\views/admin/products/show.blade.php ENDPATH**/ ?>