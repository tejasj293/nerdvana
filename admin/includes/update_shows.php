<form action="" method="post">

   <?php 
   if (isset($_GET['edit'])) {
       $show_id = $_GET['edit'];
       $query = "SELECT * FROM shows WHERE show_id = {$show_id}";
       $select_show_id = mysqli_query($connection, $query); 
       while($row = mysqli_fetch_assoc($select_show_id)) {
           $show_id = $row["show_id"];
           $show_name = $row["show_name"];
           $show_image = $row["show_img"];
           $show_desc = $row["show_description"];
    ?>
    <div class="form-group">
        <input value="<?php if(isset($_GET['edit'])) {echo $show_name;} ?>" type="text" class="form-control" name="show_name">
    </div>
    
    <div class="form-group">
        <input value="<?php if(isset($_GET['edit'])) {echo $show_image;} ?>" type="text" class="form-control" name="show_image">
    </div>
    
    <div class="form-group">
        <textarea rows="6" class="form-control" name="show_desc"></textarea>
    </div>

    <?php } } ?>

    <?php  // UPDATE MOVIE
        if (isset($_POST['update_show'])) {
            $show_name = $_POST['show_name'];
            $show_image = $_POST['show_image'];
            $show_desc = $_POST['show_desc'];
            
            $show_name = mysqli_real_escape_string($connection, $show_name);
            $show_image = mysqli_real_escape_string($connection, $show_image);
            $show_desc = mysqli_real_escape_string($connection, $show_desc);

            $query = "UPDATE shows SET show_name = '{$show_name}', show_img = '{$show_image}', show_description = '{$show_desc}' WHERE show_id = {$show_id} ";
            $update_query = mysqli_query($connection, $query);
            if (!$update_query) {
                die('QUERY FAILED ' . mysqli_error($connection));
            }
            header("Location: shows.php?universe={$universe_id}");
        }
    ?>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_show" value="Update Movie">
    </div>
</form>