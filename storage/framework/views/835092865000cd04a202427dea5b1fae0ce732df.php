<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('assets/css')); ?>/bootstrap.css" rel="stylesheet">  
    <!--external css-->
    <link href="<?php echo e(asset('assets/font-awesome/css')); ?>/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('assets/css')); ?>/style.css" rel="stylesheet"> 
    <link href="<?php echo e(asset('assets/css')); ?>/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?php echo e(route('portal.index')); ?>" class="logo"><b>Online invoicE</b></a>
            <!--logo end-->
            
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo e(route('logout.index')); ?>">Logout</a></li>
              </ul>
            </div>
            
        </header>
      <!--header end-->
      
      <?php echo $__env->yieldContent('sidebar&content'); ?>

      
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> <!--  jquery cdn-->

    <script src="<?php echo e(asset('assets/js')); ?>/jquery.js"></script>
    <script src="<?php echo e(asset('assets/js')); ?>/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('assets/js')); ?>/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="<?php echo e(asset('assets/js')); ?>/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo e(asset('assets/js')); ?>/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo e(asset('assets/js')); ?>/jquery.scrollTo.min.js"></script>
    <script src="<?php echo e(asset('assets/js')); ?>/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/js')); ?>/my.js" type="text/javascript"></script>

    





    


    <!--common script for all pages-->
    <script src="<?php echo e(asset('assets/js')); ?>/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php /**PATH C:\xampp\htdocs\onlineInvoice\resources\views/template/portal/user.blade.php ENDPATH**/ ?>