	<?php include('partials/header-scripts.php');?>

	<body class="main-body app sidebar-mini">

		<!-- Loader -->
		<div id="global-loader">
			<img src="backend/assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- Page -->
		<div class="page">
			<!-- main-sidebar -->
			<?php include('partials/main-leftsidebar.php'); ?>
			<!-- main-sidebar -->

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- main-sidebar -->
					<?php include('partials/main-header.php'); ?>			
				<!-- /main-header -->

				<!-- container -->
				<div class="container-fluid">

					<!-- breadcrumb -->
					<?php include('partials/breadcrumb.php');?>
					<!-- /breadcrumb -->

					<!-- row -->
					<?php include('partials/today-order-status.php')?>
					
					<!-- row closed -->

					<!-- row opened -->
					<?php include('partials/order-status.php')?>
					<!-- row closed -->

					<!-- row opened -->
					<?php include('partials/recent-customer.php') ?>
					<!-- row close -->

					<!-- row opened -->
					<?php include('partials/country-part.php')?>
					<!-- /row -->
				</div>
				<!-- /Container -->
			</div>
			<!-- /main-content -->

			<!-- Sidebar-right-->
			<?php include('partials/right-sidebar.php')?>
			<!--/Sidebar-right-->

			<!-- Message Modal -->
			<?php include('partials/message-modal.php') ?>

			<!--Video Modal -->
			<?php include('partials/video-modal.php')?>
			<!-- modal -->

			<!-- Audio Modal -->
			<?php include('partials/audio-modal.php');?>
			<!-- modal -->

			<!-- Footer opened -->
			<?php include('partials/footer.php');?>
			<!-- Footer closed -->

		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<?php include('partials/footer-scripts.php') ?>