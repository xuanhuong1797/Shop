<?php $__env->startSection('title', 'Admin'); ?>
<?php $__env->startSection('style'); ?>
<style>
  .form-control{
    height: 31px;
  }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('selectPage','Order'); ?>
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
        
        <div class="card-header">
            <i class="fa fa-table"></i> Order Table</div>
        <div class="card-body">
        
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-dark" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Customer name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Order total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($order->id); ?></td>
                                <td>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php if($order->user_id == $user->id): ?>
                                    <?php echo e($user->email); ?>

                                  <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td><?php echo e($order->customer_name); ?></td>
                                <td><?php echo e($order->customer_phone); ?></td>
                                <td><?php echo e($order->address); ?></td>
                                <td><?php echo e($order->order_total); ?></td>
                                <td>
                                  <?php if($order->status == 0): ?>
                                    <span class="glyphicon glyphicon-minus"></span>
                                  <?php elseif($order->status == 1): ?>
                                    <span class="glyphicon glyphicon-ok"></span>
                                  <?php elseif($order->status == 2): ?>
                                    <span class="glyphicon glyphicon-remove"></span>
                                  <?php endif; ?>
                                </td>
                                <td>
                                    <a class="btn btn-primary editBtn" href="<?php echo e(route('admin.orders.confirm',[$order->id])); ?>">Confirm</a>
                                    <a class="btn btn-danger deleteBtn" href="<?php echo e(route('admin.orders.cancel',[$order->id])); ?>">Cancel</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Customer name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Order total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </div>

  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PHP\PHP07\E-Shopper\resources\views/admin/orders/show.blade.php ENDPATH**/ ?>