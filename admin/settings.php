<!DOCTYPE html>
<html lang="en">
<?php
    include("../core/inc/config.php");
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php $BLOG_NAME?> - Admin</title>


    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">


    <link href="../assets/css/simple-sidebar.css" rel="stylesheet">


</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Admin
                </a>
            </li>
            <li>
                <a href="#">Dashboard</a>
            </li>
            <li>
                <a href="add_post.php">Add Post</a>
            </li>
            <li>
                <a href="modify_post.php">Modify Post</a>
            </li>
            <li>
                <a href="delete_post.php">Delete Post</a>
            </li>
            <li>
                <a href="settings.php">Settings</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Admin Panel</h1>
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="blogName">Blog NAme</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="blogName" placeholder="<?php $BLOG_NAME ?>"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="body">Body:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="body" placeholder="Enter the body of the blog post..."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="body">Body:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="body" placeholder="Enter the body of the blog post..."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="body">Body:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="body" placeholder="Enter the body of the blog post..."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="body">Body:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="body" placeholder="Enter the body of the blog post..."></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../assets/js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>