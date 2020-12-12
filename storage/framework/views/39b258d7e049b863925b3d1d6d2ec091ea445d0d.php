<?php $__env->startSection('title'); ?>
Oinvoice-Portal
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
                      <a class="active" href="<?php echo e(route('portal.index')); ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a  href="<?php echo e(route('profileView.index')); ?>">
                          <i class="fa fa-user"></i>
                          <span>Profile</span>
                      </a>
                  </li>
                 <li class="sub-menu">
                      <a   href="javascript:;" >
                          <i class="fa fa-file"></i>
                          <span>Invoice</span>
                      </a>
                      <ul class="sub">
                          <li  ><a  href="<?php echo e(route('createinvoiceView.index')); ?>">Create New Invoice</a></li>
                          <li><a  href="<?php echo e(route('previousInvoiceView.index')); ?>">Invoices and Quotation</a></li>
                          <li ><a  href="<?php echo e(route('dueInvoiceView.index')); ?>">Due Invoices</a></li>
                          <li ><a  href="<?php echo e(route('draftInvoiceView.index')); ?>">Drafts</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a  href="<?php echo e(route('addProductView.index')); ?>" >
                          <i class="fa fa-tasks"></i>
                          <span>Products</span>
                      </a>
                      
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
            
           
            <div class="row mt">
              <div class="col-lg-12">
             
              
              <?php 
              $sum_total = 0 ;
              $sum_amount_paid = 0 ;
              $sum_due_balance = 0 ;

              $sum_total_this = 0 ;
              $sum_amount_paid_this = 0 ;
              $sum_due_balance_this = 0 ;

              
              
              $todayDate = date("Y-m-d");
              $this_month = date("m",strtotime($todayDate));
              //echo $todayDate;
              $this_month_v = date("F",strtotime($todayDate));
              $this_year_v = date("Y",strtotime($todayDate));

              ?>

               <?php $__currentLoopData = $invoiceSum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
               <?php 
               $sum_total += $s->total ;
               $sum_amount_paid += $s->amount_paid ;
               $sum_due_balance += $s->due_balance ;
               $date = $s->date ;
               $month = date("m",strtotime($date));
               if($this_month == $month)
               {
                $sum_total_this += $s->total ;
               $sum_amount_paid_this += $s->amount_paid ;
               $sum_due_balance_this += $s->due_balance ;

               }


               ?>
              
              
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <!-- ******** total **********<br>
              total <?php echo e($sum_total); ?> <br>
              amount paid <?php echo e($sum_amount_paid); ?> <br>
              due balance <?php echo e($sum_due_balance); ?> <br>
              ***** this month *****<br>
              total <?php echo e($sum_total_this); ?> <br>
              amount paid <?php echo e($sum_amount_paid_this); ?> <br>
              due balance <?php echo e($sum_due_balance_this); ?> <br>
              this month <?php echo e($this_month); ?> <br> -->
              
              </div>
            </div>

        

          <div class="col-md-4 col-sm-1 col-md-offset-1 box0">
                        <div style="background: #7fa5e3 ;color: white" class="box1">

                  
                 <h3 style="color: yellow" >Total : <?php echo e($sum_total_this); ?> <?php echo e(session('c_currency')); ?></h3>
                 <h3  >Collection: <?php echo e($sum_amount_paid_this); ?> <?php echo e(session('c_currency')); ?></h3>
                 <h3  >Due: <?php echo e($sum_due_balance_this); ?> <?php echo e(session('c_currency')); ?></h3>
                        </div>
                  <h4 align="center"> <span class="fa fa-calendar"></span> <?php echo e($this_month_v); ?>,<?php echo e($this_year_v); ?>  </h4>
                      </div>

          <div class="col-md-4 col-sm-1 col-md-offset-1 box0">
                      <div style="background: #45de9e ;color: white" class="box1">

                  
                 <h3  >Total : <?php echo e($sum_total); ?> <?php echo e(session('c_currency')); ?></h3>
                 <h3  >Collection: <?php echo e($sum_amount_paid); ?> <?php echo e(session('c_currency')); ?></h3>
                 <h3 style="color: red" >Due: <?php echo e($sum_due_balance); ?> <?php echo e(session('c_currency')); ?></h3>
                        </div>
                  <h4 align="center"><span class="fa fa-paper-plane"></span> Overall</h4>
                      </div>
                      <br>
                      <br>


                       <!-- Prevoius invoicelist table -->
             
<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                        <font size="4"  >
                          <table class="table table-striped  table-hover">
                            <h4 style="text-align:center;" > Due Invoices</h4>
                            <hr>
                              <thead>
                              <tr >
                                  <th><i class="fa fa-bullhorn"></i> Id</th>
                                  <th><i class="fa fa-bullhorn"></i> Type</th>
                                  <th><i class=""></i> To</th>
                                  <th><i class=" "></i>Issue Date</th>
                                  <th><i class=" "></i>Deadline</th>
                                  <th><i class=" fa fa-edit"></i> Total</th>
                                  <th><i class=" fa fa-edit"></i> Due </th>
                                  <th><i class=" fa fa-edit"></i> Update </th>
                                  <th><i class=" fa fa-edit"></i> Delete </th>
                                  <th></th>
                              </tr>
                              </thead>

                              <tbody>
                                 <?php $__currentLoopData = $invoiceList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                              <tr>
                                  <td><a ><?php echo e($s->invoice_number); ?></a></td>
                                  <td><a ><?php echo e($s->invoice_type); ?></a></td>
                                  <td><a ><?php echo e($s->invoice_to); ?></a></td>
                                  <td><a href=""><?php echo e($s->date); ?></a></td>
                                  <td>
                                    <?php if($s->due_date === $todayDate): ?>
                                    <a href=""><mark style="background-color: yellow;color: green;" ><?php echo e($s->due_date); ?></mark></a><?php elseif($s->due_date <= $todayDate): ?>
                                    <a href=""><mark style="background-color: red;color: white;" ><?php echo e($s->due_date); ?></mark></a>
                                    <?php else: ?>
                                    <a href=""><mark style="background-color: green;color: white;" ><?php echo e($s->due_date); ?></mark></a>
                                    <?php endif; ?>
                                  </td>
                                  <td><a ><?php echo e($s->total); ?></a></td>
                                  <td><a ><?php echo e($s->due_balance); ?></a></td>
                                                                   
                                  <td> <a href="<?php echo e(route('invoiceUpdateView',$s->invoice_number )); ?>" class="btn btn-danger btn-xs"><i class="fa fa-edit"></i></a></td>
                                  <td>
                                     
      
           <a class="btn btn-danger btn-xs" href="<?php echo e(route('removeProduct',$s->invoice_number )); ?>" ><i class="fa fa-trash-o "></i></a>
            

        
                                      
                                      
                                  </td>
                              </tr>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
                              </tbody>
                          </table>
                        </font>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

            <!-- /Prevoius invoicelist table -->


                      
      
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
          <?php $__env->stopSection(); ?>

      
<?php echo $__env->make('template.portal.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlineInvoice\resources\views/page/portal/user/index.blade.php ENDPATH**/ ?>