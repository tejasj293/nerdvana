<form action="" method="post">

   <?php 
   if (isset($_GET['edit'])) {
       $game_id = $_GET['edit'];
       $query = "SELECT * FROM games WHERE game_id = {$game_id}";
       $select_game_id = mysqli_query($connection, $query); 
       while($row = mysqli_fetch_assoc($select_game_id)) {
           $game_id = $row["game_id"];
           $game_name = $row["game_name"];
           $game_image = $row["game_img"];
           $game_desc = $row["game_description"];
    ?>
    <div class="form-group">
        <input value="<?php if(isset($_GET['edit'])) {echo $game_name;} ?>" type="text" class="form-control" name="game_name">
    </div>
    
    <div class="form-group">
        <input value="<?php if(isset($_GET['edit'])) {echo $game_image;} ?>" type="text" class="form-control" name="game_image">
    </div>
    
    <div class="form-group">
        <textarea rows="6" class="form-control" name="game_desc"></textarea>
    </div>

    <?php } } ?>

    <?php  // UPDATE GAME
        if (isset($_POST['update_game'])) {
            $game_name = $_POST['game_name'];
            $game_image = $_POST['game_image'];
            $game_desc = $_POST['game_desc'];
            
            $game_name = mysqli_real_escape_string($connection, $game_name);
            $game_image = mysqli_real_escape_string($connection, $game_image);
            $game_desc = mysqli_real_escape_string($connection, $game_desc);

            $query = "UPDATE mgames SET game_name = '{$game_name}', game_img = '{$game_image}', game_description = '{$game_desc}' WHERE game_id = {$game_id} ";
            $update_query = mysqli_query($connection, $query);
            if (!$update_query) {
                die('QUERY FAILED ' . mysqli_error($connection));
            }
            header("Location: games.php?universe={$universe_id}");
        }
    ?>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_game" value="Update Game">
    </div>
</form>