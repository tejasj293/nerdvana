<?php include "includes/header.php"; ?>
<?php include "includes/db.php"; ?>

<?php include "includes/nav.php"; ?>

<?php
    if (isset($_GET['universe'])) {
        $universe_id = $_GET['universe'];
    }
?>

<?php
    $query = "SELECT * FROM livechat WHERE universe_id = {$universe_id}";
    $getQuestion = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($getQuestion)) {
        $question_id = $row['question_id'];
        $question = $row['question'];
    }
?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <p class="lead">Question Of The Day</p>
            <div class="list-group">
                <li class="list-group-item active">Info 1</li>
                <li class="list-group-item">Info 1</li>
                <li class="list-group-item">Info 1</li>
            </div>
        </div>
        
        <div class="col-md-9">
            <div class="well">
                <div class="row">
                    <div class="container">
                        <h1><?php echo $question ?></h1>
                    </div>
                </div>
            </div>
            
            <div class="well">
                <div class="text-right">
                    <a class="btn btn-success" href="liveComment.php?question=<?php echo $question_id ?>">Your Thoughts?</a>
                </div>
                <?php
                $query = "SELECT * FROM livechatcomments WHERE question_id = {$question_id}";
                $getAllComments = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($getAllComments)) {
                    $author = $row['post_author'];
                    $desc = $row['post_description'];
                ?>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <strong><?php echo $author ?></strong>
                        <span class="pull-right">10 days ago</span>
                        <p><?php echo $desc; ?></p>
                        <a class="btn btn-sm btn-warning" href="/campgrounds/<%= campground._id %>/comments/<%= comment._id %>/edit">Edit</a>
                        <hr>
                    </div>
                </div>
                <?php } ?>
            </div>
            
        </div>
    </div>
</div>
