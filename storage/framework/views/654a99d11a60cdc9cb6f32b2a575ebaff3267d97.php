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
<?php $__env->startSection('selectPage','Product'); ?>
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
            <h4>Create new product</h4>
        </div>
        <form method="post" action="<?php echo e(route('admin.products.create')); ?>" 
        enctype="multipart/form-data">
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
            <label for="price">Price</label>
            <input type="text" name="price" value="<?php echo e(old('price')); ?>"
            class="form-control <?php if ($errors->has('price')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('price'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
            id="price" placeholder="Enter Price">
            <?php if ($errors->has('price')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('price'); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" placeholder="Enter Description"
            class="form-control <?php if ($errors->has('description')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('description'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
            id="description" rows="3"><?php echo e(old('description')); ?></textarea>
            <?php if ($errors->has('description')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('description'); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
          </div>
          <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" value="<?php echo e(old('quantity')); ?>"
            class="form-control <?php if ($errors->has('quantity')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('quantity'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
            id="quantity" placeholder="Enter Quantity">
            <?php if ($errors->has('quantity')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('quantity'); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
          </div>
          <div class="form-group">
            <label for="brand">Brand</label>
            <select class="form-control <?php if ($errors->has('brand')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('brand'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
            name="brand" id="brand">
              <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php if ($errors->has('brand')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('brand'); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
          </div>
          
          <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control <?php if ($errors->has('category')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('category'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
            name="category" id="category">
              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php if ($errors->has('category')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('category'); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
          </div>
          
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" value="<?php echo e(old('image')); ?>"
            class="form-control <?php if ($errors->has('image')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('image'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
            name="image" id="image" required="true">
            <?php if ($errors->has('image')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('image'); ?>
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
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PHP\PHP07\E-Shopper\resources\views/admin/products/create.blade.php ENDPATH**/ ?>