<?php $__env->startSection('title'); ?>
Oinvoice-Due Invoices
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
                      <a href="<?php echo e(route('portal.index')); ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a   href="<?php echo e(route('profileView.index')); ?>">
                          <i class="fa fa-user"></i>
                          <span>Profile</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active"  href="javascript:;" >
                          <i class="fa fa-file"></i>
                          <span>Invoice</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo e(route('createinvoiceView.index')); ?>">Create New Invoice</a></li>
                          <li><a  href="<?php echo e(route('previousInvoiceView.index')); ?>">Invoices and Quotation</a></li>
                          <li class="active"><a  href="<?php echo e(route('dueInvoiceView.index')); ?>">Due Invoices</a></li>
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
           
            <!-- Prevoius invoicelist table -->
             
<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                        <font size="4"  >
                          <table class="table table-striped  table-hover">
                            <h4 style="text-align:center;" > Due Invoices </h4>
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
                                  <td><a href=""><?php echo e($s->due_date); ?></a></td>
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

      
<?php echo $__env->make('template.portal.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlineInvoice\resources\views/page/portal/user/dueInvoiceList.blade.php ENDPATH**/ ?>