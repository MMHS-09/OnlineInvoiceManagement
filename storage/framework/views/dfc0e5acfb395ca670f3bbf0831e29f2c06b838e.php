<?php $__env->startSection('title'); ?>
Oinvoice-Login
<?php $__env->stopSection(); ?>
<?php $__env->startSection('unsigned'); ?>
	  <div id="login-page">
	  	<div class="container">
	  	
		      
		       
      					
						    				
      				
            

					
		        		<div class="login-wrap">
	<!-- validation -->	        	
					<?php if(count($errors) > 0): ?>
		        		<div class="alert alert-danger alert-dismissable">
						 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						 <p align="center" ><strong >
						 	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  					⚠️<?php echo e($err); ?> <br>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></strong></p> 
						</div>
						<?php endif; ?>
	<!-- /validation -->
	<!-- message -->
		        			<?php if(session('msg')): ?>
		        		<div class="alert alert-danger alert-dismissable">
						 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						 <p align="center" ><strong ><?php echo e(session('msg')); ?>!</strong></p> 
						</div>
						<?php endif; ?>
<!-- /message -->   

		        	<form class="form-login" method="post" >
		        		<h2 class="form-login-heading">sign in now</h2>
		            <input type="text" class="form-control" placeholder="User Name" name="name" autofocus>
		            <br>
		            <input type="password" class="form-control" placeholder="Password" name="password" >
		            <label class="checkbox">
		                <!-- <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
		
		                </span> -->
		            </label>
		            <button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		            
		            <!-- <div class="login-social-link centered">
		            <p>or you can sign in via your social network</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div> -->
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="<?php echo e(route('registration.index')); ?>">
		                    Create an account
		                </a>
		            </div>
		              </form>	
		
		        </div>
		
		          <!-- Modal -->
		          <!-- <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div> -->
		          <!-- modal -->
		
		      	
	  	
	  	</div>
	  </div>
	  <?php $__env->stopSection(); ?>

    
<?php echo $__env->make('template.unsigned.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlineInvoice\resources\views/page/login/index.blade.php ENDPATH**/ ?>