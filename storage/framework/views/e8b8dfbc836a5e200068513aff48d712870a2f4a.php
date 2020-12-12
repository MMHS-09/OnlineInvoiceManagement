<?php $__env->startSection('title'); ?>
Oinvoice-Portal-UpdateProduct
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
                      <a class="active" href="<?php echo e(route('addProductView.index')); ?>" >
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
           <!-- update -->
            <form method="post">
           
             <div class="row mt">
              <div class="col-lg-12">
                


                          <div class="form-horizontal tasi-form" >
                            <div class="form-panel">
                               <!-- validation -->           
          <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger alert-dismissable">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <p align="center" ><strong ><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            ⚠️<?php echo e($err); ?> <br>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></strong></p> 
            </div>
            <?php endif; ?>
  <!-- /validation -->
                              <div class="form-group "> <h3  align="center">Update Product</h3> <br>
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess"> Product Name</label>
                                  <div class="col-lg-10">
                                      <input name="product_name"  type="text" class="form-control" value="<?php echo e($productByid[0]->p_name); ?>" placeholder="*Required" >
                                      <br>
                                  </div>


                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Product Description</label>
                                  <div class="col-lg-10">
                                      <input name="p_description" type="text" class="form-control" value="<?php echo e($productByid[0]->p_description); ?>" >
                                      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                      
                                      <br>
                                  </div>

                                   <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Product Price</label>
                                  <div class="col-lg-10">
                                      <input name="p_price" type="number" class="form-controlss" value="<?php echo e($productByid[0]->p_price); ?>" >
                                      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                      
                                      <br>
                                  </div>

                                 

                                 
                                  <div class="col-lg-10">
                                      
                                      <br>
                                      <input class="btn btn-primary "  type="submit" name="submit" value="Update" style="display: block; margin: 0 auto;"/>
                                      
                                  </div>

</div>
                            </div>
                        </div>

                          
                     

              
              </div><!-- /col-lg-12 -->
            </div><!-- /row -->
          </form>
            <!-- /update -->




    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
          <?php $__env->stopSection(); ?>

      
<?php echo $__env->make('template.portal.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlineInvoice\resources\views/page/portal/user/updateproduct.blade.php ENDPATH**/ ?>