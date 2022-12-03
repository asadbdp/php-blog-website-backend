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
                                    <h2 class="text-primary text-center">Add New Post</h2>
                                    
                                    <form action="./blog/post-save.php" method="POST">
                                                                          
                                        <div class="form-group">
                                            <label for="title">Post Title</label> <input class="form-control"
                                                name="title" id="title"  placeholder="Enter your Post Title"
                                                type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="short_des">Short Description</label>
                                            <textarea id="short_des" name="short_des" class="form-control" rows="3" placeholder="Enter your Post Short Description"></textarea>                                           
                                        </div>

                                        <div class="form-group">
                                            <label for="editor">Long Description</label>
                                            <textarea id="editor" name="long_des" class="form-control" placeholder="Enter your Post Description" rows="3"></textarea>                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="cat_name">Category Name</label>
                                            <select for="cat_name" id="cat_name" class="form-control SlectBox">
                                                <option selected>Select Category Name</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Feature Image</label>
                                            <input type="file" class="dropify" name="feature_img" id="image" data-height="100">
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

    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <?php include('backend/partials/footer-scripts.php'); 
    
}
    
    else{
        $msg =  "Please, Sign In at First";
        header('Location: signin.php?msg='.$msg); 
    }
?>