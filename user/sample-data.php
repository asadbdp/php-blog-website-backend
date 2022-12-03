<?php 
session_start();
if(isset($_SESSION['username'])){
 include('backend/partials/header-scripts.php');?>

<body class="main-body app sidebar-mini">

    <!-- Loader -->
    <div id="global-loader">
        <img src="backend/assets/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">
        <!-- main-sidebar -->
        <?php include('backend/partials/main-leftsidebar.php'); ?>
        <!-- main-sidebar -->

        <!-- main-content -->
        <div class="main-content app-content">

            <!-- main-sidebar -->
            <?php include('backend/partials/main-header.php'); ?>
            <!-- /main-header -->

            <!-- container -->
            <div class="container-fluid">
                <div class="row row-sm">
                    <div class="col-xl-12">
                        <div class="card mg-b-20">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mg-b-0">Bordered Table</h4>
                                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                                </div>
                                <p class="tx-12 tx-gray-500 mb-2">Example of Valex Bordered Table.. <a href="">Learn
                                        more</a>
                                </p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table text-md-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">SL. No</th>
                                                <th class="border-bottom-0">Full Name</th>
                                                <th class="border-bottom-0">Email</th>
                                                <th class="border-bottom-0">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Asaduzzaman</td>
                                                <td>asaduys@gmail.com</td>
                                                <td>edit</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container -->
        </div>
        <!-- main-content -->

        <!-- Footer opened -->
        <?php include('backend/partials/footer.php');?>
        <!-- Footer closed -->

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <?php include('backend/partials/footer-scripts.php'); 
    
}
    
    else{
        $msg =  "Please, Sign In at First";
        header('Location: signin.php?msg='.$msg); 
    }
?>