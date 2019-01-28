<?php include "includes/db.php" ?>
<?php include "includes/header.php"?>

<?php 
    if(isset($_GET['show'])) {
        $the_show_id = $_GET['show'];
    }
?>

<?php
    $query = "SELECT * FROM shows WHERE show_id = {$the_show_id}";
    $selectTheShow = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($selectTheShow)) {
        $show_name = $row['show_name'];
        $show_image = $row['show_img'];
        $show_desc = $row['show_description'];
        $show_views = $row['show_views'];
    }
?>

<?php
    $show_views = $show_views + 1;
    $query1 = "UPDATE shows SET show_views = {$show_views} WHERE show_id = {$the_show_id}";
    $incrementViews = mysqli_query($connection, $query1);
?>

<?php include "includes/nav.php" ?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <p class="lead"><?php echo $show_name; ?></p>
            <div class="list-group">
                <li class="list-group-item active">Universe</li>
                <li class="list-group-item">Home</li>
                <li class="list-group-item">Landing</li>
            </div>
        </div>
        <div class="col-md-9">
            <div class="thumbnail">
                <img class="img-responsive" src="<?php echo $show_image ?>">
                <div class="caption-full">
                    
                    <h4><a><?php echo $show_name ?></a></h4>
                    <p><?php echo $show_desc ?></p>
                    
                        <a class="btn btn-lg btn-warning" href="/campgrounds/<%= campground._id %>/edit"><i class="fa fa-film"></i> Edit</a>
                        <a class="btn btn-lg btn-danger"><i class="fa fa-tv"></i> Delete</a>
                </div>
            </div>
            
<!--            COMMENTS           -->
            
            <div class="well">
                <div class="text-right">
                    <a class="btn btn-success" href="newComment.php?show=<?php echo $the_show_id ?>">Add New Comment</a>
                </div>
                <?php
                $query = "SELECT * FROM comments WHERE show_id = {$the_show_id}";
                $getAllComments = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($getAllComments)) {
                    $author = $row['comment_author'];
                    $subject = $row['comment_subject'];
                    $desc = $row['comment_description'];
                ?>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h4><?php echo $author; ?></h4>
                        <strong><?php echo $subject ?></strong>
                        <span class="pull-right">10 days ago</span>
                        <p><?php echo $desc; ?></p>
                            <a class="btn btn-sm btn-warning" href="/campgrounds/<%= campground._id %>/comments/<%= comment._id %>/edit">Edit</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"?>
