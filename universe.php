<?php include "includes/db.php" ?>
<?php include "includes/header.php"?>

<!-- NAVIGATION BAR -->
<?php include "includes/nav.php" ?>

<?php 
    if (isset($_GET['universe'])) {
        $the_universe_id = $_GET['universe'];
    }
?>

<?php 
    $query1 = "SELECT * FROM universe WHERE universe_id = {$the_universe_id}";
    $select_universe = mysqli_query($connection, $query1);
    while ($row = mysqli_fetch_assoc($select_universe)) {
        $universe_name = $row['universe_name'];
        $universe_image = $row['universe_img'];
        $universe_desc = $row['universe_description'];
        $universe_views = $row['universe_views'];
    }
?>

<?php
    $universe_views = $universe_views + 1;
    $query1 = "UPDATE universe SET universe_views = {$universe_views} WHERE universe_id = {$the_universe_id}";
    $incrementViews = mysqli_query($connection, $query1);
?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?php echo "<p class='lead'>{$universe_name}</p>"; ?>
            <div class="list-group">
                <li class="list-group-item active">Info 1</li>
                <li class="list-group-item">Info 1</li>
                <li class="list-group-item">Info 1</li>
            </div>
        </div>
        <div class="col-md-9">
            <div class="thumbnail">
                <img class="img-responsive" src="<?php echo $universe_image; ?>">
                <div class="caption-full">
                    <h4><a><?php echo $universe_name; ?></a></h4>
                    <p><?php echo $universe_desc; ?></p>
                    
                        <a class="uni_btn btn btn-lg btn-warning" href="movieList.php?universe=<?php echo $the_universe_id; ?>"><i class="fa fa-film"></i> Movies</a>
                        <a href="showList.php?universe=<?php echo $the_universe_id; ?>" class="uni_btn btn btn-lg btn-danger"><i class="fa fa-tv"></i> TV Series</a>
                        <a class="uni_btn btn btn-lg btn-primary" href="bookList.php?universe=<?php echo $the_universe_id; ?>"><i class="fa fa-book"></i> Comics</a>
                        <a class="uni_btn btn btn-lg btn-success" href="gameList.php?universe=<?php echo $the_universe_id; ?>"><i class="fa fa-gamepad"></i> Games</a>
                        <a class="uni_btn btn btn-lg btn-warning" href="movieList.php"><i class="fa fa-puzzle-piece"></i> Quiz</a>
                </div>
            </div>
<!--
            <div class="well">
                <div class="text-right">
                    <a class="btn btn-success" href="/campgrounds/<%= campground._id %>/comments/new">Add New Comment</a>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <strong></strong>
                        <span class="pull-right">10 days ago</span>
                        <p></p>
                            <a class="btn btn-xs btn-warning" href="/campgrounds/<%= campground._id %>/comments/<%= comment._id %>/edit">Edit</a>
                    </div>
                </div>
            </div>
-->
        </div>
    </div>
</div>

<?php include "includes/footer.php"?>
