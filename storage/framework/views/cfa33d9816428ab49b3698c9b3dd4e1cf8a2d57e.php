<?php $__env->startSection('title'); ?>
Oinvoice-Portal-AddProduct
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

            <!-- profile -->
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
  <!-- message -->
                  <?php if(session('msg')): ?>
                <div class="alert alert-success alert-dismissable">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <p align="center" ><strong ><?php echo e(session('msg')); ?>!</strong></p>
            </div>
            <?php endif; ?>
<!-- /message -->
                              <div class="form-group "> <h3  align="center">Add Product</h3> <br>
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess"> Product Name</label>
                                  <div class="col-lg-10">
                                      <input name="product_name" placeholder="*Required"  type="text" class="form-control"  >
                                      <br>
                                  </div>


                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Product Description</label>
                                  <div class="col-lg-10">
                                      <input name="p_description" type="text" class="form-control"  >
                                      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

                                      <br>
                                  </div>

                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Product Price</label>
                                  <div class="col-lg-10">
                                      <input name="p_price" type="number" class="form-controlss"  >
                                      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

                                      <br>
                                  </div>




                                  <div class="col-lg-10">

                                      <br>
                                      <input class="btn btn-primary "  type="submit" name="submit" value="Add" style="display: block; margin: 0 auto;"/>

                                  </div>

</div>
                            </div>
                        </div>





              </div><!-- /col-lg-12 -->
            </div><!-- /row -->
          </form>
            <!-- /profile -->




            <!--productList table -->
<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4 style="text-align:center;" > My Products</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Id</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Name</th>
                                  <th><i class=""></i> Price</th>
                                  <th><i class=""></i> Description</th>
                                  <th><i class=" fa fa-edit"></i> Edit</th>
                                  <th><i class=" fa fa-edit"></i> Delete</th>
                                  <th></th>
                              </tr>
                              </thead>

                              <tbody>
                                 <?php $__currentLoopData = $productList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                  <td><a ><?php echo e($s->p_id); ?></a></td>
                                  <td><a href=""><?php echo e($s->p_name); ?></a></td>
                                  <td><a href=""><?php echo e($s->p_price); ?></a></td>
                                  <td><a ><?php echo e($s->p_description); ?></a></td>

                                  <td> <a href="<?php echo e(route('productUpdateView',$s->p_id )); ?>" class="btn btn-danger btn-xs"><i class="fa fa-edit"></i></a></td>
                                  <td>


           <a class="btn btn-danger btn-xs" href="<?php echo e(route('removeProduct',$s->p_id )); ?>" ><i class="fa fa-trash-o "></i></a>





                                  </td>
                              </tr>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
<!--/productList table -->
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
          <?php $__env->stopSection(); ?>


<?php echo $__env->make('template.portal.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlineInvoice\resources\views/page/portal/user/addproduct.blade.php ENDPATH**/ ?>