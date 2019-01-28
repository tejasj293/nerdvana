<form action="" method="post">

   <?php 
   if (isset($_GET['edit'])) {
       $universe_id = $_GET['edit'];
       $query = "SELECT * FROM universe WHERE universe_id = {$universe_id}";
       $select_universe_id = mysqli_query($connection, $query); 
       while($row = mysqli_fetch_assoc($select_universe_id)) {
           $universe_id = $row["universe_id"];
           $universe_name = $row["universe_name"];
           $universe_image = $row["universe_img"];
           $universe_desc = $row["universe_description"];
    ?>
    <div class="form-group">
        <input value="<?php if(isset($_GET['edit'])) {echo $universe_name;} ?>" type="text" class="form-control" name="universe_name">
    </div>
    
    <div class="form-group">
        <input value="<?php if(isset($_GET['edit'])) {echo $universe_image;} ?>" type="text" class="form-control" name="universe_image">
    </div>
    
    <div class="form-group">
        <textarea rows="6"  value="<?php if(isset($_GET['edit'])) {echo $universe_desc;} ?>" class="form-control" name="universe_desc"></textarea>
    </div>

    <?php } } ?>

    <?php  // UPDATE CATEGORY
        if (isset($_POST['update_universe'])) {
            $universe_name = $_POST['universe_name'];
            $universe_image = $_POST['universe_image'];
            $universe_desc = $_POST['universe_desc'];
            
            $universe_name = mysqli_real_escape_string($connection, $universe_name);
            $universe_image = mysqli_real_escape_string($connection, $universe_image);
            $universe_desc = mysqli_real_escape_string($connection, $universe_desc);

            $query = "UPDATE universe SET universe_name = '{$universe_name}', universe_img = '{$universe_image}', universe_description = '{$universe_desc}' WHERE universe_id = {$universe_id} ";
            $update_query = mysqli_query($connection, $query);
            //header("Location: categories.php");
        }
    ?>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_universe" value="Update Universe">
    </div>
</form>