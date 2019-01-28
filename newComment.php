<?php ob_start(); ?>
<?php include "includes/db.php" ?>

<?php 
if (isset($_GET['movie'])) {
    $the_movie_id = $_GET['movie'];

    if (isset($_POST['submit'])) {
        $author = $_POST['author'];
        $subject = $_POST['subject'];
        $desc = $_POST['description'];

        $query = "INSERT INTO comments(movie_id, comment_author, comment_subject, comment_description) ";
        $query .= "VALUES ('$the_movie_id', '$author', '$subject', '$desc')";

        $addComment = mysqli_query($connection, $query);
        if (!$addComment) {
            die("QUERY FAILED " . mysqli_error($connection));
        } else {
            header("Location: movie.php?movie=" . $the_movie_id);
        }
    }
}
?>

<?php 
if (isset($_GET['show'])) {
    $the_movie_id = $_GET['show'];

    if (isset($_POST['submit'])) {
        $author = $_POST['author'];
        $subject = $_POST['subject'];
        $desc = $_POST['description'];

        $query = "INSERT INTO comments(show_id, comment_author, comment_subject, comment_description) ";
        $query .= "VALUES ('$the_show_id', '$author', '$subject', '$desc')";

        $addComment = mysqli_query($connection, $query);
        if (!$addComment) {
            die("QUERY FAILED " . mysqli_error($connection));
        } else {
            header("Location: show.php?show=" . $the_show_id);
        }
    }
}
?>

<?php 
if (isset($_GET['game'])) {
    $the_movie_id = $_GET['game'];

    if (isset($_POST['submit'])) {
        $author = $_POST['author'];
        $subject = $_POST['subject'];
        $desc = $_POST['description'];

        $query = "INSERT INTO comments(game_id, comment_author, comment_subject, comment_description) ";
        $query .= "VALUES ('$the_game_id', '$author', '$subject', '$desc')";

        $addComment = mysqli_query($connection, $query);
        if (!$addComment) {
            die("QUERY FAILED " . mysqli_error($connection));
        } else {
            header("Location: game.php?game=" . $the_game_id);
        }
    }
}
?>

<?php 
if (isset($_GET['book'])) {
    $the_book_id = $_GET['book'];

    if (isset($_POST['submit'])) {
        $author = $_POST['author'];
        $subject = $_POST['subject'];
        $desc = $_POST['description'];

        $query = "INSERT INTO comments(book_id, comment_author, comment_subject, comment_description) ";
        $query .= "VALUES ('$the_book_id', '$author', '$subject', '$desc')";

        $addComment = mysqli_query($connection, $query);
        if (!$addComment) {
            die("QUERY FAILED " . mysqli_error($connection));
        } else {
            header("Location: book.php?book=" . $the_book_id);
        }
    }
}
?>

<?php include "includes/header.php" ?>
<?php include "includes/nav.php"; ?>
   
    <div class="container">
        <h1 style="text-align: center; color: #FFCB9A;">Create a new Comment</h1>
        <div class="row">
            <div style="width: 40%; margin: 25px auto">
                <form action="" method="POST">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Author" name="author">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Subject" name="subject">
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