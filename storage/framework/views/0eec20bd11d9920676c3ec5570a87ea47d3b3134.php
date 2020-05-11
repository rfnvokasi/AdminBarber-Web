<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Barber
  </title>
  <link rel="icon" type="image/png" href="<?php echo e(asset('login/images/logo2.png')); ?>"/>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link  rel="stylesheet" href="<?php echo e(asset('admin/assets/css/bootstrap.min.css')); ?>" />
  <link rel="stylesheet"  href="<?php echo e(asset('admin/assets/css/now-ui-dashboard.css?v=1.5.0')); ?>"  />

  <link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/cp/bootstrap-clockpicker.min.css')); ?>">
</head>

<body class="">
  <div class="wrapper ">

      <!-- SIDEBAR -->
      <?php echo $__env->make('layouts.includes._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- End SIDEBAR-->

        <div class="main-panel" id="main-panel">
      
      <!-- Navbar -->
      <?php echo $__env->make('layouts.includes._navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- End Navbar -->
      
      <!--Content-->
      <?php echo $__env->yieldContent('content'); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!--End Content -->

    <!--Footer-->
    <?php echo $__env->make('layouts.includes._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--EndFooter-->

    </div>
  </div>

  

  <script type="text/javascript">
    $('.date').datepicker({  
       format: 'dd/mm/yyyy'
     });  
    </script>  
<script type="text/javascript">
    $('.timepicker').datetimepicker({
        format: 'HH:mm'
    }); 
</script>

<script type="text/javascript" src="<?php echo e(asset('admin/cp/bootstrap-clockpicker.min.js')); ?>"></script>

<script type="text/javascript">
$('.clockpicker').clockpicker()
	.find('input').change(function(){
		// TODO: time changed
		console.log(this.value);
	});
$('#demo-input').clockpicker({
	autoclose: true
});

if (something) {
	// Manual operations (after clockpicker is initialized).
	$('#demo-input').clockpicker('show') // Or hide, remove ...
			.clockpicker('toggleView', 'minutes');
}
</script>
  <!--   Core JS Files   -->
  <script src="<?php echo e(asset('admin/assets/js/core/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/assets/js/core/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/assets/js/core/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/assets/js/plugins/perfect-scrollbar.jquery.min.js')); ?>"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo e(asset('admin/assets/js/plugins/chartjs.min.js')); ?>"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo e(asset('admin/assets/js/plugins/bootstrap-notify.js')); ?>"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo e(asset('admin')); ?>/assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo e(asset('admin')); ?>/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>

  <script type="text/javascript" src="<?php echo e(asset('admin/cp/dist/bootstrap-clockpicker.min.js')); ?>"></script>
 
</body>

</html><?php /**PATH C:\xampp\htdocs\AdminBarber\resources\views/layouts/master.blade.php ENDPATH**/ ?>