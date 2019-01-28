<?php include "includes/db.php" ?>
<?php include "includes/header.php"?>

<?php 
    if(isset($_GET['game'])) {
        $the_game_id = $_GET['game'];
    }
?>

<?php
    $query = "SELECT * FROM games WHERE game_id = {$the_game_id}";
    $selectTheMovie = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($selectTheMovie)) {
        $game_name = $row['game_name'];
        $game_image = $row['game_img'];
        $game_desc = $row['game_description'];
        $game_views = $row['game_views'];
        $game_rating = $row['game_rating'];
    }
?>

<?php
    $game_views = $game_views + 1;
    $query1 = "UPDATE games SET game_views = {$game_views} WHERE game_id = {$the_game_id}";
    $incrementViews = mysqli_query($connection, $query1);
?>

<?php include "includes/nav.php" ?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <p class="lead"><?php echo $game_name; ?></p>
            <div class="list-group">
                <li class="list-group-item active">Info 1</li>
                <li class="list-group-item">Info 1</li>
                <li class="list-group-item">Info 1</li>
            </div>
        </div>
        <div class="col-md-9">
            <div class="thumbnail">
                <img class="img-responsive" src="<?php echo $game_image ?>">
                <div class="caption-full">
                    <h4 class="pull-right">Rating : <?php echo $game_rating ?>/10</h4>
                    <h4><a><?php echo $game_name ?></a></h4>
                    <p><?php echo $game_desc ?></p>
                    
                        <a class="btn btn-lg btn-warning" href="/campgrounds/<%= campground._id %>/edit"><i class="fa fa-film"></i> Edit</a>
                        <a class="btn btn-lg btn-danger"><i class="fa fa-tv"></i> Delete</a>
                </div>
            </div>
            
<!--            COMMENTS           -->
            
            <div class="well">
                <div class="text-right">
                    <a class="btn btn-success" href="newComment.php?game=<?php echo $the_game_id ?>">Add New Comment</a>
                </div>
                <?php
                $query = "SELECT * FROM comments WHERE game_id = {$the_game_id}";
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