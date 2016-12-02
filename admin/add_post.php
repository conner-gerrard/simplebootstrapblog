<!DOCTYPE html>
<html lang="en">

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


    <!-- PHP CODE FOR ADDING THE POST --!>
    <?php

        if (isset($_POST['submit']))  {
            $body = $_POST['body'];
            $title = $_POST['title'];
            if (!empty($title) || !empty($body)) {
                echo '<div class="alert alert-danger fade in">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Error!</strong> One or more fields was empty.
            </div>';
            } else {

                $user_id = null;
                $sqlStr = "INSERT into blog_posts (blog_title, blog_body, user_id) values(". $title . "," . $body . "," . $user_id .")";
                echo '<div class="alert alert-success fade in">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Success!</strong> Your post was added successfully.<br/>Add another post below or go checkout your post at <a href="#" > PUT A URL HERE CONNER </a>.
                </div>';
            }
        }
    ?>
    <!-- /END PHP CODE FOR ADDING POST --!>
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Add a Post</h1>
                    <p>Fill out the form below to add a post to your blog!</p>
                    <p>Helpful tip! Use the sizer in the bottom right corner of the body box to increase the size!</p>
                    <p>Dont forget you can use HTML tags to add images to your blog.</p>
                    <p>Use this to help you: <br/> <code>"&lt;div class="thumbnail"&gt;<br/> &lt;img src="link to your image" class="img-responsive"&gt;<br/>&lt;/div&gt;"</code></p>
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Title:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" placeholder="Post Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="body">Body:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="body" placeholder="Enter the body of the blog post..."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="submit" class="btn btn-default" value="submit">Submit</button>
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