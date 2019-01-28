<?php include "includes/db.php" ?>
<?php include "includes/header.php"?>

<?php include "includes/nav.php"; ?>

<?php 
    if (isset($_POST['search'])) {
        $searchText = $_POST['searchText'];
    }
?>

<!-- ...................... MOVIES ................................. -->

<div class="container">
    <header class="well">
        <div class="container">
             <h1>Movies</h1>
        </div>
    </header>
    <div class="row text-center" style="display: flex; flex-wrap: wrap;">
    <?php
        $query1 = "SELECT * FROM movies WHERE movie_tags LIKE '%$searchText%'";
        $search_movies = mysqli_query($connection, $query1);
        while ($row = mysqli_fetch_assoc($search_movies)) {
            $movie_id = $row['movie_id'];
            $movie_name = $row['movie_name'];
            $movie_image = $row['movie_img'];
    ?>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                 <img src=<?php echo $movie_image; ?>>
                 <div class="caption">
                     <?php echo "<h4>{$movie_name}</h4>" ?>
                 </div>
                 <p>
                     <a href="movie.php?movie=<?php echo $movie_id ?>" class="btn btn-primary">More Info</a>
                 </p>
            </div>
        </div>
    <?php } ?>
    </div>
</div>

<!-- ........................BOOKS ..................................-->

<div class="container">
    <header class="well">
        <div class="container">
             <h1>Books / Comics</h1>
        </div>
    </header>
    <div class="row text-center" style="display: flex; flex-wrap: wrap;">
    <?php
        $query1 = "SELECT * FROM books WHERE book_tags LIKE '%$searchText%'";
        $search_books = mysqli_query($connection, $query1);
        while ($row = mysqli_fetch_assoc($search_books)) {
            $book_id = $row['book_id'];
            $book_name = $row['book_name'];
            $book_image = $row['book_img'];
    ?>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                 <img src=<?php echo $book_image; ?>>
                 <div class="caption">
                     <?php echo "<h4>{$book_name}</h4>" ?>
                 </div>
                 <p>
                     <a href="book.php?book=<?php echo $book_id ?>" class="btn btn-primary">More Info</a>
                 </p>
            </div>
        </div>
    <?php } ?>
    </div>
</div>

<!-- .......................... TV SHOWS ....................................-->

<div class="container">
    <header class="well">
        <div class="container">
             <h1>TV Shows</h1>
        </div>
    </header>
    <div class="row text-center" style="display: flex; flex-wrap: wrap;">
    <?php
        $query1 = "SELECT * FROM shows WHERE show_tags LIKE '%$searchText%'";
        $search_shows = mysqli_query($connection, $query1);
        while ($row = mysqli_fetch_assoc($search_shows)) {
            $show_id = $row['show_id'];
            $show_name = $row['show_name'];
            $show_image = $row['show_img'];
    ?>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                 <img src=<?php echo $show_image; ?>>
                 <div class="caption">
                     <?php echo "<h4>{$show_name}</h4>" ?>
                 </div>
                 <p>
                     <a href="show.php?show=<?php echo $show_id ?>" class="btn btn-primary">More Info</a>
                 </p>
            </div>
        </div>
    <?php } ?>
    </div>
</div>

<!-- ........................... GAMES ..........................................-->

<div class="container">
    <header class="well">
        <div class="container">
             <h1>Games</h1>
        </div>
    </header>
    <div class="row text-center" style="display: flex; flex-wrap: wrap;">
    <?php
        $query1 = "SELECT * FROM games WHERE game_tags LIKE '%$searchText%'";
        $search_games = mysqli_query($connection, $query1);
        while ($row = mysqli_fetch_assoc($search_games)) {
            $game_id = $row['game_id'];
            $game_name = $row['game_name'];
            $game_image = $row['game_img'];
    ?>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                 <img src=<?php echo $game_image; ?>>
                 <div class="caption">
                     <?php echo "<h4>{$game_name}</h4>" ?>
                 </div>
                 <p>
                     <a href="game.php?game=<?php echo $game_id ?>" class="btn btn-primary">More Info</a>
                 </p>
            </div>
        </div>
    <?php } ?>
    </div>
</div>

<?php include "includes/footer.php"?>