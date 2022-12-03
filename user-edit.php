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
                <?php 
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM user_registration WHERE id =$id";
                    $result = $con->query($sql);
                    $row = mysqli_fetch_assoc($result);
                    
                
                ?>

                <div class="container py-5">
                    <div class="row">
                        <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                            <div class="card-sigin">
                                <div class="main-signup-header bg-white p-5 rounded">
                                    <h2 class="text-primary text-center">Edit User</h2>
                                    
                                    <form action="./user/user-update.php" method="POST">
                                        <input class="form-control" name="id" value="<?php echo $row['id'];?>" type="hidden">                                   
                                        <div class="form-group">
                                            <label for="fullname">Firstname &amp; Lastname</label> <input class="form-control"
                                                name="fullname" id="fullname" value="<?php echo $row['fullname'];?>" placeholder="Enter your firstname and lastname"
                                                type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label> <input class="form-control" id="email" value="<?php echo $row['email'];?>" name="email"
                                                placeholder="Enter your email" type="email">
                                        </div>
                                        
                                        <button name="update" class="btn btn-main-primary btn-block">Update</button>

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