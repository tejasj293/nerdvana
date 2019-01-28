<form action="" method="post">

   <?php 
   if (isset($_GET['edit'])) {
       $movie_id = $_GET['edit'];
       $query = "SELECT * FROM movies WHERE movie_id = {$movie_id}";
       $select_movie_id = mysqli_query($connection, $query); 
       while($row = mysqli_fetch_assoc($select_movie_id)) {
           $movie_id = $row["movie_id"];
           $movie_name = $row["movie_name"];
           $movie_image = $row["movie_img"];
           $movie_desc = $row["movie_description"];
    ?>
    <div class="form-group">
        <input value="<?php if(isset($_GET['edit'])) {echo $movie_name;} ?>" type="text" class="form-control" name="movie_name">
    </div>
    
    <div class="form-group">
        <input value="<?php if(isset($_GET['edit'])) {echo $movie_image;} ?>" type="text" class="form-control" name="movie_image">
    </div>
    
    <div class="form-group">
        <textarea rows="6" class="form-control" name="movie_desc"></textarea>
    </div>

    <?php } } ?>

    <?php  // UPDATE MOVIE
        if (isset($_POST['update_movie'])) {
            $movie_name = $_POST['movie_name'];
            $movie_image = $_POST['movie_image'];
            $movie_desc = $_POST['movie_desc'];
            
            $movie_name = mysqli_real_escape_string($connection, $movie_name);
            $movie_image = mysqli_real_escape_string($connection, $movie_image);
            $movie_desc = mysqli_real_escape_string($connection, $movie_desc);

            $query = "UPDATE movies SET movie_name = '{$movie_name}', movie_img = '{$movie_image}', movie_description = '{$movie_desc}' WHERE movie_id = {$movie_id} ";
            $update_query = mysqli_query($connection, $query);
            if (!$update_query) {
                die('QUERY FAILED ' . mysqli_error($connection));
            }
            header("Location: movies.php?universe={$universe_id}");
        }
    ?>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_movie" value="Update Movie">
    </div>
</form>