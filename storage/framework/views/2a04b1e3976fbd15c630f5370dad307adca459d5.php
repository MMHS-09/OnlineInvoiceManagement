<?php $__env->startSection('title'); ?>
Oinvoice-Portal-UserList
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
                      <a class="active"  href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>User Access Control</span>
                      </a>
                      <ul class="sub">
                         
                          <li class="active"  ><a  href="<?php echo e(route('userListViewA.index')); ?>">View Users</a></li>
                          
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
            
<!--userList table -->
<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4 style="text-align:center;" > USER LIST</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Id</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Name</th>
                                  <th><i class=""></i> DOB</th>
                                  <th><i class=" "></i> Gender</th>
                                  <th><i class=" "></i> Email</th>
                                  <th><i class=" "></i> Phone</th>
                                  <th><i class=" "></i> Products</th>
                                  <th><i class=" fa fa-edit"></i> BAN</th>
                                  <th></th>
                              </tr>
                              </thead>

                              <tbody>
                                 <?php $__currentLoopData = $userList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                              <tr>
                                  <td><a ><?php echo e($s->id); ?></a></td>
                                  <td><a href=""><?php echo e($s->name); ?></a></td>
                                  <td><a ><?php echo e($s->dob); ?></a></td>
                                  <td><a ><?php echo e($s->gender); ?></a></td>
                                  <td><a ><?php echo e($s->email); ?></a></td>
                                  <td><a ><?php echo e($s->phone); ?></a></td>
                                  
                                  <td> <button class="btn btn-danger btn-xs">➠</button></td>
                                  <td>
                                     
      
           <a class="btn btn-danger btn-xs" href="<?php echo e(route('removeUser',$s->id )); ?>" ><i class="fa fa-trash-o "></i></a>
            

        
                                      
                                      
                                  </td>
                              </tr>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
<!--/userList table -->
            




 




      
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
          <?php $__env->stopSection(); ?>

      
<?php echo $__env->make('template.portal.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlineInvoice\resources\views/page/portal/admin/userList.blade.php ENDPATH**/ ?>