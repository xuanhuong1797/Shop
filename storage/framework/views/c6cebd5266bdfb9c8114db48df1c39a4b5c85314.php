  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="<?php echo e(route('admin.index')); ?>"><i class="fa fa-link"></i> <span>Home</span></a></li>
        <li><a href="<?php echo e(route('admin.users.showUser')); ?>"><i class="fa fa-link"></i> <span>User</span></a></li>
        <li><a href="<?php echo e(route('admin.categories.show')); ?>"><i class="fa fa-link"></i> <span>Category</span></a></li>
        <li><a href="<?php echo e(route('admin.brands.show')); ?>"><i class="fa fa-link"></i> <span>Brand</span></a></li>
        <li><a href="<?php echo e(route('admin.products.show')); ?>"><i class="fa fa-link"></i> <span>Product</span></a></li>
        <li><a href="<?php echo e(route('admin.orders.show')); ?>"><i class="fa fa-link"></i> <span>Order</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside><?php /**PATH D:\PHP\PHP07\E-Shopper\resources\views/admin/partials/sidebar.blade.php ENDPATH**/ ?>