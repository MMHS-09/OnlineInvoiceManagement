<?php $__env->startSection('title'); ?>
Oinvoice-Portal-Add admin
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar&content'); ?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="<?php echo e(asset('assets/img/user_picture')); ?>/<?php echo e(session('picture')); ?>" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo e(session('name')); ?></h5>
                    
                  <li class="mt">
                      <a  href="<?php echo e(route('portal.index')); ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>User Access Control</span>
                      </a>
                      <ul class="sub">
                          <li class="active" ><a  href="<?php echo e(route('addAdminView.index')); ?>">Create Admin</a></li>
                          <li><a  href="<?php echo e(route('userListView.index')); ?>">View Users & Admin</a></li>
                          
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a  href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->


      <section id="main-content">
          <section class="wrapper site-min-height">

             <font color="red">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  ⚠️<?php echo e($err); ?> <br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div>
    <?php echo e(session('msg')); ?>

  </div>
</font>
            

              <!--  add admin  -->
              <div id="login-page">
      <div class="container">
      
          
            
            
              <form method="post" class="form-login"  >
                <h3 class="form-login-heading" style="text-align:center;">Create Admin</h3>
               
                <input type="text" class="form-control" placeholder="Name*" name="name" autofocus>
                <br>

                <input type="date" class="form-control" placeholder="DOB* " name="dob" autofocus  >
                <br>
                 <select class="form-control" name="gender" >
  <option value="male"  >Male</option>
  <option value="female"  >Female</option>
  
              </select  >
                <br>

                <input type="email" class="form-control" placeholder="Email Address*" name="email" autofocus>
                <br>

                <input type="number" class="form-control" placeholder="Contact number*" name="phone" autofocus>
                <br>


                <input type="password" class="form-control" placeholder="Password*" name="password" >
                <br>
                <input type="password" class="form-control" placeholder="Confirm Password*" name="cpassword" >
                <label class="checkbox">
                    <!-- <span class="pull-right">
                        <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
    
                    </span> -->
                </label>
              
                <input class="btn btn-theme btn-block" type="submit" name="submit" value="Create" />
                <hr>
                </form>
                
                </div>
    </div>
              <!--   /add admin -->




 




      
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
          <?php $__env->stopSection(); ?>

      
<?php echo $__env->make('template.portal.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlineInvoice\resources\views/page/portal/superadmin/addAdmin.blade.php ENDPATH**/ ?>