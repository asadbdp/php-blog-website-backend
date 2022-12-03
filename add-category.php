<?php 
session_start();
if(isset($_SESSION['username'])){
include('libs/database/database.php');
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
                
                <div class="container py-5">
                    <div class="row">
                        <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                            <div class="card-sigin">
                                <div class="main-signup-header bg-white p-5 rounded">
                                    <h2 class="text-primary text-center">Add New Category</h2>
                                    
                                    <form action="./blog/category-save.php" method="POST">
                                                                          
                                        <div class="form-group">
                                            <label for="cat_name">Category Name</label> <input class="form-control"
                                                name="cat_name" id="cat_name"  placeholder="Enter your Category name"
                                                type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="cat_short_des">Category Description</label> <input class="form-control" id="cat_short_des" name="cat_short_des"
                                                placeholder="Enter your Category Description" type="text">
                                        </div>
                                        
                                        <button name="create" class="btn btn-main-primary btn-block">Create</button>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End -->


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