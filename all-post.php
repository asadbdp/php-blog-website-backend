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
                <div class="row row-sm">
                    <div class="col-xl-12">
                        <div class="card mg-b-20">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mg-b-0">
                                        <?php 
                                        if(isset($_GET['msg'])){
                                            echo $_GET['msg'];
                                        }
                                        else echo "All Post";
                                    ?>


                                    </h4>
                                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                                </div>
                                <p class="tx-12 tx-gray-500 mb-2"><a href="./add-post.php" class="btn btn-success">Add New Post</a>
                                </p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table text-md-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">SL. No</th>
                                                <th class="border-bottom-0">Post Title</th>
                                                <th class="border-bottom-0">Short Description</th>
                                                <th class="border-bottom-0">Long Description</th>
                                                <th class="border-bottom-0">Feature Image</th>
                                                <th class="border-bottom-0">Category Name</th>
                                                <th class="border-bottom-0">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $serial = 1;
                                            $sql = "SELECT * FROM post";
                                            $result = $con->query($sql);
                                            
                                            while($row = mysqli_fetch_assoc($result)){
                                                ?>
                                            <tr>
                                                <td><?php echo $serial;?></td>
                                                <td><?php echo $row['title'] ;?></td>
                                                <td><?php echo $row['short_des'] ;?></td>
                                                <td><?php echo $row['long_des'] ;?></td>
                                                <td><?php echo $row['feature_img'] ;?></td>
                                                <td><?php echo $row['cat_name'] ;?></td>
                                                <td><a href="./post-edit.php?id=<?php echo $row['id']?>"
                                                        class="btn btn-sm btn-info d-inline-flex">Edit</a> <a href="./blog/post-delete.php?id=<?php echo $row['id']?>"
                                                        class="btn btn-danger btn-sm d-inline-flex" onclick="return confirm('Are you Sure to Delete it?')">Delete</a></td>
                                            </tr>

                                            <?php
                                            $serial++;
                                            }
                                            ?>


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