<?php ob_start(); ?>
<?php include "includes/db.php" ?>

<?php 
if (isset($_GET['question'])) {
    $the_question_id = $_GET['question'];

    if (isset($_POST['submit'])) {
        $author = $_POST['author'];
        $desc = $_POST['description'];

        $query = "INSERT INTO livechatcomments(question_id, post_author, post_description) ";
        $query .= "VALUES ('$the_question_id', '$author', '$desc')";

        $addComment = mysqli_query($connection, $query);
        if (!$addComment) {
            die("QUERY FAILED " . mysqli_error($connection));
        } else {
            header("Location: liveChat.php");
        }
    }
}
?>

<?php include "includes/header.php" ?>
<?php include "includes/nav.php"; ?>
   
    <div class="container">
        <h1 style="text-align: center; color: #FFCB9A;">Your Thoughts?</h1>
        <div class="row">
            <div style="width: 40%; margin: 25px auto">
                <form action="" method="POST">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Author" name="author">
                    </div>
                    <div class="form-group">
                        <textarea rows="7" class="form-control" type="textarea" placeholder="Content" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
                    </div>
                </form>
                <a href="/campgrounds">Go Back</a>
            </div>
        </div>
    </div>
<?php include "includes/footer.php" ?>